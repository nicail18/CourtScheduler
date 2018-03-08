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
}

?>
