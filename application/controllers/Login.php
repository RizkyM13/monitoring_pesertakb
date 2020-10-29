<?php
defined ('BASEPATH') OR exit ('No direct script acess allowed');

class Login extends CI_Controller{

    public function __construct(){
        parent:: __construct();

    }

    //default fungsi
    public function index(){
        //check_already_login();
        if($this->session->userdata("status") == "login"){
            redirect(base_url()."welcome");
        }else{
            $this->load->view('v_login');
        }
    }

    //proses
    public function proses(){
        $post = $this->input->post(null, TRUE);
        if(isset($post['v_login'])) {
            $this->load->model('M_login');
            $query = $this->M_login->login($post);
            if($query->num_rows() > 0){
                echo "login berhasil";
                //$row = $query->row();
                    //echo $row->username;
                //$params = array(
                    //'user_id' => $row->user_id,
                    //'user_status' => $row->user_status
                //);
                //$this->session->set_userdata($params);
                //echo "<script> 
                        //alert('Selamat, Login Berhasil!');
                        //window.location='".base_url('')."';
                     //</script>";
            }else{
                echo "login gagal"; 
                //echo "<script> 
                        //alert('Login Gagal! Username atau Password Salah!');
                        //window.location='".base_url('login')."';
                     //</script>";
            }
        }
    }
}