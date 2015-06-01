<?php

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $data = array();
        $data['maincontent'] = $this->load->view('welcome_message', '', TRUE);
        $this->load->view('master', $data);
    }

    public function user_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('user_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function teacher_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('teacher_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function level_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('level_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function class_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('class_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function section_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('section_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function batch_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('batch_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function subject_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('subject_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function admission_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('admission_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function stu_subject_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('stu_subject_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function collection_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('collection_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function payment_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('payment_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function attendance_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('attendance_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function result_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('result_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function report_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('report_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function search_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('search_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function utility_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('utility_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function rm_card_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('rm_card_form', '', TRUE);
        $this->load->view('master', $data);
    }

    public function enrollment_form() {
        $data = array();
        $data['maincontent'] = $this->load->view('enrollment_form', '', TRUE);
        $this->load->view('master', $data);
    }

    /* ===================================================================================== */

    public function user_form_data() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        if (!empty($_POST['user_name'])) {
            /* echo "<pre>";
              print_r($_POST);
              exit(); */
            /* $this->form_validation->set_rules('user_name', 'User Name', 'trim|required');
              $this->form_validation->set_rules('user_password', 'User Password', 'trim|required|min_length[5]|max_length[12]|xss_clean|md5');
              $this->form_validation->set_rules('user_confirm_password', 'User Confirm Password', 'trim|required||min[5]matches[user_password]');
              $this->form_validation->set_rules('user_type', 'User Type', 'trim|required'); */
            $this->form_validation->set_rules('user_name', 'User Name', 'required');
            $this->form_validation->set_rules('user_password', 'Password', 'trim|required|matches[user_confirm_password]|min_length[5]|max_length[12]|xss_clean|md5');
            $this->form_validation->set_rules('user_confirm_password', 'Password Confirmation', 'trim|required|xss_clean|md5');

            if ($this->form_validation->run() == FALSE) {
                redirect('welcome/user_form');
            } else {
                $data = array();
                $data['user_name'] = $this->input->post('user_name');
                $data['user_password'] = $this->input->post('user_password');
                $data['user_confirm_password'] = $this->input->post('user_confirm_password');
                $data['user_type'] = $this->input->post('user_type');


                $result = $this->common_model->insert_data('tbl_user', $data);

                if ($result) {
                    $this->session->set_flashdata('message', 'Successfully Data Inserted');
                    redirect('welcome/user_form');
                } else {
                    $this->session->set_flashdata('message', 'Data Inserted Failed');
                    redirect('welcome/user_form');
                }
            }
        } else {
            redirect('welcome/user_form');
        }

        /* $data = array();
          $data['user_name'] = $this->input->post('user_name', TRUE);
          $data['user_password'] = $this->input->post(md5('user_password', TRUE));
          $data['user_confirm_password'] = $this->input->post(md5('user_confirm_password', TRUE));
          $data['user_type'] = $this->input->post('user_type', TRUE);


          $result = $this->common_model->insert_data('tbl_user', $data);

          if ($result == TRUE) {
          $this->session->set_flashdata('success_message', 'Registration Successfull');
          redirect('welcome/user_form');
          } else {
          $this->session->set_flashdata('failure_message', 'Registration Failed! Try again');
          redirect('welcome/user_form');
          } */
    }

    public function teacher_form_data() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        if ($_POST) {
            $this->form_validation->set_rules('name', 'Student Name', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                redirect('welcome/admission_form');
            } else {
                $data = array();
                $data['name'] = $this->input->post('name', TRUE);

                $result = $this->common_model->insert_data('tbl_admission', $data);

                if ($result) {
                    $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                    redirect('welcome/retrieve_admission_form_data');
                } else {
                    $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                    redirect('welcome/admission_form');
                }
            }
        } else {
            redirect('welcome/admission_form');
        }
    }

    public function level_form_data() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        if ($_POST) {
            $this->form_validation->set_rules('name', 'Student Name', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                redirect('welcome/admission_form');
            } else {
                $data = array();
                $data['name'] = $this->input->post('name', TRUE);

                $result = $this->common_model->insert_data('tbl_admission', $data);

                if ($result) {
                    $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                    redirect('welcome/retrieve_admission_form_data');
                } else {
                    $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                    redirect('welcome/admission_form');
                }
            }
        } else {
            redirect('welcome/admission_form');
        }
    }

    public function class_form_data() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        if ($_POST) {
            $this->form_validation->set_rules('name', 'Student Name', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                redirect('welcome/admission_form');
            } else {
                $data = array();
                $data['name'] = $this->input->post('name', TRUE);

                $result = $this->common_model->insert_data('tbl_admission', $data);

                if ($result) {
                    $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                    redirect('welcome/retrieve_admission_form_data');
                } else {
                    $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                    redirect('welcome/admission_form');
                }
            }
        } else {
            redirect('welcome/admission_form');
        }
    }

    public function section_form_data() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        if ($_POST) {
            $this->form_validation->set_rules('name', 'Student Name', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                redirect('welcome/admission_form');
            } else {
                $data = array();
                $data['name'] = $this->input->post('name', TRUE);

                $result = $this->common_model->insert_data('tbl_admission', $data);

                if ($result) {
                    $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                    redirect('welcome/retrieve_admission_form_data');
                } else {
                    $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                    redirect('welcome/admission_form');
                }
            }
        } else {
            redirect('welcome/admission_form');
        }
    }

    public function batch_form_data() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        if ($_POST) {
            $this->form_validation->set_rules('name', 'Student Name', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                redirect('welcome/admission_form');
            } else {
                $data = array();
                $data['name'] = $this->input->post('name', TRUE);

                $result = $this->common_model->insert_data('tbl_admission', $data);

                if ($result) {
                    $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                    redirect('welcome/retrieve_admission_form_data');
                } else {
                    $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                    redirect('welcome/admission_form');
                }
            }
        } else {
            redirect('welcome/admission_form');
        }
    }

    public function subject_form_data() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        if ($_POST) {
            $this->form_validation->set_rules('name', 'Student Name', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                redirect('welcome/admission_form');
            } else {
                $data = array();
                $data['name'] = $this->input->post('name', TRUE);

                $result = $this->common_model->insert_data('tbl_admission', $data);

                if ($result) {
                    $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                    redirect('welcome/retrieve_admission_form_data');
                } else {
                    $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                    redirect('welcome/admission_form');
                }
            }
        } else {
            redirect('welcome/admission_form');
        }
    }

    public function admission_form_data() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        if ($_POST) {
            $this->form_validation->set_rules('name', 'Student Name', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                redirect('welcome/admission_form');
            } else {
                $data = array();
                $data['name'] = $this->input->post('name', TRUE);

                $result = $this->common_model->insert_data('tbl_admission', $data);

                if ($result) {
                    $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                    redirect('welcome/retrieve_admission_form_data');
                } else {
                    $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                    redirect('welcome/admission_form');
                }
            }
        } else {
            redirect('welcome/admission_form');
        }
    }

    public function stu_subject_form_data() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        if ($_POST) {
            $this->form_validation->set_rules('name', 'Student Name', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                redirect('welcome/admission_form');
            } else {
                $data = array();
                $data['name'] = $this->input->post('name', TRUE);

                $result = $this->common_model->insert_data('tbl_admission', $data);

                if ($result) {
                    $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                    redirect('welcome/retrieve_admission_form_data');
                } else {
                    $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                    redirect('welcome/admission_form');
                }
            }
        } else {
            redirect('welcome/admission_form');
        }
    }

    public function collection_form_data() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        if ($_POST) {
            $this->form_validation->set_rules('name', 'Student Name', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                redirect('welcome/admission_form');
            } else {
                $data = array();
                $data['name'] = $this->input->post('name', TRUE);

                $result = $this->common_model->insert_data('tbl_admission', $data);

                if ($result) {
                    $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                    redirect('welcome/retrieve_admission_form_data');
                } else {
                    $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                    redirect('welcome/admission_form');
                }
            }
        } else {
            redirect('welcome/admission_form');
        }
    }

    public function payment_form_data() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        if ($_POST) {
            $this->form_validation->set_rules('name', 'Student Name', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                redirect('welcome/admission_form');
            } else {
                $data = array();
                $data['name'] = $this->input->post('name', TRUE);

                $result = $this->common_model->insert_data('tbl_admission', $data);

                if ($result) {
                    $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                    redirect('welcome/retrieve_admission_form_data');
                } else {
                    $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                    redirect('welcome/admission_form');
                }
            }
        } else {
            redirect('welcome/admission_form');
        }
    }

    public function attendance_form_data() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        if ($_POST) {
            $this->form_validation->set_rules('name', 'Student Name', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                redirect('welcome/admission_form');
            } else {
                $data = array();
                $data['name'] = $this->input->post('name', TRUE);

                $result = $this->common_model->insert_data('tbl_admission', $data);

                if ($result) {
                    $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                    redirect('welcome/retrieve_admission_form_data');
                } else {
                    $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                    redirect('welcome/admission_form');
                }
            }
        } else {
            redirect('welcome/admission_form');
        }
    }

    public function result_form_data() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        if ($_POST) {
            $this->form_validation->set_rules('name', 'Student Name', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                redirect('welcome/admission_form');
            } else {
                $data = array();
                $data['name'] = $this->input->post('name', TRUE);

                $result = $this->common_model->insert_data('tbl_admission', $data);

                if ($result) {
                    $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                    redirect('welcome/retrieve_admission_form_data');
                } else {
                    $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                    redirect('welcome/admission_form');
                }
            }
        } else {
            redirect('welcome/admission_form');
        }
    }

    public function report_form_data() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        if ($_POST) {
            $this->form_validation->set_rules('name', 'Student Name', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                redirect('welcome/admission_form');
            } else {
                $data = array();
                $data['name'] = $this->input->post('name', TRUE);

                $result = $this->common_model->insert_data('tbl_admission', $data);

                if ($result) {
                    $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                    redirect('welcome/retrieve_admission_form_data');
                } else {
                    $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                    redirect('welcome/admission_form');
                }
            }
        } else {
            redirect('welcome/admission_form');
        }
    }

    public function search_form_data() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        if ($_POST) {
            $this->form_validation->set_rules('name', 'Student Name', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                redirect('welcome/admission_form');
            } else {
                $data = array();
                $data['name'] = $this->input->post('name', TRUE);

                $result = $this->common_model->insert_data('tbl_admission', $data);

                if ($result) {
                    $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                    redirect('welcome/retrieve_admission_form_data');
                } else {
                    $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                    redirect('welcome/admission_form');
                }
            }
        } else {
            redirect('welcome/admission_form');
        }
    }

    public function utility_form_data() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        if ($_POST) {
            $this->form_validation->set_rules('name', 'Student Name', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                redirect('welcome/admission_form');
            } else {
                $data = array();
                $data['name'] = $this->input->post('name', TRUE);

                $result = $this->common_model->insert_data('tbl_admission', $data);

                if ($result) {
                    $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                    redirect('welcome/retrieve_admission_form_data');
                } else {
                    $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                    redirect('welcome/admission_form');
                }
            }
        } else {
            redirect('welcome/admission_form');
        }
    }

    public function rm_card_form_data() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        if ($_POST) {
            $this->form_validation->set_rules('name', 'Student Name', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                redirect('welcome/admission_form');
            } else {
                $data = array();
                $data['name'] = $this->input->post('name', TRUE);

                $result = $this->common_model->insert_data('tbl_admission', $data);

                if ($result) {
                    $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                    redirect('welcome/retrieve_admission_form_data');
                } else {
                    $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                    redirect('welcome/admission_form');
                }
            }
        } else {
            redirect('welcome/admission_form');
        }
    }

    public function enrollment_form_data() {
        /* echo "<pre>";
          print_r($_POST);
          exit(); */
        if ($_POST) {
            $this->form_validation->set_rules('name', 'Student Name', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                redirect('welcome/admission_form');
            } else {
                $data = array();
                $data['name'] = $this->input->post('name', TRUE);

                $result = $this->common_model->insert_data('tbl_admission', $data);

                if ($result) {
                    $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                    redirect('welcome/retrieve_admission_form_data');
                } else {
                    $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                    redirect('welcome/admission_form');
                }
            }
        } else {
            redirect('welcome/admission_form');
        }
    }

    /* ===================================================================================== */

    public function admission_form_datas() {
        /* echo "<pre>";
          print_r($_POST);
          print_r($_FILES);
          exit(); */
        if ($_POST) {
            $this->form_validation->set_rules('name', 'Student Name', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                redirect('welcome/admission_form');
            } else {
                $data = array();
                $data['name'] = $this->input->post('name', TRUE);


                $config['upload_path'] = 'images/';
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


                $result = $this->common_model->insert_data('tbl_admission', $data);

                if ($result) {
                    $this->session->set_flashdata('success_message', 'Successfully Data Inserted');
                    redirect('welcome/retrieve_admission_form_data');
                } else {
                    $this->session->set_flashdata('failure_message', 'Data Inserted Failed');
                    redirect('welcome/admission_form');
                }
            }
        } else {
            redirect('welcome/admission_form');
        }
    }

    /* ===================================================================================== */

    public function retrieve_admission_form_data() {
        $query = $this->common_model->retrive_data('tbl_admission');
        //$query=$this->common_model->retrive_data('tbl_admission', array('employee_id'=>$emp_id), array('name'=>'desc'));
        //$query=$this->common_model->retrive_data('tbl_admission', array('name' => $name, 'title' => $title, 'status' => $status), array('name'=>'desc'));

        /*
          YOU CAN PASS THREE PARAMETERS DURING CALLING THE retrieve_data() METHOD.

          YOU ALSO CAN PASS DATA AS CONDITION and ORDERBY USING ARRAY e.g.,

          $this->common_model->retrive_data('tbl_name', array('index'=>$value), array('tbl_field'=>'desc'));

          YOU ALSO CAN PASS MULTIPLE DATA AS CONDITION and ORDERBY USING ARRAY e.g.,

          $this->common_model->retrive_data('tbl_name', array('name' => $name, 'title' => $title, 'status' => $status), array('name'=>'desc'));

          $this->common_model->retrive_data('tbl_name', array('employee_id'=>$emp_id), array('name'=>'desc','title'=>'asc'));
         */

        //$data['result'] = $query->result(); 
        /* foreach($data['result'] as $v_result){
          echo $v_result->name;
          } */
        $data['result'] = $query->row();
        /* echo $data['result']->name; */

        /* USE result() OR row() METHOD TO RETRIEVE DATA AS YOUR NEED */

        echo "<pre>";
        print_r($data['result']);
        exit();


        $data['maincontent'] = $this->load->view('form/result_form', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function delete_data($stu_id) {
        $this->common_model->delete_data('tbl_admission', $stu_id);
        //$this->common_model->get_file($stu_id);
        redirect('welcome/retrieve_admission_form_data');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */