<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPenduduk extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/data_penduduk');
	}
}
