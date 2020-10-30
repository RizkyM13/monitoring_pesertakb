<?php
defined ('BASEPATH') OR exit ('No direct script acess allowed');

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

    //default fungsi
    public function index(){
        //check_already_login();
        $this->load->view('login');
    }

    public function proses(){
    	//template dari ci
    	$post = $this->input->post(null, TRUE); 

    	//template php
    	if(isset($post['login'])) { 
    		//load model
    		$this->load->model('M_login');
    		//login adalah fungsi yg ada di model
    		$query = $this->M_login->login($post);
    		if($query->num_rows() > 0){
    			$row = $query->row();
    			//echo $row->user_name;

    			$params = array(
    				'user_id' => $row->user_id,
    				'user_status' => $row->user_status
    			);

    			$this->session->set_userdata($params);
    			echo "<script> 
                        alert('Selamat, Login Berhasil!');
                        window.location='".base_url('dashboard')."';
                     </script>";
    		} else {
    			echo "<script> 
                        alert('Username atau Password Salah!');
                        window.location='".base_url('login')."';
                     </script>";
    		}

    	}

    }

    public function logout(){
    	$params = array('user_id', 'user_status');
    	$this->session->unset_userdata($params);
    	redirect('login/index');
    }


}