<?php

namespace Its\Example\Dashboard\Presentation\Web\Controller;
use Its\Example\Dashboard\Presentation\Web\Form\SignupForm;

use Its\Example\Dashboard\Presentation\Web\Models\Users;
use Phalcon\Mvc\Controller;
use Phalcon\Security;
use Phalcon\Session\Manager;
//validation
use Phalcon\Validation;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Url;
use Phalcon\Validation\Validator\Regex as RegexValidation;


class AwinController extends Controller
{
		public $validator;
        public function initialize(){
        $this->users = new Users();
        $this->security = new Security();
     

        
        $this->validator = new Validation();

        $this->validator->add('username',
        new PresenceOf([
            'message'=> 'username required'
        ])
        );

        $this->validator->add('password', new RegexValidation([
            'message' => 'Kombinasikan 8 karakter dan angka',

             'pattern' => '/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/',
        
        ]));
        $this->validator->add('email',
        new PresenceOf([
            'message'=> 'email required'
        ])
        );
        $this->validator->add('email',
        new Email([
            'message' => 'Email tidak valid'
        ])
        );

       
    }

   
    public function indexAction()
    {
        //echo "ini awin";
     // insert data ke table pegawai
        $this->view->form = new SignupForm();  
        if($this->request->isPost()){
            $keluaran = "<br>";
         
            $this->users->assign(
                $this->request->getPost(),
                [
                    'username',
			'email,
                    'password'
                ]
            );

        $check = $this->db->query("select * from  users where username = '".$this->users->username."'")->fetchAll();
        $checkemail = $this->db->query("select * from  users where email = '".$this->users->email."'")->fetchAll();
       
        
        if($check || $checkemail){
            if($check){
                $this->view->message = $this->view->message."Username Telah Digunakan<br>";
             }

             if($checkemail){
               $this->view->message = $this->view->message."Email Telah Digunakan";
            }
            return $this->view;
        }
        
        else{



            if(count($this->validator->validate($_POST))){
                foreach ($this->validator->validate($_POST) as $message)
                    $keluaran = $keluaran.$message . "<br>";
                $this->view->message = $keluaran;
                return $this->view;
            }

            $this->users->password = $this->security->hash($this->users->password);
        
            if($success = $this->users->save()){

                $this->view->message = "Pendaftaran berhasil";
                return $this->view;
            }
            else{
                return "pendaftaran gagal";
            }
        }
        
        
        }

    
    }


  

  

}
