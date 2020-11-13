<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ms_group_menu extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_group_menu/ms_group_menu');
		$this->load->view('template/footer');
	}
	public function tambah()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_group_menu/tambahdata');
		$this->load->view('template/footer');
	}
	public function edit()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_group_menu/editdata');
		$this->load->view('template/footer');
	}
}