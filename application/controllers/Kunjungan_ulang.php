<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunjungan_ulang extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kunjungan_model');
		if ($this->session->userdata('kader_id')==null) {
			redirect('auth');
		}
		
	}

	public function index()
	{
		$data['v_kts'] = $this->kunjungan_model->tampil_data()->result();
		$this->load->view('template/header');
        $this->load->view('template/navbar');
		$this->load->view('fungsi/datakontrasepsi/data', $data);
		$this->load->view('template/footer');
	}
	public function tambah(){
		$data['v_akp'] = $this->kontrasepsi_model->tampil_data()->result();
		$data['faskes'] = $this->kontrasepsi_model->getFaskes();
		$data['kontrasepsi'] = $this->kontrasepsi_model->getKontrasepsi();
		$this->load->view('template/header');
        $this->load->view('template/navbar');
		$this->load->view('fungsi/dataakseptor/tambahdata',$data);
		$this->load->view('template/footer');
	}

	public function tambah_aksi(){
		$akseptor_id		= $this->input->post('akseptor_id');
		$tgl				= $this->input->post('tgl');
		$no_kartu			= $this->input->post('no_kartu');
		$faskes_id			= $this->input->post('faskes_id');
		$nama_akseptor 		= $this->input->post('nama_akseptor');
		$nama_pasangan		= $this->input->post('nama_pasangan');
		$kec_kode			= $this->input->post('kec_kode');
		$desa_kode			= $this->input->post('desa_kode');
		$pekerjaan			= $this->input->post('pekerjaan');
		$umur				= $this->input->post('umur');
		$u_anak_terkecil	= $this->input->post('u_anak_terkecil');
		$kontrasepsi_id		= $this->input->post('kontrasepsi_id');
		$stt				= $this->input->post('stt');

		$data = array(
			'akseptor_id'		=> $akseptor_id,
			'tgl'				=> $tgl,
			'no_kartu'			=> $no_kartu,
			'faskes_id'			=> $faskes_id,
			'nama_akseptor'		=> $nama_akseptor,
			'nama_pasangan'		=> $nama_pasangan,
			'kec_kode'			=> $kec_kode,
			'desa_kode'			=> $desa_kode,
			'pekerjaan'			=> $pekerjaan,
			'umur'				=> $umur,
			'u_anak_terkecil'	=> $u_anak_terkecil,
			'kontrasepsi_id'	=> $kontrasepsi_id,
			'stt' 				=> $stt
		);

		$this->akseptor_model->input_data($data, 'akseptor');
		redirect('akseptor');
	}

	public function hapus ($id=''){
		$where = array('akseptor_id'=>$id);
		$this->akseptor_model->hapus_data($where, 'akseptor');
		redirect('akseptor');
	}

	public function edit($id){
		$where = array('akseptor_id'=>$id);
		$data['v_akp'] = $this->akseptor_model->edit_data('akseptor', $where)->row_array();
		$data['faskes'] = $this->akseptor_model->getFaskes();
		$data['kontrasepsi'] = $this->akseptor_model->getKontrasepsi();
		$this->load->view('template/header');
        $this->load->view('template/navbar');
		$this->load->view('fungsi/dataakseptor/editdata',$data);
		$this->load->view('template/footer');
	}

	public function update(){
		$akseptor_id		= $this->input->post('akseptor_id');
		$tgl				= $this->input->post('tgl');
		$no_kartu			= $this->input->post('no_kartu');
		$faskes_id			= $this->input->post('faskes_id');
		$nama_akseptor 		= $this->input->post('nama_akseptor');
		$nama_pasangan		= $this->input->post('nama_pasangan');
		$kec_kode			= $this->input->post('kec_kode');
		$desa_kode			= $this->input->post('desa_kode');
		$pekerjaan			= $this->input->post('pekerjaan');
		$umur				= $this->input->post('umur');
		$u_anak_terkecil	= $this->input->post('u_anak_terkecil');
		$kontrasepsi_id		= $this->input->post('kontrasepsi_id');
		$stt				= $this->input->post('stt');

		$data = array(
			'akseptor_id'		=> $akseptor_id,
			'tgl'				=> $tgl,
			'no_kartu'			=> $no_kartu,
			'faskes_id'			=> $faskes_id,
			'nama_akseptor'		=> $nama_akseptor,
			'nama_pasangan'		=> $nama_pasangan,
			'kec_kode'			=> $kec_kode,
			'desa_kode'			=> $desa_kode,
			'pekerjaan'			=> $pekerjaan,
			'umur'				=> $umur,
			'u_anak_terkecil'	=> $u_anak_terkecil,
			'kontrasepsi_id'	=> $kontrasepsi_id,
			'stt' 				=> $stt
		);

		$where = array(
			'akseptor_id'=>$akseptor_id
		);

		$this->akseptor_model->update_data($where, $data, 'akseptor');
		redirect('akseptor');
	}
}