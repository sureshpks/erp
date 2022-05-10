<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Country extends CI_Controller {

	public function index()
	{
		$data = array(
			"title" => "Country",
			"content" => 'backend/master/country'
		);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_country"
		);
		$data['results'] = $this->common_model->queries($options);
		$this->load->view('backend/layouts/templete',$data);
	}

	public function update(){ 
		if($this->input->post()){
			$id= $this->input->post('hidden_id');
			$country= $this->input->post('country');
			$country_status = $this->input->post('country_status');
				$data = array(
					"country" => $country,
					"country_status" => $country_status,
					"user_id_fk" => $this->session->userdata('user_id'),
					"created_date" => date('Y-m-d h:i:s')
				);
				if($id !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "erp_country",
						   "data"   => $data,
						   "where"  => array("country_id" => $id)
					 );
					 $this->session->set_flashdata('success_alert','Data Updated Successfully');
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "erp_country",
						   "data"   => $data,
					);
					$this->session->set_flashdata('success_alert','Data Insert Successfully');
				}
				$this->common_model->queries($options);
		}
		redirect('backend/master/country');
	}

	public function edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "erp_country",
			"where"  => array("country_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}

}
