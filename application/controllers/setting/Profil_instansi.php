<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_instansi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_profil_instansi');
	}

	public function index()
	{
		$data['profil'] = $this->m_profil_instansi->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/profil_instansi/profil_instansi', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['profil'] = $this->m_profil_instansi->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/profil_instansi/tambahdata',$data);
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
		$website			= $this->input->post('webiste');
		$kodepos			= $this->input->post('kodepos');
		$logo				= $this->input->post('logo');
		

		$data = array(
			'id'				=> $id,
			'kode'				=> $kode,
			'instansi'			=> $instansi
			'instansi_nick'		=> $instansi_nick,
			'alamat'			=> $alamat,
			'kab_kode'			=> $kab_kode
			'telp'				=> $telp,
			'email'				=> $email,
			'webiste'			=> $webiste
			'kodepos'			=> $kodepos,
			'logo'				=> $logo,
		);

		$this->m_profil_instansi->input_data($data, 'profil');
		redirect('setting/profil_instansi');
	}

	public function hapus ($id=''){
		$where = array('kec_kode'=>$id);
		$this->m_profil_instansi->hapus_data($where, 'profil');
		redirect('setting/profil_instansi');
	}

	public function edit($id){
		$where = array('id'=>$id);
		$data['v_profil'] = $this->m_profil_instansi->edit_data('profil', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/profil_instansi/editdata',$data);
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
		$website			= $this->input->post('webiste');
		$kodepos			= $this->input->post('kodepos');
		$logo				= $this->input->post('logo');
		

		$data = array(
			'id'				=> $id,
			'kode'				=> $kode,
			'instansi'			=> $instansi
			'instansi_nick'		=> $instansi_nick,
			'alamat'			=> $alamat,
			'kab_kode'			=> $kab_kode
			'telp'				=> $telp,
			'email'				=> $email,
			'webiste'			=> $webiste
			'kodepos'			=> $kodepos,
			'logo'				=> $logo,
		);

		$where = array(
			'id'=>$id
		);

		$this->m_profil_instansi->update_data($where, $data, 'profil');
		redirect('setting/profil_instansi');
	}
}