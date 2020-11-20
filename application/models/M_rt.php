<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rt extends CI_Model {

	//public function index()
	//{
		
	//}
	function tampil_data(){

		return $this->db->query('SELECT r.rw, b.rt_id, b.rw_id, b.rt FROM `data_rt` as b JOIN data_rw as r ON r.rw_id=b.rw_id');
		
		//return $this->db->get('data_rt');
	}

	function getRw(){
		return $this->db->get('data_rw')->result();
	}

	function input_data($data, $table){
		$this->db->insert($table, $data);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($table,$where){
		return $this->db->get_where($table, $where);
	}
}
