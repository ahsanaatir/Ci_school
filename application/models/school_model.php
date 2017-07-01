<?php
class School_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    // get all Session details
    public function get_all_sessions(){
        $query = $this->db->get_where('session', array('school_id' => 1));
        return $query->result_array();
    }
    // get all Session details
    public function get_all_class(){
        $query = $this->db->get('class');
        return $query->result_array();
    }
    // get all Session details
    public function get_all_section(){
        $query = $this->db->get('section');
        return $query->result_array();
    }
}


?>