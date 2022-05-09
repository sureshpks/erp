<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designation extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Designation",
			"content" => 'backend/master/designation'
		);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_designation"
		);
		$data['results'] = $this->common_model->queries($options);
		$this->load->view('backend/layouts/templete',$data);
	}
	public function update(){ 
		if($this->input->post()){
			$id= $this->input->post('hidden_id');
			$designation= $this->input->post('designation');
			$designation_status = $this->input->post('designation_status');
				$data = array(
					"designation" => $designation,
					"designation_status" => $designation_status,
					"user_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "erp_designation",
						   "data"   => $data,
						   "where"  => array("designation_id" => $id)
					 );
					 $this->session->set_flashdata('success_alert','Data Updated Successfully');
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "erp_designation",
						   "data"   => $data,
					);
					$this->session->set_flashdata('success_alert','Data Insert Successfully');
				}
				$this->common_model->queries($options);
		}
		redirect('backend/master/designation');
	}

	public function edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "erp_designation",
			"where"  => array("designation_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}

}
