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

	function getKeyword($sampai, $dari, $like=''){
		 if($like)
    		$this->db->where($like);
 
   			$query = $this->db->get('desa',$sampai,$dari);
   			return $query->result_array();

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
