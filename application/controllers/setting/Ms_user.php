<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ms_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index()
	{
		$data['user'] = $this->m_user->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('v_user', $data);
		$this->load->view('template/footer');
		
	}
}
