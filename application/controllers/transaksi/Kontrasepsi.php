<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontrasepsi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kontrasepsi_model');
		
	}

	public function index()
	{
		$data['v_kontrasepsi'] = $this->kontrasepsi_model->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('fungsi/datakontrasepsi/data',$data);
		$this->load->view('template/footer');
	}

	public function tambah(){
	$data['v_kontrasepsi'] = $this->kontrasepsi_model->tampil_data()->result();
	
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('fungsi/datakontrasepsi/tambahdata',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi(){
		$kontrasepsi_id					= $this->input->post('kontrasepsi_id');
		$kontransepsi_kode				= $this->input->post('kontransepsi_kode');
		$kontransepsi_nama				= $this->input->post('kontransepsi_nama');
		$kontransepsi_expired			= $this->input->post('kontransepsi_expired');
		$kontrasepsi_aktif 				= $this->input->post('kontrasepsi_aktif');

		$data = array(
			'kontrasepsi_id'			=> $kontrasepsi_id,
			'kontransepsi_kode'			=> $kontransepsi_kode,
			'kontransepsi_nama'			=> $kontransepsi_nama,
			'kontransepsi_expired'		=> $kontransepsi_expired,
			'kontrasepsi_aktif'			=> $kontrasepsi_aktif
			
		);

		$this->kontrasepsi_model->input_data($data, 'ms_kontrasepsi');
		redirect('transaksi/kontrasepsi');
	}

	public function hapus ($id=''){
		$where = array('kontrasepsi_id'=>$id);
		$this->kontrasepsi_model->hapus_data($where, 'ms_kontrasepsi');
		redirect('transaksi/kontrasepsi');
	}

	public function edit($id){
		$where = array('kontrasepsi_id'=>$id);
		$data['v_kontrasepsi'] = $this->kontrasepsi_model->edit_data('ms_kontrasepsi', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('fungsi/datakontrasepsi/editdata',$data);
		$this->load->view('template/footer');
	}

	public function update(){
		$kontrasepsi_id					= $this->input->post('kontrasepsi_id');
		$kontransepsi_kode				= $this->input->post('kontransepsi_kode');
		$kontransepsi_nama				= $this->input->post('kontransepsi_nama');
		$kontransepsi_expired			= $this->input->post('kontransepsi_expired');
		$kontrasepsi_aktif 				= $this->input->post('kontrasepsi_aktif');

		$data = array(
			'kontrasepsi_id'			=> $kontrasepsi_id,
			'kontransepsi_kode'			=> $kontransepsi_kode,
			'kontransepsi_nama'			=> $kontransepsi_nama,
			'kontransepsi_expired'		=> $kontransepsi_expired,
			'kontrasepsi_aktif'			=> $kontrasepsi_aktif
			
		);

		$where = array(
			'kontrasepsi_id'=>$kontrasepsi_id
		);

		$this->kontrasepsi_model->update_data($where, $data, 'ms_kontrasepsi');
		redirect('transaksi/kontrasepsi');
	}
}