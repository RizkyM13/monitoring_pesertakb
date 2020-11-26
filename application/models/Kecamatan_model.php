<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan_model extends CI_Model {

	//public function index()
	//{
		
	//}
	function tampil_data(){
		
		return $this->db->get('kecamatan');
	}
function getKeyword($keyword){
		 $this->db->select('*');
		 $this->db->from('kecamatan');
		 $this->db->join('kecamatan', 'kecamatan.kec_kode');
		 $this->db->like('kec_kode', $keyword);
		 $this->db->or_like('kec_nama', $keyword);
		 $this->db->or_like('kec_aktif', $keyword);
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
