<?php
class Service_model extends CI_Model {
  
    public function __construct(){
        $this->load->database();
    }
     
    public function auth_check($services_data){
        $query = $this->db->get_where('services', $services_data);
        if($query){   
         return $query->row();
        }
        return false;
    }
    public function insert_services($services_data){
        $insert = $this->db->insert('publishDemand', $services_data);
        if ($insert) {
           return $this->db->insert_id();
        
        } else {
            return false;
        }
    }

    // Display services
    function display_user(){
        $query = $this->db->query("select * from publishDemand");
        return $query->result();

    }

    // edit services list
    public function edit($tb,$where,$set){
        return $this->db->set($set)->where($where)->update($tb);
     
    }
    //delete services list by id
    public function did_delete_row($id){
        $this->db->where('id', $id);
        $this->db->delete('publishDemand');
    }
}
?>