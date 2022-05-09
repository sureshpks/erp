<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Employee",
			"content" => 'backend/people/employee'
		);
		$this->load->view('backend/layouts/templete',$data);
	}

}
