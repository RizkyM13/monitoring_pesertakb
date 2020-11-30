<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kecamatan_model');
	}

	public function index()
	{
		$data['v_kecamatan'] = $this->kecamatan_model->tampil_data()->result();
		$this->load->view('template/header');
		if($this->session->userdata('user_id') == 1){
        	   $this->load->view('template/navbar');
        	}elseif($this->session->userdata('user_id') == 2){
        	   $this->load->view('template/navpetugas');
        	}
		$this->load->view('partial/datakecamatan/data', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_kecamatan'] = $this->kecamatan_model->tampil_data()->result();
		$this->load->view('template/header');
		if($this->session->userdata('user_id') == 1){
        	   $this->load->view('template/navbar');
        	}elseif($this->session->userdata('user_id') == 2){
        	   $this->load->view('template/navpetugas');
        	}
		$this->load->view('partial/datakecamatan/tambahdata',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi(){
		$kec_kode				= $this->input->post('kec_kode');
		$kec_nama				= $this->input->post('kec_nama');
		$kec_aktif				= $this->input->post('kec_aktif');
		

		$data = array(
			'kec_kode'				=> $kec_kode,
			'kec_nama'				=> $kec_nama,
			'kec_aktif'				=> $kec_aktif
		);

		$this->kecamatan_model->input_data($data, 'kecamatan');
		redirect('master-data/kecamatan');
	}

	public function hapus ($id=''){
		$where = array('kec_kode'=>$id);
		$this->kecamatan_model->hapus_data($where, 'kecamatan');
		redirect('master-data/kecamatan');
	}

	public function edit($id){
		$where = array('kec_kode'=>$id);
		$data['v_kecamatan'] = $this->kecamatan_model->edit_data('kecamatan', $where)->row_array();
		$this->load->view('template/header');
		if($this->session->userdata('user_id') == 1){
        	   $this->load->view('template/navbar');
        	}elseif($this->session->userdata('user_id') == 2){
        	   $this->load->view('template/navpetugas');
        	}
		$this->load->view('partial/datakecamatan/editdata',$data);
		$this->load->view('template/footer');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
    	$data['v_kecamatan'] = $this->kecamatan_model->getKeyword($keyword);
		$this->load->view('template/header');
		if($this->session->userdata('user_id') == 1){
        	   $this->load->view('template/navbar');
        	}elseif($this->session->userdata('user_id') == 2){
        	   $this->load->view('template/navpetugas');
        	}
		$this->load->view('partial/datakecamatan/data', $data);
		$this->load->view('template/footer');
	}


	public function update(){
		$kec_kode				= $this->input->post('kec_kode');
		$kec_nama				= $this->input->post('kec_nama');
		$kec_aktif				= $this->input->post('kec_aktif');
		

		$data = array(
			'kec_kode'				=> $kec_kode,
			'kec_nama'				=> $kec_nama,
			'kec_aktif'				=> $kec_aktif
		);

		$where = array(
			'kec_kode'=>$kec_kode
		);

		$this->kecamatan_model->update_data($where, $data, 'kecamatan');
		redirect('master-data/kecamatan');
	}
}
