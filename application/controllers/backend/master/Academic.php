<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academic extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Academic",
			"content" => 'backend/master/academic'
		);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_academic"
		);
		$data['results'] = $this->common_model->queries($options);
		$this->load->view('backend/layouts/templete',$data);
	}

	public function update(){ 
		if($this->input->post()){
			$id= $this->input->post('hidden_id');
			$academic_year= $this->input->post('academic_year');
			$academic_status = $this->input->post('academic_status');
				$data = array(
					"academic_year" => $academic_year,
					"academic_status" => $academic_status,
					"user_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "erp_academic",
						   "data"   => $data,
						   "where"  => array("academic_id" => $id)
					 );
					 $this->session->set_flashdata('success_alert','Data Updated Successfully');
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "erp_academic",
						   "data"   => $data,
					);
					$this->session->set_flashdata('success_alert','Data Insert Successfully');
				}
				$this->common_model->queries($options);
		}
		redirect('backend/master/academic');
	}

	public function edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "erp_academic",
			"where"  => array("academic_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}

}
