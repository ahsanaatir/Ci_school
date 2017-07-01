<?php
class Students extends CI_Controller{

    public function index(){
        if(!$this->session->userdata('logged_in')){
            redirect('users/login');
        }
        $data['title'] = 'Student';
        $std_data['students'] = $this->school_model->get_all();
        $this->load->view('templates/header',$data);
        $this->load->view('student/search', $std_data);
        $this->load->view('templates/footer');
    }


    public function add_student(){
        $data_header['title'] = 'Create New Student ';
        //get all Session
        $data['session'] = $this->school_model->get_all_sessions();
        $data['class'] = $this->school_model->get_all_class();
        $data['section'] = $this->school_model->get_all_section();


        /*$this->form_validation->set_rules('admission_fee', 'Admission Fee', 'required');
        $this->form_validation->set_rules('tuition_fee', 'Tuition Fee', 'required');

        $this->form_validation->set_rules('student_name', 'Student Name', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('father_cnic', 'Father CNIC', 'required');
        $this->form_validation->set_rules('contact_no', 'Contact No', 'required');
        $this->form_validation->set_rules('prev_school', 'Previous School', 'required');
        $this->form_validation->set_rules('doa', 'Date of Admission', 'required');
        $this->form_validation->set_rules('father_name', 'Father Name', 'required');
        $this->form_validation->set_rules('dob', 'date of Birth', 'required');
        $this->form_validation->set_rules('religion', 'Religion', 'required');
        $this->form_validation->set_rules('b_form', 'Bay Form', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('roll_no', 'Roll Number', 'required');
        $this->form_validation->set_rules('registration_no', 'Registration Number', 'required');
        */
        $this->form_validation->set_rules('student_name', 'Student Name', 'required');
        if($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header',$data_header);
            $this->load->view('student/add', $data);
            $this->load->view('templates/footer');
        }
        else
        {
            // Upload Image
            $config['upload_path'] = './images/students';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload()){
                $errors = array('error' => $this->upload->display_errors());
                $post_image = 'noimage.jpg';
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = $_FILES['std_photo']['name'];
            }
            $this->student_model->save();
            // Set message
            $this->session->set_flashdata('student_created', 'Student record has been created');
            redirect('students/search');
        }




    }


    public function attendance(){
        $data_header['title'] = 'Create New Student ';
        //get all Session
        $data['session'] = $this->school_model->get_all_sessions();
        $data['class'] = $this->school_model->get_all_class();
        $data['section'] = $this->school_model->get_all_section();

        $this->load->view('templates/header',$data_header);
        $this->load->view('student/attendance', $data);
        $this->load->view('templates/footer');
    }

    public function search(){
        $data['title'] = 'Student';
        $data['session'] = $this->school_model->get_all_sessions();
        $data['class'] = $this->school_model->get_all_class();
        $data['section'] = $this->school_model->get_all_section();
        $data['students'] = $this->student_model->get_all();
        $this->load->view('templates/header',$data);
        $this->load->view('student/search', $data);
        $this->load->view('templates/footer');
    }
}
