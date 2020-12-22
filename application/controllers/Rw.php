<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rw extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('rw_model');
		if ($this->session->userdata('kader_id')==null) {
			redirect('auth');
		}
	}

	public function index()
	{
		$data['v_rw'] = $this->rw_model->tampil_data()->result();

		$this->load->view('template/header');
        $this->load->view('template/navbar');
		$this->load->view('partial/datarw/data', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_rw'] = $this->rw_model->tampil_data()->result();
		$data['nama'] = $this->rw_model->getNama();
		$this->load->view('template/header');
        $this->load->view('template/navbar');
		$this->load->view('partial/datarw/tambahdata',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi(){
		$rw_id				= $this->input->post('rw_id');
		$desa_kode			= $this->input->post('desa_kode');
		$rw					= $this->input->post('rw');
		

		$data = array(
			'rw_id'				=> $rw_id,
			'desa_kode'			=> $desa_kode,
			'rw'				=> $rw
			
		);

		$this->rw_model->input_data($data, 'data_rw');
		redirect('rw');
	}

	public function hapus ($id=''){
		$where = array('rw_id'=>$id);
		$this->rw_model->hapus_data($where, 'data_rw');
		redirect('rw');
	}

	public function edit($id){
		$where = array('rw_id'=>$id);
		$data['v_rw'] = $this->rw_model->edit_data('data_rw', $where)->row_array();
		$data['nama'] = $this->rw_model->getNama();
		$this->load->view('template/header');
        $this->load->view('template/navbar');
		$this->load->view('partial/datarw/editdata',$data);
		$this->load->view('template/footer');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
    	$data['v_rw'] = $this->rw_model->getKeyword($keyword);
		$this->load->view('template/header');
        $this->load->view('template/navbar');
		$this->load->view('partial/datarw/data', $data);
		$this->load->view('template/footer');
	}


	public function update(){
		$rw_id				= $this->input->post('rw_id');
		$desa_kode			= $this->input->post('desa_kode');
		$rw					= $this->input->post('rw');
		

		$data = array(
			'rw_id'				=> $rw_id,
			'desa_kode'			=> $desa_kode,
			'rw'				=> $rw
			
		);


		$where = array(
			'rw_id'	=>$rw_id
		);

		$this->rw_model->update_data($where, $data, 'data_rw');
		redirect('rw');
	}
}
