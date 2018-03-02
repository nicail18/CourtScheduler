<?php

class Login_model extends CI_Model{
	function can_login($username, $password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('testing_table');
		if($query->num_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
}

?>