<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model');
	}

	public function index()
	{
		$data['v_ms_menu'] = $this->menu_model->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/datamenu/ms_menu', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_ms_menu'] = $this->menu_model->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/datamenu/tambahdata',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi(){
		$mn_id				= $this->input->post('mn_id');
		$mn_kode			= $this->input->post('mn_kode');
		$mn_nama			= $this->input->post('mn_nama');
		$mn_level			= $this->input->post('mn_level');
		$mn_induk			= $this->input->post('mn_induk');
		$mn_icon			= $this->input->post('mn_icon');
		$mn_url				= $this->input->post('mn_url');
		$mn_aktif			= $this->input->post('mn_aktif');
		
		
		$data = array(
			'mn_id'				=> $mn_id,
			'mn_kode'			=> $mn_kode,
			'mn_nama'			=> $mn_nama,
			'mn_level'			=> $mn_level,
			'mn_induk'			=> $mn_induk,
			'mn_icon'			=> $mn_icon,
			'mn_url'			=> $mn_url,
			'mn_aktif'			=> $mn_aktif,

	);

		$this->menu_model->input_data($data, 'ms_menu');
		redirect('setting/menu');
	}

	public function hapus ($id=''){
		$where = array('mn_id'=>$id);
		$this->menu_model->hapus_data($where, 'ms_menu');
		redirect('setting/menu');
	}

	public function edit($id){
		$where = array('user_id'=>$id);
		$data['v_ms_menu'] = $this->menu_model->edit_data('ms_menu', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/datamenu/editdata',$data);
		$this->load->view('template/footer');
	}

	public function update(){
		$mn_id				= $this->input->post('mn_id');
		$mn_kode			= $this->input->post('mn_kode');
		$mn_nama			= $this->input->post('mn_nama');
		$mn_level			= $this->input->post('mn_level');
		$mn_induk			= $this->input->post('mn_induk');
		$mn_icon			= $this->input->post('mn_icon');
		$mn_url				= $this->input->post('mn_url');
		$mn_aktif			= $this->input->post('mn_aktif');
		
		
		$data = array(
			'mn_id'				=> $mn_id,
			'mn_kode'			=> $mn_kode,
			'mn_nama'			=> $mn_nama,
			'mn_level'			=> $mn_level,
			'mn_induk'			=> $mn_induk,
			'mn_icon'			=> $mn_icon,
			'mn_url'			=> $mn_url,
			'mn_aktif'			=> $mn_aktif,
		);

		$where = array(
			'mn_id'=>$mn_id
		);

		$this->menu_model->update_data($where, $data, 'ms_menu');
		redirect('setting/menu');
	}
}
