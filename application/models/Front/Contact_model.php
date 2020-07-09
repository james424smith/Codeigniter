<?php
class Contact_model extends CI_Model {
  
    public function __construct(){
        $this->load->database();
    }
     public function display_ourteam(){
    $query = $this->db->query("select * from contact_content");
   // print_r($query->result_array());die();
        return $query->result_array();
   }
   
}
?>