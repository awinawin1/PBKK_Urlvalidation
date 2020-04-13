<?php

namespace Its\Example\Dashboard\Presentation\Web\Controller;

use Its\Example\Dashboard\Presentation\Web\Models\Barang;
use Phalcon\Mvc\Controller;
use Phalcon\Session\Manager;

class IndexController extends Controller
{
    public function initialize(){

    $this->users = new Barang();
     
      
   
    }
    public function indexAction()
    {
        
        $check = $this->db->query("SELECT id FROM  users WHERE username = '".$this->session->get('user-name')."'")->fetchAll();
        $id = $check[0]['id'];
        $barang = $this->db->query("SELECT * FROM  barang WHERE idpemilik = '".$id."'")->fetchAll();

        $this->view->setVars([
            "barangs" =>$barang,



    ]);
    
    }
}