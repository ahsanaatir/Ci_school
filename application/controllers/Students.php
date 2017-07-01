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


    public function add(){
        $data_header['title'] = 'add Student ';
        //get all Session
        $data['session'] = $this->school_model->get_all_sessions();
        $data['class'] = $this->school_model->get_all_class();
        $data['section'] = $this->school_model->get_all_section();

        $this->load->view('templates/header',$data_header);
        $this->load->view('student/add', $data);
        $this->load->view('templates/footer');
    }

    public function add_student()
    {
        //var_dump($_POST);exit;
        // Check login
//        if(!$this->session->userdata('logged_in')){
//            redirect('users/login');
//        }
        //array(20) { ["session_id"]=> string(1) "1" ["class_id"]=> string(1) "1" ["section_id"]=> string(1) "1"
        // ["rool_no"]=> string(2) "12" ["registration_no"]=> string(5) "09-89" ["doa"]=> string(10) "2017-02-11"
        // ["admission_fee"]=> string(4) "1000" ["tuition_fee"]=> string(4) "2000" ["total_fee"]=> string(4) "3000"
        // ["std_photo"]=> string(15) "08122012295.jpg" ["student_name"]=> string(13) "Musfira Aatir" ["gender"]=> string(6) "Female"
        // ["father_cnic"]=> string(13) "3660237111955" ["contact_no"]=> string(12) "0300-0011556" ["prev_school"]=> string(5) "Hawks"
        // ["father_name"]=> string(12) "Irshad Ahmad" ["dob"]=> string(10) "2000-03-12"
        // ["b_form"]=> string(12) "366029099999" ["religion"]=> string(6) "Muslim" ["address"]=> string(6) "Multan" }

        $this->form_validation->set_rules('admission_fee', 'Admission Fee', 'required');
        $this->form_validation->set_rules('tuition_fee', 'Tuition Fee', 'required');
        $this->form_validation->set_rules('total_fee', 'Total Fee', 'required');
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

        if($this->form_validation->run() === TRUE){
            $this->student_model->add_student();
        // Set message
            $this->session->set_flashdata('student_created', 'Student record has been created');
        }

        redirect('students/search');

    }


    public function attendance(){
        $data_header['title'] = 'add Student ';
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
