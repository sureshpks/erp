<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blood_group extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Blood Group",
			"content" => 'backend/master/blood_group'
		);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_blood_group"
		);
		$data['results'] = $this->common_model->queries($options);
		$this->load->view('backend/layouts/templete',$data);
	}

	public function update(){ 
		if($this->input->post()){
			$id= $this->input->post('hidden_id');
			$blood_group= $this->input->post('blood_group');
			$blood_group_status = $this->input->post('blood_group_status');
				$data = array(
					"blood_group" => $blood_group,
					"blood_group_status" => $blood_group_status,
					"user_id_fk" => $this->session->userdata('user_id'),
					"created_date" => date('Y-m-d h:i:s')
				);
				if($id !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "erp_blood_group",
						   "data"   => $data,
						   "where"  => array("blood_group_id" => $id)
					 );
					 $this->session->set_flashdata('success_alert','Data Updated Successfully');
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "erp_blood_group",
						   "data"   => $data,
					);
					$this->session->set_flashdata('success_alert','Data Insert Successfully');
				}
				$this->common_model->queries($options);
		}
		redirect('backend/master/blood_group');
	}

	public function edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "erp_blood_group",
			"where"  => array("blood_group_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}

}
