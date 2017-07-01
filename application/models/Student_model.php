<?php

class Student_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }


    public function get_all()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('students');
        return $query->result_array();
    }

//    public function save_student_personal_info()
//    {
//
//    }
//
//    public function save_student_family_info()
//    {
//
//    }
//
//    public function save_student_admission_info()
//    {
//
//    }
//
//    public function save_student_fee_info()
//    {
//
//    }

    public function save()
    {
        var_dump($_POST);
        $personal_info_data = array(
            'full_name' => $this->input->post('student_name'),
            'bay_form' => $this->input->post('b_form'),
            'gender' => $this->input->post('gender'),
            'date_of_birth' => $this->input->post('dob'),
            'slug' => '',
            'prev_school' => $this->input->post(''),
            'prev_class_name' => $this->input->post(''),
            'user_id' => 1
        );
        $this->db->insert('student_personal_info', $personal_info_data);
        $std_id= $this->db->insert_id();
        $family_info_data = array(
            'student_id' => $std_id,
            'father_name' => $this->input->post('father_name'),
            'father_cnic' => $this->input->post('father_cnic'),
            'father_profession' => $this->input->post('father_profession'),
            'address' => $this->input->post('address'),
            'contact_no' => $this->input->post('contact_no'),
            'mother_name' => $this->input->post('mother_name'),
            'family_income' => $this->input->post('family_income'),
            'religion' => $this->input->post('religion'),
            'cast' => $this->input->post('cast')
        );
        $this->db->insert('student_family_info', $family_info_data);
        $admission_info_data = array(
            'student_id' => $std_id,
            'school_id' => 1,
            'session_id' => $this->input->post('session_id'),
            'class_id' => $this->input->post('class_id'),
            'section_id' => $this->input->post('section_id'),
            'roll_no' => $this->input->post('roll_no'),
            'registration_no' => $this->input->post('registration_no'),
            'date_of_admission' => $this->input->post('date_of_admission')
        );
        $this->db->insert('student_admission_info', $admission_info_data);
        $fee_info_data = array(
            'student_id' => $std_id,
            'admission_fee' => $this->input->post('admission_fee'),
            'tuition_fee' => $this->input->post('tuition_fee'),
            'prev_dues' => $this->input->post('prev_dues')
        );
        $this->db->insert('student_fee_info', $fee_info_data);


        return 1;
    }
}
