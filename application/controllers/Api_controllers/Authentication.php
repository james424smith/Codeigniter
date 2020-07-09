<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Load the Rest Controller library
require(APPPATH.'/libraries/REST_Controller.php');

class Authentication extends REST_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Api_models/LoginApiModel');
        $this->load->model(['ChatModel','OuthModel','UserModel']);

        

         

    }  

        /*login api  */
    public function login_post()
    {

        $email = $this->post('email');
        $password = $this->post('password');
         $auth_token = $this->post('auth_token');
         // echo $email.'  '.$password;exit;

        if(!empty($email) && !empty($password))
        {

            $con = array('email' => $email,'password' => md5($password),'block' => 0);

            $user = $this->LoginApiModel->getRows($auth_token,$con);
            // $otp = rand(1000, 9999);
            // $timeout = time();
            // $array_data = array('email'=>$email,'otp'=>$otp,'timeout'=>$timeout);
            // //echo "<pre>";print_r($array_data);die;
            // $p = (string)$email;
            // $this->session->set_userdata('session_'.$p,$array_data);
            // print_r($user);exit();
            if(!empty($user['data']))
            {
                $this->response([
                'status' => TRUE,
                'message' => $user['message'],
                'loggged_in_as'=>$user['logged_as'],
                
                'data' => $user['data']
                
                ], REST_Controller::HTTP_OK);
            }

            else
            {
                $this->response([
                'status' => FALSE,
                'message' => $user['message'],
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
        else
        {
            // Set the response and exit
            $this->response([
            'status' => FALSE,
            'message' => "Provide email and password",

            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }


            /*user registration api */
    public function User_post() 
    { 
        $username = strip_tags($this->post('username'));
        $password = md5(strip_tags($this->post('password')));
        $role = strip_tags($this->post('role'));
        $status = strip_tags($this->post('status'));
        // $is_email_verify = strip_tags($this->post('is_email_verify'))
        $name = strip_tags($this->post('name'));
        $first_name = strip_tags($this->post('first_name'));
        $last_name = strip_tags($this->post('last_name'));
        $email = strip_tags($this->post('email'));
        $picture_url = strip_tags($this->post('picture_url'));
        $vendor_file = strip_tags($this->post('vendor_file'));
        $about = strip_tags($this->post('about'));
        $address = strip_tags($this->post('address'));
        $pincode = strip_tags($this->post('pincode'));
        $ip_address = strip_tags($this->post('ip_address'));
        $created = strip_tags($this->post('created'));
        $modified = strip_tags($this->post('modified'));
        $facebook_status = strip_tags($this->post('facebook_status'));
        $google_status = strip_tags($this->post('google_status'));
        $auth_token = strip_tags($this->post('auth_token'));
        
        if(!empty($username) && !empty($password) && !empty($role) && !empty($status)  && !empty($name)&& !empty($first_name)&& !empty($last_name) && !empty($email) && !empty($picture_url) && !empty($vendor_file) && !empty($about) && !empty($address) && !empty($pincode) && !empty($ip_address) && !empty($created) &&!empty($modified))
        {

            $userData = array(
                'username' => $username,
                'password' => $password,
                'role' => $role,
                'status' =>$status,               
                'name' =>$name,
                'first_name' =>$first_name,
                'last_name' =>$last_name,
                'email' =>$email,
                'picture_url' =>$picture_url,
                'vendor_file' =>$vendor_file,
                'about' =>$about,
                'address' =>$address,
                'pincode' =>$pincode,
                'ip_address' =>$ip_address,
                'created' =>$created,
                'modified' =>$modified,
                'auth_token' => $auth_token
                );  

            if($this->LoginApiModel->checkEmail($userData['email'],1))
            {
                $this->response([
                    'status' => TRUE,
                    'message' => $this->lang->line('Email is already exist'),
                    ], REST_Controller::HTTP_OK);
            }

            else 
            {
                $insert = $this->LoginApiModel->insert_patient($userData);
                if(!$insert['status'])
                {
                    $this->response([
                        'status' => TRUE,
                        'message' => $this->lang->line('User added successfully'),
                        ], REST_Controller::HTTP_OK);
                }
                else
                {
                    $this->response([
                        'status' => FALSE,
                        'message' => $this->lang->line('Unable to add'),
                        ], REST_Controller::HTTP_BAD_REQUEST);
                }
            } 

        }

        else if(!empty($facebook_status) || !empty($google_status))
        {
            $social_post = array('first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'auth_token'=>$auth_token)  ;
            if(!empty($facebook_status))
            {
                $social_post['facebook_status'] = 1;
            }
            else 
            {
                $social_post['google_status'] = 1;
            }
            if($this->LoginApiModel->SocialLoginRegistration($social_post))
            {
                    $this->response([
                        'status' => TRUE,
                        'message' => $this->lang->line('User added successfully'),
                        ], REST_Controller::HTTP_OK);
            }
        }

        else 
        {
            $this->response([
                'status' => TRUE,
                'message' => $this->lang->line('Provide proper information'),
                ], REST_Controller::HTTP_OK);
        }
    }



    public function SocialLogin_post(){
$status = strip_tags($this->post('status'));
$username = strip_tags($this->post('username'));
$status = strip_tags($this->post('status'));
$email = strip_tags($this->post('email'));
$auth_token = strip_tags($this->post('auth_token'));

        if(!empty($status))
        {
            $social_post = array('username'=>$username,'status'=>$status,'email'=>$email,'auth_token'=>$auth_token)  ;
       
            $id = $this->LoginApiModel->SocialLoginRegistration($social_post);
            if($id)
            {
                $data = $this->LoginApiModel->getSocialData($id);
                    $this->response([
                        'status' => TRUE,
                        'message' => $this->lang->line('User added successfully'),
                        'data' =>$data
                        ], REST_Controller::HTTP_OK);
            }
        }
    }

  /* NEW USER REgister API*/
   public function NewUser_post() 
    { 
        $username = strip_tags($this->post('username'));
        $password = md5(strip_tags($this->post('password')));
        $password_show = strip_tags($this->post('password'));
        $email = strip_tags($this->post('email'));

        $first_name = strip_tags($this->post('first_name'));
        $last_name = strip_tags($this->post('first_name'));
        $auth_token = strip_tags($this->post('auth_token'));

        $facebook_status = strip_tags($this->post('facebook_status'));
        $google_status = strip_tags($this->post('google_status'));

        
        if(!empty($username) && !empty($password) && !empty($email))
        {

            $userData = array(
                'username' => $username,
                'password' => $password,                
                'email' =>$email,
                'password_show'=>$password_show                
                );  

            if($this->LoginApiModel->checkEmail($userData['email'],1))
            {
                $this->response([
                    'status' => FALSE,
                    'message' => $this->lang->line('Email is already exist'),
                    ], REST_Controller::HTTP_OK);
            }

            else 
            {

                $insert = $this->LoginApiModel->insert_newUser($userData);
                if(!$insert['status'])
                {
                    $this->response([
                        'status' => TRUE,
                        'data' => $insert['data'],
                        'message' => $this->lang->line('User added successfully'),
                        ], REST_Controller::HTTP_OK);
                }
                else
                {
                    $this->response([
                        'status' => FALSE,
                        'message' => $this->lang->line('Unable to add'),
                        ], REST_Controller::HTTP_BAD_REQUEST);
                }
            }  


        }

        else if(!empty($facebook_status) || !empty($google_status))
        {
            $social_post = array('first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'auth_token'=>$auth_token)  ;
            if(!empty($facebook_status)){
                $social_post['facebook_status'] = 1;
            }
            else {
                $social_post['google_status'] = 1;
            }
            if($this->LoginApiModel->SocialLoginRegistration($social_post))
            {

                    $this->response([
                        'status' => TRUE,
                        'message' => $this->lang->line('User added successfully'),
                        ], REST_Controller::HTTP_OK);
                
            }
            
        }

        else 
        {
            $this->response([
                'status' => TRUE,
                'message' => $this->lang->line('Provide proper information'),
                ], REST_Controller::HTTP_OK);
        }

    }



            /*  publier une demande chimie*/
    public function publish_post()
    { 
        $title = strip_tags($this->post('title'));
        $description = strip_tags($this->post('description'));
        $budget = strip_tags($this->post('budget'));
        $currency = strip_tags($this->post('currency'));
        $file = strip_tags($this->post('file'));
        $image = strip_tags($this->post('image'));
        $project_category = strip_tags($this->post('project_category'));
        $client_id = strip_tags($this->post('client_id'));

        $currency_option = array('INR'=>'₹','USD'=>'$');
        $currency_value = empty(array_key_exists($currency, $currency_option))?'₹':$currency_option[$currency];
        
        if(!empty($title) && !empty($description) && !empty($budget))
        {
            $userData = array(
            'title' => $title,
            'description' => $description,
            'budget' => $budget,
            'project_category'=>$project_category,
            'client_id'=>$client_id,
            'currency'=> $currency_value
            );  
            /* image upload */
            $config['upload_path'] = 'uploads/profiles';
            $config['allowed_types'] = '*';
            $config['max_size'] = 0;
            $config['max_width'] = 1500;
            $config['max_height'] = 1500;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) 
            {
                $error = array('error' => $this->upload->display_errors());
            } 
            else
            {
                $userData['image'] = $this->upload->data()['file_name'];
            }
            
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file'))
            {
                $error = array('error' => $this->upload->display_errors());
                 print_r($error);exit;

            } 
            else 
            {
                $userData['file'] = $this->upload->data()['file_name'];
            }


            $insert = $this->LoginApiModel->publish_demand($userData);
            if(!$insert['status'])
            {
                $this->response([
                'status' => TRUE,
                'message' => $this->lang->line('Your Demand Publish successfully'),
                ], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->response([
                'status' => FALSE,
                'message' => $this->lang->line('Unable to add'),
                ], REST_Controller::HTTP_BAD_REQUEST);
            }

        }

        else 
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('Provide proper information'),
            ], REST_Controller::HTTP_OK);
        }
    }

    /*   formularie de contact (page 27)*/
    public function contact_post()
    { 
        $this->load->library('form_validation');
        $data = $formData = array();
        // If contact request is submitted
        if($this->input->post('contactSubmit'))
        {
            // Get the form data
            $formData = $this->input->post();

            // Form field validation rules
            $this->form_validation->set_rules('title', 'Title', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('description', 'Description', 'trim|required');

            // Validate submitted form data
            if($this->form_validation->run() == true)
            {
                // Define email data
                $mailData = array(
                'title' => $formData['title'],
                'email' => $formData['email'],
                'description' => $formData['description']
                );

                // Send an email to the site admin
                $send = $this->sendEmail($mailData);

                // Check email sending status
                if($send)
                {
                    // Unset form data
                    $this->session->set_flashdata('result','Enquiry send successfully');
                    $formData = array();

                    $data['status'] = array(
                    'type' => 'success',
                    'msg' => 'Your Contact request has been submitted successfully.'
                    );
                }
                else
                {
                    $data['status'] = array(
                    'type' => 'error',
                    'msg' => 'Some problems occured, please try again.'
                    );
                }
            }
        }

        // Pass POST data to view
        $data['postData'] = $formData;

        // Pass the data to view
        $this->session->set_flashdata('result','Inquiry Send Successfully');

        $title = strip_tags($this->post('title'));
        $description = strip_tags($this->post('description'));
        $email = strip_tags($this->post('email'));


        if(!empty($title) && !empty($description) && !empty($email))
        {
            $userData = array(
            'title' => $title,
            'description' => $description,
            'email' => $email,
            );  


            $insert = $this->LoginApiModel->post_Contact($userData);
            if(!$insert['status']){
            $this->response([
            'status' => TRUE,
            'message' => 'Your Contact Published successfully ',
            ], REST_Controller::HTTP_OK);
            }
            else{
            $this->response([
            'status' => FALSE,
            'message' => 'Unable to submit contact form',
            ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
        else
        {
            $this->response([
            'status' => TRUE,
            'message' => 'Provide proper information ',
            ], REST_Controller::HTTP_OK);
        }


    }


    public function sendEmail($mailData)
    {
        // Load the email library
        $this->load->library('email');
        // Mail config
        $to = 'sonalirathore0009@gmail.com';
        $from = 'info@alphawizz.com';
        $fromName = 'Sonali Rathore';
        $mailSubject = 'Contact Request Submitted by '.$mailData['title'];

        // Mail content
        $mailContent = '
        <h2>Contact Request Submitted</h2>
        <p><b>Name: </b>'.$mailData['title'].'</p>
        <p><b>Email: </b>'.$mailData['email'].'</p>
        <p><b>Description: </b>'.$mailData['description'].'</p>';

        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->to($to);
        $this->email->from($from, $fromName);
        $this->email->subject($mailSubject);
        $this->email->message($mailContent);
        // Send email & return status
        $this->email->send();
    }


public function myprofilebyid_post()
    {
        $u_id = strip_tags($this->post('user_id'));
        $profile_by_bid = $this->LoginApiModel->getprofileData($u_id);
        $rating_by_bid = $this->LoginApiModel->getprofilerates($u_id);
        
        if(!empty($profile_by_bid))
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('Bid list on missions'),
            'your_missions'=>$profile_by_bid,
            'rating' => $rating_by_bid
            ], REST_Controller::HTTP_OK);
        }

        else 
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('bid not found'),
            
            ], REST_Controller::HTTP_OK);
        }
        
    }
    /* project adding*/
    public function project_post() 
    { 
        $title = strip_tags($this->post('title'));
        $description = strip_tags($this->post('description'));
        $budget = strip_tags($this->post('budget'));
        $image_name="";
        //Upload Images into the folder
        if (isset($_FILES["picture_url"]) && $_FILES["picture_url"]["size"] > 0) 
        {
            $config['upload_path']   = './uploads/project_image/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['encrypt_name']  = TRUE;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('picture_url')) 
            {
                $data["responce"] = false;
                $data["error"]    = 'Error! : ' . $this->upload->display_errors();
            } 
            else 
            {
                $img_data   = $this->upload->data();
                $image_name = $img_data['file_name'];
            }
        }

        //$image_name = strip_tags($this->post('picture_url'));



        if(!empty($title) && !empty($description) && !empty($budget))
        {

            $userData = array(
            'title' => $title,
            'description' => $description,
            'budget' => $budget,
            'picture_url' =>$image_name

            );  

            $insert = $this->LoginApiModel->project_add($userData);
            if(!$insert['status'])
            {
                $this->response([
                'status' => TRUE,
                'message' => 'Your Demand Publish successfully ',
                ], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->response([
                'status' => FALSE,
                'message' => 'Unable to add',
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
        else 
        {
            $this->response([
            'status' => TRUE,
            'message' => 'Provide proper information ',
            ], REST_Controller::HTTP_OK);
        }


    }

public function editProfile_post()

  {

    $fname = "";
    $lname = "";



    $first_name = strip_tags($this->post('first_name'));
    $last_name = strip_tags($this->post('last_name'));
    $profile_id = strip_tags($this->post('profile_id'));



    //$name = strip_tags($this->post('name'));

    //$fname = strip_tags($this->post('name'));

    $email = strip_tags($this->post('email'));

    $username = strip_tags($this->post('username')); 

    $password = md5($this->post('password'));
    $password_show = strip_tags($this->post('password'));

    $dob = strip_tags($this->post('dob'));

    $country = strip_tags($this->post('country'));

    $level_of_study = strip_tags($this->post('level_of_study'));
    
    $school_address = strip_tags($this->post('school_address'));


$skills= strip_tags($this->post('skills'));

$Field_of_study = strip_tags($this->post('Field_of_study'));

$intrested_category = strip_tags($this->post('intrested_category'));

$presentation = strip_tags($this->post('presentation'));

$google_status   = strip_tags($this->post('google_status'));
$facebook_status= strip_tags($this->post('facebook_status'));

$account_number= strip_tags($this->post('account_number'));
$ifsc_code = strip_tags($this->post('ifsc_code'));


    if(!empty($profile_id) )

    {

if($this->post('password'))
{

    $profile_data = array('id'=>$profile_id,'email'=>$email,'username'=>$username,'password'=>$password,'dob'=>$dob,'country'=>$country,'level_of_study'=>$level_of_study,'school_address'=>$school_address,'skills'=>$skills,'Field_of_study'=>$Field_of_study,'intrested_category'=>$intrested_category,'presentation'=>$presentation,'google_status'=>$google_status,'facebook_status'=>$facebook_status,'first_name'=>$first_name,'last_name'=>$last_name,'password_show'=>$password_show,'account_number'=>$account_number,'ifsc_code'=>$ifsc_code);


}

else{
    $profile_data = array('id'=>$profile_id,'email'=>$email,'username'=>$username,'dob'=>$dob,'country'=>$country,'level_of_study'=>$level_of_study,'school_address'=>$school_address,'skills'=>$skills,'Field_of_study'=>$Field_of_study,'intrested_category'=>$intrested_category,'presentation'=>$presentation,'google_status'=>$google_status,'facebook_status'=>$facebook_status,'first_name'=>$first_name,'last_name'=>$last_name,'account_number'=>$account_number,'ifsc_code'=>$ifsc_code);
}


     if(!empty($_FILES['picture_url']['name'])){



      //exit($_FILES['photo']['name']);

      $config['upload_path'] = './uploads/profiles';

      $config['allowed_types'] = 'gif|jpg|png|jpeg';

      $config['max_size'] = 20000;

      $config['max_width'] = 45000;

      $config['max_height'] = 45000;







      $this->load->library('upload', $config);



      if (!$this->upload->do_upload('picture_url')) {

        $error = array('error' => $this->upload->display_errors());

        $image = '';

      





      }

      else {

        $image = $this->upload->data()['file_name'];

        $profile_data['picture_url'] = $image;

      }

      }

   if(!empty($_FILES['vendor_file']['name'])){



      //exit($_FILES['photo']['name']);

      $config['upload_path'] = './uploads/vendors-file';

      $config['allowed_types'] = 'gif|jpg|png|jpeg|doc';

      $config['max_size'] = 20000;

      $config['max_width'] = 45000;

      $config['max_height'] = 45000;







      $this->load->library('upload', $config);



      if (!$this->upload->do_upload('vendor_file')) {

        $error = array('error' => $this->upload->display_errors());

        $image = '';

      





      }

      else {

        $image = $this->upload->data()['file_name'];

        $profile_data['vendor_file'] = $image;

      }

      } 

      
    

      $activity = $this->LoginApiModel->editProfile($profile_id,$profile_data);



      if($activity)

      {

        $this->response([

          'status' => TRUE,

          'message' => 'Profile updated successfully',

          'all_activities'=>$profile_data

          ], REST_Controller::HTTP_OK);

      }



      else 

      {

        $this->response([

          'status' => FALSE,

          'message' => 'Something went wrong',

          ], REST_Controller::HTTP_OK);

      }

      }

       else 

        {

        $this->response([

        'status' => FALSE,

        'message' => 'Provide proper information ',

        ], REST_Controller::HTTP_OK);

        }     

    }


     public function forgot_pass_post()
    {



        $email = $this->post('email');

         // echo $email.'  '.$password;exit;

        if(!empty($email))
        {


if($this->LoginApiModel->checkEmail($email,1))
            {

            $this->load->library('email');
            $password = $this->LoginApiModel->getPass($email);

            $from = "ankit@alphawizz.com";
            $to = $email;
            $email11=md5($email);
            $pass1=md5($password);

            $link="<a href='http://alphawizz.com/Freelance/change_password.php?key=".$email11."&reset=".$pass1."'>Click To Reset password</a>";

            $subject = "Your link to change password";
            $message = "Following is the link to change password ". $link ;
              $config['mailtype'] = 'html';
            $this->email->initialize($config);
            $this->email->set_newline("\r\n");
            $this->email->from($from);
            $this->email->to($to);
            $this->email->subject($subject);
            $this->email->message($message);



            if ($this->email->send()) 
            {
            $this->response([
            'status' => TRUE,
            'message' => 'Kindly check your Email',
            ], REST_Controller::HTTP_OK);

            } 
            else 
            {
            $this->response([
            'status' => FALSE,
            'message' => $this->lang->line('Unable to send email'),
            ], REST_Controller::HTTP_OK);

            }

        }


        else{

                $this->response([
                    'status' => FALSE,
                    'message' => 'This Email not exist',
                    ], REST_Controller::HTTP_OK);
            
        }
        
    }




}

public function send_text_message1_post()
{
       $receiver_id = strip_tags($this->post('receiver_id'));
$messageTxt = strip_tags($this->post('receiver_id'));




  echo $receiver_id;

  exit(); 
    

        
        /*if(isset($post['type'])=='Attachment'){ 
            $AttachmentData = $this->ChatAttachmentUpload();
            //print_r($AttachmentData);
            $attachment_name = $AttachmentData['file_name'];
            $file_ext = $AttachmentData['file_ext'];
            $mime_type = $AttachmentData['file_type'];
             
        }else{
            $messageTxt = reduce_multiples($post['messageTxt'],' ');
        }   
         
                $data=[
                    'sender_id' =>$this->OuthModel->Encryptor('decrypt', $post['receiver_id']),
                    'receiver_id' => 18,
                    'message' =>   $messageTxt,
                    'attachment_name' => $attachment_name,
                    'file_ext' => $file_ext,
                    'mime_type' => $mime_type,
                    'message_date_time' => date('Y-m-d H:i:s'), //23 Jan 2:05 pm
                    'ip_address' => $this->input->ip_address(),
                ];
          
                $query = $this->ChatModel->SendTxtMessage($this->OuthModel->xss_clean($data)); 
                $response='';
                if($query == true){
                    $response = ['status' => 1 ,'message' => '' ];
                }else{
                    $response = ['status' => 0 ,'message' => 'sorry we re having some technical problems. please try again !'                       ];
                }
             
           echo json_encode($response);*/
    }



}
