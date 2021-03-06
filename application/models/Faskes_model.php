<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faskes_model extends CI_Model {

	//public function index()
	//{
		
	//}
	function tampil_data(){
		return $this->db->query('SELECT r.desa_nama, g.faskesjenis_nama, b.faskes_id, b.faskesjenis_id, b.faskes_kode, b.faskes_nama, b.faskes_alamat, b.desa_kode, b.faskes_aktif FROM ms_faskes b JOIN desa r ON r.desa_kode=b.desa_kode JOIN ms_faskes_jenis g ON g.faskesjenis_id=b.faskesjenis_id');
		//return $this->db->get('ms_faskes');
	}

	function getDesa(){
		return $this->db->get('desa')->result();
	}

	function getFaskes(){
		return $this->db->get('ms_faskes_jenis')->result();
	}

	function getKeyword($keyword){
		 $this->db->select('*');
		 $this->db->from('ms_faskes');
		 $this->db->join('desa', 'desa.desa_kode=ms_faskes.desa_kode');
		 $this->db->like('faskes_kode', $keyword);
		 $this->db->or_like('faskes_nama', $keyword);
		 $this->db->or_like('faskes_alamat', $keyword);
		 $this->db->or_like('desa_nama', $keyword);
		 $this->db->or_like('faskes_aktif', $keyword);
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

