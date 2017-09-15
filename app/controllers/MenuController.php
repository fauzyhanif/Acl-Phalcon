<?php

use Phalcon\Mvc\view;

class MenuController extends \Phalcon\Mvc\Controller
{

    public function listAction()
    {
        $this->view->group = QodrRefMenu::find([
            "order" => "id ASC"
        ]);

        $this->view->pick("qodr_ref_menu/list");
        $this->view->setRenderLevel(View::LEVEL_ACTION_VIEW);
    }

    public function inputAction()
    {
        $this->view->disable();
        $post = $this->request->getPost();

        $post['usergroup'] = '["'.implode('", "', $post['usergroup']).'"]';

        $group = new QodrRefMenu();
        $group->assign($post);
        if ($group->save()) {
            $result = Helpers::notify('success', 'Data berhasil di simpan ke database');
            $result['close'] = 3;
        } else {
            $messages = $group->getMessages();
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

        $group = QodrRefMenu::findFirst($id);
        if ($group->delete()) {
            $result = Helpers::notify('success', 'Data sudah di hapus dari database');
            $result['id'] = $id;
            $result['close'] = 4;
        } else {
            $messages = $group->getMessages();
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

        $group = QodrRefMenu::findFirst([
            "conditions" => "id = :id:",
            "bind" => [
                "id" => $post['id']
            ]
        ]);
        if ($post['actived'] === 'Y') { $m = 'Aktifkan'; } else { $m = 'Non Aktifkan'; }
        $group->actived = $post['actived'];
        if ($group->save()) {
            $result = Helpers::notify('success', 'group sudah di ' . $m . ' kan');
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
            $messagess = $group->getMessages();
            $message   = '';
            foreach ($messagess as $messages) {
                $message .= "$messages <br/>";
            }
            $result = Helpers::notify('error', $message);
        }

        return json_encode($result);
    }

}

