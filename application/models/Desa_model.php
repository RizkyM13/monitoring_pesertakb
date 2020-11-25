<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa_model extends CI_Model {

	//public function index()
	//{
		
	//}
	function tampil_data(){
		return $this->db->query('SELECT r.kec_nama, b.desa_kode, b.kec_kode, b.desa_nama, b.desa_aktif FROM `desa` as b JOIN kecamatan as r ON r.kec_kode=b.kec_kode');
		
		//return $this->db->get('desa');
	}

	function getDesa(){
		return $this->db->get('kecamatan')->result();
	}

	function getKeyword($keyword){
		 $this->db->select('*');
		 $this->db->from('desa');
		 $this->db->join('kecamatan', 'kecamatan.kec_kode=desa.kec_kode');
		 $this->db->like('desa_kode', $keyword);
		 $this->db->or_like('kec_nama', $keyword);
		 $this->db->or_like('desa_nama', $keyword);
		 $this->db->or_like('desa_aktif', $keyword);
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
