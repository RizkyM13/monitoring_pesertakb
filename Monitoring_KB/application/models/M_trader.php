<?php

class M_trader extends CI_Model {

	function ambilData(){
		return $this->db->get('trader')->result_array();
	}

	function tambah_data($data, $table) {
		$this->db->insert($table, $data);
	}

	function hapus_data($chkId){

		foreach ($chkId as $id) {
			$this->db->where('id_trader',$id);
		     $query = $this->db->get('trader');
		     $row = $query->row();

		     unlink("./file/trader".$row->foto);

		     $this->db->delete('trader', array('id_trader' => $id));
		}

	}

	function followCopy() {
		return $this->db->get_where('copytrade', array('konfirmasi' => 'belum konfirmasi'))->result_array();
	}

	function setuju($data, $id) {
		$this->db->update('copytrade', $data, array('id_copytrade' => $id ));
	}

	function tolak($data, $id) {
		$this->db->update('copytrade', $data, array('id_copytrade' => $id ));
	}

}