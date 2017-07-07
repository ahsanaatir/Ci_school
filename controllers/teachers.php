<?php
class Teachers extends CI_Controller{

    public function index(){

        $data['title'] = 'Create New Teacher';
        $str['msg'] = "i m ahsan raza aatir";
        //$std_data['students'] = $this->school_model->get_all();
        $this->load->view('templates/header',$data);
        $this->load->view('teacher/add',$str);
        $this->load->view('templates/footer');

    }
    public function add(){

        $data['title'] = 'Create New Teacher';
        //$std_data['students'] = $this->school_model->get_all();


        $this->form_validation->set_rules('tname', 'Teacher Name', 'required');

        if($this->form_validation->run() === FALSE)
        {
        $this->load->view('templates/header',$data);
        $this->load->view('teacher/add');
        $this->load->view('templates/footer');
        }
        else{
           //database model  
            $this->teacher_model->save();
        }
    }

}
?>