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

function check_access($grp_id, $menu_id){
	$ci = get_instance();

	$ci->db->where('grp_id', $grp_id);
	$ci->db->where('menu_id', $menu_id);
	$result = $ci->db->get('ms_group_menu');
	
	if ($result->num_rows() > 0) {
		return "checked='checked'";
	}
}

?>