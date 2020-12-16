<?php
defined ('BASEPATH') OR exit ('No direct script acess allowed');

class M_login extends CI_Model{

	public function cekuser($user_name){
		
		$query = $this->db->query("SELECT * FROM ms_user WHERE user_name = '$user_name' ");
		if ($query->num_rows() == 1) {
			return $query->result();
		}else{
			return false;
		}
		
	}

	public function ceklogin($user_name, $user_password){
		$query = $this->db->query("SELECT * FROM ms_user WHERE user_name = '$user_name' and user_password = '$user_password' ");
		if ($query->num_rows() == 1) {
			return $query->result();
		}else{
			return false;
		}
	}

	//public function get($id = null){
		//$this->db->select('*');
		//$this->db->from('ms_user');
		//if ($id != null) {
			//$this->db->where('user_id', $id);

			//tutup dari awal
			//$this->db->where('user_password', $post['password']);
		//}
		//$query = $this->db->get();
		//return $query;
	//}

}