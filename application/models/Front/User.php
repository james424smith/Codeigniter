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

    public function getUserByID($id) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);
        $query = $this->db->get();
        //var_dump($query->result_array());die();
        return $query->row();
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
        //var_dump($user_id);die();
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $user_id);
        $query = $this->db->get();
        //var_dump($query->result_array());die();
        return $query->result_array();
    }

    public function saveProfileRatingValueById($id)
    {
        $this->db->select('*');
        $this->db->from('user_review');
        $this->db->where('to_user_id', $id);
        $query = $this->db->get();
        $avg = $query->result();

        $count = 0;
        $total = 0;
        for($j = 0; $j < count($avg); $j++)
        {
            $total += $avg[$j]->rating;
            $count++;
        }
        if($count != 0)
        {
            $av = $total/$count;
            $user_detail = number_format($av, 2, '.', '');
        }
        else
        {
            $user_detail = 0;
        }
        
        
        $update_data = array('Profile_Rate' => $user_detail);
        $this->db->where('id', $id);
        $this->db->update('users', $update_data);
    }
    public function getRatingClassName($id) {
        $this->db->select('*');
        $this->db->from('user_review');
        $this->db->where('to_user_id', $id);
        $query = $this->db->get();
        $avg = $query->result();

        $count = 0;
        $total = 0;
        for($j = 0; $j < count($avg); $j++)
        {
            $total += $avg[$j]->rating;
            $count++;
        }
        if($count != 0)
        {
            $av = $total/$count;
            $user_detail = number_format($av, 2, '.', '');
        }
        else
        {
            $user_detail = 0;
        }
        if($user_detail == 0)
        {
            $class_star = "stars-0";
        }
        elseif($user_detail == 0.50)
        {
            $class_star = "stars-10";
        }
        elseif($user_detail == 1.00)
        {
            $class_star = "stars-20";
        }
        elseif($user_detail == 1.50)
        {
            $class_star = "stars-30";
        }
        elseif($user_detail == 2.00)
        {
            $class_star = "stars-40";
        }
        elseif($user_detail == 2.50)
        {
            $class_star = "stars-50";
        }
        elseif($user_detail == 3.00)
        {
            $class_star = "stars-60";
        }
        elseif($user_detail == 3.50)
        {
            $class_star = "stars-70";
        }
        elseif($user_detail == 4.00)
        {
            $class_star = "stars-80";
        }
        elseif($user_detail == 4.50)
        {
            $class_star = "stars-90";
        }
        elseif($user_detail == 5.00)
        {
            $class_star = "stars-100";
        }
        
        return $class_star;
    }

}