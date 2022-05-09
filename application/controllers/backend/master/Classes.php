<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classes extends CI_Controller {

	public function index($campus_id=0)
	{ 
		$data = array(
			"title" => "Class & Section",
			"content" => 'backend/master/classes'
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
				"table"  => "erp_class_section",
				'where'  => array('campus_id_fk' => $data['campus_id']),
			);
			$data['class_section_results'] = $this->common_model->queries($options);
		}
		$this->load->view('backend/layouts/templete',$data);
	}
	//Stream Section
	public function stream_update(){ 
		if($this->input->post()){
			$id= $this->input->post('stream_id');
			$campus_id = $this->input->post('stream_campus');
			$stream_name= $this->input->post('stream_name');
				$data = array(
					"stream_name" => $stream_name,
					"campus_id_fk" => $campus_id,
					"user_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "erp_stream",
						   "data"   => $data,
						   "where"  => array("stream_id" => $id)
					 );
					 $this->session->set_flashdata('success_alert','Data Updated Successfully');
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "erp_stream",
						   "data"   => $data,
					);
					$this->session->set_flashdata('success_alert','Data Insert Successfully');
				}
				$this->common_model->queries($options);
		}
		redirect('backend/master/classes/index/'.$campus_id);
	}

	public function stream_edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "erp_stream",
			"where"  => array("stream_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}
	//CLASS SECTION
	public function class_update(){ 
		if($this->input->post()){
			$id= $this->input->post('class_id');
			$campus_id = $this->input->post('class_campus');
			$class_name= $this->input->post('class_name');
				$data = array(
					"class_name" => $class_name,
					"campus_id_fk" => $campus_id,
					"user_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "erp_class",
						   "data"   => $data,
						   "where"  => array("class_id" => $id)
					 );
					 $this->session->set_flashdata('success_alert','Data Updated Successfully');
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "erp_class",
						   "data"   => $data,
					);
					$this->session->set_flashdata('success_alert','Data Insert Successfully');
				}
				$this->common_model->queries($options);
		}
		redirect('backend/master/classes/index/'.$campus_id);
	}

	public function class_edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "erp_class",
			"where"  => array("class_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}
	//CLASS SECTION SECTION
	public function class_section_update(){ 
		if($this->input->post()){
			$id= $this->input->post('class_section_id');
			$campus_id = $this->input->post('class_section_campus');
			$class_section_name= $this->input->post('class_section_name');
				$data = array(
					"class_section_name" => $class_section_name,
					"campus_id_fk" => $campus_id,
					"user_id_fk" => $this->session->userdata('user_id'),
					"date_added" => date('Y-m-d h:i:s')
				);
				if($id !=0){
					 $options = array(
						   "option" => "update",
						   "table"  => "erp_class_section",
						   "data"   => $data,
						   "where"  => array("class_section_id" => $id)
					 );
					 $this->session->set_flashdata('success_alert','Data Updated Successfully');
		        }else{
					$options = array(
						   "option" => "insert",
						   "table"  => "erp_class_section",
						   "data"   => $data,
					);
					$this->session->set_flashdata('success_alert','Data Insert Successfully');
				}
				$this->common_model->queries($options);
		}
		redirect('backend/master/classes/index/'.$campus_id);
	}

	public function class_section_edit(){
		if($this->input->post('id')){
			$options = array(
			"option" => "select",
			"type"   => "row",
			"table"  => "erp_class_section",
			"where"  => array("class_section_id" => $this->input->post('id'))
		);
		$res = $this->common_model->queries($options);
		echo json_encode($res);
		}
	}
}
