<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {

	public function index($campus_id=0)
	{
		$data = array(
			"title" => "Subject",
			"content" => 'backend/master/subject'
		);
		$options = array(
			"option" => "select",
			"type"   => "result",
			"table"  => "erp_campus"
		);
		$data['campus_results'] = $this->common_model->queries($options);
		$data['campus_id'] = 0;
		if($this->input->post('submit') || $campus_id){
			if($campus_id == 0){
				$data['campus_id'] = $this->input->post('campus');
			}else{
				$data['campus_id'] = $campus_id;
			}
			$options = array(
				"option" => "select",
				"type"   => "result",
				"table"  => "erp_stream",
				'where'  => array('campus_id_fk' => $data['campus_id']),
			);
			$data['stream_results'] = $this->common_model->queries($options);
			$options = array(
				"option" => "select",
				"type"   => "result",
				"table"  => "erp_class",
				'where'  => array('campus_id_fk' => $data['campus_id']),
			);
			$data['class_results'] = $this->common_model->queries($options);
			$options = array(
				"option" => "select",
				"type"   => "result",
				"table"  => "erp_subject",
				'where'  => array('campus_id_fk' => $data['campus_id']),
			);
			$data['results'] = $this->common_model->queries($options);
		}
		$this->load->view('backend/layouts/templete',$data);
	}

	public function update(){ 
		if($this->input->post()){
			$id= $this->input->post('subject_id');
			$subject_name = $this->input->post('subject_name');
			$subject_code = $this->input->post('subject_code');
			$subject_type = $this->input->post('subject_type');
			$campus_id_fk = $this->input->post('campus_id');
			$class_id_fk  = $this->input->post('class_id_fk');
			$stream_id_fk = $this->input->post('stream_id_fk');
			$subject_status = $this->input->post('subject_status');
				$data = array(
					"subject_name" => $subject_name,
					"subject_code" => $subject_code,
					"subject_type" => $subject_type,
					"campus_id_fk" => $campus_id_fk,
					"class_id_fk" => $class_id_fk,
					"stream_id_fk" => $stream_id_fk,
					"subject_status" => $subject_status,
					"user_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "erp_subject",
						   "data"   => $data,
						   "where"  => array("subject_id" => $id)
					 );
					 $this->session->set_flashdata('success_alert','Data Updated Successfully');
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "erp_subject",
						   "data"   => $data,
					);
					$this->session->set_flashdata('success_alert','Data Insert Successfully');
				}
				$this->common_model->queries($options);
		}
		redirect('backend/master/subject/index/'.$campus_id_fk);
	}

	public function edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "erp_subject",
			"where"  => array("subject_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}

}
