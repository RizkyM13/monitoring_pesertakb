<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kk_model extends CI_Model {

	
	function tampil_data(){
		
		return $this->db->query('SELECT r.user_name, b.kk_id, b.kk_no, b.kk_tgl, b.kk_status, b.kk_lastupdate, b.kk_lastupdate_by FROM `kk` as b JOIN ms_user as r ON r.user_id=b.kk_lastupdate_by');
		
	}

	function getUser(){
		return $this->db->get('ms_user')->result();
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
