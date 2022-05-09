<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designation extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Designation",
			"content" => 'backend/master/designation'
		);
		$this->load->view('backend/layouts/templete',$data);
	}

}
