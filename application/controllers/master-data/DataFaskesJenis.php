<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataFaskesJenis extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_ms_faskes_jenis');
	}

	public function index()
	{
		$data['v_ms_faskes_jenis'] = $this->m_ms_faskes_jenis->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datafaskesjenis/datafaskesjenis', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_ms_faskes_jenis'] = $this->m_ms_faskes_jenis->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datafaskesjenis/tambahdata',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi(){
		$faskesjenis_id			= $this->input->post('faskesjenis_id');
		$faskesjenis_kode		= $this->input->post('faskesjenis_kode');
		$faskesjenis_nama		= $this->input->post('faskesjenis_nama');
		$faskesjenis_aktif		= $this->input->post('faskesjenis_aktif');
		

		$data = array(
			'faskesjenis_id'		=> $faskesjenis_id,
			'faskesjenis_kode'		=> $faskesjenis_kode,
			'faskesjenis_nama'		=> $faskesjenis_nama,
			'faskesjenis_aktif'		=> $faskesjenis_aktif
		);

		$this->m_ms_faskes_jenis->input_data($data, 'ms_faskes_jenis');
		redirect('master-data/datafaskesjenis');
	}

	public function hapus ($id=''){
		$where = array('faskesjenis_id'=>$id);
		$this->m_ms_faskes_jenis->hapus_data($where, 'ms_faskes_jenis');
		redirect('master-data/datafaskesjenis');
	}

	public function edit($id){
		$where = array('faskesjenis_id'=>$id);
		$data['v_ms_faskes_jenis'] = $this->m_ms_faskes_jenis->edit_data('ms_faskes_jenis', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datafaskesjenis/editdata',$data);
		$this->load->view('template/footer');
	}

	public function seacrh(){
		$data['v_faskes'] = $this->m_ms_faskes_jenis->getKeyword();
		$keyword = $this->input->post('keyword');
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datafaskesjenis/faskes',$data);
		$this->load->view('template/footer');
	}

	public function update(){
		$faskesjenis_id			= $this->input->post('faskesjenis_id');
		$faskesjenis_kode		= $this->input->post('faskesjenis_kode');
		$faskesjenis_nama		= $this->input->post('faskesjenis_nama');
		$faskesjenis_aktif		= $this->input->post('faskesjenis_aktif');
		

		$data = array(
			'faskesjenis_id'		=> $faskesjenis_id,
			'faskesjenis_kode'		=> $faskesjenis_kode,
			'faskesjenis_nama'		=> $faskesjenis_nama,
			'faskesjenis_aktif'		=> $faskesjenis_aktif
		);

		$where = array(
			'faskesjenis_id'=>$faskesjenis_id
		);

		$this->m_ms_faskes_jenis->update_data($where, $data, 'ms_faskes_jenis');
		redirect('master-data/datafaskesjenis');
	}
}
