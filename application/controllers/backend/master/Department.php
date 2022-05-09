<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Department",
			"content" => 'backend/master/department'
		);
		$this->load->view('backend/layouts/templete',$data);
	}

}
