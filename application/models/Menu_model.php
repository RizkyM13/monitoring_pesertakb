<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {

	//public function index()
	//{
		
	//}
	function tampil_data(){
		return $this->db->get('ms_menu');
	}

	function getKeyword($keyword){
		 $this->db->select('*');
		 $this->db->from('ms_menu');
		 $this->db->like('mn_kode', $keyword);
		 $this->db->or_like('mn_nama', $keyword);
		 $this->db->or_like('mn_level', $keyword);
		 $this->db->or_like('mn_induk', $keyword);
		 $this->db->or_like('mn_icon', $keyword);
		 $this->db->or_like('mn_url', $keyword);
		 $this->db->or_like('mn_aktif', $keyword);
		 return $this->db->get()->result();
		 //return $this->db->get('kecamatan')->result();
	}

	function getData(){
		$this->db->select('*');
		$this->db->from('ms_menu');
		$this->db->order_by('mn_kode','DESC');
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
