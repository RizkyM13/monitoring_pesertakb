<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ms_user_group extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_user_group/ms_user_group');
		$this->load->view('template/footer');
	}
	public function tambah()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_user_group/tambahdata');
		$this->load->view('template/footer');
	}
	public function edit()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_user_group/editdata');
		$this->load->view('template/footer');
	}
}