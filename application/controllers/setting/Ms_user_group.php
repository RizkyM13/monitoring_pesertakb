<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ms_user_group extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user_group');
	}

	public function index()
	{
		$data['v_user_group'] = $this->m_user_group->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_user_group/ms_user_group',$data);
		$this->load->view('template/footer');
	}

	public function tambah(){
	$data['v_user_group'] = $this->m_user_group->tampil_data()->result();
	//$data['status'] = $this->m_kk->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_user_group/tambahdata',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi(){
		$user_id				= $this->input->post('user_id');
		$grp_id					= $this->input->post('grp_id');
		$update_by				= $this->input->post('update_by');
		$update_time			= $this->input->post('update_time');
		

		$data = array(
			'user_id'				=> $user_id,
			'grp_id'				=> $grp_id,
			'update_by'				=> $update_by,
			'update_time'			=> $update_time
			
		);

		$this->m_user_group->input_data($data, 'ms_user_group');
		redirect('setting/ms_user_group');
	}

	public function hapus ($id=''){
		$where = array('user_id'=>$id);
		$this->m_user_group->hapus_data($where, 'ms_user_group');
		redirect('setting/ms_user_group');
	}

	public function edit($id){
		$where = array('user_id'=>$id);
		$data['v_user_group'] = $this->m_user_group->edit_data('ms_user_group', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_user_group/editdata',$data);
		$this->load->view('template/footer');
	}

	public function update(){
		$user_id				= $this->input->post('user_id');
		$grp_id					= $this->input->post('grp_id');
		$update_by				= $this->input->post('update_by');
		$update_time			= $this->input->post('update_time');
		

		$data = array(
			'user_id'				=> $user_id,
			'grp_id'				=> $grp_id,
			'update_by'				=> $update_by,
			'update_time'			=> $update_time
			
		);

		$where = array(
			'user_id'=>$user_id
		);

		$this->m_user_group->update_data($where, $data, 'ms_user_group');
		redirect('setting/ms_user_group');
	}
}
