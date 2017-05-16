<?php

use Phalcon\Mvc\view;

class UsergroupController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->usergroup = QodrPmbUsergroup::find([
            "order" => "id ASC"
        ]);
    }

    public function listAction()
    {
        $this->view->usergroup = QodrPmbUsergroup::find([
            "order" => "id ASC"
        ]);

        $this->view->pick("usergroup/list");
        $this->view->setRenderLevel(View::LEVEL_ACTION_VIEW);
    }

    public function inputAction()
    {
        $this->view->disable();
        $post = $this->request->getPost();

        $usergroup = new QodrPmbUsergroup();
        $usergroup->assign($post);
        if ($usergroup->save()) {
            $result = Helpers::notify('success', 'Data berhasil di simpan ke database');
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

    public function updatedAction($id)
    {
        $this->view->disable();
        $post = $this->request->getPost();
        
        $usergroup = QodrPmbUsergroup::findFirst($id);
        $usergroup->assign($post);
        if ($usergroup->save()) {
            $result = Helpers::notify('success', 'Data sudah terubah di database');
            $result['close'] = 1;
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

    public function deletedAction()
    {
        $this->view->disable();
        $id = $this->request->getPost('id');

        $usergroup = QodrPmbUsergroup::findFirst($id);
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

        $usergroup = QodrPmbUsergroup::findFirst([
            "conditions" => "id = :id:",
            "bind" => [
                "id" => $post['id']
            ]
        ]);
        if ($post['actived'] === 'Y') { $m = 'Aktifkan'; } else { $m = 'Non Aktifkan'; }
        $usergroup->actived = $post['actived'];
        if ($usergroup->save()) {
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
            $messagess = $usergroup->getMessages();
            $message   = '';
            foreach ($messagess as $messages) {
                $message .= "$messages <br/>";
            }
            $result = Helpers::notify('error', $message);
        }

        return json_encode($result);
    }

}

