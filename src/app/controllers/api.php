<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends REST_Controller
{

	public function __construct()
	{
		parent::__construct();
	}


	public function student_get()
	{
		$this->response('My first API response');
	}

}