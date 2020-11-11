<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ms_group extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_group/ms_group');
		$this->load->view('template/footer');
	}
	public function tambah()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_group/tambahdata');
		$this->load->view('template/footer');
	}
	public function edit()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_group/editdata');
		$this->load->view('template/footer');
	}
}