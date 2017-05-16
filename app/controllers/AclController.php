<?php

use Phalcon\Mvc\View;

class AclController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->acl = QodrPmbAcl::find(["order" => "url ASC"]);
    	$this->view->group = QodrPmbMenu::find(["order" => "menu_group ASC"]);
    	$this->view->usergroup = QodrPmbUsergroup::find();
    }

    public function listAction()
    {
    	$this->view->acl = QodrPmbAcl::find(["order" => "url ASC"]);
    	$this->view->usergroup = QodrPmbUsergroup::find();
        $this->view->pick("acl/list");
        $this->view->setRenderLevel(View::LEVEL_ACTION_VIEW);
    }

    public function inputAction()
    {
        $this->view->disable();
        $post = $this->request->getPost();

        $usergroup = implode(',', $post['usergroup']);
        
        $post['usergroup'] = ','.$usergroup.',';
        $post['action']    = $post['actions'];
        
        if (empty($post['except'])) {
            unset($post['actions']);
            unset($post['except']);
        } else {
            unset($post['actions']);
        }

        $acl = new QodrPmbAcl();
        $acl->assign($post);
        if ($acl->save()) {
            $result = Helpers::notify('success', 'Data sudah tersimpan di database');
        } else {
            $messages = $acl->getMessages();
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
        $acl  = QodrPmbAcl::findFirst($id);

        $post['action'] = $post['actions'];
        
        unset($post['usergroup']);
        unset($post['actions']);
        
        $acl->assign($post);
        if ($acl->save()) {
            $result = Helpers::notify('success', 'Data sudah terubah di database');
            $result['close'] = 1;
        } else {
            $messages = $acl->getMessages();
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

        $acl = QodrPmbAcl::findFirst($id);
        if ($acl->delete()) {
            $result = Helpers::notify('success', 'Data sudah di hapus dari database');
            $result['id'] = $id;
            $result['close'] = 2;
        } else {
            $messages = $acl->getMessages();
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

        $acl = QodrPmbAcl::findFirst([
            "conditions" => "id = :id:",
            "bind" => [
                "id" => $post['id']
            ]
        ]);
        if ($post['actived'] === 'Y') { $m = 'Aktifkan'; } else { $m = 'Non Aktifkan'; }
        $acl->actived = $post['actived'];
        if ($acl->save()) {
            $result = Helpers::notify('success', 'Acl sudah di ' . $m . ' kan');
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
            $messagess = $acl->getMessages();
            $message   = '';
            foreach ($messagess as $messages) {
                $message .= "$messages <br/>";
            }
            $result = Helpers::notify('error', $message);
        }

        return json_encode($result);
    }

    public function accessAction()
    {
        $this->view->disable();
        $post = $this->request->getPost();

        $acl = QodrPmbAcl::findFirst([
            "conditions" => "id = :id:",
            "bind" => [
                "id" => $post['id']
            ]
        ]);
        $aclArray = explode(',', $acl->usergroup);
        if (in_array($post['usergroup'], $aclArray)) {
            $arraySearch = array_search($post['usergroup'], $aclArray);
            unset($aclArray[$arraySearch]);
            $result = implode(',', $aclArray);
        } else {
            $result  = $acl->usergroup;
            $result .= $post['usergroup'].',';
        }
        $acl->usergroup = $result;
        if ($acl->save()) {
            $notify = Helpers::notify('success', 'Data sudah tersimpan di database');
        } else {
            $messagess = $acl->getMessages();
            $message   = '';
            foreach ($messagess as $messages) {
                $message .= "$messages <br/>";
            }
            $notify = Helpers::notify('error', $message);
        }

        return json_encode($notify);
    }

    public function exceptAction()
    {
        $this->view->disable();
        $post = $this->request->getPost();
        $acl  = QodrPmbAcl::findFirst($post['id']);

        $acl->except = $post['except'];
        if ($acl->save()) {
            $notify = Helpers::notify('success', 'Data berhasil di simpan ke database');
        } else {
            $messages = $acl->getMessages();
            $m = '';
            foreach ($messages as $message) {
                $m .= "$message <br/>";
            }
            $notify = Helpers::notify('error', $m);
        }
        return json_encode($notify);
    }

    public function detailAction($id)
    {
        $this->view->disable();
        $acl  = QodrPmbAcl::findFirst($id);
        return json_encode($acl);
    }

}

