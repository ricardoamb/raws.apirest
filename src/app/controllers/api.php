<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Api extends REST_Controller
{

	public function __construct()
	{
		parent::__construct();
	}


	public function student_get()
	{
		$id = $this->uri->segment(3);

		$student = array(
			1=> array('PrimeiroNome'=>'Ricardo','Sobrenome'=>'Amb'),
			2=> array('PrimeiroNome'=>'Michelle','Sobrenome'=>'Mendes')
		);
		if(isset($student[$id])){
			$this->response(array('status'=>'success','student'=>$student[$id]));
		}else{
			$this->response(array('status'=>'error','message'=>'The specified student could not be found.'), REST_Controller::HTTP_NOT_FOUND);
		}
	}

}
