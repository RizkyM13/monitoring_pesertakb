<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}

	public function login(){
		$this->load->view('login');
		
	}	

	public function proses(){
		echo "proses";
	}

}