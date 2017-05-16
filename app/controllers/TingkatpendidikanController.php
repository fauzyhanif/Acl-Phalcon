<?php

use Phalcon\Mvc\view;

class TingkatpendidikanController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->tingkatPendidikan = QodrPmbTingkatPendidikan::find([
            "order" => "id ASC"
        ]);
    }

    public function listAction()
    {
        $this->view->tingkatPendidikan = QodrPmbTingkatPendidikan::find([
            "order" => "id ASC"
        ]);

        $this->view->pick("tingkatpendidikan/list");
        $this->view->setRenderLevel(View::LEVEL_ACTION_VIEW);
    }

    public function inputAction()
    {
        $this->view->disable();
        $post = $this->request->getPost();

        $tingkatPendidikan = new QodrPmbTingkatPendidikan();
        $tingkatPendidikan->assign($post);
        if ($tingkatPendidikan->save()) {
            $result = Helpers::notify('success', 'Data berhasil di simpan ke database');
        } else {
            $messages = $tingkatPendidikan->getMessages();
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
        
        $tingkatPendidikan = QodrPmbTingkatPendidikan::findFirst($id);
        $tingkatPendidikan->assign($post);
        if ($tingkatPendidikan->save()) {
            $result = Helpers::notify('success', 'Data sudah terubah di database');
            $result['close'] = 1;
        } else {
            $messages = $tingkatPendidikan->getMessages();
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

        $tingkatPendidikan = QodrPmbTingkatPendidikan::findFirst($id);
        if ($tingkatPendidikan->delete()) {
            $result = Helpers::notify('success', 'Data sudah di hapus dari database');
            $result['id'] = $id;
            $result['close'] = 2;
        } else {
            $messages = $tingkatPendidikan->getMessages();
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

        $tingkatPendidikan = QodrPmbTingkatPendidikan::findFirst([
            "conditions" => "id = :id:",
            "bind" => [
                "id" => $post['id']
            ]
        ]);
        if ($post['actived'] === 'Y') { $m = 'Aktifkan'; } else { $m = 'Non Aktifkan'; }
        $tingkatPendidikan->actived = $post['actived'];
        if ($tingkatPendidikan->save()) {
            $result = Helpers::notify('success', 'tingkatPendidikan sudah di ' . $m . ' kan');
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
            $messagess = $tingkatPendidikan->getMessages();
            $message   = '';
            foreach ($messagess as $messages) {
                $message .= "$messages <br/>";
            }
            $result = Helpers::notify('error', $message);
        }

        return json_encode($result);
    }

}

