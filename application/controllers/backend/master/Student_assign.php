<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_assign extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Student Assign",
			"content" => 'backend/master/student_assign'
		);
		$this->load->view('backend/layouts/templete',$data);
	}

}
