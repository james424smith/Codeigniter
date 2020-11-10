<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Login extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }   
  
  function login_validation()  
  {  

    //var_dump($this->input->post('remember')); die();

    $this->load->library('form_validation');  
    $this->form_validation->set_rules('email', 'email', 'required');  
    $this->form_validation->set_rules('password', 'password', 'required'); 
 
    if($this->form_validation->run()== FALSE)  
    { 

      //echo "1";die();
      $this->load->view('Front/login');

    }  
    else  
    { 

      $email = $this->input->post('email');  
      $password = md5($this->input->post('password'));

      $this->load->model('Front/RegisterModel');  
      if($this->RegisterModel->can_login($email, $password))  
      {  
        //echo "Login"; die();
        $session_data = array(  
          'email' => $email  
        );  
        $this->session->set_userdata('users', $session_data);

        if ($this->input->post('remember') == 'on') {
            $user_data = array(
                'email' => $email,
                'password' => $this->input->post('password')
            );
            $this->session->set_userdata($user_data);
         } 
         else
         {
            $user_data = array(
              'email' => "",
              'password' => ""
            );
            $this->session->set_userdata($user_data);
         }
        redirect(base_url() . 'Front/home');  
      }  
      else  
      {
        //echo "3";die();  
        $this->session->set_flashdata('error', "Invalid username and password.");  
        redirect(base_url() . 'Front/home/login');  
      }  

    }  
  }   

  function logout()  
  {  
    // print_r($this->session->userdata('user'));exit;
    $this->session->unset_userdata('id');  
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('password'); 
    redirect(base_url() . 'Front/login');  

  }  
   
   public function reset(){
        if($this->input->post()){
            $email = $this->input->post('email');
            $password = rand(10000,100000000);
            $this->load->model('Front/RegisterModel');
            $admin_info = $this->RegisterModel->checkEmailAvailable($email);
            //var_dump()
            if($admin_info['status']){
                $this->load->config('email');
                $this->load->library('email');
                $from = $this->config->item('smtp_user');
                $to = $email;

                $subject   =  'Nouveau Mot de Passe';
                $message   =  '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
                $message  .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';
                $message  .=  '<div class="container">';
                $message  .=  '<div class="container">';
                $message  .=  '<div class="jumbotron text-center">';
                $message  .=  '<h1>Hi, '.$admin_info['first_name'].'</h1>';
//                $message  .=  '<p class="content">You Recently Requested to reset password for your doctor admin account </br> we reset your password and your new password for username '.$admin_info['username'].' is '.$password;
                $message  .=  '<p class="content">Bonjour,<br>
                              Vous venez de faire une demande de réinitialisation de votre Mot de Passe de votre compte « Heelp ».<br>
                              Votre nouveau Mot de Passe est : ' . $password . '<br>
                              Nous vous conseillons de le modifier dès votre prochaine connexion.<br>
                              Cordialement,<br>
                              Service Client Heelp.</p>';

                $message .= '</div>';
                $message .= '</div>';
                
                // $message = 'For your Username '.$admin_info['data']['username'].' Your New Password is '.$password;        
                $this->email->set_header('Content-type', 'text/html');
                $this->email->set_newline("\r\n");
                $this->email->from($from);
                $this->email->to($to);
                $this->email->subject($subject);
                $this->email->message($message);

                //var_dump($to);die();
                if ($this->email->send()) 
                { 
                    $this->RegisterModel->changePassword($password,$email);
                    $this->session->set_flashdata('result_success_forget_password','Votre mot de passe a été envoyé par e-mail.');
                    redirect('Front/Login/reset');
                } 
                else 
                {
                    //print_r($this->email->print_debugger());exit;
                    $this->session->set_flashdata('result_forget_password', "Incapable d'envoyer des emails.");
                    redirect('Front/Login/reset');
                }
              }   
                else {
                    $this->session->set_flashdata('result_forget_password', 'Le courriel ne vous appartient pas.');
                    redirect('Front/Login/reset');
                }
        }
                else {
                $this->load->view('Front/reset');
                }
    }
     public function facebook_login(){ 
        $userData = array(); 
         $this->load->library('facebook');  
         
        // Authenticate user with facebook 
          if($this->facebook->is_authenticated()){ 
            // Get user info from facebook 
            $fbUser = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,link,gender,picture'); 
 
            // Preparing data for database insertion 
            $userData['oauth_provider'] = 'facebook'; 
            $userData['oauth_uid']    = !empty($fbUser['id']) ? $fbUser['id']: ''; 
            $userData['first_name']    = !empty($fbUser['first_name'])?$fbUser['first_name']:''; 
            $userData['last_name']    = !empty($fbUser['last_name'])?$fbUser['last_name']:''; 
            $userData['email']        = !empty($fbUser['email'])?$fbUser['email']:''; 
            $userData['gender']        = !empty($fbUser['gender'])?$fbUser['gender']:''; 
            $userData['picture_url']    = !empty($fbUser['picture']['data']['url'])?$fbUser['picture']['data']['url']:''; 
            $userData['link']        = !empty($fbUser['link'])?$fbUser['link']:'https://www.facebook.com/'; 
             
            // Insert or update user data to the database 
            $userID = $this->user->checkUser($userData); 
             
            // Check user data insert or update status 
            if(!empty($userID)){ 
                $data['userData'] = $userData; 
                // Store the user profile info into session 
                $this->session->set_userdata('userData', $userData); 
            }else{ 
               $data['userData'] = array(); 
            } 
             
            // Facebook logout URL 
            $data['logoutURL'] = $this->facebook->logout_url(); 
        }else{ 
            // Facebook authentication url 
            $data['authURL'] =  $this->facebook->login_url(); 
        } 
        // print_r($data['authURL']);die();
        // Load login/profile view 
        $this->load->view('Front/Home/login', $data); 
    } 
 
    // public function logout() { 
    //     // Remove local Facebook session 
    //     $this->facebook->destroy_session(); 
    //     // Remove user data from session 
    //     $this->session->unset_userdata('userData'); 
    //     // Redirect to login page 
    //     redirect('Front/Home'); 
    // } 

}  
