<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user_login
 *
 * @author Blueporise
 */
session_start();

class User_Login extends CI_Controller {
   
    public function __construct() {
        parent::__construct();
        $user_id= $this->session->userdata('user_id');
        if( $user_id != NULL ) {
            redirect('welcome/home_page');
        }
        
    }

    public function index() {

        $this->load->view('user_login');
    }

    public function user_login_check() {


        $user_name = $this->input->post('user_name', true);
        $user_password = $this->input->post('user_password', true);

        $result = $this->user_login_model->check_user_info($user_name, $user_password);
        $sdata = array();
        if ($result) {
            $sdata['user_id'] = $result->user_id;
            $sdata['user_name'] = $result->user_name;
            $this->session->set_userdata($sdata);
           // $this->session->sess_expiration(30);
            redirect('welcome/home_page');
        } else {
            $sdata['fail_msg'] = "Invalid Username or Password";
            $this->session->set_userdata($sdata);
            redirect('user_login');
        }
    }

   

}
