<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faskesjenis_model extends CI_Model {

	//public function index()
	//{
		
	//}
	function tampil_data(){
		
		return $this->db->get('ms_faskes_jenis');
	}


	function getKeyword($keyword){
		 $this->db->select('*');
		 $this->db->from('ms_faskes');
		 $this->db->join('desa', 'desa.desa_kode=ms_faskes.desa_kode');
		 $this->db->like('faskesjenis_id', $keyword);
		 $this->db->or_like('faskesjenis_kode', $keyword);
		 $this->db->or_like('faskesjenis_nama', $keyword);
		 $this->db->or_like('faskesjenis_aktif', $keyword);
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

