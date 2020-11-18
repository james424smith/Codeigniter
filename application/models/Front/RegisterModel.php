<?php
class RegisterModel extends CI_Model {
  
    public function __construct(){
        $this->load->database();
        $this->load->library('session');
    }
    public function user_data($data) {
      $this->db->insert('users', $data);      
      $id =$this->db->insert_id();
      //echo $id;die();
      $this->session->set_userdata('id', $id);
      return true;
    }
    
    function can_login($email, $password)  
  	{
      //echo "Login Model";die();  
      $this->db->where('email', $email);  
      $this->db->where('password', $password);
      //$this->db->where('block', 0);  
      $query = $this->db->get('users');
      
      if($query->row()->block == 1)
        return 0; //block
      $id = $query->result_array()[0]['id'];
      $this->session->set_userdata('id', $id);
     // SELECT * FROM users WHERE username = '$username' AND password = '$password'  
      //return true;
      if($query->num_rows() > 0)  
      {  
        $status = array('status' => 1);
        
        $this->db->where('id', $id);  
        $this->db->update('users', $status);
        return 1;  // success
      }  
      else  
      {  
        return -1; // no member
      }  
   } 
   
   public function setHighlightForLogout()
   {
    $status = array('status' => 0);
    //var_dump($this->session->userdata['id']);die();
    $this->db->where('id', $this->session->userdata['id']);  
    $this->db->update('users', $status);
   }
  public function GetUserData()
  {  
 //print_r($this->session->all_userdata());die();
    $this->db->select('*');

    $this->db->from('users');

    $this->db->where("id", $this->session->userdata['id']);

    $this->db->limit(1);

      $query = $this->db->get();

    if ($query) {

       return $query->row_array();

     } else {
       return false;
      }
    }
    public function user_update($data,$id)
    {     
         $this->db->set($data);
         $this->db->where('id',$id);
         $this->db->update('users');     
         return true ;
    }

    public function checkEmailAvailable($email){
        $response = array();
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$email);
        $data = $this->db->get()->row();
        
        $response['username'] = $data->Username;
        $response['first_name'] = $data->first_name;
        if(count($data) > 0){
            $response['status']=true;
        }
        else {
            $response['status']=false;
        }

        return $response;
    }
    public function changePassword($password,$email){
      
        $update_data = array('password'=>md5($password));
        $this->db->where('email',$email);
        $this->db->update('users',$update_data);
        
        // echo $this->db->last_query();exit;
        return true;
    }
    public function checkUser($userData = array()) {
        
        if(!empty($userData)){
            //check whether user data already exists in database with same oauth info
            $this->db->select('id');
            $this->db->from('users');
            $this->db->where(array('oauth_provider' => $userData['oauth_provider'], 'oauth_uid'=>$userData['oauth_uid']));
            $prevQuery = $this->db->get();
            $prevCheck = $prevQuery->num_rows();
            
            if($prevCheck > 0){
                $prevResult = $prevQuery->row_array();
                
                //update user data
                $userData['modified'] = date("Y-m-d H:i:s");
                $update = $this->db->update($this->tableName, $userData, array('id' => $prevResult['id']));
                
                //get user ID
                $userID = $prevResult['id'];
            }else {
                //insert user data
                $userData['created']  = date("Y-m-d H:i:s");
                $userData['modified'] = date("Y-m-d H:i:s");
                $insert = $this->db->insert($this->tableName, $userData);
                
                //get user ID
                $userID = $this->db->insert_id();
            }
        }
        
        //return user ID
        return $userID ? $userID : FALSE;
    }


    public function PictureUrl() {

      $this->db->select('picture_url');

      $this->db->from('users');

      $this->db->where("id",$this->session->userdata['id']);

      $this->db->limit(1);

        $query = $this->db->get();

      if ($query) {

        return $query->row_array();

      } else {

        return false;

      }
  }
  public function edit($project_data, $id) {
        $this->db->set($project_data);
        //print_r($project_data);die();
        $this->db->where('id', $id);
        $this->db->update('users');
        return true ;
  }

  //Elie eamil check
  public function CheckUserForRegistor ($userData = array()) {   
    if(!empty($userData)) {
      //check whether user data already exists in database with same oauth info
      $this->db->select('id');
      $this->db->from('users');
      $this->db->where(array('email' => $userData['email']));
      $prevQuery = $this->db->get();
      $prevCheck = $prevQuery->num_rows();
      
      if($prevCheck > 0){
          return true;
      }
    }
    return false;
  }

  public function save_credit_card($data)
  {
    $user_id = $this->session->userdata('id');
    $this->db->select('*');
    $this->db->from('withdrawcardinfo');
    $this->db->where('user_id', $user_id);
    $count = $this->db->get()->num_rows();
    if($count > 0)
    {
      $this->db->where('user_id', $user_id);
      $this->db->update('withdrawcardinfo', $data);
    }
    else
    {
      $this->db->insert('withdrawcardinfo', $data);
    }
    
  }

}
?>