<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_faskes extends CI_Model {

	//public function index()
	//{
		
	//}
	function tampil_data(){
		return $this->db->query('SELECT r.desa_nama, b.faskes_id, b.faskesjenis_id, b.faskes_kode, b.faskes_nama, b.faskes_alamat, b.desa_kode, b.faskes_aktif FROM `ms_faskes` as b JOIN desa as r ON r.desa_kode=b.desa_kode');
		//return $this->db->get('ms_faskes');
	}

	function getFaskes(){
		return $this->db->get('desa')->result();
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
