<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject_assign extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Subject Assign",
			"content" => 'backend/master/subject_assign'
		);
		$this->load->view('backend/layouts/templete',$data);
	}

}
