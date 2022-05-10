<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nationality extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Nationality",
			"content" => 'backend/master/nationality'
		);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_nationality"
		);
		$data['results'] = $this->common_model->queries($options);
		$this->load->view('backend/layouts/templete',$data);
	}

	public function update(){ 
		if($this->input->post()){
			$id= $this->input->post('hidden_id');
			$nationality= $this->input->post('nationality');
			$nationality_status = $this->input->post('nationality_status');
				$data = array(
					"nationality" => $nationality,
					"nationality_status" => $nationality_status,
					"user_id_fk" => $this->session->userdata('user_id'),
					"created_date" => date('Y-m-d h:i:s')
				);
				if($id !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "erp_nationality",
						   "data"   => $data,
						   "where"  => array("nationality_id" => $id)
					 );
					 $this->session->set_flashdata('success_alert','Data Updated Successfully');
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "erp_nationality",
						   "data"   => $data,
					);
					$this->session->set_flashdata('success_alert','Data Insert Successfully');
				}
				$this->common_model->queries($options);
		}
		redirect('backend/master/nationality');
	}

	public function edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "erp_nationality",
			"where"  => array("nationality_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}

}
