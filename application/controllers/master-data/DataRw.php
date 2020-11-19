<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataRw extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_rw');
	}

	public function index()
	{
		$data['v_rw'] = $this->m_rw->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datarw/datarw', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_rw'] = $this->m_rw->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datarw/tambahdata',$data);
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

		$this->m_rw->input_data($data, 'data_rw');
		redirect('master-data/datarw');
	}

	public function hapus ($id=''){
		$where = array('rw_id'=>$id);
		$this->m_rw->hapus_data($where, 'data_rw');
		redirect('master-data/datarw');
	}

	public function edit($id){
		$where = array('rw_id'=>$id);
		$data['v_rw'] = $this->m_rw->edit_data('data_rw', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datarw/editdata',$data);
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

		$this->m_rw->update_data($where, $data, 'data_rw');
		redirect('master-data/datarw');
	}
}