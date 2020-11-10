<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Login_model extends CI_Model  
{  
  function can_login($username, $password)  
  {  
    $this->db->where('username', $username);  
    $this->db->where('password', $password);  
    $query = $this->db->get('users');  
    $id = $query->result_array()[0]['id'];
    $this->session->set_userdata('admin_id', $id);
    // SELECT * FROM users WHERE username = '$username' AND password = '$password'  
    if($query->num_rows() > 0)  
    {  
      return true;  
    }  
    else  
    {  
      return false;       
    }  
  }  
}
?>  