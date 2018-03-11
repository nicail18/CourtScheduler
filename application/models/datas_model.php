<?php

class Datas_model extends CI_Model{
	function sched(){
		$this->db->select('*');
		$query = $this->db->get('schedules');
		return $query;
	}
	function user(){
		$this->db->select('*');
		$query = $this->db->get('use_tbl');
		return $query;
	}
	function insert_data($schedules,$user){
		$this->db->insert("schedules", $schedules);
		$this->db->insert("use_tbl", $user);
	}
}

?>
