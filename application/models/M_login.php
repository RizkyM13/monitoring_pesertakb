<?php
defined ('BASEPATH') OR exit ('No direct script acess allowed');

class M_login extends CI_Model{

    public function login($post){
    	$this->db->select('*');
        $this->db->from('ms_user');
        $this->db->where('user_name', $post['user_name']);
        $this->db->where('user_password', $post['user_password']);
        $query = $this->db->get();
        return $query;
    } 

}