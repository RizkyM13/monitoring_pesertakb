<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunjungan_ulang extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		if($this->session->userdata('user_id') == 1){
        	   $this->load->view('template/navbar');
        	}elseif($this->session->userdata('user_id') == 2){
        	   $this->load->view('template/navpetugas');
        	}elseif($this->session->userdata('user_id') == 3){
        	   $this->load->view('template/navdinas');
        	}
		$this->load->view('transaksi/kunjunganulang');
		$this->load->view('template/footer');
	}
}