<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Source extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Source",
			"content" => 'backend/master/source'
		);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_source"
		);
		$data['results'] = $this->common_model->queries($options);
		$this->load->view('backend/layouts/templete',$data);
	}

	public function update(){ 
		if($this->input->post()){
			$id= $this->input->post('hidden_id');
			$source= $this->input->post('source');
			$source_status = $this->input->post('source_status');
				$data = array(
					"source" => $source,
					"source_status" => $source_status,
					"user_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "erp_source",
						   "data"   => $data,
						   "where"  => array("source_id" => $id)
					 );
					 $this->session->set_flashdata('success_alert','Data Updated Successfully');
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "erp_source",
						   "data"   => $data,
					);
					$this->session->set_flashdata('success_alert','Data Insert Successfully');
				}
				$this->common_model->queries($options);
		}
		redirect('backend/master/source');
	}

	public function edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "erp_source",
			"where"  => array("source_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}

}
