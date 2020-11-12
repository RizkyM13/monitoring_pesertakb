<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ms_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_ms_user');
	}

	public function index()
	{
		$data['v_ms_user'] = $this->m_ms_user->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_user/ms_user', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_ms_user'] = $this->m_ms_user->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_user/tambahdata',$data);
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
			'user_status'			=> $user_status,
		);

		$this->m_ms_user->input_data($data, 'ms_user');
		redirect('setting/ms_user');
	}

	public function hapus ($id=''){
		$where = array('user_id'=>$id);
		$this->m_ms_user->hapus_data($where, 'ms_user');
		redirect('setting/ms_user');
	}

	public function edit($id){
		$where = array('user_id'=>$id);
		$data['v_ms_user'] = $this->m_ms_user->edit_data('ms_user', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_user/editdata',$data);
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
			'user_status'			=> $user_status,
		);

		$where = array(
			'user_id'=>$user_id
		);

		$this->m_ms_user->update_data($where, $data, 'ms_user');
		redirect('setting/ms_user');
	}
}
