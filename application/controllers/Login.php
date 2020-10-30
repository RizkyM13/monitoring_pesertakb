<?php
defined ('BASEPATH') OR exit ('No direct script acess allowed');

class Login extends CI_Controller{

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
    		echo "proses login";

    	}else{
    		echo "tidak ada post";
    	}
    }


}