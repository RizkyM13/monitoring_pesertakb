<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_instansi extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('setting/profil_instansi');
		$this->load->view('template/footer');
	}
}