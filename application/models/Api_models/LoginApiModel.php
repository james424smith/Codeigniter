<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginApiModel extends CI_Model {
    public function __construct(){
     
        $this->table_name = 'users';
        $this->logged_in_with='';
        $this->response=array();
    }

    public function getRows($auth_token,$data){
     
     $this->db->select("*");
     $this->db->from($this->table_name);

     $this->db->where($data);
     $table = $this->db->get();
     $count = $table->num_rows();
     $data1 = $table->row();

     if($data1)
     {
     $id = $data1->id;

       $this->db->where('id',$id);

      $this->db->update('users', array('auth_token'=>$auth_token));

    }


     if($count > 0){
      $this->response['status'] = 1;
      $this->response['message'] = 'Correct password';
      $this->response['data'] = $data1;
      $this->response['logged_as'] =$this->logged_in_with; 
     }
     
     else {
        $this->response['status'] = 1;
        $this->response['message'] = 'You have entered incorrect username or password';
     }
     return $this->response;
    }

    public function insert_patient($data){
        $this->db->insert('users',$data);
       if($this->db->affected_rows() >0) {
           $this->response['status'] = false;
           $this->response['message'] = 'unable to insert';
           
       }
       else {
        $this->response['status'] = false;
        $this->response['message'] = 'inserted successfully';
       }
       return $this->response;
    }
  /*  insert new user*/
   public function insert_newUser($data){

        $this->db->insert('users',$data);
         $str = $this->db->last_query();
        
        $insert_id = $this->db->insert_id();

       if($this->db->affected_rows() >0) {
           $this->response['status'] = false;
           $this->response['message'] = $this->lang->line('unable to insert');
           
      $this->db->select("id,username,email");
      $this->db->from('users');
      $this->db->where('id',$insert_id);
      $data = $this->db->get()->result();
           $this->response['data'] = $data;
       }
       else {


        
        $this->response['status'] = false;
        $this->response['message'] = $this->lang->line('inserted successfully');
       }






       return $this->response;
    }

  public function SocialLoginRegistration($data){
    $this->db->select('id'); 
    $this->db->from('users'); 

    $con = array( 
    'email' => $data['email'], 
    ); 

    

    $this->db->where($con); 
    $query = $this->db->get(); 

    $check = $query->num_rows(); 
    if($check > 0){ 
      // Get prev user data 
      $result = $query->row_array(); 

      // Update user data 
      $data['modified'] = date("Y-m-d H:i:s"); 
      $update = $this->db->update('users', $data, array('id' => $result['id'])); 
      

      // Get user ID 
      $userID = $result['id']; 
    }

    else{ 
      // Insert user data 
      $data['created'] = date("Y-m-d H:i:s"); 
      $data['modified'] = date("Y-m-d H:i:s"); 



      $insert = $this->db->insert('users', $data); 

      // Get user ID 
      $userID = $this->db->insert_id(); 
    } 

    // Return user ID 
    return $userID?$userID:false; 
    }


    public function getSocialData($id){
     $this->db->select('*');
     $this->db->from('users');
     $this->db->where('id',$id);
     return $this->db->get()->result();
    } 

 public function getPass($email){
     $this->db->select('id,password');
     $this->db->from('users');
     $this->db->where('email',$email);
     $pass_array = $this->db->get()->result();
$password = $pass_array[0]->password;

     return $password;
    } 


     public function getprofileData($id){
     $this->db->select('*');
     $this->db->from('users');
     $this->db->where('id',$id);
     return $this->db->get()->result();
    } 
  
  public function getprofilerates($id){
    $rating_aaray = array();
     $this->db->select('rating');
     $this->db->from('user_review');
     $this->db->where('to_user_id',$id);
     $data = $this->db->get()->result();
     $count_array = count($data);
     foreach ($data as  $value) {
       $rating_aaray[] = $value->rating;
       
     }
     $rating ="";
     if($rating_aaray)
     {
      $rating = array_sum($rating_aaray)/$count_array;
     $rating = number_format($rating, 2, '.', '');
    }
   return $rating;



    }

    /* page 10*/
 public function publish_demand($data){
        $this->db->insert('publishDemand',$data);
       if($this->db->affected_rows() >0) {
           $this->response['status'] = false;
           $this->response['message'] = $this->lang->line('unable to insert');
           
       }
       else {
        $this->response['status'] = false;
        $this->response['message'] = $this->lang->line('inserted successfully');
       }
       return $this->response;
    }

    /* *   formularie de contact (page 27)*/
     public function post_Contact($data){
        $this->db->insert('contact',$data);
       if($this->db->affected_rows() >0) {
           $this->response['status'] = false;
           $this->response['message'] = $this->lang->line('unable to submit contact request');
           
       }
       else {
        $this->response['status'] = false;
        $this->response['message'] = $this->lang->line('contact submitted successfully');
       }
       return $this->response;
    }

     /* /* project adding*/
     public function project_add($data){
        $this->db->insert('project',$data);
       if($this->db->affected_rows() >0) {
           $this->response['status'] = false;
           $this->response['message'] = $this->lang->line('unable to insert');
           
       }
       else {
        $this->response['status'] = false;
        $this->response['message'] = $this->lang->line('inserted successfully');
       }
       return $this->response;
    }


    public function checkEmail($email,$slug){
        if($slug == 1){
            $table = 'users';
        }
        else {
        }
        
        $this->db->select("*");
        $this->db->from($table);
        $this->db->where('email',$email);
        $data = $this->db->get()->result();
        
        if(!empty($data)){
         if(count($data)>0){
          return true;
         }
         else {
             return false;
         }
        }
        else {
            return false;
        }

    }






    public function checkContact($contact,$slug){
        if($slug == 1){
            $table = 'users';
        }
        else {
        }
        $this->db->select("*");
        $this->db->from($table);
        $this->db->where('mobile',$contact);
        $data = $this->db->get()->result();
        if(!empty($data)){
         if(count($data)>0){
          return true;
         }
         else {
             return false;
         }
        }
        else {
            return false;
        }

    }
    public function editProfile($id,$app)

  {

     if(!empty($app))

      {

        $this->db->where('id',$id);

       $this->db->update('users',$app);

       

       return true;

      }

  }


  public function getclientDetails($id)
    {
      $this->db->select("client_id");
      $this->db->from('users');
      $this->db->where('mission_id',$id);
      $data = $this->db->get()->result();

    $data = $data[0]->walet_balance;
      return $data;

    }







}