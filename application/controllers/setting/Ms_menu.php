<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ms_menu extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_menu');
		$this->load->view('template/footer');
	}
}