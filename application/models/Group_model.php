<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group_model extends CI_Model {

	//public function index()
	//{
		
	//}
	function tampil_data(){
		return $this->db->get('ms_group');
	}

	function getMenu(){
		return $this->db->query('SELECT r.menu_id, b.grp_id, b.grp_kode, b.grp_nama, b.grp_aktif FROM `ms_group` as b JOIN ms_group_menu as r ON r.grp_id=b.grp_id');
		//return $this->db->get('ms_group_menu')->result();
	}

	function getKeyword($keyword){
		 $this->db->select('*');
		 $this->db->from('ms_group');
		 $this->db->like('grp_kode', $keyword);
		 $this->db->or_like('grp_nama', $keyword);
		 $this->db->or_like('grp_aktif', $keyword);
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
		return $this->db->query('SELECT r.grp_id, b.grp_id, b.grp_kode, b.grp_nama, b.grp_aktif FROM `ms_group` as b JOIN ms_group_menu as r ON r.grp_id=b.grp_id');
		return $this->db->get_where($table, $where);
	}
}
