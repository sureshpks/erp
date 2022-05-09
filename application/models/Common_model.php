<?php
class Common_model extends CI_Model{
	/* login */
	public function check_user($username, $password){
		  $this->db->where('username',$username);
		  $this->db->where('password',$password);
		  $this->db->where('erp_user.status',0);
		  $this->db->join('erp_role','erp_role.role_id = erp_user.role_id');
		  return $this->db->get('erp_user')->row();
	}

	public function queries($options){
		$sql = '';
		if($options['option'] == 'select'){
			$sql .= "SELECT * FROM ".$options['table']." WHERE 1=1";
			if(isset($options['where'])){
				 if(is_array($options['where'])){
					 foreach($options['where'] as $key => $val){
						 $sql .= " AND ".$key." = '".$val."'";
					 }
				 }
		    }
		    if(isset($options['where_not'])){
				 if(is_array($options['where_not'])){
					 foreach($options['where_not'] as $key => $val){
						 $sql .= " AND ".$key." != '".$val."'";
					 }
				 }
		    }
		    if(isset($options['order_by'])){
				 if(is_array($options['order_by'])){
					 foreach($options['order_by'] as $key => $val){
						 $sql .= " ORDER BY ".$key.' '.$val;
					 }
				 }
		    }
		    if(isset($options['limit'])){
				$sql .= " LIMIT ".$options['limit'];
		    }
		}

		if($options['option'] == 'select_sum'){
			$sql .= "SELECT IFNULL(sum(".$options['sum_field']."),0) as ".$options['sum_field']." FROM ".$options['table']." WHERE 1=1";
			if(isset($options['where'])){
				 if(is_array($options['where'])){
					 foreach($options['where'] as $key => $val){
						 $sql .= " AND ".$key." = '".$val."'";
					 }
				 }
		    }
		}

		if($options['option'] == 'update'){
			if(is_array($options['where'])){
				foreach($options['where'] as $key => $val){
					$this->db->where($key,$val);
				}
			}
			return $this->db->update($options['table'], $options['data']); 
		}
		if($options['option'] == 'insert'){
			$this->db->insert($options['table'], $options['data']);
            return $this->db->insert_id();
		}
		if($options['option'] == 'delete'){
			if(is_array($options['where'])){
				foreach($options['where'] as $key => $val){
					$this->db->where($key,$val);
				}
			}
			return $this->db->delete($options['table']); 
		}
		if($sql){
			if($options['type'] == 'row'){
			   return $this->db->query($sql)->row();
			}else{
			   return $this->db->query($sql)->result();
			}
		}
	}

	public function get_val($select,$array,$table){
		$this->db->select($select);
		$this->db->where($array);
		$this->db->from($table);
		$query = $this->db->get();
		if($query->num_rows()==1)
		{
			$data=$query->row_array();
			return $value=$data[$select];
		}
		else
		{
			return false;
		}
    }

	public function get_val_limit($select,$array,$table){
		$this->db->select($select);
		$this->db->where($array);
		$this->db->from($table);
		$this->db->limit(1);
		$query = $this->db->get();
		if($query->num_rows()==1)
		{
			$data=$query->row_array();
			return $value=$data[$select];
		}
		else
		{
			return false;
		}
    }
  
  
	public function get_val_multiple($col_get,$where,$tbl){

		$this->db->select($col_get);
		if(is_array($where)){
			foreach ($where as $key => $value){
				$this->db->where($key,$value);
			}
		}
		$this->db->from($tbl);
		$query = $this->db->get();
		if($query->num_rows()==1)
		{
			$data=$query->row_array();
			return $data[$col_get];
		}
		else
		{
			return false;
		}
	}

	public function get_sum_val_multiple($col_get,$where,$tbl){

		 $sql = "SELECT IFNULL(SUM(".$col_get."),0) AS ".$col_get." FROM ".$tbl." WHERE 1=1";

		 if(is_array($where)){
			 foreach ($where as $key => $value){
				 $sql .=" AND ".$key."='".$value."'";
			 }
		 }
	     $result = $this->db->query($sql)->row();
		 if($result){
			 return $result->$col_get;
		 }else{
			 return 0;
		 }
	}
}
