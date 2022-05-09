<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reference extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Reference",
			"content" => 'backend/master/reference'
		);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_reference"
		);
		$data['results'] = $this->common_model->queries($options);
		$this->load->view('backend/layouts/templete',$data);
	}

	public function update(){ 
		if($this->input->post()){
			$id= $this->input->post('hidden_id');
			$reference= $this->input->post('reference');
			$reference_status = $this->input->post('reference_status');
				$data = array(
					"reference" => $reference,
					"reference_status" => $reference_status,
					"user_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "erp_reference",
						   "data"   => $data,
						   "where"  => array("reference_id" => $id)
					 );
					 $this->session->set_flashdata('success_alert','Data Updated Successfully');
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "erp_reference",
						   "data"   => $data,
					);
					$this->session->set_flashdata('success_alert','Data Insert Successfully');
				}
				$this->common_model->queries($options);
		}
		redirect('backend/master/reference');
	}

	public function edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "erp_reference",
			"where"  => array("reference_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}

}
