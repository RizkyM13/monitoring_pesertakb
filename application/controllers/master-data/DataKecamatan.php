<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataKecamatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kecamatan');
	}

	public function index()
	{
		$data['v_kecamatan'] = $this->m_kecamatan->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datakecamatan/datakecamatan', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_kecamatan'] = $this->m_desa->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datakecamatan/tambahdata',$data);
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

		$this->m_kecamatan->input_data($data, 'kecamatan');
		redirect('master-desa/datakecamatan');
	}

	public function hapus ($id=''){
		$where = array('kec_kode'=>$id);
		$this->m_kecamatan->hapus_data($where, 'kecamatan');
		redirect('master-data/datakecamatan');
	}

	public function edit($id){
		$where = array('kec_kode'=>$id);
		$data['v_kecamatan'] = $this->m_kecamatan->edit_data('kec_kode', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datakecamatan/editdata',$data);
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

		$this->m_desa->update_data($where, $data, 'kecamatan');
		redirect('master-data/datakecamatan');
	}
}