<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groupmenu extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('groupmenu_model');
	}

	public function index()
	{
		$data['v_group_menu'] = $this->groupmenu_model->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');

		$data['grp_id'] = $this->session->userdata('grp_id');
		$data['timestamp'] = date("Y-m-d H:i:s");
		$this->load->view('pengaturan/datagroupmenu/ms_group_menu',$data);
		$this->load->view('template/footer');
	}

	public function tambah(){
	$data['v_group_menu'] = $this->groupmenu_model->tampil_data()->result();
	//$data['status'] = $this->m_kk->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/datagroupmenu/tambahdata',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi(){
		$menu_id				= $this->input->post('menu_id');
		$grp_id					= $this->input->post('grp_id');
		$update_by				= $this->input->post('update_by');
		$update_time			= $this->input->post('update_time');
		

		$data = array(
			'menu_id'				=> $menu_id,
			'grp_id'				=> $grp_id,
			'update_by'				=> $update_by,
			'update_time'			=> $update_time
			
		);

		$this->groupmenu_model->input_data($data, 'ms_group_menu');
		redirect('setting/groupmenu');
	}

	public function hapus ($id=''){
		$where = array('menu_id'=>$id);
		$this->groupmenu_model->hapus_data($where, 'ms_group_menu');
		redirect('setting/groupmenu');
	}

	public function edit($id){
		$where = array('menu_id'=>$id);
		$data['v_group_menu'] = $this->groupmenu_model->edit_data('ms_group_menu', $where)->row_array();
		
		$data['user_id'] = $this->session->userdata('user_id');
		$data['timestamp'] = date("Y-m-d H:i:s");
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/datagroupmenu/editdata',$data);
		$this->load->view('template/footer');
	}

	public function update(){
		$menu_id				= $this->input->post('menu_id');
		$grp_id					= $this->input->post('grp_id');
		$update_by				= $this->input->post('update_by');
		$update_time			= $this->input->post('update_time');
		

		$data = array(
			'menu_id'				=> $menu_id,
			'grp_id'				=> $grp_id,
			'update_by'				=> $update_by,
			'update_time'			=> $update_time
			
		);

		$where = array(
			'menu_id'=>$menu_id
		);

		$this->groupmenu_model->update_data($where, $data, 'ms_group_menu');
		redirect('setting/groupmenu');
	}
}
