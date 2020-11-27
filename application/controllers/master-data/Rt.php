<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rt extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('rt_model');
	}

	public function index()
	{
		$data['v_rt'] = $this->rt_model->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('partial/datart/data', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_rt'] = $this->rt_model->tampil_data()->result();
		$data['nama'] = $this->rt_model->getRw();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('partial/datart/tambahdata',$data);
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

		$this->rt_model->input_data($data, 'data_rt');
		redirect('master-data/rt');
	}

	public function hapus ($id=''){
		$where = array('rt_id'=>$id);
		$this->rt_model->hapus_data($where, 'data_rt');
		redirect('master-data/rt');
	}

	public function edit($id){
		$where = array('rt_id'=>$id);
		$data['v_rt'] = $this->rt_model->edit_data('data_rt', $where)->row_array();
		$data['nama'] = $this->rt_model->getRw();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('partial/datart/editdata',$data);
		$this->load->view('template/footer');
	}

	public function seacrh(){
		$data['v_rt'] = $this->rt_model->getKeyword();
		$keyword = $this->input->post('keyword');
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('partial/datart/data', $data);
		$this->load->view('template/footer');
	}
	public function search(){
		$keyword = $this->input->post('keyword');
    	$data['v_rt'] = $this->rt_model->getKeyword($keyword);
    	$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('partial/datart/data',$data);
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

		$this->rt_model->update_data($where, $data, 'data_rt');
		redirect('master-data/rt');
	}
}
