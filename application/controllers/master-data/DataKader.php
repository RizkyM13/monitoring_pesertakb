<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataKader extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kader');
	}

	public function index()
	{
		$data['kdr'] = $this->m_kader->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datakader',$data);
		$this->load->view('template/footer');
	}
}