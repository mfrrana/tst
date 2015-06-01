<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of stu_model
 *
 * @author Blueporise
 */
class stu_model extends CI_Model {

    public function insert_data($table, $reg_data) {
        $this->db->insert($table, $reg_data);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function read_data() {
        $this->db->select('*');
        $this->db->from('tbl_stu_admission_info');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function search_data($sub_name, $stu_id) {
        $this->db->select('*');
        $this->db->from('tbl_stu_subject');
        $this->db->where('stu_id', $stu_id);
        $this->db->where('subject', $sub_name);

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function search_data_info($stu_id) {
        $this->db->select('*');
        $this->db->from('tbl_stu_admission_info');

        $this->db->where('stu_id', $stu_id);
        $this->db->or_where('stu_name', $stu_id);
        $this->db->or_where('stu_mobile', $stu_id);
        $this->db->or_where('stu_phone', $stu_id);
        $this->db->or_where('stu_email', $stu_id);
        

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function search_data_details($sub_name, $stu_id) {
        $this->db->select('*');
        $this->db->from('tbl_stu_subject');
        $this->db->where('stu_id', $stu_id);
        $this->db->where('subject', $sub_name);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function read_subject() {
        $this->db->select('*');
        $this->db->from('tbl_subject');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function read_collection($stu_id) {
        $this->db->select('*');
        $this->db->from('tbl_stu_subject');
        $this->db->where('stu_id', $stu_id);

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function read_collection_details($stu_id) {
        $this->db->select('*');
        $this->db->from('tbl_stu_subject');
        $this->db->where('stu_id', $stu_id);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function all_section_info() {

        $this->db->select('*');
        $this->db->from('tbl_section');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function all_level_info() {

        $this->db->select('*');
        $this->db->from('tbl_level');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function all_batch_info() {

        $this->db->select('*');
        $this->db->from('tbl_batch');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function all_class_info() {

        $this->db->select('*');
        $this->db->from('tbl_class');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function all_teacher_info() {
        $this->db->select('*');
        $this->db->from('tbl_teacher');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function previous_id() {

        $this->db->select('stu_id');
        $this->db->from('tbl_stu_admission_info');
        $this->db->order_by('stu_id', 'desc');

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function student_result_data($stu_id, $sub_name) {
        $this->db->select('*');
        $this->db->from('tbl_result');
        $this->db->where('stu_id', $stu_id);
        $this->db->where('subject', $sub_name);

        $this->db->order_by('res_id', 'desc');

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function check_report_info($table_name, $stu_sub, $stu_id) {
        $this->db->select('*');
        $this->db->from($table_name);
        $this->db->where('stu_id', $stu_id);
        $this->db->where('subject', $stu_sub);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function check_result_by_id($stu_id, $stu_sub) {

        $this->db->select('*');
        $this->db->from('tbl_stu_subject');
        $this->db->where('stu_id', $stu_id);
        $this->db->where('subject', $stu_sub);

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    public function check_result_by__only_id($stu_id) {

        $this->db->select('*');
        $this->db->from('tbl_stu_subject');
        $this->db->where('stu_id', $stu_id);
      

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    public function check_all_subject_result_by_id($stu_id){
        
          $this->db->select('*');
        $this->db->from('tbl_result');
        $this->db->where('stu_id', $stu_id);
     

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

}
