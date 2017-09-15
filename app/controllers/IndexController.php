<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        if (empty($this->session->get('user')['username'])) {
            return $this->response->redirect('Login');
        }
    }

    public function error403Action()
    {
    	$this->response->setHeader('HTTP/1.1 403','Forbidden');
        $this->view->pick("errors/403");
    }


    public function groupsessionAction($id)
    {
        $data = $this->session->get('acl')['usergroup'];
        foreach ($data as $key => $value) {
            if ($value['id'] === $id) {
                $_SESSION['acl']['group'] = $id;
                break;
            }
        }
        $this->response->redirect('');
    }


    

}

