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
    // get all class details
    public function get_all_class(){
        $query = $this->db->get('class');
        return $query->result_array();
    }
    // get all scetion details
    public function get_all_section(){
        $query = $this->db->get('section');
        return $query->result_array();
    }
    // get all  details
    public function get_classDetails_by_session_id($id){
        $query = $this->db->get_where('class', array('session_id' => $id));
        return $query->result_array();
    }
    // get all get_sectionDetails_by_class_id
    public function get_sectionDetails_by_class_id($id){
        $query = $this->db->get_where('section', array('class_id' => $id));
        return $query->result_array();
    }
    // get all  details
    public function get_class_detail($id){
        $query = $this->db->select('admission_fee , tuition_fee');
        $query = $this->db->get_where('class', array('id' => $id));
        return $query->result();
    }
}


?>