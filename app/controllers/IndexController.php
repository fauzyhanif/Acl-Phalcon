<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function error403Action()
    {
    	$this->response->setHeader('HTTP/1.1 403','Forbidden');
        $this->view->pick("errors/403");
    }

    public function formAction()
    {
        $this->view->sesi               = QodrPmbSesi::findByActived("Y");
        $this->view->golongan           = QodrPmbGolongan::find();
        $this->view->jurusan            = Qodr_pmb_jurusan::find();
        $this->view->wilayah            = DataWilayah::findByIdLevelWil("1");
        $this->view->kabupaten          = DataWilayah::findByIdLevelWil("2");
        $this->view->kecamatan          = DataWilayah::findByIdLevelWil("3");
        $this->view->kodepos            = QodrPmbKodepos::find();
        $this->view->agama              = QodrPmbAgama::find();
        $this->view->kewarganegaraan    = QodrPmbKewarganegaraan::find();
        $this->view->pekerjaan          = QodrPmbPekerjaan::find();
        $this->view->smu                = QodrPmbSmu::find();
        $this->view->asalInformasi      = QodrPmbInformasi::find();
        $this->view->jur_smu            = QodrPmbJurSmu::find();
        $this->view->penghasilan        = QodrPmbPenghasilan::find();
    }


    public function inputAction()
    {
        $result = $this->request->getPost();
        $data = array_map(function($el) { return str_replace("'", "`",$el); }, $result);
        $post = array_map("strtoupper", $data);

        // nomor pin random 
        $digits = 4;
        $post['no_test_3']  = "-211-";
        $post['pin']        = rand(pow(10, $digits-1), pow(10, $digits)-1);
        $post['nomor_test'] = $post['thn_akd']."".$post['no_test_3'];

        $pmb = new Qodr_akd_pmb_cmhs();
        $pmb->assign($post);
        $pmb->save();

        if ($pmb->save()) {
            $data = Qodr_akd_pmb_cmhs::findByNama($post['nama']);
            $nomor_test2 = "'".$post['nomor_test']."".$data[0]->no_test."'";
            $this->session->set('nama', $data[0]->nama);
            $this->session->set('nomor_test', str_replace("'", "", $nomor_test2));
            $this->session->set('pin', $data[0]->pin);
            $this->response->redirect('Form');
            // echo $nomor_test;
            if (count($data) == 1) {
                $query = "UPDATE Qodr_akd_pmb_cmhs SET nomor_test = ".$nomor_test2." WHERE nama = '".$post['nama']."'";
                $cars  = $this->modelsManager->executeQuery($query);
            }
        }
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


    public function kodeposAction()
    {
        $kodepos    = QodrPmbKodepos::find();
        $data       = '<option value="">Pilih Kodepos</option>';
        foreach ($kodepos as $x) {
            $data .= '<option value="'.$x->kodepos.'">'.$x->desa.'</option>';
        }
        
        return json_encode($data);
    }

}

