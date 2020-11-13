<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ms_group_menu extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_group_menu');
	}

	public function index()
	{
		$data['v_group_menu'] = $this->m_group_menu->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_group_menu/ms_group_menu',$data);
		$this->load->view('template/footer');
	}

	public function tambah(){
	$data['v_group_menu'] = $this->m_group_menu->tampil_data()->result();
	//$data['status'] = $this->m_kk->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_group_menu/tambahdata',$data);
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

		$this->m_group_menu->input_data($data, 'ms_group_menu');
		redirect('setting/ms_group_menu');
	}

	public function hapus ($id=''){
		$where = array('menu_id'=>$id);
		$this->m_group_menu->hapus_data($where, 'ms_group_menu');
		redirect('setting/ms_group_menu');
	}

	public function edit($id){
		$where = array('menu_id'=>$id);
		$data['v_group_menu'] = $this->m_group_menu->edit_data('ms_group_menu', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_group_menu/editdata',$data);
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

		$this->m_group_menu->update_data($where, $data, 'ms_group_menu');
		redirect('setting/ms_group_menu');
	}
}
