<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataKecamatan extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('data_kecamatan');
		$this->load->view('template/footer');
	}
}
