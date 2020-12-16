<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		check_not_login();
		$this->load->view('template/header');
		
        	   $this->load->view('template/navbar');
        	
        	   
        	
		$this->load->view('dashboard');
		$this->load->view('template/footer');
	}

	public function logout(){
		$params = array('user_id', 'user_status');
		$this->session->unset_userdata($params);
		redirect('auth');
	}
}
