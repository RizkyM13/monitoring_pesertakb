<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kk_model extends CI_Model {

	
	function tampil_data(){
		
		return $this->db->query('SELECT r.user_name, b.kk_id, b.kk_no, b.kk_tgl, b.kk_status, b.kk_lastupdate, b.kk_lastupdate_by FROM `kk` as b JOIN ms_user as r ON r.user_id=b.kk_lastupdate_by');
		
	}

	function getUser(){
		return $this->db->get('ms_user')->result();
	}

	function getKeyword($keyword){
		 $this->db->select('*');
		 $this->db->from('kk');
		 $this->db->join('ms_user', 'ms_user.user_id=kk.kk_lastupdate_by');
		 $this->db->like('kk_id', $keyword);
		 $this->db->or_like('kk_no', $keyword);
		 $this->db->or_like('kk_tgl', $keyword);
		 $this->db->or_like('kk_status', $keyword);
		 $this->db->or_like('kk_lastupdate', $keyword);
		 $this->db->or_like('kk_lastupdate_by', $keyword);
		 return $this->db->get()->result();
		 //return $this->db->get('kecamatan')->result();
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
