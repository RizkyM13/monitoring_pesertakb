<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataFaskes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_faskes');
	}

	public function index()
	{
		$data['v_faskes'] = $this->m_faskes->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datafaskes/datafaskes', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_faskes'] = $this->m_faskes->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datafaskes/tambahdata',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi(){
		$faskes_id					= $this->input->post('faskes_id');
		$faskesjenis_id				= $this->input->post('faskesjenis_id');
		$faskes_kode				= $this->input->post('faskes_kode');
		$faskes_nama				= $this->input->post('faskes_nama');
		$faskes_alamat				= $this->input->post('faskes_alamat');
		$desa_kode					= $this->input->post('desa_kode');
		$faskes_aktif				= $this->input->post('faskes_aktif');
		

		$data = array(
			'faskes_id'				=> $faskes_id,
			'faskesjenis_id'		=> $faskesjenis_id,
			'faskes_kode'			=> $faskes_kode,
			'faskes_nama'			=> $faskes_nama,
			'faskes_alamat'			=> $faskes_alamat,
			'desa_kode'				=> $desa_kode,
			'faskes_aktif'			=> $faskes_aktif
		);

		$this->m_faskes->input_data($data, 'ms_faskes');
		redirect('master-data/datafaskes');
	}

	public function hapus ($id=''){
		$where = array('faskes_id'=>$id);
		$this->m_faskes->hapus_data($where, 'ms_faskes');
		redirect('master-data/datafaskes');
	}

	public function edit($id){
		$where = array('faskes_id'=>$id);
		$data['v_faskes'] = $this->m_faskes->edit_data('ms_faskes', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datafaskes/editdata',$data);
		$this->load->view('template/footer');
	}

	public function update(){
		$faskes_id					= $this->input->post('faskes_id');
		$faskesjenis_id				= $this->input->post('faskesjenis_id');
		$faskes_kode				= $this->input->post('faskes_kode');
		$faskes_nama				= $this->input->post('faskes_nama');
		$faskes_alamat				= $this->input->post('faskes_alamat');
		$desa_kode					= $this->input->post('desa_kode');
		$faskes_aktif				= $this->input->post('faskes_aktif');
		

		$data = array(
			'faskes_id'				=> $faskes_id,
			'faskesjenis_id'		=> $faskesjenis_id,
			'faskes_kode'			=> $faskes_kode,
			'faskes_nama'			=> $faskes_nama,
			'faskes_alamat'			=> $faskes_alamat,
			'desa_kode'				=> $desa_kode,
			'faskes_aktif'			=> $faskes_aktif
		);

		$where = array(
			'faskes_id'=>$faskes_id
		);

		$this->m_faskes->update_data($where, $data, 'ms_faskes');
		redirect('master-data/datafaskes');
	}
}
