<?php
class AboutContent_model extends CI_Model {
  
    public function __construct(){
        $this->load->database();
    }
     
    public function auth_check($services_data){
        $query = $this->db->get_where('about_content', $services_data);
        if($query){   
         return $query->row();
        }
        return false;
    }
    public function insert_services($services_data){
        $insert = $this->db->insert('about_content', $services_data);
        if ($insert) {
           return $this->db->insert_id();
        
        } else {
            return false;
        }
    }

    // Display services
    function display_about_section1(){
        $query = $this->db->query("select * from about_content");
        return $query->result();

    }

    // edit services list
    public function edit($id,$project_data){
        $this->db->set($project_data);
        $this->db->where('id', $id);
        $this->db->update('about_content');
        return true;
     
    }
    //delete services list by id
   // ================================= section second ====================================================
    public function display_ourteam(){
    $query = $this->db->query("select * from about_team");
        return $query->result();
   }
   public function add_member($member_data){   
   // print_r($member_data);die();     
        $query=$this->db->insert('about_team',$member_data);

        //print_r($query->result());die();
        return true;
     
    }
     public function edit_team($id,$member_data){
        $this->db->set($member_data);
        $this->db->where('id', $id);
        $this->db->update('about_team');        
        return true;
     
    }
    public function deleteMemberById($id){
      $this->db->where('id',$id);
    $this->db->delete('about_team');
    return true;

    }
}
?>