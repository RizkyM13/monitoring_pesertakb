<?php
defined ('BASEPATH') OR exit ('No direct script acess allowed');

class Login extends CI_Controller{

    //default fungsi
    public function index(){
        //check_already_login();
        $this->load->view('login');
    }
}