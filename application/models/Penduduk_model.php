<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk_model extends CI_Model {

	//public function index()
	//{
		
	//}
	function tampil_data(){
		return $this->db->get('penduduk');
	}

	function getKeyword($keyword){
		 $this->db->select('*');
		 $this->db->from('penduduk');
		 $this->db->like('nik', $keyword);
		 $this->db->or_like('nama', $keyword);
		 $this->db->or_like('jenis_kelamin', $keyword);
		 $this->db->or_like('status_perkawinan', $keyword);
		 $this->db->or_like('hub_keluarga', $keyword);
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

	function detail($table,$where){
		return $this->db->get_where($table, $where);
	}
}
