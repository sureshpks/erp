<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leave_type extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Leave Type",
			"content" => 'backend/master/leave_type'
		);
		$this->load->view('backend/layouts/templete',$data);
	}

}
