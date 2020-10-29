<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardAdmin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/dashboard_admin');
	}
}
