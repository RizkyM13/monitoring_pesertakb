<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		if ($this->session->userdata('kader_id')==null) {
			redirect('auth');
		}
	}

	public function index()
	{
		$data['v_ms_user'] = $this->user_model->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/datauser/ms_user', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_ms_user'] = $this->user_model->tampil_data()->result();
		$data['nama'] = $this->user_model->getKader();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/datauser/tambahdata',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi(){
		$user_id				= $this->input->post('user_id');
		$kader_id				= $this->input->post('kader_id');
		$user_name				= $this->input->post('user_name');
		$user_password			= $this->input->post('user_password');
		$user_status			= $this->input->post('user_status');
		

		$data = array(
			'user_id'				=> $user_id,
			'kader_id'				=> $kader_id,
			'user_name'				=> $user_name,
			'user_password'			=> $user_password,
			'user_status'			=> $user_status
		);

		$this->user_model->input_data($data, 'ms_user');
		redirect('user');
	}

	public function hapus ($id=''){
		$where = array('user_id'=>$id);
		$this->user_model->hapus_data($where, 'ms_user');
		redirect('user');
	}

	public function edit($id){
		$where = array('user_id'=>$id);
		$data['v_ms_user'] = $this->user_model->edit_data('ms_user', $where)->row_array();
		$data['nama'] = $this->user_model->getKader();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/datauser/editdata',$data);
		$this->load->view('template/footer');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
    	$data['v_ms_user'] = $this->user_model->getKeyword($keyword);
    	$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/datauser/ms_user', $data);
		$this->load->view('template/footer');
	}

	public function update(){
		$user_id				= $this->input->post('user_id');
		$kader_id				= $this->input->post('kader_id');
		$user_name				= $this->input->post('user_name');
		$user_password			= $this->input->post('user_password');
		$user_status			= $this->input->post('user_status');
		
		
		

		$data = array(
			'user_id'				=> $user_id,
			'kader_id'				=> $kader_id,
			'user_name'				=> $user_name,
			'user_password'			=> $user_password,
			'user_status'			=> $user_status
		);

		$where = array(
			'user_id'=>$user_id
		);

		$this->user_model->update_data($where, $data, 'ms_user');
		redirect('user');
	}
}
