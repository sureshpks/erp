<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reference extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Reference",
			"content" => 'backend/master/reference'
		);
		$this->load->view('backend/layouts/templete',$data);
	}

}
