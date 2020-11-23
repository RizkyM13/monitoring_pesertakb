<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataDesa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_desa');
	}

	public function index()
	{
		$data['v_desa'] = $this->m_desa->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datadesa/datadesa', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_desa'] = $this->m_desa->tampil_data()->result();
		$data['nama'] = $this->m_desa->getDesa();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datadesa/tambahdata',$data);
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

		$this->m_desa->input_data($data, 'desa');
		redirect('master-data/datadesa');
	}

	public function hapus ($id=''){
		$where = array('desa_kode'=>$id);
		$this->m_desa->hapus_data($where, 'desa');
		redirect('master-data/datadesa');
	}

	public function edit($id){
		$where = array('desa_kode'=>$id);
		$data['v_desa'] = $this->m_desa->edit_data('desa', $where)->row_array();
		$data['nama'] = $this->m_desa->getDesa();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datadesa/editdata',$data);
		$this->load->view('template/footer');
	}

	public function seacrh(){
		$data['v_desa'] = $this->m_desa->getKeyword();
		$keyword = $this->input->post('keyword');
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datadesa/datadesa',$data);
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

		$this->m_desa->update_data($where, $data, 'desa');
		redirect('master-data/datadesa');
	}
}
