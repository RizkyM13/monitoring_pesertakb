<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataRw extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('master-data/datarw');
		$this->load->view('template/footer');
	}
}