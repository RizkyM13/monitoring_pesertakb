<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usergroup_model extends CI_Model {

	//public function index()
	//{
		
	//}
	function tampil_data(){
		return $this->db->query('SELECT r.user_name, g.grp_nama, b.user_id, b.grp_id, b.update_by, b.update_time FROM `ms_user_group` as b JOIN ms_user as r ON r.user_id=b.user_id JOIN ms_group as g ON g.grp_id=b.grp_id');
		//return $this->db->get('ms_user_group');
	}

	function getNamaUser(){
		return $this->db->get('ms_user');
	}

	function getNamaGroup(){
		return $this->db->get('ms_group');
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
