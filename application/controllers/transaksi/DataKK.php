<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataKK extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('transaksi/data_kk');
		$this->load->view('template/footer');
	}
}
