<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ms_user extends CI_Model {

	//public function index()
	//{
		
	//}
	function tampil_data(){
		return $this->db->query('SELECT r.kader_nama, b.user_id, b.kader_id, b.user_name, b.user_password, b.user_status FROM `ms_user` as b JOIN kader as r ON r.kader_id=b.kader_id');
		//return $this->db->get('ms_user');
	}

	function getKader(){
		return $this->db->get('kader')->result();
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
