<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admission_online extends CI_Controller { 

	public function index()
	{
		$data = array(
			"title" => "Admission online",
			"content" => 'frondend/admission_online'
		);
		$campus = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_campus"
		);
		$campus = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_campus"
		);
		$data['campus_result'] = $this->common_model->queries($campus);
		$this->load->view('frondend/admission_online',$data);
	}
}
