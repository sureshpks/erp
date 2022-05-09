<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Subject",
			"content" => 'backend/master/subject'
		);
		$this->load->view('backend/layouts/templete',$data);
	}

}
