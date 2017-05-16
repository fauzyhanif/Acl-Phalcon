<?php


use Phalcon\Mvc\view;
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Manager as ModelsManager;
use Phalcon\Mvc\Model\Query;
class LaporandaftarController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$this->view->sesi = QodrPmbSesi::find();
    }

    public function jurusanAction()
    {
    	$this->view->pick("laporanDaftar/index");
        $this->view->setRenderLevel(View::LEVEL_ACTION_VIEW);
    }

    public function searchjurusanAction()
    {
    	$id=$this->request->getPost('id');
    	$phql = "SELECT Q.jurusan, Q.sesi, Q.jns_kel, J.jurusan, 
                COUNT(Q.jurusan) AS a, 
                COUNT(Q.jns_kel) as b 
                FROM  Qodr_akd_pmb_cmhs as Q
                JOIN Qodr_pmb_jurusan as J ON Q.jurusan = J.id 
                WHERE Q.jns_kel = 'PRIA' 
                OR Q.sesi = '".$id."' ";
	    $data=$this->modelsManager->executeQuery($phql);

	    $json = '';
	    foreach ($data as $key) {
	    $json .= '<td>1.</td>
	              <td>'.$key->jurusan.'</td>
                  <td>'.$key->a.'</td>
	              <td>'.$key->b.'</td>
	              <td><span class="badge bg-red">55%</span></td>
	              <td><span class="badge bg-red">55%</span></td>';
	    }
	    return json_encode($json);
    }

}

