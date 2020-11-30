<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('profil_model');
	}

	public function index()
	{
		$data['v_profil'] = $this->profil_model->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/dataprofil/profil_instansi', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_profil'] = $this->profil_model->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/dataprofil/tambahdata',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi(){
		$id					= $this->input->post('id');
		$kode				= $this->input->post('kode');
		$instansi			= $this->input->post('instansi');
		$instansi_nick		= $this->input->post('instansi_nick');
		$alamat				= $this->input->post('alamat');
		$kab_kode			= $this->input->post('kab_kode');
		$telp				= $this->input->post('telp');
		$email				= $this->input->post('email');
		$website			= $this->input->post('website');
		$kodepos			= $this->input->post('kodepos');
		$logo				= $this->input->post('logo');
		

		$data = array(
			'id'				=> $id,
			'kode'				=> $kode,
			'instansi'			=> $instansi,
			'instansi_nick'		=> $instansi_nick,
			'alamat'			=> $alamat,
			'kab_kode'			=> $kab_kode,
			'telp'				=> $telp,
			'email'				=> $email,
			'website'			=> $website,
			'kodepos'			=> $kodepos,
			'logo'				=> $logo
		);

		$this->profil_model->input_data($data, 'profil');
		redirect('setting/profil');
	}

	public function hapus ($id=''){
		$where = array('id'=>$id);
		$this->profil_model->hapus_data($where, 'profil');
		redirect('setting/profil');
	}

	public function edit($id){
		$where = array('id'=>$id);
		$data['v_profil'] = $this->profil_model->edit_data('profil', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/dataprofil/editdata',$data);
		$this->load->view('template/footer');
	}

	public function update(){
		$id					= $this->input->post('id');
		$kode				= $this->input->post('kode');
		$instansi			= $this->input->post('instansi');
		$instansi_nick		= $this->input->post('instansi_nick');
		$alamat				= $this->input->post('alamat');
		$kab_kode			= $this->input->post('kab_kode');
		$telp				= $this->input->post('telp');
		$email				= $this->input->post('email');
		$website			= $this->input->post('website');
		$kodepos			= $this->input->post('kodepos');
		$logo				= $this->input->post('logo');
		

		$data = array(
			'id'				=> $id,
			'kode'				=> $kode,
			'instansi'			=> $instansi,
			'instansi_nick'		=> $instansi_nick,
			'alamat'			=> $alamat,
			'kab_kode'			=> $kab_kode,
			'telp'				=> $telp,
			'email'				=> $email,
			'website'			=> $website,
			'kodepos'			=> $kodepos,
			'logo'				=> $logo
		);

		$where = array(
			'id'=>$id
		);

		$this->profil_model->update_data($where, $data, 'profil');
		redirect('setting/profil');
	}

	public function detail($id){
		$where = array('id'=>$id);
		$data['v_profil'] = $this->profil_model->detail('profil', $where)->row_array();
		//$this->db->get_where('penduduk',array('penduduk_id'=>$id))->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/dataprofil/menu_profil', $data);
		$this->load->view('template/footer');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
    	$data['v_profil'] = $this->profil_model->getKeyword($keyword);
    	$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('pengaturan/dataprofil/profil_instansi', $data);
		$this->load->view('template/footer');
	}
}
