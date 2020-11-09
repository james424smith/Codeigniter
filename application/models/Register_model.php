<?php
class Register_model extends CI_Model
{

  public function __construct() 
  {
    parent::__construct();
    // Load the database library
    $this->load->database();
    $this->userTbl = 'users';
    $this->proCat ='project_category';
    $this->publishTable = 'publishdemand';
  }
  

    /*insert user data */
  public function insert($data)
  {
    if (!array_key_exists("created", $data)) 
    {
      $data['created'] = date("Y-m-d H:i:s");
    }
    if (!array_key_exists("modified", $data))
    {
      $data['modified'] = date("Y-m-d H:i:s");
    }
    $insert = $this->db->insert($this->userTbl, $data);
    return $insert?$this->db->insert_id():false;
  }


  public function insertproject($data)
  {
    $insert = $this->db->insertproject($this->proCat, $data);
    return $insert?$this->db->insert_id():false;
  }



    /* update user data*/

  public function update($data , $id) 
  {
    if(!array_key_exists('modified', $data))
    {
      $data['modified'] = date("Y-m-d H:i:s");
    }


    //  update user data in the user table*//
    $update = $this->db->update($this->userTbl , $data, array('id'=>$id));

    // return the status
    return $update?true:false;
  }

    /* delete user data*/
  public function delete($id)
  {
    //update user from the table
    $delete = $this->db->delete($this->userTbl, array('id=>$id'));
    //return the status
    return $delete?true:false;
  }

  public function UserList() 
  {
    $this->db->select("users.*,stripe_card_details.stripe_customer_id,stripe_card_details.stripe_card_id");
    $this->db->from($this->userTbl);
    $this->db->join("stripe_card_details", "users.id = stripe_card_details.user_id", "left");
    $this->db->where("$this->userTbl.role !=", "Admin");
    $this->db->order_by("$this->userTbl.id", "desc");
    return $this->db->get()->result();
  }
public function getUserList($from_date, $to_date) 
  {
    $this->db->select("date_updated,first_name,last_name,email,dob,school_address,country,Profile_Rate,Total_earned_amount,Current_Balance");
    //$this->db->from($this->userTbl);
    $this->db->where('date_updated >=', $from_date);
    $this->db->where('date_updated <=', $to_date);
    $this->db->where("$this->userTbl.role !=","Admin");
    $this->db->order_by("$this->userTbl.id","desc");
    $q = $this->db->get('users');
    $response = $q->result_array();
    return $response;
  }

  /* demand list */
  public function DemandList()
  {
    $this->db->select("$this->publishTable.*,$this->proCat.title as Project_cat");
    $this->db->from("$this->publishTable");
    $this->db->join("$this->proCat","$this->proCat.project_id = $this->publishTable.project_category");
    // $query = $this->db->get('publishDemand');
    return $this->db->get()->result();
  }

//delete user list by id
  public function did_delete_row($id){
    $this->db-> where('id', $id);
    return $this->db->delete($this->userTbl);
  }

   public function did_block_row($id){
    
    $this->db->select("block");
    $this->db->from("users");
    $this->db->where("id", $id);
    $user = $this->db->get()->row();
    if($user->block == 1)
      $data['block'] = 0;
    else
      $data['block'] = 1;
    $update = $this->db->update($this->userTbl , $data, array('id'=>$id)); 
    return  $update?true:false;
  }
  //delete demand list by id
  public function delete_demand($id){
    $this->db-> where('id', $id);
    return $this->db->delete($this->publishTable);
  }

  /*Project List */

  public function ProjectList() {
    $query = $this->db->get($this->proCat);
    return $query->result();


  }

  //delete project list by id
  public function did_delete_projectrow($project_id)
  {
    $this->db-> where('project_id', $project_id);
    return $this->db->delete($this->proCat);
  }

  public function getProjectCategories(){
    $this->db->select("*");
    $this->db->from($this->proCat);
    return $this->db->get()->result();

  }

  public function checkEmailAvailability($email)
  {
     $this->db->select("*");
     $this->db->from($this->userTbl);
     $this->db->where('email',$email);
     $count = $this->db->get()->num_rows();

     if($count > 0)
     {
      return true;
     }
     else
     {
      return false;
     }
  }

  public function getLatestProject()
  {
    //$this->db->select("$this->publishTable.title as publish_title,$this->publishTable.description as publish_descrition,$this->proCat.title as product_caterory_name,$this->publishTable.currency as currency,$this->publishTable.budget as budget");
    //$this->db->from($this->publishTable);
    $this->db->select("mission.mission_title, mission.description as missiondescription, mission.mission_category, mission.mission_budget, mission.mission_status, $this->proCat.title as product_caterory_name");
    $this->db->from('mission');
    $this->db->join("$this->proCat", "mission.mission_category = $this->proCat.project_id");
    $this->db->order_by("mission.mission_id", "desc");
    //$this->db->limit(5);
    $data = $this->db->get()->result();
    //print_r($data);die();
    if(count($data) > 100)
      $remove_user_to_display = array_splice($data, 100);
    return $data;
  }


  public function getLatestUserList()
  {
    $this->db->select("*");
    $this->db->from("users");
    $this->db->order_by("id","desc");
    $data = $this->db->get()->result();
    if(count($data) > 100)
      $remove_user_to_display = array_splice($data, 100);
    //var_dump($remove_user_to_display);die();
    return $data;
  }



  public function getUserCount()
  {
    $this->db->select("*");
    $this->db->from('users');
    $this->db->where('role', "client");
    $count = $this->db->get()->num_rows();
    return $count;
  }

  public function getDemandCount()
  {
    $this->db->select("*");
    $this->db->from('publishdemand');
    $count = $this->db->get()->num_rows();
    return $count;
  }

  public function getProjectCount()
  {
    $this->db->select("*");
    $this->db->from('mission');
    $count = $this->db->get()->num_rows();
    return $count;
  }
  public function getSelfUser()
  {
    $user_id = $this->session->userdata['id'];
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('id', $user_id);
    $query = $this->db->get();
    return $query->row();
  }

}

?>
