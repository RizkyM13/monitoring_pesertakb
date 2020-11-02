<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataKK extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kk');
	}

	public function index()
	{
		$data['v_kk'] = $this->m_kk->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('transaksi/datakk',$data);
		$this->load->view('template/footer');
	}

	public function tambah(){
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

		$this->m_kk->input_data($data, 'kk');
		redirect('transaksi/datakk');
	}

	public function hapus ($id=''){
		$where = array('kk_id'=>$id);
		$this->m_kk->hapus_data($where, 'kk');
		redirect('transaksi/datakk');
	}

	public function edit($id){
		$where = array('kk_id'=>$id);
		$data['kk'] = $this->m_kk->edit_data('kk', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('transaksi/datakk',$data);
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

		$this->m_kk->update_data($where, $data, 'kk');
		redirect('transaksi/kk');
	}
}
