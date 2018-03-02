<?php

class Model1 extends CI_Model
{
	function insert_data($data){
		$this->db->insert("testing_table", $data);
	}
	
	function fetch_data(){
		//$query = $this->db->get("testing_table");
		//$query = $this->db->query("SELECT * FROM testing_table ORDER BY id DESC");
		//$query = $this->db->query("SELECT * FROM testing_table WHERE first_name='Nicail' AND last_name='Pepito'");
		$this->db->select("*");
		$this->db->from("testing_table");
		$query=$this->db->get();
		return $query;
	}
	
	function delete_data($id){
		$this->db->where("id",$id);
		$this->db->delete("testing_table");
		
	}
	function fetch_single_data($user_id){
		$this->db->where("id",$user_id);
		$query = $this->db->get("testing_table");
		return $query;
	}
	function update_data($data, $id){
		$this->db->where("id",$id);
		$this->db->update("testing_table",$data);

	}
	
	
}

?>