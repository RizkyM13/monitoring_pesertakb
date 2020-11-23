<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ms_suku extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_ms_suku');
	}

	public function index()
	{
		$data['v_ms_suku'] = $this->m_ms_suku->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/ms_suku/ms_suku', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_ms_suku'] = $this->m_ms_suku->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/ms_suku/ms_suku',$data);
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

		$this->m_ms_suku->input_data($data, 'ms_suku');
		redirect('master-data/ms_suku');
	}

	public function hapus ($id=''){
		$where = array('suku_id'=>$id);
		$this->m_ms_suku->hapus_data($where, 'ms_suku');
		redirect('master-data/ms_suku');
	}

	public function edit($id){
		$where = array('suku_id'=>$id);
		$data['v_ms_suku'] = $this->m_ms_suku->edit_data('ms_suku', $where)->row_array();
		$data['nama'] = $this->m_ms_suku->getDesa();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/ms_suku/editdata',$data);
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

		$this->m_ms_suku->update_data($where, $data, 'ms_suku');
		redirect('master-data/ms_suku');
	}
}
