<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {

function tampil_data(){
		return $this->db->get('laporan')->result();
	}

	function getFaskes(){
		return $this->db->get('ms_faskes_jenis')->result();
	}

	function getKontrasepsi(){
		return $this->db->get('ms_kontrasepsi')->result();
	}
	function getAlamat(){
		return $this->db->get('desa')->result();
	}

	function getAkseptor(){
		return $this->db->get('akseptor')->result();
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

