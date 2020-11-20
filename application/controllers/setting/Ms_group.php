<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ms_group extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_ms_group');
	}

	public function index()
	{
		$data['v_ms_group'] = $this->m_ms_group->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_group/ms_group',$data);
		$this->load->view('template/footer');
	}

	public function tambah(){
	$data['v_ms_group'] = $this->m_ms_group->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_group/tambahdata',$data);
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

		$this->m_ms_group->input_data($data, 'ms_group');
		redirect('setting/ms_group');
	}

	public function hapus ($id=''){
		$where = array('grp_id'=>$id);
		$this->m_ms_group->hapus_data($where, 'ms_group');
		redirect('setting/ms_group');
	}

	public function edit($id){
		$where = array('grp_id'=>$id);
		$data['v_ms_group'] = $this->m_ms_group->edit_data('ms_group', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_group/editdata',$data);
		$this->load->view('template/footer');
	}

	public function menu($id){
		$where = array('grp_id'=>$id);
		$data['v_ms_group'] = $this->m_ms_group->detail('ms_group', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/ms_group/menu1');
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

		$this->m_ms_group->update_data($where, $data, 'ms_group');
		redirect('setting/ms_group');
	}
}
