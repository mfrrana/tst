<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user_login_model
 *
 * @author Blueporise
 */
class User_Login_Model extends CI_Model {
   
    
    public function check_user_info($user_name,$user_password){
        
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_name',$user_name);
        $this->db->where('user_password',md5($user_password));
        
        $query_result=  $this->db->get();
        $result=$query_result->row();
        return $result;
    }
}
