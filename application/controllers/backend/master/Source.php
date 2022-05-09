<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Source extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Source",
			"content" => 'backend/master/source'
		);
		$this->load->view('backend/layouts/templete',$data);
	}

}
