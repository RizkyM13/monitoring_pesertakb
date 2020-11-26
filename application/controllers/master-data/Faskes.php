<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faskes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('faskes_model');
	}

	public function index()
	{
		$data['v_faskes'] = $this->faskes_model->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('partial/datafaskes/data', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_faskes'] = $this->faskes_model->tampil_data()->result();
		$data['nama'] = $this->faskes_model->getFaskes();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('partial/datafaskes/tambahdata',$data);
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

		$this->faskes_model->input_data($data, 'ms_faskes');
		redirect('master-data/faskes');
	}

	public function hapus ($id=''){
		$where = array('faskes_id'=>$id);
		$this->faskes_model->hapus_data($where, 'ms_faskes');
		redirect('master-data/faskes');
	}

	public function edit($id){
		$where = array('faskes_id'=>$id);
		$data['v_faskes'] = $this->faskes_model->edit_data('ms_faskes', $where)->row_array();
		$data['nama'] = $this->faskes_model->getFaskes();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('partial/datafaskes/editdata',$data);
		$this->load->view('template/footer');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['v_faskes'] = $this->faskes_model->getKeyword($keyword);
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('partial/datafaskes/data', $data);
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

		$this->faskes_model->update_data($where, $data, 'ms_faskes');
		redirect('master-data/faskes');
	}
}
