<?php

class ProjectModel extends CI_Model {
	public function __construct(){
    $this->response= array();
    $this->message = array();
    $this->Project_cat_table = 'project_category';
    $this->Publish_demand_table = 'publishDemand';
    $this->Project_review_table ='Demand_reviews';
    $this->mission = 'mission';
  }

 /*project list api */
    public function getAllProjects(){

        $this->db->select("*");
        $this->db->from($this->Project_cat_table);
        

        $data = $this->db->get()->result();
        // echo $this->db->last_query();exit;
        $this->message['data'] = $data;
        
        return empty($this->message)?false:$this->message;
    }

 /* demand list api */
   public function getAllDemands(){

        $this->db->select("*");
        $this->db->from($this->Publish_demand_table);
        

        $data = $this->db->get()->result();
        // echo $this->db->last_query();exit;
        $this->message['data'] = $data;
        
        return empty($this->message)?false:$this->message;
    }

     public function AddProjectComments($data){
      $this->db->insert($this->Project_review_table,$data);
      if($this->db->affected_rows() > 0){
        return true;
      }
      else {
        return false;
      }
    }

    public function getSingleProjectDetail($id){
        $this->db->select("*");
        $this->db->from($this->Project_cat_table);
        $this->db->where('project_id',$id);
        return $this->db->get()->row();
    }
 public function getclientDetails($id)
    {
      $this->db->select("client_id");
      $this->db->from('mission');
      $this->db->where('mission_id',$id);
      $data = $this->db->get()->result();

    $data = $data[0]->client_id;
      return $data;

    }

    public function getProjectComments($demand_id){
     $this->db->select("*");
     $this->db->from($this->Project_review_table);
     $this->db->where('demand_id',$demand_id);
     return $this->db->get()->result();
    }


 /* registered users list api*/
  public function getAllRegisterUser(){
    $this->db->select("*");
    $this->db->from("users");

    $data = $this->db->get()->result();

    $this->message['data'] = $data;

    return empty($this->message)?false:$this->message;
  }
/*  contact users list  page 27 api*/
  public function getAllContact(){
    $this->db->select("*");
    $this->db->from("contact");

    $data = $this->db->get()->result();

    $this->message['data'] = $data;

    return empty($this->message)?false:$this->message;
  }





  //bidding 

  public function addBidOnProject($data)
  {
    $con = array('demand_id'=>$data['demand_id'],'user_id'=>$data['user_id']);
    $this->db->select("id");
    $this->db->from('project_bidding');
    $this->db->where($con);
    $num = $this->db->get()->num_rows();
    if($num > 0)
    {
      $this->response= array('status'=>true,'message'=>'bid already added');
    }
    else 
    {
      $this->db->insert('project_bidding',$data);
      if($this->db->affected_rows() > 0)
      {
        $this->response= array('status'=>true,'message'=>'bid added successfully');
      }
      else
      {
        $this->response= array('status'=>false,'message'=>'unable to add'); 
      }

    }
     return $this->response;
  }


  public function getBidByProjectId($demand_id)
  {
    $this->db->select("*");
    $this->db->from('project_bidding');
    $this->db->join('users','users.id=project_bidding.user_id');
    $this->db->join('publishDemand','publishDemand.id=project_bidding.demand_id');
    $this->db->where('project_bidding.demand_id',$demand_id);
    return $this->db->get()->result();
  }

public function updateacceptby($project_id,$user_id)
    {
      $update_data = array('accepted_by '=>$user_id);
          $con = array('mission_id'=>$project_id);
      $this->db->where($con);
      $this->db->update('mission',$update_data);
   

        return true;
     
    
      
    }

  public function addOfferToProject($data)
  {
    $this->db->insert('project_offer',$data);
    if($this->db->affected_rows() > 0)
    {
      return true;
    }
    else 
    {
      return false;
    }

  }

  public function addAcceptOffer($data)
  {
    $this->db->insert('project_offer',$data);
    if($this->db->affected_rows() > 0)
    {
      return true;
    }
    else 
    {
      return false;
    }

  }

      public function getalloffer($id){

        $this->db->select("*");
        $this->db->from($this->mission);
        
 $this->db->where('mission_id',$id);
        $data = $this->db->get()->result();
    /*     echo $this->db->last_query();
        print_r($data);
        exit();*/
        
        
        return $data;
    }

   
}