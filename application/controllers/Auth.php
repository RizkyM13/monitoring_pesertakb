<?php
defined ('BASEPATH') OR exit ('No direct script acess allowed');

class Auth extends CI_Controller{

	public function __construct(){
		parent::__construct();
        //$this->load->library('form_validation');
        $this->load->model('M_login');
        //$this->load->library('session');
	}

    //default fungsi
    public function index(){
        //check_already_login();
        $this->form_validation->set_rules('user_name', 'Username', 'trim|required');
        $this->form_validation->set_rules('user_password', 'Password', 'trim|required');
        if($this->form_validation->run() == false){
            $this->load->view('login');
        //$this->load->view('login');
    }
}

    public function proses(){
    	$user_name = $this->input->post('user_name');
        $user_password = md5($this->input->post('user_password'));
        $cekuser  = $this->M_login->cekuser($user_name);
        if ($cekuser) {
            $ceklogin = $this->M_login->ceklogin($user_name, $user_password);
            if ($ceklogin) {
                foreach ($ceklogin as $row) 
                if ($row->user_status == 1) {
                        $this->session->set_userdata('user_name', $row->user_name);
                        $this->session->set_userdata('user_password', $row->user_password);
                        $this->session->set_userdata('kader_id', $row->kader_id);
                    if (($this->session->userdata('kader_id') == 1) || ($this->session->userdata('kader_id') == 2) || ($this->session->userdata('kader_id') == 3)) {
                        echo "<script> 
                        alert('Selamat, Login Berhasil!');
                        window.location='".base_url('dashboard')."';
                     </script>";
                    }else{
                        echo "<script> 
                        alert('Maaf anda tidak memiliki akses!');
                        window.location='".base_url('auth')."';
                     </script>";
                    }
                }else{
                    echo "<script> 
                        alert('Maaf Username Belum Aktif');
                        window.location='".base_url('auth')."';
                     </script>";
                    
                    }
                }else{
                    echo "<script> 
                        alert('Silahkan Masukkan Username atau Password Kembali');
                        window.location='".base_url('auth')."';
                     </script>";
                }
            
                }else{
                    echo "<script> 
                        alert('Maaf Username Belum Terdaftar');
                        window.location='".base_url('auth')."';
                     </script>";
                }

        }

    

    public function logout(){
    	$this->session->sess_destroy();
        redirect('auth');
    }


}