<?php  
//defined('BASEPATH') OR exit('No direct script access allowed');  
class Register extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->model('Front/RegisterModel');
  }   
  
  function register()  
  { 
    
    if( $this->input->post('term') != "on")
    {
        $this->session->set_flashdata('terms_error', 'Veuillez accepter les conditions.');
        redirect(base_url('Front/Home/signUp'));
    }
    //redirect(base_url('Front/Home/signUp'));    
    $email = $this->input->post('email');  
    $username = $this->input->post('username');  
    $role = $this->input->post('role');  
    $password = md5($this->input->post('password'));  
    $cpassword = md5($this->input->post('cpassword')); 
    
    if($password == $cpassword) {
      $data = array (
        'username' => $username,
        'email' => $email,
        'role' => $role,
        'password'=> $password,
        'picture_url' => 'default.png'
      );
      
      if($this->RegisterModel->checkUserForRegistor($data))
      {
        $this->session->set_flashdata('error', "L'utilisateur existe déjà.");
        redirect(base_url('Front/Home/signUp'));
      }
      
      $this->RegisterModel->user_data($data);
      $this->session->set_flashdata('success', 'Succès');
      redirect(base_url('Front/Home'));
   }

   else {
     $this->session->set_flashdata('warning', 'Mot de passe incorrect.');
     redirect(base_url('Front/Home/signUp'));
  
   }   
  } 
  function editprofile(){
     
      $first_name = $this->input->post('first_name');  
      $last_name = $this->input->post('last_name');  
      $username = $this->input->post('username'); 
      $status = $this->input->post('status');  
      $email = $this->input->post('email');  
      $dob = $this->input->post('dob'); 
      $country = $this->input->post('country');  
      $presentation = $this->input->post('presentation');  
      $level_of_study = $this->input->post('level_of_study'); 
      $Field_of_study = $this->input->post('Field_of_study');  
      $university = $this->input->post('university');  
      $intrested_category = $this->input->post('intrested_category');  
      $skills = $this->input->post('skills');
       $data=array(
        'first_name'=>$first_name,
        'last_name'=>$last_name,
        'username'=>$username,
        'status'=>$status,
        'email'=>$email,
        'dob'=>$dob,
        'country'=>$country,
        'presentation'=>$presentation,
        'level_of_study'=>$level_of_study,
        'Field_of_study'=>$Field_of_study,
        'university'=>$university,
        'intrested_category'=>$intrested_category,
        'skills'=>$skills
       );
      $id = $this->input->post('id');  
     // print_r($id);die();
    $this->RegisterModel->user_update($data,$id);
    redirect(base_url('Front/Home/my_profile'));
  }


  function userprofile() {

    $id = $this->input->post('id');
    //$picture_url = $this->input->post('picture_url');
    
     if(!empty($_FILES['picture_url']['name'])){
          $config['upload_path'] = './uploads/profiles';
          $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
          $config['max_size'] = 6000000;
          $config['max_width'] = 45000;
          $config['max_height'] = 45000;

       // print_r($_FILES['picture_url']['name']);die();

          $this->load->library('upload', $config);
  
          if (!$this->upload->do_upload('picture_url')) 
          {
             $error = array('error' => $this->upload->display_errors());
             $image_name = '';     
          } 
          else 
          {
            $img_data = $this->upload->data()['file_name'];
            $image_name = $img_data;
          }
        }
        if($image_name){
          $project_data = array(            
              'picture_url' => $image_name            
          );          
        }
        else{     
            echo "svdgdg";    
        }

        $this->RegisterModel->edit($project_data,$id);

         redirect('Front/Home/my_profile');

    }

  }
  ?> 
