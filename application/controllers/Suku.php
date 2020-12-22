<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suku extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('suku_model');
		if ($this->session->userdata('kader_id')==null) {
			redirect('auth');
		}
	}

	public function index()
	{
		$data['v_ms_suku'] = $this->suku_model->tampil_data()->result();
		$this->load->view('template/header');
        $this->load->view('template/navbar');
		$this->load->view('partial/datasuku/data', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_ms_suku'] = $this->suku_model->tampil_data()->result();
		$this->load->view('template/header');
        $this->load->view('template/navbar');
		$this->load->view('partial/datasuku/tambahdata',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi(){
		$suku_id				= $this->input->post('suku_id');
		$suku_kode				= $this->input->post('suku_kode');
		$suku_nama				= $this->input->post('suku_nama');
		$suku_aktif				= $this->input->post('suku_aktif');
		

		$data = array(
			'suku_id'				=> $suku_id,
			'suku_kode'				=> $suku_kode,
			'suku_nama'				=> $suku_nama,
			'suku_aktif'			=> $suku_aktif
		);

		$this->suku_model->input_data($data, 'ms_suku');
		redirect('suku');
	}

	public function hapus ($id=''){
		$where = array('suku_id'=>$id);
		$this->suku_model->hapus_data($where, 'ms_suku');
		redirect('suku');
	}

	public function edit($id){
		$where = array('suku_id'=>$id);
		$data['v_ms_suku'] = $this->suku_model->edit_data('ms_suku', $where)->row_array();
		//$data['nama'] = $this->suku_model->getDesa();
		$this->load->view('template/header');
        $this->load->view('template/navbar');
		$this->load->view('partial/datasuku/editdata',$data);
		$this->load->view('template/footer');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['v_ms_suku'] = $this->suku_model->getKeyword($keyword);
		$this->load->view('template/header');
        $this->load->view('template/navbar');
		$this->load->view('partial/datasuku/data',$data);
		$this->load->view('template/footer');
	}


	public function update(){
		$suku_id				= $this->input->post('suku_id');
		$suku_kode				= $this->input->post('suku_kode');
		$suku_nama				= $this->input->post('suku_nama');
		$suku_aktif				= $this->input->post('suku_aktif');

		$data = array(
			'suku_id'				=> $suku_id,
			'suku_kode'				=> $suku_kode,
			'suku_nama'				=> $suku_nama,
			'suku_aktif'			=> $suku_aktif
		);

		$where = array(
			'suku_id'=>$suku_id
		);

		$this->suku_model->update_data($where, $data, 'ms_suku');
		redirect('suku');
	}
}
