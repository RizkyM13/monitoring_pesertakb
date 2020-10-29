<?php

class M_artikel extends CI_Model {

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

}