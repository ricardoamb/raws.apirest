<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_students extends MY_Model
{

    protected $_table = 'students';
    protected $primary_key = 'student_id';
    protected $return_type = 'array';

    protected $after_get = array('remove_sensitive_data');

    protected function remove_sensitive_data($student){
        unset($student['password']);
        unset($student['ip_address']);
        return $student;
    }

}