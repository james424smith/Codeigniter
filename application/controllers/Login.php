<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Login extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

  }    

  public function index()
  {
    if(!empty($this->session->userdata('id'))){
      // redirect('home');
      redirect('home');
       
    }
    else {
      $this->load->view('login');
    }       

  }

  function login_validation()  
  {  
    $this->load->library('form_validation');  
    $this->form_validation->set_rules('username', 'Username', 'required');  
    $this->form_validation->set_rules('password', 'Password', 'required');  
    if($this->form_validation->run()== FALSE)  
    { 
      $this->load->view('login');
    }  
    else  
    { 

      $username = $this->input->post('username');  
      $password = md5($this->input->post('password'));  

      $this->load->model('Login_model');  
      if($this->Login_model->can_login($username, $password))  
      {  
        $session_data = array(  
          'username' => $username  
          );  
        $this->session->set_userdata('user', $session_data);
          
        redirect(base_url() . 'login/enter');  

        if($this->input->post['remember'] == 1)
        {
          $cookie = array(
            'name'   => 'remember_me_token',
            'value'  => 'Random string',
            'expire' => '1209600',  // Two weeks
            'domain' => base_url(),
            'path'   => 'Front/home'
        );
        
        set_cookie($cookie);
        }
      }  
      else  
      {  
        $this->session->set_flashdata('error', "Nom d'utilisateur et mot de passe invalides");  
        redirect(base_url() . 'login');  
      }  

    }  
  }  


  function enter(){  
    $this->load->view('common/sidebar');


    if($this->session->userdata('username') != '')  
    {  
      ?><div class="dashboard" margin-top: 100px; align="center"><?php 
      echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  
      echo '<label><a href="'.base_url().'login/logout">Se déconnecter</a></label>';  
    }  
    else  
    {  
      redirect(base_url() . 'login');  
    }  
    ?> </div>
    <?php
  }  


  function logout()  
  {  
    // print_r($this->session->userdata('user'));exit;
    $this->session->unset_userdata('id');  
    redirect(base_url() . 'login');  
  }  
}  
