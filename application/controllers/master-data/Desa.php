<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('desa_model');
		if ($this->session->userdata('kader_id')==null) {
			redirect('auth');
		}
	}

	public function index()
	{
		$data['v_desa'] = $this->desa_model->tampil_data()->result();
		$this->load->view('template/header');
        $this->load->view('template/navbar');
		$this->load->view('partial/datadesa/data', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_desa'] = $this->desa_model->tampil_data()->result();
		$data['nama'] = $this->desa_model->getDesa();
		$this->load->view('template/header');
		
        	   $this->load->view('template/navbar');
        	
        	
		$this->load->view('partial/datadesa/tambahdata',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi(){
		$desa_kode				= $this->input->post('desa_kode');
		$kec_kode				= $this->input->post('kec_kode');
		$desa_nama				= $this->input->post('desa_nama');
		$desa_aktif				= $this->input->post('desa_aktif');
		

		$data = array(
			'desa_kode'				=> $desa_kode,
			'kec_kode'				=> $kec_kode,
			'desa_nama'				=> $desa_nama,
			'desa_aktif'			=> $desa_aktif
		);

		$this->desa_model->input_data($data, 'desa');
		redirect('master-data/desa');
	}

	public function hapus ($id=''){
		$where = array('desa_kode'=>$id);
		$this->desa_model->hapus_data($where, 'desa');
		redirect('master-data/desa');
	}

	public function edit($id){
		$where = array('desa_kode'=>$id);
		$data['v_desa'] = $this->desa_model->edit_data('desa', $where)->row_array();
		$data['nama'] = $this->desa_model->getDesa();
		$this->load->view('template/header');
		
        	   $this->load->view('template/navbar');
        	
        	   
		$this->load->view('partial/datadesa/editdata',$data);
		$this->load->view('template/footer');
	}
	public function search(){
		$keyword = $this->input->post('keyword');
    	$data['v_desa'] = $this->desa_model->getKeyword($keyword);
    	$this->load->view('template/header');
		
        	   $this->load->view('template/navbar');
        	
		$this->load->view('partial/datadesa/data',$data);
		$this->load->view('template/footer');
	}

	
	public function update(){
		$desa_kode				= $this->input->post('desa_kode');
		$kec_kode				= $this->input->post('kec_kode');
		$desa_nama				= $this->input->post('desa_nama');
		$desa_aktif				= $this->input->post('desa_aktif');
		

		$data = array(
			'desa_kode'				=> $desa_kode,
			'kec_kode'				=> $kec_kode,
			'desa_nama'				=> $desa_nama,
			'desa_aktif'			=> $desa_aktif
		);

		$where = array(
			'desa_kode'=>$desa_kode
		);

		$this->desa_model->update_data($where, $data, 'desa');
		redirect('master-data/desa');
	}
}
