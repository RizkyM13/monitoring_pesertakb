<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPenduduk extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_penduduk');
	}
	
	public function index()
	{
		$data['v_penduduk'] = $this->m_penduduk->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('transaksi/data_penduduk');
		$this->load->view('template/footer');
	}

	public function tambah(){
		$penduduk_id			= $this->input->post('penduduk_id');
		$kk_id					= $this->input->post('kk_id');
		$kk_urut				= $this->input->post('kk_urut');
		$nik 					= $this->input->post('nik');
		$ektp		 			= $this->input->post('ektp');
		$nama					= $this->input->post('nama');
		$jenis_kelamin			= $this->input->post('jenis_kelamin');
		$tmp_lahir				= $this->input->post('tmp_lahir');
		$tgl_lahir				= $this->input->post('tgl_lahir');
		$thn_lahir				= $this->input->post('thn_lahir');
		$goldarah		 		= $this->input->post('goldarah');
		$rhesus					= $this->input->post('rhesus');
		$suku_id				= $this->input->post('suku_id');
		$agama					= $this->input->post('agama');
		$pendidikan				= $this->input->post('pendidikan');
		$pendidikan_ditempuh 	= $this->input->post('pendidikan_ditempuh');
		$pekerjaan		 		= $this->input->post('pekerjaan');
		$status_perkawinan		= $this->input->post('status_perkawinan');
		$hub_keluarga			= $this->input->post('hub_keluarga');
		$kewarganegaraan		= $this->input->post('kewarganegaraan');
		$no_paspor				= $this->input->post('no_paspor');
		$no_kitas				= $this->input->post('no_kitas');
		$ayah					= $this->input->post('ayah');
		$ibu					= $this->input->post('pendidikan_ditempuh');
		$stt	 				= $this->input->post('pekerjaan');
		$ada					= $this->input->post('status_perkawinan');
		$kode_desa				= $this->input->post('hub_keluarga');
		$rt						= $this->input->post('kewarganegaraan');
		$rw						= $this->input->post('no_paspor');
		$kk 					= $this->input->post('no_kitas');
		
		$data = array(
			'penduduk_id'			=> $penduduk_id,
			'kk_id'					=> $kk_id,
			'kk_urut'				=> $kk_urut,
			'nik' 					=> $nik,
			'ektp'		 			=> $ektp,
			'nama'					=> $nama,
			'jenis_kelamin'			=> $jenis_kelamin,
			'tmp_lahir'				=> $tmp_lahir,
			'tgl_lahir'				=> $tgl_lahir,
			'thn_lahir'				=> $thn_lahir,
			'goldarah'		 		=> $goldarah,
			'rhesus'				=> $rhesus,
			'suku_id'				=> $suku_id,
			'agama'					=> $agama,
			'pendidikan'			=> $pendidikan,
			'pendidikan_ditempuh' 	=> $pendidikan_ditempuh,
			'pekerjaan'		 		=> $pekerjaan,
			'status_perkawinan'		=> $status_perkawinan,
			'kewarganegaraan'		=> $kewarganegaraan,
			'no_kitas'				=> $no_kitas,
			'ayah'					=> $ayah,
			'ibu'					=> $pendidikan_ditempuh,
			'stt' 					=> $pekerjaan,
			'ada'					=> $status_perkawinan,
			'rt	'					=> $kewarganegaraan,
			'rw'					=> $no_paspor,
			'kk' 					=> $no_kitas,
		);

		$this->m_kk->input_data($data, 'penduduk');
		redirect('transaksi/datapenduduk');
	}

	public function hapus ($id=''){
		$where = array('penduduk_id'=>$id);
		$this->m_penduduk->hapus_data($where, 'penduduk');
		redirect('transaksi/datapenduduk');
	}

	public function edit($id){
		$where = array('penduduk_id'=>$id);
		$data['penduduk'] = $this->m_kk->edit_data('penduduk', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('transaksi/datapenduduk',$data);
		$this->load->view('template/footer');
	}

	public function update(){
		$penduduk_id			= $this->input->post('penduduk_id');
		$kk_id					= $this->input->post('kk_id');
		$kk_urut				= $this->input->post('kk_urut');
		$nik 					= $this->input->post('nik');
		$ektp		 			= $this->input->post('ektp');
		$nama					= $this->input->post('nama');
		$jenis_kelamin			= $this->input->post('jenis_kelamin');
		$tmp_lahir				= $this->input->post('tmp_lahir');
		$tgl_lahir				= $this->input->post('tgl_lahir');
		$thn_lahir				= $this->input->post('thn_lahir');
		$goldarah		 		= $this->input->post('goldarah');
		$rhesus					= $this->input->post('rhesus');
		$suku_id				= $this->input->post('suku_id');
		$agama					= $this->input->post('agama');
		$pendidikan				= $this->input->post('pendidikan');
		$pendidikan_ditempuh 	= $this->input->post('pendidikan_ditempuh');
		$pekerjaan		 		= $this->input->post('pekerjaan');
		$status_perkawinan		= $this->input->post('status_perkawinan');
		$hub_keluarga			= $this->input->post('hub_keluarga');
		$kewarganegaraan		= $this->input->post('kewarganegaraan');
		$no_paspor				= $this->input->post('no_paspor');
		$no_kitas				= $this->input->post('no_kitas');
		$ayah					= $this->input->post('ayah');
		$ibu					= $this->input->post('pendidikan_ditempuh');
		$stt	 				= $this->input->post('pekerjaan');
		$ada					= $this->input->post('status_perkawinan');
		$kode_desa				= $this->input->post('hub_keluarga');
		$rt						= $this->input->post('kewarganegaraan');
		$rw						= $this->input->post('no_paspor');
		$kk 					= $this->input->post('no_kitas');

		$data = array(
			'penduduk_id'			=> $penduduk_id,
			'kk_id'					=> $kk_id,
			'kk_urut'				=> $kk_urut,
			'nik' 					=> $nik,
			'ektp'		 			=> $ektp,
			'nama'					=> $nama,
			'jenis_kelamin'			=> $jenis_kelamin,
			'tmp_lahir'				=> $tmp_lahir,
			'tgl_lahir'				=> $tgl_lahir,
			'thn_lahir'				=> $thn_lahir,
			'goldarah'		 		=> $goldarah,
			'rhesus'				=> $rhesus,
			'suku_id'				=> $suku_id,
			'agama'					=> $agama,
			'pendidikan'			=> $pendidikan,
			'pendidikan_ditempuh' 	=> $pendidikan_ditempuh,
			'pekerjaan'		 		=> $pekerjaan,
			'status_perkawinan'		=> $status_perkawinan,
			'kewarganegaraan'		=> $kewarganegaraan,
			'no_kitas'				=> $no_kitas,
			'ayah'					=> $ayah,
			'ibu'					=> $pendidikan_ditempuh,
			'stt' 					=> $pekerjaan,
			'ada'					=> $status_perkawinan,
			'rt	'					=> $kewarganegaraan,
			'rw'					=> $no_paspor,
			'kk' 					=> $no_kitas,
		);

		$where = array(
			'penduduk_id'=>$penduduk_id
		);

		$this->m_kk->update_data($where, $data, 'penduduk');
		redirect('transaksi/penduduk');
	}

}
