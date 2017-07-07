<?php

class teacher_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }


    public function save()
    {
        echo $this->input->post('tname');

    }
}
?>