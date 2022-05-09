<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Student",
			"content" => 'backend/people/student'
		);
		$this->load->view('backend/layouts/templete',$data);
	}

}
