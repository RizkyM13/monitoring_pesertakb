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
		$this->load->view('transaksi/datapenduduk/data_penduduk', $data);
		$this->load->view('template/footer');
	}

	public function tambah(){
		$data['v_penduduk'] = $this->m_penduduk->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('transaksi/datapenduduk/tambahdata',$data);
		$this->load->view('template/footer');
	}
		
	public function tambah_aksi(){
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
		$ibu					= $this->input->post('ibu');
		$stt	 				= $this->input->post('stt');
		$ada					= $this->input->post('ada');
		$kode_desa				= $this->input->post('kode_desa');
		$rt						= $this->input->post('rt');
		$rw						= $this->input->post('rw');
		$kk 					= $this->input->post('kk');


		
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
			'ibu'					=> $ibu,
			'stt' 					=> $stt,
			'ada'					=> $ada,
			'rt	'					=> $rt,
			'rw'					=> $rw,
			'kk' 					=> $kk
		);

		$this->m_penduduk->input_data($data, 'penduduk');
		redirect('transaksi/datapenduduk');
	}

	public function hapus ($id=''){
		$where = array('penduduk_id'=>$id);
		$this->m_penduduk->hapus_data($where, 'penduduk');
		redirect('transaksi/datapenduduk');
	}

	public function edit($id){
		$where = array('penduduk_id'=>$id);
		$data['v_penduduk'] = $this->m_penduduk->edit_data('penduduk', $where)->row_array();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('transaksi/datapenduduk/editdata',$data);
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
		$ibu					= $this->input->post('ibu');
		$stt	 				= $this->input->post('stt');
		$ada					= $this->input->post('ada');
		$kode_desa				= $this->input->post('kode_desa');
		$rt						= $this->input->post('rt');
		$rw						= $this->input->post('rw');
		$kk 					= $this->input->post('kk');


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
			'ibu'					=> $ibu,
			'stt' 					=> $stt,
			'ada'					=> $ada,
			'rt	'					=> $rt,
			'rw'					=> $rw,
			'kk' 					=> $kk
		);

		$where = array(
			'penduduk_id'=>$penduduk_id
		);

		$this->m_penduduk->update_data($where, $data, 'penduduk');
		redirect('transaksi/penduduk');
	}

	public function menu2(){
		$data['v_penduduk'] = $this->m_penduduk->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('transaksi/datapenduduk/penduduk1',$data);
		$this->load->view('template/footer');
	}

	public function menu3(){
		$data['v_penduduk'] = $this->m_penduduk->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('transaksi/datapenduduk/penduduk2',$data);
		$this->load->view('template/footer');
	}

	public function menu4(){
		$data['v_penduduk'] = $this->m_penduduk->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('transaksi/datapenduduk/penduduk3',$data);
		$this->load->view('template/footer');
	}


}
