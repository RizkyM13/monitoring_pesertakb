<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		check_not_login();
		$this->load->view('template/header');
		if($this->session->userdata('user_id') == 1){
        	   $this->load->view('template/navbar');
        	}elseif($this->session->userdata('user_id') == 2){
        	   $this->load->view('template/navpetugas');
        	}elseif($this->session->userdata('user_id') == 3){
        	   $this->load->view('template/navdinas');
        	}
		$this->load->view('dashboard');
		$this->load->view('template/footer');
	}

	public function logout(){
		$params = array('user_id', 'user_status');
		$this->session->unset_userdata($params);
		redirect('login');
	}
}
