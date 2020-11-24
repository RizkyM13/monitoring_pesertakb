<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('group_model');
	}

	public function index()
	{
		$data['v_ms_group'] = $this->group_model->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/datagroup/ms_group',$data);
		$this->load->view('template/footer');
	}

	public function tambah(){
	$data['v_ms_group'] = $this->group_model->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/datagroup/tambahdata',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi(){
		$grp_id				= $this->input->post('grp_id');
		$grp_kode			= $this->input->post('grp_kode');
		$grp_nama			= $this->input->post('grp_nama');
		$grp_aktif			= $this->input->post('grp_aktif');
		

		$data = array(
			'grp_id'				=> $grp_id,
			'grp_kode'				=> $grp_kode,
			'grp_nama'				=> $grp_nama,
			'grp_aktif'				=> $grp_aktif
			
		);

		$this->group_model->input_data($data, 'ms_group');
		redirect('setting/group');
	}

	public function hapus ($id=''){
		$where = array('grp_id'=>$id);
		$this->group_model->hapus_data($where, 'ms_group');
		redirect('setting/group');
	}

	public function edit($id){
		$where = array('grp_id'=>$id);
		$data['v_ms_group'] = $this->group_model->edit_data('ms_group', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/datagroup/editdata',$data);
		$this->load->view('template/footer');
	}

	public function menu($id){
		$where = array('grp_id'=>$id);
		$data['v_ms_group'] = $this->group_model->detail('ms_group', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/datagroup/menu1');
		$this->load->view('template/footer');
	}

	public function update(){
		$grp_id				= $this->input->post('grp_id');
		$grp_kode			= $this->input->post('grp_kode');
		$grp_nama			= $this->input->post('grp_nama');
		$grp_aktif			= $this->input->post('grp_aktif');
		

		$data = array(
			'grp_id'				=> $grp_id,
			'grp_kode'				=> $grp_kode,
			'grp_nama'				=> $grp_nama,
			'grp_aktif'				=> $grp_aktif
			
		);

		$where = array(
			'grp_id'=>$grp_id
		);

		$this->group_model->update_data($where, $data, 'ms_group');
		redirect('setting/group');
	}
}
