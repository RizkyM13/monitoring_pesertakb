<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function main_menu()
	{
		$user_id = $this->session->userdata('kader_id');
		return $this->db->query("SELECT `ms_group`.`grp_id`, `grp_nama` FROM `ms_group` JOIN `ms_user_group` ON `ms_group`.`grp_id` = `ms_user_group`.`grp_id` WHERE   `ms_user_group`.`user_id` = $user_id ORDER BY `ms_user_group`.`grp_id` ASC");
		$menu = $this->db->query($queryMenu)->result_array();
	}


}