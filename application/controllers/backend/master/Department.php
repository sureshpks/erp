<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Department",
			"content" => 'backend/master/department'
		);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_department"
		);
		$data['results'] = $this->common_model->queries($options);
		$this->load->view('backend/layouts/templete',$data);
	}

	public function update(){ 
		if($this->input->post()){
			$id= $this->input->post('hidden_id');
			$department= $this->input->post('department');
			$department_status = $this->input->post('department_status');
				$data = array(
					"department" => $department,
					"department_status" => $department_status,
					"user_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "erp_department",
						   "data"   => $data,
						   "where"  => array("department_id" => $id)
					 );
					 $this->session->set_flashdata('success_alert','Data Updated Successfully');
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "erp_department",
						   "data"   => $data,
					);
					$this->session->set_flashdata('success_alert','Data Insert Successfully');
				}
				$this->common_model->queries($options);
		}
		redirect('backend/master/department');
	}

	public function edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "erp_department",
			"where"  => array("department_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}

}
