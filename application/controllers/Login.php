<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Login extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

  }    

  public function index()
  {
    if(!empty($this->session->userdata('admin_id'))){
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
      //DDDvar_dump("pp");die();
      $this->load->view('login');
    }  
    else  
    { 
      $username = $this->input->post('username');  
      $password = md5($this->input->post('password'));  

      $this->load->model('Login_model');  
      if($this->Login_model->can_login($username, $password))  
      {  
        //var_dump("dd");die();
        $session_data = array(  
          'username' => $username  
          );  
        $this->session->set_userdata('user', $session_data);
        //var_dump($this->session->userdata('use));die();
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
        $this->session->set_flashdata('error', "Invalid username and password.");  
        redirect(base_url() . 'login');  
      }  

    }  
  }  


  function enter(){  
    $this->load->view('common/sidebar');
    //var_dump($this->session->userdata('username'));die();
      redirect(base_url() . 'login');  
  
  }  


  function logout()  
  {  
    // print_r($this->session->userdata('user'));exit;
    $this->session->unset_userdata('admin_id');  
    redirect(base_url() . 'login');  
  }  
}  
