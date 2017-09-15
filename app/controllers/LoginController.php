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
        if ($this->request->isPost()) {
            $post = $this->request->getPost();
            $username    = $this->request->getPost('username');
            $password    = $this->request->getPost('password');
            // Find the user in the database
            $user = QodrRefUsers::findFirst(
                [
                    "columns" => "username, password, image",
                    "conditions" => "username = :username:",
                    "bind" => [
                        "username" => $post['username']
                    ]
                ]
            );

            if ($this->security->checkHash($post['password'], $user->password)) {
                //data_session_yang_dikirim
                $aclArray  = AclAction::aclList($user->username);
                $userArray = [
                    'username' => $user->username,
                    'image'    => $user->image,
                ];
                $this->session->set('acl', $aclArray);
                $this->session->set('user', $userArray);
                return $this->response->redirect('');
            }

            $this->flashSession->error("GAGAl MASUK");
            return $this->response->redirect('Login/error/user');
        }
    }

    public function logoutAction()
    {
        $this->view->disable();
        $this->session->destroy();
        $this->security->hash(rand());
        $this->response->redirect('Login');
    }

}

