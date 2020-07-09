<?php
class About_model extends CI_Model {
  
    public function __construct(){
        $this->load->database();
    }
    public function about_data(){
        $query = $this->db->query("select * from about_content");       
         return $query->result_array();
        
    }  
    public function about_team(){
        $query = $this->db->query("select * from about_team");       
         return $query->result_array();
        
    }    

}