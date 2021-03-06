<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kader_model extends CI_Model {

	//public function index()
	//{
		
	//}
	function tampil_data(){
		return $this->db->get('kader');
	}

	function getKeyword($keyword){
		 $this->db->select('*');
		 $this->db->from('kader');
		 $this->db->like('kader_nama', $keyword);
		 $this->db->or_like('kader_nik', $keyword);
		 $this->db->or_like('kader_sex', $keyword);
		 $this->db->or_like('kader_kelahiran', $keyword);
		 $this->db->or_like('kader_tglahir', $keyword);
		 $this->db->or_like('kader_email', $keyword);
		 $this->db->or_like('kader_hp', $keyword);
		 $this->db->or_like('kader_aktif', $keyword);
		 return $this->db->get()->result();
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
