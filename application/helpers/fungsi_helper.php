<?php

function check_already_login(){
	$ci =& get_instance();
	$user_session = $ci->session->userdata('user_id');
	if($user_session){
		redirect ('welcome');
	}
}

function check_not_login(){
	$ci =& get_instance();
	$user_session = $ci->session->userdata('user_id');
	if(!$user_session){
		redirect ('auth');
	}
}

function check_admin(){
	$ci =& get_instance();
	$ci->load->library('file');
	if($ci->fungsi->user_login()->user_aktif != 1){
		redirect('dashboard');
	}
}

?>