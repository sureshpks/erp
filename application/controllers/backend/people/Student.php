<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Student",
			"content" => 'backend/people/student'
		);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_academic"
		);
		$data['academic_results'] = $this->common_model->queries($options);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_campus"
		);
		$data['campus_results'] = $this->common_model->queries($options);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_class"
		);
		$data['class_results'] = $this->common_model->queries($options);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_stream"
		);
		$data['stream_results'] = $this->common_model->queries($options);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_class_section"
		);
		$data['section_results'] = $this->common_model->queries($options);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_blood_group"
		);
		//$data['blood_group_results'] = $this->common_model->queries($options);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_nationality"
		);
		$data['nationality_results'] = $this->common_model->queries($options);
		$this->load->view('backend/layouts/templete',$data);
	}

}
