<?php

namespace Its\Example\Dashboard\Presentation\Web\Controller;
use Its\Example\Dashboard\Presentation\Web\Form\SignupForm;

use Its\Example\Dashboard\Presentation\Web\Models\Users;
use Phalcon\Mvc\Controller;
use Phalcon\Security;
use Phalcon\Session\Manager;
use Phalcon\url;

class CobaController extends Controller
{
	public function indexAction()
    {
  //   	$url= new Url();
  //   	$url->setBaseUri("/portal/");
  //   	echo $url->get("invoices/edit/1");
		echo "ayy";
		// echo $this->url->get(
		// 	[
		// 		'for'=>'invoices-edit',
		// 		'id'=>1,
		// 	]);
	}
}