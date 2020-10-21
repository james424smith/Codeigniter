<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model{
    function __construct() {
        $this->tableName = 'users';
        $this->primaryKey = 'id';
        $this->load->database();
        $this->load->library('session');
    }
    
    public function insert($data = array()){
        if(!array_key_exists("created",$data)){
            $data['created'] = date("Y-m-d H:i:s");
        }
        if(!array_key_exists("modified",$data)){
            $data['modified'] = date("Y-m-d H:i:s");
        }
        $insert = $this->db->insert($this->tableName,$data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;    
        }
    }

    public function getAllUsers() {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('role', 'client');
        $query = $this->db->get();
        //var_dump($query->result_array());die();
        return $query->result_array();
    }

    public function getSelfUser() {
        $user_id = $this->session->userdata['id'];
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $user_id);
        $query = $this->db->get();
        //var_dump($query->result_array());die();
        return $query->result_array();
    }
}