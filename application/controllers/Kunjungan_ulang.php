<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunjungan_ulang extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('kontrasepsi_model');
		if ($this->session->userdata('kader_id')==null) {
			redirect('auth');
		}
		
	}

	public function index()
	{
		
		$this->load->view('template/header');
        $this->load->view('template/navbar');
		$this->load->view('transaksi/kunjunganulang');
		$this->load->view('template/footer');
	}
}