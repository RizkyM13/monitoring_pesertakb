<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataRt extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_rt');
	}

	public function index()
	{
		$data['v_rt'] = $this->m_rt->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datart/datart', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_rt'] = $this->m_rt->tampil_data()->result();
		$data['nama'] = $this->m_rt->getRw();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datart/tambahdata',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi(){
		$rt_id				= $this->input->post('rt_id');
		$rw_id				= $this->input->post('rw_id');
		$rt					= $this->input->post('rt');
		

		$data = array(
			'rt_id'				=> $rt_id,
			'rw_id'				=> $rw_id,
			'rt'				=> $rt
			
		);

		$this->m_rt->input_data($data, 'data_rt');
		redirect('master-data/datart');
	}

	public function hapus ($id=''){
		$where = array('rt_id'=>$id);
		$this->m_rt->hapus_data($where, 'data_rt');
		redirect('master-data/datart');
	}

	public function edit($id){
		$where = array('rt_id'=>$id);
		$data['v_rt'] = $this->m_rt->edit_data('data_rt', $where)->row_array();
		$data['nama'] = $this->m_rt->getRw();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datart/editdata',$data);
		$this->load->view('template/footer');
	}

	public function update(){
		$rt_id				= $this->input->post('rt_id');
		$rw_id				= $this->input->post('rw_id');
		$rt					= $this->input->post('rt');
		

		$data = array(
			'rt_id'				=> $rt_id,
			'rw_id'				=> $rw_id,
			'rt'				=> $rt
			
		);

		$where = array(
			'rt_id'	=>$rt_id
		);

		$this->m_rt->update_data($where, $data, 'data_rt');
		redirect('master-data/datart');
	}
}