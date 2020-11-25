<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kader extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kader_model');
	}

	public function index()
	{
		$data['v_kader'] = $this->kader_model->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('partial/datakader/data', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_kader'] = $this->kader_model->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('partial/datakader/tambahdata',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi(){
		$kader_id				= $this->input->post('kader_id');
		$kader_nama				= $this->input->post('kader_nama');
		$kader_nik				= $this->input->post('kader_nik');
		$kader_sex				= $this->input->post('kader_sex');
		$kader_kelahiran		= $this->input->post('kader_kelahiran');
		$kader_tglahir			= $this->input->post('kader_tglahir');
		$kader_email			= $this->input->post('kader_email');
		$kader_hp				= $this->input->post('kader_hp');
		$kader_aktif			= $this->input->post('kader_aktif');
		
		$data = array(
			'kader_id'				=> $kader_id,
			'kader_nama'			=> $kader_nama,
			'kader_nik'				=> $kader_nik,
			'kader_sex'				=> $kader_sex,
			'kader_kelahiran'		=> $kader_kelahiran,
			'kader_tglahir'			=> $kader_tglahir,
			'kader_email'			=> $kader_email,
			'kader_hp'				=> $kader_hp,
			'kader_aktif'			=> $kader_aktif,
			
		);

		$this->kader_model->input_data($data, 'kader');
		redirect('master-data/kader');
	}

	public function hapus ($id=''){
		$where = array('kader_id'=>$id);
		$this->kader_model->hapus_data($where, 'kader');
		redirect('master-data/kader');
	}

	public function edit($id){
		$where = array('kader_id'=>$id);
		$data['v_kader'] = $this->kader_model->edit_data('kader', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('partial/datakader/editdata',$data);
		$this->load->view('template/footer');
	}

	public function seacrh(){
		$data['v_kader'] = $this->kader_model->getKeyword();
		$keyword = $this->input->post('keyword');
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('partial/datakader/datakader', $data);
		$this->load->view('template/footer');
	}


	public function update(){
		$kader_id				= $this->input->post('kader_id');
		$kader_nama				= $this->input->post('kader_nama');
		$kader_nik				= $this->input->post('kader_nik');
		$kader_sex				= $this->input->post('kader_sex');
		$kader_kelahiran		= $this->input->post('kader_kelahiran');
		$kader_tglahir			= $this->input->post('kader_tglahir');
		$kader_email			= $this->input->post('kader_email');
		$kader_hp				= $this->input->post('kader_hp');
		$kader_aktif			= $this->input->post('kader_aktif');
		
		$data = array(
			'kader_id'				=> $kader_id,
			'kader_nama'			=> $kader_nama,
			'kader_nik'				=> $kader_nik,
			'kader_sex'				=> $kader_sex,
			'kader_kelahiran'		=> $kader_kelahiran,
			'kader_tglahir'			=> $kader_tglahir,
			'kader_email'			=> $kader_email,
			'kader_hp'				=> $kader_hp,
			'kader_aktif'			=> $kader_aktif,
		);

		$where = array(
			'kader_id'=>$kader_id
		);

		$this->kader_model->update_data($where, $data, 'kader');
		redirect('master-data/kader');
	}
}
