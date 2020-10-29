<?php
defined ('BASEPATH') OR exit ('No direct script acess allowed');

class Auth extends CI_Controller{

    public function __construct(){
        parent:: __construct();

    }

    //default fungsi
    //public function index(){
        //check_already_login();
        //if($this->session->userdata("status") == "login"){
            //redirect(base_url()."welcome");
        //}else{
            //$this->load->view('v_login');
        //}
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function process()
    {
        echo "proses"
    }
     
}