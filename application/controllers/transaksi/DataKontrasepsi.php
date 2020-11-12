<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataKontrasepsi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ms_kontrasepsi');
		
	}

	public function index()
	{
		$data['v_kontrasepsi'] = $this->m_kontrasepsi->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('transaksi/datakontrasepsi/datakontrasepsi',$data);
		$this->load->view('template/footer');
	}

	public function tambah(){
	$data['v_kontrasepsi'] = $this->m_kontrasepsi->tampil_data()->result();
	
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('transaksi/datakontrasepsi/tambahdata',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi(){
		$kontrasepsi_id					= $this->input->post('kontrasepsi_id');
		$kontrasepsi_kode				= $this->input->post('kontrasepsi_kode');
		$kontrasepsi_nama				= $this->input->post('kontrasepsi_nama');
		$kontrasepsi_expired			= $this->input->post('kontrasepsi_expired');
		$kontrasepsi_aktif 				= $this->input->post('kontrasepsi_aktif');

		$data = array(
			'kontrasepsi_id'			=> $kontrasepsi_id,
			'kontrasepsi_kode'			=> $kontrasepsi_kode,
			'kontrasepsi_nama'			=> $kontrasepsi_nama,
			'kontrasepsi_expired'		=> $kontrasepsi_expired,
			'kontrasepsi_aktif'			=> $kontrasepsi_aktif
			
		);

		$this->m_kontrasepsi->input_data($data, 'ms_kontrasepsi');
		redirect('transaksi/datakontrasepsi');
	}

	public function hapus ($id=''){
		$where = array('kontrasepsi_id'=>$id);
		$this->m_kontrasepsi->hapus_data($where, 'ms_kontrasepsi');
		redirect('transaksi/datakontrasepsi');
	}

	public function edit($id){
		$where = array('kontrasepsi_id'=>$id);
		$data['v_kontrasepsi'] = $this->m_kk->edit_data('ms_kontrasepsi', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('transaksi/datakontrasepsi/editdata',$data);
		$this->load->view('template/footer');
	}

	public function update(){
		$kontrasepsi_id					= $this->input->post('kontrasepsi_id');
		$kontrasepsi_kode				= $this->input->post('kontrasepsi_kode');
		$kontrasepsi_nama				= $this->input->post('kontrasepsi_nama');
		$kontrasepsi_expired			= $this->input->post('kontrasepsi_expired');
		$kontrasepsi_aktif 				= $this->input->post('kontrasepsi_aktif');

		$data = array(
			'kontrasepsi_id'			=> $kontrasepsi_id,
			'kontrasepsi_kode'			=> $kontrasepsi_kode,
			'kontrasepsi_nama'			=> $kontrasepsi_nama,
			'kontrasepsi_expired'		=> $kontrasepsi_expired,
			'kontrasepsi_aktif'			=> $kontrasepsi_aktif
			
		);

		$where = array(
			'kontrasepsi_id'=>$kontrasepsi_id
		);

		$this->m_kontrasepsi->update_data($where, $data, 'ms_kontrasepsi');
		redirect('transaksi/datakontrasepsi');
	}
}
