<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

session_start();

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
            redirect('user_login');
        }
    }

    public function home_page() {
        $data = array();
        $data['maincontent'] = $this->load->view('welcome_page', '', TRUE);
        $this->load->view('master', $data);
    }

    public function admission_form() {
       
        $data = array();
        $data['all_section'] = $this->stu_model->all_section_info();
        $data['all_level'] = $this->stu_model->all_level_info();
        $data['all_batch'] = $this->stu_model->all_batch_info();
        $data['all_class'] = $this->stu_model->all_class_info();

        $data['auto_generated_id'] = $this->stu_model->previous_id();
       
        $data['maincontent'] = $this->load->view('form/admission_form', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function user_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('form/user_form', '', TRUE);
        $this->load->view('master', $data); 
    }

    public function teacher_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('form/teacher_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function level_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('form/level_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function class_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('form/class_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function section_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('form/section_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function batch_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('form/batch_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function subject_form() {
        $data = array();
        $data['all_teacher'] = $this->stu_model->all_teacher_info();
        $data['maincontent'] = $this->load->view('form/subject_form', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function stu_admission_info() {
        /* echo "<pre>";
          print_r($_POST);
          print_r($_FILES);
          exit(); */

        $data = array();
        $data['stu_rfid'] = $this->input->post('stu_rfid', TRUE);
        $data['stu_name'] = $this->input->post('stu_name', TRUE);
        $data['stu_gender'] = $this->input->post('stu_gender', TRUE);
        $data['stu_birth_date'] = $this->input->post('stu_birth_date', TRUE);
        $data['stu_address'] = $this->input->post('stu_address', TRUE);

        $data['stu_email'] = $this->input->post('stu_email', TRUE);
        $data['stu_email2'] = $this->input->post('stu_email2', TRUE);

        $data['stu_mobile'] = $this->input->post('stu_mobile', TRUE);
        $data['stu_mobile2'] = $this->input->post('stu_mobile2', TRUE);

        $data['stu_phone'] = $this->input->post('stu_phone', TRUE);
        $data['stu_phone2'] = $this->input->post('stu_phone2', TRUE);

        $data['stu_level'] = $this->input->post('stu_level', TRUE);
        $data['stu_class'] = $this->input->post('stu_class', TRUE);
        $data['stu_section'] = $this->input->post('stu_section', TRUE);
        $data['stu_batch'] = $this->input->post('stu_batch', TRUE);
        $data['admission_fee'] = $this->input->post('admission_fee', TRUE);
        $data['stu_status'] = $this->input->post('stu_status', TRUE);

        /* start code for student image upload */
        $config['upload_path'] = 'images/stu_images/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '100000';
        $config['max_width'] = '9999';
        $config['max_height'] = '9999';
        /* echo "<pre>";
          print_r($_FILES);
          exit(); */
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('stu_image')) {
            $error = $this->upload->display_errors();
            echo $error . "Hello! Try again.";
            exit();
        } else {
            $fdata = $this->upload->data();
            $data['stu_image'] = $config['upload_path'] . $fdata['file_name'];
        }

        /* end code for student image upload */

        /* ==================START CODE FOR MOTHER INFORMATION====================== */
        $data['mother_name'] = $this->input->post('mother_name', TRUE);
        $data['mother_profession'] = $this->input->post('mother_profession', TRUE);
        $data['mother_address'] = $this->input->post('mother_address', TRUE);

        $data['mother_email'] = $this->input->post('mother_email', TRUE);
        $data['mother_email2'] = $this->input->post('mother_email2', TRUE);

        $data['mother_mobile'] = $this->input->post('mother_mobile', TRUE);
        $data['mother_mobile2'] = $this->input->post('mother_mobile2', TRUE);

        $data['mother_phone'] = $this->input->post('mother_phone', TRUE);
        $data['mother_phone2'] = $this->input->post('mother_phone2', TRUE);

        /* start code for mother image upload */
        $config['upload_path'] = 'images/mother_images/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '100000';
        $config['max_width'] = '2524';
        $config['max_height'] = '1040';
        /* echo "<pre>";
          print_r($_FILES);
          exit(); */
        //Once load the upload library in the script, it doesn't need to load multiple time if you need to use it multiple time.
        $this->upload->initialize($config);

        //$error = '';   Don't need to initialize this variable again in the same script. Because, it is already initialized in the script. 
        //$fdata = array();
        if (!$this->upload->do_upload('mother_image')) {
            $error = $this->upload->display_errors();
            echo $error . "Hello! Try again.";
            exit();
        } else {
            $fdata = $this->upload->data();
            $data['mother_image'] = $config['upload_path'] . $fdata['file_name'];
        }

        /* end code for mother image upload */

        /* ==================START CODE FOR FATHER INFORMATION====================== */
        $data['father_name'] = $this->input->post('father_name', TRUE);
        $data['father_profession'] = $this->input->post('father_profession', TRUE);
        $data['father_address'] = $this->input->post('father_address', TRUE);

        $data['father_email'] = $this->input->post('father_email', TRUE);
        $data['father_email2'] = $this->input->post('father_email2', TRUE);
        $data['father_mobile'] = $this->input->post('father_mobile', TRUE);
        $data['father_mobile2'] = $this->input->post('father_mobile2', TRUE);
        $data['father_phone'] = $this->input->post('father_phone', TRUE);
        $data['father_phone2'] = $this->input->post('father_phone2', TRUE);

        /* start code for mother image upload */
        $config['upload_path'] = 'images/father_images/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '100000';
        $config['max_width'] = '2524';
        $config['max_height'] = '1040';
        /* echo "<pre>";
          print_r($_FILES);
          exit(); */

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('father_image')) {
            $error = $this->upload->display_errors();
            echo $error . "Hello! Try again.";
            exit();
        } else {
            $fdata = $this->upload->data();
            $data['father_image'] = $config['upload_path'] . $fdata['file_name'];
        }

        /* end code for image upload */

        /* ==================START CODE FOR ATTENDENT INFORMATION====================== */
        $data['attendent_name'] = $this->input->post('attendent_name', TRUE);
        $data['attendent_profession'] = $this->input->post('attendent_profession', TRUE);
        $data['attendent_address'] = $this->input->post('attendent_address', TRUE);

        $data['attendent_email'] = $this->input->post('attendent_email', TRUE);
        $data['attendent_email2'] = $this->input->post('attendent_email2', TRUE);
        $data['attendent_mobile'] = $this->input->post('attendent_mobile', TRUE);
        $data['attendent_mobile2'] = $this->input->post('attendent_mobile2', TRUE);
        $data['attendent_phone'] = $this->input->post('attendent_phone', TRUE);
        $data['attendent_phone2'] = $this->input->post('attendent_phone2', TRUE);

        /* start code for mother image upload */
        $config['upload_path'] = 'images/attendent_images/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '100000';
        $config['max_width'] = '2524';
        $config['max_height'] = '1040';
        /* echo "<pre>";
          print_r($_FILES);
          exit(); */
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('attendent_image')) {
            $error = $this->upload->display_errors();
            echo $error . "Hello! Try again.";
            exit();
        } else {
            $fdata = $this->upload->data();
            $data['attendent_image'] = $config['upload_path'] . $fdata['file_name'];
        }

        /* end code for image upload */

        $data['received_by'] = $this->session->userdata('user_name');

        $result = $this->stu_model->insert_data('tbl_stu_admission_info', $data);

        if ($result == TRUE) {
            $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
            redirect('welcome/admission_form');
        } else {
            $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
            redirect('welcome/admission_form');
        }
    }

    public function read_stu_info() {

        $result['all_info'] = $this->stu_model->read_data();
        /* echo "<pre>";
          print_r($result);
          exit(); */

        $this->load->view('stu_info', $result);
        /* if($result){
          $this->load->view('stu_info', $result);
          } */
    }

    public function stu_subject_form() {

        $results['result'] = $this->stu_model->read_subject();

        /* echo "<pre>";
          print_r($result);
          exit(); */

        $data = array();
        $data['maincontent'] = $this->load->view('form/stu_subject_form', $results, TRUE);
        $this->load->view('master', $data);
    }

    public function student_subject_info() {

        $stu_id = $this->input->post('stu_id', true);

        if ($stu_id == NULL) {
            $sdata = array();
            $sdata['blank_input'] = "Please Insert an ID of Student";
            $this->session->set_userdata($sdata);
            redirect('welcome/student_subject_form');
        } else {

            $result['search_info'] = $this->stu_model->search_data_info($stu_id);
        }
        if ($result['search_info'] == NULL) {

            $sdata = array();
            $sdata['invalid_input'] = "No Match Found";
            $this->session->set_userdata($sdata);
            redirect('welcome/student_subject_form');
        } else {

            $sdata = array();
            $sdata['valid_input'] = "Student Found";
            $this->session->set_userdata($sdata);
        }
        $result['result'] = $this->stu_model->read_subject();

        $result['date'] = date("F j, Y", bd_time());
        $data = array();
        $data['maincontent'] = $this->load->view('form/student_subject_form2', $result, TRUE);
        $this->load->view('master', $data);
    }

    public function insert_student_subject_info() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        $data = array();
        $data['stu_id'] = $this->input->post('stu_id', TRUE);
        $data['stu_name'] = $this->input->post('stu_name', TRUE);
        $data['subject'] = $this->input->post('subject', TRUE);
        $data['monthly_fees'] = $this->input->post('monthly_fees', TRUE);
        $data['eligible_month'] = $this->input->post('eligible_month', TRUE);
        $data['active'] = $this->input->post('active', TRUE);
        $data['date'] = $this->input->post('date', TRUE);
        $data['received_by'] = $this->session->userdata('user_name');

        $result = $this->stu_model->insert_data('tbl_stu_subject', $data);

        if ($result == TRUE) {
            $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
            redirect('welcome/student_subject_form');
        } else {
            $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
            redirect('welcome/student_subject_form');
        }
    }

    public function collection_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('form/collection_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function student_collection_info() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        $stu_id = $this->input->post('stu_id', true);
        if ($stu_id == NULL) {
            $sdata = array();
            $sdata['blank_input'] = "Student ID Not Inserted";
            $this->session->set_userdata($sdata);
            redirect('welcome/collection_form');
        }
        $result['search_info'] = $this->stu_model->read_collection($stu_id);
        if ($result['search_info'] == NULL) {

            $sdata = array();
            $sdata['invalid_input'] = "No Match Found";
            $this->session->set_userdata($sdata);
            redirect('welcome/collection_form');
        } else {

            $sdata = array();
            $sdata['valid_input'] = "Student Found";
            $this->session->set_userdata($sdata);
        }
        $result['collection_details'] = $this->stu_model->read_collection_details($stu_id);

        $data = array();
        $data['maincontent'] = $this->load->view('form/collection_form2', $result, TRUE);
        $this->load->view('master', $data);
    }

    public function attendance_form() {
        $this->load->helper('zea');

        //echo date("F j, Y, g:i a",bd_time());
        //echo date("F j, Y",bd_time());
        //echo date("g:i a",bd_time());

        $data = array();
        $data['date'] = date("F j, Y", bd_time());
        $data['time'] = date("g:i A", bd_time());
        $data['all_subjects'] = $this->stu_model->read_subject();
        $data['maincontent'] = $this->load->view('form/attendance_form', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function result_form() {
        $data = array();
        $data['all_subjects'] = $this->stu_model->read_subject();
        $data['maincontent'] = $this->load->view('form/result_form', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function report_form() {
        $data = array();
        $data['result'] = $this->stu_model->read_subject();
        $data['maincontent'] = $this->load->view('form/report_form', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function search_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('form/search_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function search_student_details() {
        $stu_id = $this->input->post('stu_name');
        if ($stu_id == NULL) {
            $sdata = array();
            $sdata['blank_input'] = "Student ID Not Inserted";
            $this->session->set_userdata($sdata);
            redirect('welcome/search_form');
        }
        $data = array();
        $data['student_details'] = $this->stu_model->search_data_info($stu_id);
        if ($data['student_details'] == NULL) {

            $sdata = array();
            $sdata['invalid_input'] = "No Match Found";
            $this->session->set_userdata($sdata);
            redirect('welcome/search_form');
        } else {

            $sdata = array();
            $sdata['valid_input'] = "Student Found";
            $this->session->set_userdata($sdata);
        }
        $data['maincontent'] = $this->load->view('form/search_form2', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function payment_form() {
        $data = array();
        $data['all_subjects'] = $this->stu_model->read_subject();
        $data['maincontent'] = $this->load->view('form/payment_form', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function payment_info() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */

        $sub_name = $this->input->post('subject', true);
        if ($sub_name == NULL) {
            $sdata = array();
            $sdata['blank_input'] = "Please Insert Both Subject and Student ID";
            $this->session->set_userdata($sdata);
            redirect('welcome/payment_form');
        }
        $stu_id = $this->input->post('stu_id', TRUE);
        if ($stu_id == NULL) {
            $sdata = array();
            $sdata['blank_input'] = "Please Insert Both Subject and Student ID";
            $this->session->set_userdata($sdata);
            redirect('welcome/payment_form');
        }
        $result = array();
        $result['search_info'] = $this->stu_model->search_data($sub_name, $stu_id);
        if ($result['search_info'] == NULL) {

            $sdata = array();
            $sdata['invalid_input'] = "No Match Found";
            $this->session->set_userdata($sdata);
            redirect('welcome/payment_form');
        } else {

            $sdata = array();
            $sdata['valid_input'] = "Student Found";
            $this->session->set_userdata($sdata);
        }
        $result['search_info_details'] = $this->stu_model->search_data_details($sub_name, $stu_id);

        /* echo "<pre>";
          print_r($result);
          exit(); */

        $data = array();
        $data['maincontent'] = $this->load->view('form/payment_form2', $result, TRUE);
        $this->load->view('master', $data);
    }

    public function utility_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('form/utility_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function rm_card_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('form/rm_card_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function enrollment_form() {
        $data = array();
        $data['all_section'] = $this->stu_model->all_section_info();
        $data['all_level'] = $this->stu_model->all_level_info();
        $data['all_batch'] = $this->stu_model->all_batch_info();
        $data['all_class'] = $this->stu_model->all_class_info();
        $data['maincontent'] = $this->load->view('form/enrollment_form', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function teacher_info() {
        $data = array();
        //$data['teacher_id'] = $this->input->post('teacher_id');
        $data['teacher_name'] = $this->input->post('teacher_name');
        $data['teacher_address'] = $this->input->post('teacher_address');

        $data['teacher_email'] = $this->input->post('teacher_email');
        
        $data['teacher_mobile'] = $this->input->post('teacher_mobile');

        $data['teacher_designation'] = $this->input->post('teacher_designation');
        $data['teacher_status'] = $this->input->post('teacher_status');

        /* =====================Code of Teacher Image Upload==================== */

        $config['upload_path'] = 'images/teacher_images/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '1000';
        $config['max_width'] = '8000';
        $config['max_height'] = '1000';

        $this->load->library('upload', $config);

        $this->upload->initialize($config);
        $fdata = array();
        if ($this->upload->do_upload('teacher_image')) {
            $fdata = $this->upload->data();
            $data['teacher_image'] = $config['upload_path'] . $fdata['file_name'];
        }

        if ($data['teacher_name'] == NULL || $data['teacher_address'] == NULL || $data['teacher_email'] == NULL ||
                $data['teacher_mobile'] == NULL || $data['teacher_designation'] == NULL ||
                $data['teacher_status'] == NULL || $data['teacher_image'] == NULL) {
            echo "ja dusto!";
            //redirect('welcome/teacher_form');
        } else {

            $result = $this->stu_model->insert_data('tbl_teacher', $data);

            if ($result == TRUE) {
                $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                redirect('welcome/teacher_form');
            } else {
                $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                redirect('welcome/teacher_form');
            }
        }
    }

    public function level_form_data() {
        $data = array();
        $data['level_code'] = $this->input->post('level_code');
        $data['level_name'] = $this->input->post('level_name');

        if ($data['level_code'] == NULL || $data['level_name'] == NULL) {
            /*echo "<pre>";
            print_r($data);
            exit();*/
            redirect('welcome/level_form');
        } else {

            $result = $this->stu_model->insert_data('tbl_level', $data);

            if ($result == TRUE) {
                $this->session->set_flashdata('success_message', 'Successfully Data Saved');
                redirect('welcome/level_form');
            } else {
                $this->session->set_flashdata('failure_message', 'Failed to Data Saved');
                redirect('welcome/level_form');
            }
        }
    }

    public function class_form_data() {
        $data = array();
        $data['class_code'] = $this->input->post('class_code', TRUE);
        $data['class_name'] = $this->input->post('class_name', TRUE);

        if ($data['class_code'] == NULL || $data['class_name'] == NULL) {
            redirect('welcome/class_form');
        } else {
            $result = $this->stu_model->insert_data('tbl_class', $data);

            if ($result == TRUE) {
                $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                redirect('welcome/class_form');
            } else {
                $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                redirect('welcome/class_form');
            }
        }
    }

    public function section_form_data() {
        $data = array();
        $data['section_code'] = $this->input->post('section_code', TRUE);
        $data['section_name'] = $this->input->post('section_name', TRUE);

        if ($data['section_code'] == NULL || $data['section_code'] == NULL) {
            redirect('welcome/section_form');
        } else {
            $result = $this->stu_model->insert_data('tbl_section', $data);

            if ($result == TRUE) {
                $this->session->set_flashdata('success_message', 'Successfully Data Saved');
                redirect('welcome/section_form');
            } else {
                $this->session->set_flashdata('failure_message', 'Failed to  Saved Data');
                redirect('welcome/section_form');
            }
        }
    }

    public function batch_form_data() {
        $data = array();
        $data['batch_code'] = $this->input->post('batch_code', TRUE);
        $data['batch_name'] = $this->input->post('batch_name', TRUE);

        if ($data['batch_code'] == NULL || $data['batch_name'] == NULL) {
            redirect('welcome/batch_form');
        } else {
            $result = $this->stu_model->insert_data('tbl_batch', $data);

            if ($result == TRUE) {
                $this->session->set_flashdata('success_message', 'Successfully Data Saved');
                redirect('welcome/batch_form');
            } else {
                $this->session->set_flashdata('failure_message', 'Failed to  Save dData');
                redirect('welcome/batch_form');
            }
        }
    }

    public function subject_form_data() {
        $data = array();
        $data['subject_code'] = $this->input->post('subject_code', TRUE);
        $data['subject_name'] = $this->input->post('subject_name', TRUE);
        $data['teacher_name'] = $this->input->post('teacher_name', TRUE);

        if ($data['subject_code'] == NULL || $data['subject_name'] == NULL || $data['teacher_name'] == NULL) {
            echo "helo";
            //redirect('welcome/subject_form');
        } else {

            $result = $this->stu_model->insert_data('tbl_subject', $data);

            if ($result == TRUE) {
                $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                redirect('welcome/subject_form');
            } else {
                $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                redirect('welcome/subject_form');
            }
        }
    }

    public function user_data() {
        $this->form_validation->set_rules('user_name', 'User Name', 'required');
        $this->form_validation->set_rules('user_password', 'Password', 'trim|required|matches[user_confirm_password]|min_length[5]|max_length[12]|xss_clean|md5');
        $this->form_validation->set_rules('user_confirm_password', 'Password Confirmation', 'trim|required|xss_clean|md5');
        //$this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('user_type', 'User Type', 'required');

        if ($this->form_validation->run() == FALSE) {
            //$this->load->view('form/user');
            $data = array();
            $data['maincontent'] = $this->load->view('form/user_form', '', TRUE);
            $this->load->view('master', $data);
        } else {
            //$this->load->view('formsuccess');
            $data = array();
            $data['user_name'] = $this->input->post('user_name', TRUE);
            $data['user_password'] = $this->input->post('user_password', TRUE);
            $data['user_confirm_password'] = $this->input->post('user_confirm_password', TRUE);
            $data['user_type'] = $this->input->post('user_type', TRUE);


            $result = $this->stu_model->insert_data('tbl_user', $data);

            if ($result == TRUE) {
                $this->session->set_flashdata('success_message', 'Registration Successfull');
                redirect('welcome/user_form');
            } else {
                $this->session->set_flashdata('failure_message', 'Registration Failed! Try again');
                redirect('welcome/user_form');
            }
        }
    }

    public function enrollment_form_data() {
         /*echo "<pre>";
          print_r($_POST);
          print_r($_FILES);
          exit();*/
        $data = array();

        $data['name'] = $this->input->post('name', TRUE);
        $data['address'] = $this->input->post('address', TRUE);
        $data['email'] = $this->input->post('email', TRUE);
        $data['mobile'] = $this->input->post('mobile', TRUE);
        $data['phone'] = $this->input->post('phone', TRUE);
        $data['level'] = $this->input->post('level', TRUE);
        $data['class'] = $this->input->post('class', TRUE);
        $data['section'] = $this->input->post('section', TRUE);
        $data['batch'] = $this->input->post('batch', TRUE);
        $data['admission_fee'] = $this->input->post('admission_fee', TRUE);
        $data['tution_fee'] = $this->input->post('tution_fee', TRUE);
        $data['status'] = $this->input->post('status', TRUE);

        $config['upload_path'] = 'images/enrolement_images/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '1000';
        $config['max_width'] = '8000';
        $config['max_height'] = '1000';

        $this->load->library('upload', $config);

        $this->upload->initialize($config);
        $fdata = array();
        if ($this->upload->do_upload('image')) {
            $fdata = $this->upload->data();
            $data['image'] = $config['upload_path'] . $fdata['file_name'];
        }

      
            $result = $this->stu_model->insert_data('tbl_enrolement', $data);

            if ($result == TRUE) {
                $this->session->set_flashdata('success_message', 'Successfully Data Saved');
                redirect('welcome/enrollment_form');
            } else {
                $this->session->set_flashdata('failure_message', 'Failed to Saved Data');
                redirect('welcome/enrollment_form');
            }
        
    }

    public function save_rmcard_info() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        $data = array();
        $data['id_no'] = $this->input->post('id_no', TRUE);
        $data['name'] = $this->input->post('name', TRUE);
        $data['address'] = $this->input->post('address', TRUE);
        $data['card_number'] = $this->input->post('card_number', TRUE);
        //if ($data==NULL) As $data is an array it must be mention the index of that array, i.e., $data['id_no']==NULL
        if ($data['id_no'] == NULL || $data['name'] == NULL || $data['address'] == NULL || $data['card_number'] == NULL) {

            redirect('welcome/rm_card_form');
        } else {
            $result = $this->stu_model->insert_data('tbl_rm_card', $data);

            if ($result == TRUE) {
                $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                redirect('welcome/rm_card_form');
            } else {
                $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                redirect('welcome/rm_card_form');
            }
        }
    }

    public function search_student_info() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        $sdata = array();
        $sub_name = $this->input->post('subject', true);
        $sdata['sub_name'] = $sub_name;

        if ($sub_name == NULL) {
            $sdata = array();
            $sdata['blank_input'] = "Please Insert Both Subject and Student ID";
            $this->session->set_userdata($sdata);
            redirect('welcome/result_form');
        }
        $stu_id = $this->input->post('stu_id', TRUE);
        $sdata['stu_id'] = $stu_id;
        $this->session->set_userdata($sdata);
        if ($stu_id == NULL) {
            $sdata = array();
            $sdata['blank_input'] = "Please Insert Both Subject and Student ID";
            $this->session->set_userdata($sdata);
            redirect('welcome/result_form');
        }
        $result = array();
        $result['search_info'] = $this->stu_model->search_data($sub_name, $stu_id);
        if ($result['search_info'] == NULL) {

            $sdata = array();
            $sdata['invalid_input'] = "No Match Found";
            $this->session->set_userdata($sdata);
            redirect('welcome/result_form');
        } else {

            $sdata = array();
            $sdata['valid_input'] = "Student Found";
            $this->session->set_userdata($sdata);
        }
        $result['search_info_details'] = $this->stu_model->search_data_details($sub_name, $stu_id);

        /* echo "<pre>";
          print_r($result);
          exit(); */

        $data = array();

        $result['all_subjects'] = $this->stu_model->read_subject();
        $result['student_result_info'] = $this->stu_model->student_result_data($stu_id, $sub_name);
        $data['maincontent'] = $this->load->view('form/result_form2', $result, TRUE);
        $this->load->view('master', $data);
    }

    public function save_result_info() {

        $data = array();
        $data['subject'] = $this->session->userdata('sub_name');
        $data['stu_id'] = $this->session->userdata('stu_id');
        $data['topics'] = $this->input->post('topics', true);
        $data['exam_date'] = $this->input->post('exam_date', true);
        $data['exam_marks'] = $this->input->post('exam_marks', true);
        $data['obtained'] = $this->input->post('obtained', true);

        $result = $this->stu_model->insert_data('tbl_result', $data);

        if ($result == TRUE) {
            $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
            redirect('welcome/result_form');
        } else {
            $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
            redirect('welcome/result_form');
        }
    }

    public function search_student_info_for_attendance() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        $sdata = array();
        $sub_name = $this->input->post('subject', true);
        $sdata['sub_name'] = $sub_name;

        if ($sub_name == NULL) {
            $sdata = array();
            $sdata['blank_input'] = "Please Insert Both Subject and Student ID";
            $this->session->set_userdata($sdata);
            redirect('welcome/attendance_form');
        }
        $stu_id = $this->input->post('stu_id', TRUE);
        $sdata['stu_id'] = $stu_id;
        $this->session->set_userdata($sdata);
        if ($stu_id == NULL) {
            $sdata = array();
            $sdata['blank_input'] = "Please Insert Both Subject and Student ID";
            $this->session->set_userdata($sdata);
            redirect('welcome/attendance_form');
        }
        $result = array();
        $result['search_info'] = $this->stu_model->search_data($sub_name, $stu_id);
        if ($result['search_info'] == NULL) {
            $sdata = array();
            $sdata['invalid_input'] = "No Match Found";
            $this->session->set_userdata($sdata);
            redirect('welcome/attendance_form');
        } else {
            $sdata = array();
            $sdata['valid_input'] = "Student Found";
            $this->session->set_userdata($sdata);
        }
        /* $result['search_info_details'] = $this->stu_model->search_data_details($sub_name, $stu_id); */
        /* echo "<pre>";
          print_r($result);
          exit(); */
        $data = array();
        $result['date'] = date("F j, Y", bd_time());
        $result['time'] = date("g:i A", bd_time());
        $result['all_subjects'] = $this->stu_model->read_subject();
        //$result['student_result_info'] = $this->stu_model->student_result_data($stu_id, $sub_name);
        $data['maincontent'] = $this->load->view('form/attendance_form2', $result, TRUE);
        $this->load->view('master', $data);
    }

    public function save_attendance_info() {

        $data = array();
        $data['stu_id'] = $this->input->post('stu_id');
        $data['name'] = $this->input->post('name');
        $data['date'] = $this->input->post('date');
        $data['time'] = $this->input->post('time');
        if ($data['stu_id'] != NULL || $data['name'] != NULL || $data['date'] != NULL || $data['time'] != NULL) {

            $result = $this->stu_model->insert_data('tbl_attendance', $data);

            if ($result == TRUE) {
                $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                redirect('welcome/attendance_form');
            } else {
                $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                redirect('welcome/attendance_form');
            }
        }
    }

    public function report_info() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        $data = array();
//      
        $stu_sub = $this->input->post('subject', TRUE);
        $sdata['stu_sub'] = $stu_sub;
        $this->session->set_userdata($sdata);
        $stu_id = $this->input->post('stu_id', TRUE);

        $report_type = $this->input->post('report_type', TRUE);

        if ($report_type == 'student') {
            $data = array();
            $data['result'] = $this->stu_model->read_subject();
            $data['check_result_by_id'] = $this->stu_model->check_result_by_id($stu_id, $stu_sub);
            $data['check_result'] = $this->stu_model->check_report_info('tbl_stu_subject', $stu_sub, $stu_id);
            $data['maincontent'] = $this->load->view('form/report_form2', $data, TRUE);
            $this->load->view('master', $data);
            /* echo "<pre>";
              print_r($result);
              exit(); */
        } elseif ($report_type == 'defaulter') {
            $result = $this->stu_model->check_report_info('', $stu_sub, $stu_id);
        } elseif ($report_type == 'collection') {
            $data = array();
            $data['result'] = $this->stu_model->read_subject();
            $data['check_result_by_id'] = $this->stu_model->check_result_by_id($stu_id, $stu_sub);
            $data['check_result'] = $this->stu_model->check_report_info('tbl_stu_subject', $stu_sub, $stu_id);
            $data['maincontent'] = $this->load->view('form/report_form3', $data, TRUE);
            $this->load->view('master', $data);
        } elseif ($report_type == 'id_print') {
            $result = $this->stu_model->check_report_info('', $stu_sub, $stu_id);
        } elseif ($report_type == 'attendance') {
            $result = $this->stu_model->check_report_info('', $stu_sub, $stu_id);
        } elseif ($report_type == 'result') {
            if ($stu_sub == 'All') {
                $data = array();
                $data['result'] = $this->stu_model->read_subject();
                $data['check_result_by_id'] = $this->stu_model->check_result_by__only_id($stu_id);
                $data['check_result'] = $this->stu_model->check_all_subject_result_by_id($stu_id);
//  $data['check_result'] = $this->stu_model->check_report_info('tbl_result', $stu_sub, $stu_id);
                $data['maincontent'] = $this->load->view('form/report_form4', $data, TRUE);
                $this->load->view('master', $data);
            } else {
                $data = array();
                $data['result'] = $this->stu_model->read_subject();
                $data['check_result_by_id'] = $this->stu_model->check_result_by_id($stu_id, $stu_sub);
                // $data['check_result'] = $this->stu_model->check_all_subject_result_by_id( $stu_id);
                $data['check_result'] = $this->stu_model->check_report_info('tbl_result', $stu_sub, $stu_id);
                $data['maincontent'] = $this->load->view('form/report_form4', $data, TRUE);
                $this->load->view('master', $data);
            }
            /* echo "<pre>";
              print_r($result);
              exit(); */

            //$result = $this->stu_model->check_report_info('', $stu_sub, $stu_id);
        }

        /*
          elseif ($report_type == 'result' && $stu_sub == 'All') {

          $data = array();
          $data['result'] = $this->stu_model->read_subject();
          $data['check_result_by_id']=  $this->stu_model->check_result_by_id($stu_id,$stu_sub);
          $data['check_result'] = $this->stu_model->check_all_subject_result_by_id('tbl_stu_subject', $stu_id);
          $data['maincontent'] = $this->load->view('form/report_form4', $data, TRUE);
          $this->load->view('master', $data);
          echo "<pre>";
          print_r($result);
          exit();
          } */ elseif ($report_type == 'payment') {

            $data = array();
            $data['result'] = $this->stu_model->read_subject();
            $data['check_result_by_id'] = $this->stu_model->check_result_by_id($stu_id, $stu_sub);
            $data['check_result'] = $this->stu_model->check_report_info('tbl_stu_subject', $stu_sub, $stu_id);
            $data['maincontent'] = $this->load->view('form/report_form5', $data, TRUE);
            $this->load->view('master', $data);
            /* echo "<pre>";
              print_r($result);
              exit(); */
        } elseif ($report_type == 'others') {
            $result = $this->stu_model->check_report_info('', $stu_sub, $stu_id);
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_name');

        /* $sdata = array();
          $sdata['msg'] = "You're successfully logout";
          $this->session->set_userdata($sdata); */
        $this->session->set_flashdata('msg', 'Successfully Logout');
        redirect('user_login');
    }

}
