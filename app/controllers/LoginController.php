<?php

use Phalcon\Mvc\View;

class LoginController extends \Phalcon\Mvc\Controller
{

    public function loginAction($error = null)
    {
        if ($error === 'user') {
            $this->view->erorrSend = Helpers::errorSend('user');
        } elseif ($error === 'token') {
            $this->view->erorrSend = Helpers::errorSend('token');
        } else {
            $this->view->erorrSend = '';
        }
        
        $this->view->pick("login/index");
        $this->view->setRenderLevel(View::LEVEL_ACTION_VIEW);
    }

    public function prosesAction()
    {
        if ($this->security->checkToken()) {
            $post = $this->request->getPost();
            $user = QodrPmbUsers::findFirst([
                "columns" => "username, password, image",
                "conditions" => "username = :username:",
                "bind" => [
                    "username" => $post['username']
                ]
            ]);
            if ($this->security->checkHash($post['password'], $user->password)) {
                $aclArray  = AclAction::aclList($user->username);
                $userArray = [
                    'username' => $user->username,
                    'image'    => $user->image,
                ];
                $this->session->set('acl', $aclArray);
                $this->session->set('user', $userArray);
                return $this->response->redirect('');
            } else {
                $this->security->hash(rand());
                return $this->response->redirect('Login/error/user');
            }
        } else {
            $this->security->hash(rand());
            return $this->response->redirect('Login/error/token');
        }
    }

    public function logoutAction()
    {
        $this->view->disable();
        $this->session->destroy();
        $this->security->hash(rand());
        $this->response->redirect();
    }

}

