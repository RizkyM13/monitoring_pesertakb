<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('laporan_model');
		if ($this->session->userdata('kader_id')==null) {
			redirect('auth');
		}
	}

	public function index()
	{
		$data['v_lap'] = $this->laporan_model->tampil_data();
		$data['faskes'] = $this->laporan_model->getFaskes();
		$data['kontrasepsi'] = $this->laporan_model->getKontrasepsi();
		$data['alamat'] = $this->laporan_model->getAlamat();
		$data['akseptor'] = $this->laporan_model->getAkseptor();
		$this->load->view('template/header');
        $this->load->view('template/navbar');
		$this->load->view('laporan/datalaporan/data',$data);
		$this->load->view('template/footer');
	}
}