<?php

class Common_Model extends CI_Model {

    public function insert_data($table_name, $data) {

        $this->db->insert($table_name, $data);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function retrive_data($table, $condition = NULL, $orderBy = NULL) {

        $this->db->select();
        $this->db->from($table);

        if ($condition != NULL) {
            $this->db->where($condition);
        }

        if ($orderBy != NULL) {
            $this->db->order_by($orderBy);
        }
        $query = $this->db->get();

        if ($this->db->affected_rows() > 0) {
            return $query;
        } else {
            return FALSE;
        }


        /*
          //SYSTEM 1
          $query_result = $this->db->get();
          $result = $query_result->result();
          return $result;

          //SYSTEM 2 In this case, query result hisebe nibe naki row hisebe nibe seta controller-e jeye korte hobe.
          $query = $this->db->get();
          return $query;

          //SYSTEM 3
          $query = $this->db->get();

          if ($this->db->affected_rows() > 0) {
          return $query;
          } else {
          return FALSE;
          }
         * 
         */
    }

    public function retireve_joint_data() {
        
    }

    public function update_data($table_name, $update_data, $condition) {
        $this->db->update($table_name, $update_data, $condition);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete_data_($table_name, $condition) {

        $this->db->delete($table_name)->where($condition);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function get_file($stu_id) {
        return $this->db->select()->from('tbl_admission')->where('id', $stu_id)->get()->row();
    }

    public function delete_data_with_image($table_name, $stu_id) {

        $result = $this->get_file($stu_id);

        $this->db->where('id', $stu_id)->delete($table_name);
        //$this->db->delete('tbl_admission')->where('id',$stu_id);


        if ($this->db->affected_rows() > 0) {
            //unlink('images/'.$result->image);//but how to keep :$result->image. For this, you have to create a ----
            unset($result->image);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function Read($table_name) {

        //$this->db->select('*')->from($table_name);
        $query_result = $this->db->get($table_name); //It will return all data from table.
        $result = $query_result->result();
        return $result;
    }

    public function Read_by_id($table_name, $id) {

        $this->db->select('*')->from($table_name)->where('user_id', $id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function Read_row($table_name, $id) {

        $this->db->select('*')->from($table_name)->where('user_id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function Read_row_by_id($table_name, $user_id) {

        $this->db->select('*')->from($table_name)->where('user_id', $user_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function Read_joint_by_id($table_name, $condition = NULL) {

        $this->db->select('*')->from($table_name)->where('id', $condition);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function Update($table_name, $data, $user_id) {

        $this->db->update($table_name, $data, array('user_id' => $user_id));
    }

    public function Delete($table_name, $user_id) {
        $this->db->delete($table_name, array('user_id' => $user_id));
    }

    public function read_hot_data($table_name) {
        $this->db->select_max('price')->from($table_name);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

}
