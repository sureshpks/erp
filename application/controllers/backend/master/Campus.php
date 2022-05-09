<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campus extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Campus",
			"content" => 'backend/master/campus'
		);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_campus"
		);
		$data['results'] = $this->common_model->queries($options);
		$this->load->view('backend/layouts/templete',$data);
	}

	public function update(){ 
		if($this->input->post()){
			$id= $this->input->post('hidden_id');
			$campus_name= $this->input->post('campus_name');
			$campus_address = $this->input->post('campus_address');
			$principal_name = $this->input->post('principal_name');
			$mobile_no = $this->input->post('mobile_no');
			$status = $this->input->post('status');
				$data = array(
					"campus_name" => $campus_name,
					"campus_address" => $campus_address,
					"principal_name" => $principal_name,
					"mobile_no" => $mobile_no,
					"status" => $status,
					"user_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "erp_campus",
						   "data"   => $data,
						   "where"  => array("campus_id" => $id)
					 );
					 $this->session->set_flashdata('success_alert','Data Updated Successfully');
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "erp_campus",
						   "data"   => $data,
					);
					$this->session->set_flashdata('success_alert','Data Insert Successfully');
				}
				$this->common_model->queries($options);
		}
		redirect('backend/master/campus');
	}

	public function edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "erp_campus",
			"where"  => array("campus_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}

}
