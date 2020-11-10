<?php
class ContactContent_model extends CI_Model {
  
    public function __construct(){
        $this->load->database();
    }
     
    public function auth_check($services_data){
        $query = $this->db->get_where('contact_content', $services_data);
        if($query){   
         return $query->row();
        }
        return false;
    }    

    // Display services
    function display_contact_section1(){
        $query = $this->db->query("select * from contact");
        return $query->result();

    }
    
    function display_contact_section2(){
        $query = $this->db->query("select * from contact_content");
        return $query->result();

    }

    function display_contact_section3(){
        $query = $this->db->query("select * from contact_content");
        return $query->result();

    }

    function display_contact_section4(){
        $query = $this->db->query("select * from contact_content");
        return $query->result();

    }


    // edit services list
    public function edit($id,$project_data){
        $this->db->set($project_data);
        $this->db->where('id', $id);
        $this->db->update('contact_content');
        return true;
     
    } 

     public function edit_address($id,$project_data){
        $this->db->set($project_data);
        $this->db->where('id', $id);
        $this->db->update('contact_content');
        return true;
     
    }

    public function edit_callus($id,$project_data){
        $this->db->set($project_data);
        $this->db->where('id', $id);
        $this->db->update('contact_content');
        return true;
     
    }

    public function edit_email($id,$project_data){
        $this->db->set($project_data);
        $this->db->where('id', $id);
        $this->db->update('contact_content');
        return true;
     
    }   
   
}
?>