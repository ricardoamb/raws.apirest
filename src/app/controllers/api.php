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
		$student_id = $this->uri->segment(3);

		$this->load->model('Model_students');

		$student = $this->Model_students->get_by(array('student_id'=>$student_id,'status'=>'active'));

		if(isset($student['student_id'])){
			$this->response(array('status'=>'success','student'=>$student));
		}else{
			$this->response(array('status'=>'error','message'=>'The specified student could not be found.'), REST_Controller::HTTP_NOT_FOUND);
		}
	}

	public function student_put()
	{
		var_dump($this->put());
	}

}
