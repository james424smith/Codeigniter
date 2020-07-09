<?php
class Litigations_model extends CI_Model
{

  public function __construct() 
  {
    parent::__construct();
    // Load the database library
    $this->load->database();
    $this->userTbl = 'users';
    $this->proCat ='project_category';
    $this->publishTable = 'publishDemand';
    $this->litigations = 'litigations';
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
public function getUserList($from_date,$to_date) 
  {
    $this->db->select("date_created,project_id,user_email,title,description,comment");
    //$this->db->from($this->userTbl);
   $this->db->where('date_created >=', $from_date);
$this->db->where('date_created <=', $to_date);
    $q = $this->db->get('litigations');
    $response = $q->result_array();
    return $response;
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
    $this->db->select("*");
    $this->db->from($this->userTbl);
    $this->db->where("$this->userTbl.role !=","Admin");
    $this->db->order_by("$this->userTbl.id","desc");
    return $this->db->get()->result();
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
  //delete demand list by id
  public function delete_demand($id){
    $this->db-> where('id', $id);
    return $this->db->delete($this->publishTable);
  }

  /*Project List */

  public function LitigationsList() {
    $query = $this->db->get($this->litigations);
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
    $this->db->select("$this->publishTable.title as publish_title,$this->publishTable.description as publish_descrition,$this->proCat.title as product_caterory_name,$this->publishTable.currency as currency,$this->publishTable.budget as budget");
    $this->db->from($this->publishTable);
    $this->db->join("$this->proCat","$this->publishTable.project_category = $this->proCat.project_id");
    $this->db->order_by("$this->publishTable.id","desc");
    //$this->db->limit(5);
    $data = $this->db->get()->result();
    
    return $data;
  }


  public function getLatestUserList()
  {
    $this->db->select("*");
    $this->db->from("users");
    $data = $this->db->get()->result();

    return $data;
  }



  public function getUserCount()
  {
    $this->db->select("*");
    $this->db->from('users');
    $count = $this->db->get()->num_rows();
    return $count;
  }

  public function getDemandCount()
  {
    $this->db->select("*");
    $this->db->from('publishDemand');
    $count = $this->db->get()->num_rows();
    return $count;
  }

  public function getProjectCount()
  {
    $this->db->select("*");
    $this->db->from('project_category');
    $count = $this->db->get()->num_rows();
    return $count;
  }


}

?>
