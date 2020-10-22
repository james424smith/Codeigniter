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
        return $query->result_array();

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
        return $query->result_array();

    }

    // edit services list
    public function edit_section2($id,$project_data){
        $this->db->set($project_data);
        $this->db->where('id', $id);
        $this->db->update('home_content');
        return true;
     
    }
    //================================ section 4 ============================================================
    public function display_ourteam_search($keyword){
        //print_r($keyword);die();
        $this->db->select('*');
        $this->db->from('users');
        $this->db->like('skills', $keyword);
        $this->db->where('role !=', 'admin');
        
        $query = $this->db->get()->result_array();   
        return $query ;
   }
    public function display_ourteam(){
       // print_r($keyword);die();
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('role !=', 'admin');
        //$this->db->like('member_name', $keyword);
        //$this->db->limit(4);
        $query = $this->db->get()->result_array();   
        return $query ;
   }
   
}
?>