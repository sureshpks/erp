<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "State",
			"content" => 'backend/master/state'
		);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_state"
		);
		$country = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_country"
		);
		$data['country'] = $this->common_model->queries($country);
		$data['results'] = $this->common_model->queries($options);
		$this->load->view('backend/layouts/templete',$data);
	}

	public function update(){ 
		if($this->input->post()){
			$id= $this->input->post('hidden_id');
			$country_id= $this->input->post('country');
			$state= $this->input->post('state');
			$state_status = $this->input->post('state_status');
				$data = array(
					"country_id_fk" => $country_id,
					"state" => $state,
					"state_status" => $state_status,
					"user_id_fk" => $this->session->userdata('user_id'),
					"created_date" => date('Y-m-d h:i:s')
				);
				if($id !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "erp_state",
						   "data"   => $data,
						   "where"  => array("state_id" => $id)
					 );
					 $this->session->set_flashdata('success_alert','Data Updated Successfully');
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "erp_state",
						   "data"   => $data,
					);
					$this->session->set_flashdata('success_alert','Data Insert Successfully');
				}
				$this->common_model->queries($options);
		}
		redirect('backend/master/state');
	}

	public function edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "erp_state",
			"where"  => array("state_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}

}
