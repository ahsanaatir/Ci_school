<?php
class schools extends CI_Controller{

    public function index(){
        if(!$this->session->userdata('logged_in')){
            //redirect('users/login');
        }
    }
    

}

?>