<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_userlist extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        // $this->load->helper(array('form','url'));
        
    }    
    
    //project list edit post
    public function index()
    {
         $this->load->view('common/header');     
        $this->load->view('common/sidebar');
        $this->load->view('edit_userlist');
        
    }
    
}
?>