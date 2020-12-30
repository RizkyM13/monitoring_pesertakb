<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_model extends CI_Model {

	//public function index()
	//{
		
	//}
	function tampil_data(){
		
		return $this->db->get('profil');
	}

	function getKeyword($keyword){
		 $this->db->select('*');
		 $this->db->from('profil');
		 $this->db->like('kode', $keyword);
		 $this->db->or_like('instansi', $keyword);
		 $this->db->or_like('alamat', $keyword);
		 $this->db->or_like('telp', $keyword);
		 $this->db->or_like('email', $keyword);
		 $this->db->or_like('website', $keyword);
		 $this->db->or_like('kodepos', $keyword);
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
