<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ms_suku extends CI_Model {

	//public function index()
	//{
		
	//}
	function tampil_data(){
		return $this->db->get('ms_suku');
	}

	function getKeyword(){
		$this->db->select('*');
		$this->db->from('ms_suku');
		$this->db->like('suku_nama', $keyword);
		return $this->db->get();
		//$this->db->or_like('kec_kode', $keyword);

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

	function detail($table,$where){
		return $this->db->get_where($table, $where);
	}
}
