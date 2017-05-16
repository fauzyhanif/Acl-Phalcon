<?php

use Phalcon\Mvc\view;
use Phalcon\Image\Adapter\Imagick;

class UsersController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->users = QodrPmbUsers::find(["order" => "name ASC"]);

        $this->view->usergroup = QodrPmbUsergroup::find(["order" => "id ASC"]);
    }

    public function listAction()
    {
        $this->view->users = QodrPmbUsers::find(["order" => "name ASC"]);

        $this->view->pick("users/list");
        $this->view->setRenderLevel(View::LEVEL_ACTION_VIEW);
    }

    public function inputAction()
    {
        $this->view->disable();

        if ($this->request->hasFiles() == true) {
            foreach ($this->request->getUploadedFiles() as $file) {
                if ($file->getSize() > 0) {
                    $fileName = md5(uniqid(rand(), true)).'.'.$file->getExtension();
                    $file->moveTo(MOVE_PHOTO . '/users/' . $fileName);
                    $image = new Imagick(MOVE_PHOTO . '/users/' . $fileName);
                    $image->resize(236, 315)->save();
                } else {
                    $fileName = 'users.png';
                }   
            }
        }
        
        $post = $this->request->getPost();
        
        $usergroup         = implode(',', $post['usergroup']);
        $post['usergroup'] = ','.$usergroup.',';
        $post['image']     = $fileName;
        $post['password']  = $this->security->hash($post['password']);

        $users = new QodrPmbUsers();
        $users->assign($post);
        if ($users->save()) {
            $result = Helpers::notify('success', 'Data berhasil di simpan ke database');
        } else {
            $messages = $users->getMessages();
            $m = '';
            foreach ($messages as $message) {
                $m .= "$message <br/>";
            }
            $result = Helpers::notify('error', $m);
        }
        return json_encode($result);
    }

    public function updatedAction($id)
    {
        $this->view->disable();

        if ($this->request->hasFiles() == true) {
            foreach ($this->request->getUploadedFiles() as $file) {
                if ($file->getSize() > 0) {
                    $fileName = md5(uniqid(rand(), true)).'.'.$file->getExtension();
                    $file->moveTo(MOVE_PHOTO . '/users/' . $fileName);
                    $image = new Imagick(MOVE_PHOTO . '/users/' . $fileName);
                    $image->resize(236, 315)->save();
                } else {
                    $fileName = $this->request->getPost('remove_image');
                }   
            }
        }
        
        $post = $this->request->getPost();
        
        $usergroup         = implode(',', $post['usergroup']);
        $post['usergroup'] = ','.$usergroup.',';
        $post['image']     = $fileName;
        $post['password']  = $this->security->hash($post['password']);

        $users = QodrPmbUsers::findFirst($id);
        $users->assign($post);
        if ($users->save()) {
            $result = Helpers::notify('success', 'Data sudah terubah di database');
            $result['close'] = 1;
        } else {
            $messages = $users->getMessages();
            $m = '';
            foreach ($messages as $message) {
                $m .= "$message <br/>";
            }
            $result = Helpers::notify('error', $m);
        }
        return json_encode($result);
    }

    public function deletedAction()
    {
        $this->view->disable();
        $id = $this->request->getPost('id');

        $usergroup = QodrPmbUsers::findFirst($id);
        if ($usergroup->delete()) {
            $result = Helpers::notify('success', 'Data sudah di hapus dari database');
            $result['id'] = $id;
            $result['close'] = 2;
        } else {
            $messages = $usergroup->getMessages();
            $m = '';
            foreach ($messages as $message) {
                $m .= "$message <br/>";
            }
            $result = Helpers::notify('error', $m);
        }
        return json_encode($result);
    }

    public function statusAction()
    {
        $this->view->disable();
        $post = $this->request->getPost();

        $users = QodrPmbUsers::findFirst([
            "conditions" => "id = :id:",
            "bind" => [
                "id" => $post['id']
            ]
        ]);
        if ($post['actived'] === 'Y') { $m = 'Aktifkan'; } else { $m = 'Non Aktifkan'; }
        $users->actived = $post['actived'];
        if ($users->save()) {
            $result = Helpers::notify('success', 'Usergroup sudah di ' . $m . ' kan');
            if ($post['actived'] === 'N') {
                $result['i']      = 'text-danger';
                $result['bg']     = 'bg-red';
                $result['status'] = 'not active';
                $result['active'] = 'Y';
            } else {
                $result['i']      = 'text-success';
                $result['bg']     = 'bg-green';
                $result['status'] = 'active';
                $result['active'] = 'N';
            }
        } else {
            $messagess = $users->getMessages();
            $message   = '';
            foreach ($messagess as $messages) {
                $message .= "$messages <br/>";
            }
            $result = Helpers::notify('error', $message);
        }

        return json_encode($result);
    }

    public function detailAction($id)
    {
        $this->view->disable();
        $users = QodrPmbUsers::findFirst([
            "conditions" => "id = :id:",
            "columns" => "id, username, name, email, telp, image, usergroup",
            "bind" => [
                "id" => $id
            ]
        ]);
        $users->remove_image = $users->image;
        return json_encode($users);
    }

}

