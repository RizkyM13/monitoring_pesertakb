<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suku_model extends CI_Model {

	//public function index()
	//{
		
	//}
	function tampil_data(){
		return $this->db->get('ms_suku');
	}

	function getKeyword($keyword){
		 $this->db->select('*');
		 $this->db->from('ms_suku');
		 $this->db->like('suku_id', $keyword);
		 $this->db->or_like('suku_kode', $keyword);
		 $this->db->or_like('suku_nama', $keyword);
		 $this->db->or_like('suku_aktif', $keyword);
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
