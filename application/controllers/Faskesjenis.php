<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faskesjenis extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('faskesjenis_model');
		if ($this->session->userdata('kader_id')==null) {
			redirect('auth');
		}
	}

	public function index()
	{
		$data['v_ms_faskes_jenis'] = $this->faskesjenis_model->tampil_data()->result();
		$this->load->view('template/header');
        $this->load->view('template/navbar');	   
		$this->load->view('partial/datafaskesjenis/data', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_ms_faskes_jenis'] = $this->faskesjenis_model->tampil_data()->result();
		$this->load->view('template/header');
        $this->load->view('template/navbar');
		$this->load->view('partial/datafaskesjenis/tambahdata',$data);
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

		$this->faskesjenis_model->input_data($data, 'ms_faskes_jenis');
		redirect('faskesjenis');
	}

	public function hapus ($id=''){
		$where = array('faskesjenis_id'=>$id);
		$this->faskesjenis_model->hapus_data($where, 'ms_faskes_jenis');
		redirect('faskesjenis');
	}

	public function edit($id){
		$where = array('faskesjenis_id'=>$id);
		$data['v_ms_faskes_jenis'] = $this->faskesjenis_model->edit_data('ms_faskes_jenis', $where)->row_array();
		$this->load->view('template/header');
        $this->load->view('template/navbar');
		$this->load->view('partial/datafaskesjenis/editdata',$data);
		$this->load->view('template/footer');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['v_ms_faskes_jenis'] = $this->faskesjenis_model->getKeyword($keyword);
		$this->load->view('template/header');
		$this->load->view('template/header');
        $this->load->view('template/navbar');
		$this->load->view('partial/datafaskesjenis/data', $data);
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

		$this->faskesjenis_model->update_data($where, $data, 'ms_faskes_jenis');
		redirect('faskesjenis');
	}
}
