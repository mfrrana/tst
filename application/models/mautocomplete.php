<?php
class Mautocomplete extends CI_Model{
 
    
     
   function lookup($keyword){
     //   $this->db->distinct() ; 
        $this->db->select('stu_name')->from('tbl_stu_admission_info'); 
        $this->db->like('stu_name',$keyword);
        
        $query = $this->db->get();    
         
        return $query->result();
    }
}