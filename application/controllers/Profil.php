<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('profil_model');
		if ($this->session->userdata('kader_id')==null) {
			redirect('auth');
		}
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
		$config['upload_path']		= './logo/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 0;
		$config['max_width']		= 0;
		$config['max_height']		= 0;
		$config['file_name']		= $_FILES['logo']['name'];

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('logo')) {
			echo "gagal upload logo";
		}else{
			$id					= $this->input->post('id');
			$kode				= $this->input->post('kode');
			$instansi			= $this->input->post('instansi');
			$instansi_nick		= $this->input->post('instansi_nick');
			$alamat				= $this->input->post('alamat');
			$kab_nama			= $this->input->post('kab_nama');
			$telp				= $this->input->post('telp');
			$email				= $this->input->post('email');
			$website			= $this->input->post('website');
			$kodepos			= $this->input->post('kodepos');
			$file 				= $this->upload->data();
			$logo				= $file['file_name'];
		

			$data = array(
				'id'				=> $id,
				'kode'				=> $kode,
				'instansi'			=> $instansi,
				'instansi_nick'		=> $instansi_nick,
				'alamat'			=> $alamat,
				'kab_nama'			=> $kab_nama,
				'telp'				=> $telp,
				'email'				=> $email,
				'website'			=> $website,
				'kodepos'			=> $kodepos,
				'logo'				=> $logo
			);

				$this->profil_model->input_data($data, 'profil');
				redirect('profil');

		}
	}

	public function hapus ($id=''){
		$where = array('id'=>$id);
		$this->profil_model->hapus_data($where, 'profil');
		redirect('profil');
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
		if (empty($_FILES['logo']['name'])) {

			$id					= $this->input->post('id');
			$kode				= $this->input->post('kode');
			$instansi			= $this->input->post('instansi');
			$instansi_nick		= $this->input->post('instansi_nick');
			$alamat				= $this->input->post('alamat');
			$kab_nama			= $this->input->post('kab_nama');
			$telp				= $this->input->post('telp');
			$email				= $this->input->post('email');
			$website			= $this->input->post('website');
			$kodepos			= $this->input->post('kodepos');
			
		

			$data = array(
				'id'				=> $id,
				'kode'				=> $kode,
				'instansi'			=> $instansi,
				'instansi_nick'		=> $instansi_nick,
				'alamat'			=> $alamat,
				'kab_nama'			=> $kab_nama,
				'telp'				=> $telp,
				'email'				=> $email,
				'website'			=> $website,
				'kodepos'			=> $kodepos
				
			);

			$where = array(
				'id'=>$id
			);

			$this->profil_model->update_data($where, $data, 'profil');
			redirect('profil');
		} else{
			$config['upload_path']		= './logo/';
			$config['allowed_types']	= 'gif|jpg|png|jpeg';
			$config['max_size']			= 0;
			$config['max_width']		= 0;
			$config['max_height']		= 0;
			$config['file_name']		= $_FILES['logo']['name'];

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('logo')) {
				echo "gagal upload logo";
			} else{
				$id					= $this->input->post('id');
				$kode				= $this->input->post('kode');
				$instansi			= $this->input->post('instansi');
				$instansi_nick		= $this->input->post('instansi_nick');
				$alamat				= $this->input->post('alamat');
				$kab_nama			= $this->input->post('kab_nama');
				$telp				= $this->input->post('telp');
				$email				= $this->input->post('email');
				$website			= $this->input->post('website');
				$kodepos			= $this->input->post('kodepos');
				$file 				= $this->upload->data();
				$logo				= $file['file_name'];
		

				$data = array(
				'id'				=> $id,
				'kode'				=> $kode,
				'instansi'			=> $instansi,
				'instansi_nick'		=> $instansi_nick,
				'alamat'			=> $alamat,
				'kab_nama'			=> $kab_nama,
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
				redirect('profil');
			}
		}
		
	}

	public function detail($id){
		$where = array('id'=>$id);
		$data['v_profil'] = $this->profil_model->detail('profil', $where)->row_array();
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
