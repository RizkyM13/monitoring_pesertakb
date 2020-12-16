<?php

Class File {
	protected $ci;

	function __construct(){
		$this->ci =& get_instance();
	}

	//function user_login(){
		//$this->ci->load->model('M_login');
		//$user_name = $this->ci->session->userdata('user_name');
		//$user_data = $this->ci->m_login->get($user_name)->result();
		//return $user_data;
	//}
}
?>