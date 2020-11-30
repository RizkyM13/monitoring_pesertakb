<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
		$this->load->view('template/footer');
	}

	public function logout(){
		$params = array('user_id', 'user_status');
		$this->session->unset_userdata($params);
		redirect('auth');
	}
}
