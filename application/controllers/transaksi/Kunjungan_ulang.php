<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunjungan_ulang extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('transaksi/kunjunganulang');
		$this->load->view('template/footer');
	}
}