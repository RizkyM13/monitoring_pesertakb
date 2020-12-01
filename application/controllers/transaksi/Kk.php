<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kk extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kk_model');
		date_default_timezone_set('Asia/Jakarta');
		 
		//$this->load->helper('date');
		//$now = time();
		//$humanReadable = unix_to_human($now);
	}

	public function index()
	{
		$data['v_kk'] = $this->kk_model->tampil_data()->result();
		//$data[''] = $this->m_kk->getUser();
		$this->load->view('template/header');
		if($this->session->userdata('user_id') == 1){
        	   $this->load->view('template/navbar');
        	}elseif($this->session->userdata('user_id') == 2){
        	   $this->load->view('template/navpetugas');
        	}elseif($this->session->userdata('user_id') == 3){
        	   $this->load->view('template/navdinas');
        	}
		$this->load->view('fungsi/datakk/data',$data);
		$this->load->view('template/footer');
	}

	public function tambah(){
	$data['v_kk'] = $this->kk_model->tampil_data()->result();
	//$data['status'] = $this->m_kk->tampil_data()->result();
		$this->load->view('template/header');
		if($this->session->userdata('user_id') == 1){
        	   $this->load->view('template/navbar');
        	}elseif($this->session->userdata('user_id') == 2){
        	   $this->load->view('template/navpetugas');
        	}elseif($this->session->userdata('user_id') == 3){
        	   $this->load->view('template/navdinas');
        	}
		$this->load->view('fungsi/datakk/tambahdata',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi(){
		$kk_id				= $this->input->post('kk_id');
		$kk_no				= $this->input->post('kk_no');
		$kk_tgl				= $this->input->post('kk_tgl');
		$kk_status			= $this->input->post('kk_status');
		$kk_lastupdate 		= $this->input->post('kk_lastupdate');
		$kk_lastupdate_by	= $this->input->post('kk_lastupdate_by');

		$data = array(
			'kk_id'				=> $kk_id,
			'kk_no'				=> $kk_no,
			'kk_tgl'			=> $kk_tgl,
			'kk_status'			=> $kk_status,
			'kk_lastupdate'		=> $kk_lastupdate,
			'kk_lastupdate_by'	=> $kk_lastupdate_by
		);

		$this->kk_model->input_data($data, 'kk');
		redirect('transaksi/kk');
	}

	public function hapus ($id=''){
		$where = array('kk_id'=>$id);
		$this->kk_model->hapus_data($where, 'kk');
		redirect('transaksi/kk');
	}

	public function edit($id){
		$where = array('kk_id'=>$id);
		$data['v_kk'] = $this->kk_model->edit_data('kk', $where)->row_array();
		$this->load->view('template/header');
		if($this->session->userdata('user_id') == 1){
        	   $this->load->view('template/navbar');
        	}elseif($this->session->userdata('user_id') == 2){
        	   $this->load->view('template/navpetugas');
        	}elseif($this->session->userdata('user_id') == 3){
        	   $this->load->view('template/navdinas');
        	}
		$this->load->view('fungsi/datakk/editdata',$data);
		$this->load->view('template/footer');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['v_kk'] = $this->kk_model->getKeyword($keyword);
		$this->load->view('template/header');
		if($this->session->userdata('user_id') == 1){
        	   $this->load->view('template/navbar');
        	}elseif($this->session->userdata('user_id') == 2){
        	   $this->load->view('template/navpetugas');
        	}elseif($this->session->userdata('user_id') == 3){
        	   $this->load->view('template/navdinas');
        	}
		$this->load->view('fungsi/datakk/data', $data);
		$this->load->view('template/footer');
	}

	public function update(){
		$kk_id				= $this->input->post('kk_id');
		$kk_no				= $this->input->post('kk_no');
		$kk_tgl				= $this->input->post('kk_tgl');
		$kk_status			= $this->input->post('kk_status');
		$kk_lastupdate 		= $this->input->post('kk_lastupdate');
		$kk_lastupdate_by	= $this->input->post('kk_lastupdate_by');

		$data = array(
			'kk_id'				=> $kk_id,
			'kk_no'				=> $kk_no,
			'kk_tgl'			=> $kk_tgl,
			'kk_status'			=> $kk_status,
			'kk_lastupdate'		=> $kk_lastupdate,
			'kk_lastupdate_by'	=> $kk_lastupdate_by
		);

		$where = array(
			'kk_id'=>$kk_id
		);

		$this->kk_model->update_data($where, $data, 'kk');
		redirect('transaksi/kk');
	}
}
