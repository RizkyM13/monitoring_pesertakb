<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usergroup extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('usergroup_model');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		
		$data['v_user_group'] = $this->usergroup_model->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/datausergroup/ms_user_group',$data);
		$this->load->view('template/footer');
	}

	public function tambah(){
	$data['usernama'] = $this->usergroup_model->getNamaUser();
	$data['groupnama'] = $this->usergroup_model->getNamaGroup();
	$data['v_user_group'] = $this->usergroup_model->tampil_data()->result();
	//$data['status'] = $this->m_kk->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/datausergroup/tambahdata',$data);
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

		$this->usergroup_model->input_data($data, 'ms_user_group');
		redirect('usergroup');
	}

	public function hapus ($id=''){
		$where = array('user_id'=>$id);
		$this->usergroup_model->hapus_data($where, 'ms_user_group');
		redirect('usergroup');
	}

	public function edit($id){
		$data['usernama'] = $this->usergroup_model->getNamaUser();
		$data['groupnama'] = $this->usergroup_model->getNamaGroup();
		$where = array('user_id'=>$id);
		$data['v_user_group'] = $this->usergroup_model->edit_data('ms_user_group', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');

		$data['user_id'] = $this->session->userdata('user_id');
		$data['timestamp'] = date("Y-m-d H:i:s");
		$this->load->view('pengaturan/datausergroup/editdata',$data);
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

		$this->usergroup_model->update_data($where, $data, 'ms_user_group');
		redirect('usergroup');
	}
}
