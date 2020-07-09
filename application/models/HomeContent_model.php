<?php
class HomeContent_model extends CI_Model {
  
    public function __construct(){
        $this->load->database();
    }
     
    public function auth_check($services_data){
        $query = $this->db->get_where('home_content', $services_data);
        if($query){   
         return $query->row();
        }
        return false;
    }    

    // Display services
    function display_services(){
        $query = $this->db->query("select * from home_content");
        return $query->result();

    }

    // edit services list
    public function edit($id,$project_data){
        $this->db->set($project_data);
        $this->db->where('id', $id);
        $this->db->update('home_content');
        return true;
    }
    // =============================================section 2 =============================================

     // Display services
    function display_section2(){
        $query = $this->db->query("select * from home_content");
        return $query->result();

    }

    // edit services list
    public function edit_section2($id,$project_data){
        $this->db->set($project_data);
        $this->db->where('id', $id);
        $this->db->update('home_content');
        return true;
     
    }
       // ======================================section 3 demand posts ================================================
     public function display_demand(){
    $query = $this->db->query("select * from posts");
        return $query->result();
   }
   public function edit_demand($id,$demand_data){
        $this->db->set($demand_data);
        $this->db->where('id', $id);
        $this->db->update('posts');        
        return true;
     
    }
    public function add_demand($demand_data){   
   // print_r($member_data);die();     
        $query=$this->db->insert('posts',$demand_data);
        //print_r($query->result());die();
        return true;     
    }
   public function deleteDemandById($id){
      $this->db->where('id',$id);
    $this->db->delete('posts');
    return true;

    }

   // ======================================section 4 our team================================================
   public function display_ourteam(){
    $query = $this->db->query("select * from home_ourteam");
        return $query->result();
   }
   public function add_member($member_data){   
   // print_r($member_data);die();     
        $query=$this->db->insert('home_ourteam',$member_data);

        //print_r($query->result());die();
        return true;
     
    }
     public function edit_team($id,$member_data){
        $this->db->set($member_data);
        $this->db->where('team_id', $id);
        $this->db->update('home_ourteam');        
        return true;
     
    }
    public function deleteMemberById($id){
      $this->db->where('team_id',$id);
    $this->db->delete('home_ourteam');
    return true;

    }
}
?>