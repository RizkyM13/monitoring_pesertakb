<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rt_model extends CI_Model {

	//public function index()
	//{
		
	//}
	function tampil_data(){

		return $this->db->query('SELECT r.rw, b.rt_id, b.rw_id, b.rt FROM `data_rt` as b JOIN data_rw as r ON r.rw_id=b.rw_id');
		
		//return $this->db->get('data_rt');
	}

	function getRt(){
		return $this->db->get('data_rw')->result();
	}

	function getKeyword($keyword){
		 $this->db->select('*');
		 $this->db->from('data_rt');
		 $this->db->join('data_rw', 'data_rw.rw_id=data_rt.rw_id');
		 $this->db->like('rt_id', $keyword);
		 $this->db->or_like('rw', $keyword);
		 $this->db->or_like('rt', $keyword);
		 return $this->db->get()->result();
		 //return $this->db->get('data_rw')->result();
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
