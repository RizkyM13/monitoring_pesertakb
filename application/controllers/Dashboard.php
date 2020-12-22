<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('dashboard_model');
		if ($this->session->userdata('kader_id')==null) {
			redirect('auth');
		}
	}

	public function index()
	{
		//check_not_login();
		//$data['content'] = 'setting/profil';
		$this->load->view('template/header');
       	$this->load->view('template/navbar');	
		$this->load->view('dashboard');
		$this->load->view('template/footer');
	}

	public function logout(){
		$this->session->sess_destroy();
        redirect('auth');;
	}
}
