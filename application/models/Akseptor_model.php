<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akseptor_model extends CI_Model {

function tampil_data(){
		return $this->db->query('SELECT a.faskesjenis_nama, b.kontransepsi_nama, d.desa_nama, c.akseptor_id, c.tgl, c.no_kartu, c.faskesjenis_id, c.nama_akseptor, c.nama_pasangan, c.desa_kode, c.pekerjaan, c.umur, c.u_anak_terkecil, c.kontrasepsi_id, c.stt  FROM `akseptor` as c JOIN ms_faskes_jenis as a ON a.faskesjenis_id=c.faskesjenis_id JOIN ms_kontrasepsi as b ON b.kontrasepsi_id=c.kontrasepsi_id JOIN desa as d ON d.desa_kode=c.desa_kode');
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

