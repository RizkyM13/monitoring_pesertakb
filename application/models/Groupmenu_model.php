<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groupmenu_model extends CI_Model {

	//public function index()
	//{
		
	//}
	function tampil_data(){
		return $this->db->get('ms_group_menu');
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
