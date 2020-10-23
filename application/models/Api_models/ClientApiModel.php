<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientApiModel extends CI_Model
{
    public function __construct()
    {
        $this->demand_table_name = 'publishDemand';

        $this->bidding_table_name = 'project_bidding';
        $this->project_offer_table_name = 'project_offer';

        $this->user_table_name = 'users';
        $this->terms = 'terms';
        $this->notification = 'notification';
        $this->about = 'about';
         $this->dispute_message = 'dispute_message';
        $this->logged_in_with='';
        $this->response=array();
    }


    public function projectDispute($project_id)
    {
     	$this->db->select("$this->dispute_message.*");
     	$this->db->from($this->dispute_message);
        
     	$this->db->where('project_id',$project_id);

     	return $this->db->get()->result();
    }

     public function getClientProjectList($client_id)
    {
      $this->db->select("$this->demand_table_name.*,$this->user_table_name.picture_url as client_image");
      $this->db->from($this->demand_table_name);
        $this->db->join("$this->user_table_name","$this->demand_table_name.client_id = $this->user_table_name.id");
      $this->db->where('client_id',$client_id);

      return $this->db->get()->result();
    }

public function getabout1()
    {
        $this->db->select("$this->about.*");
        $this->db->from($this->about);
       // $this->db->join("$this->user_table_name","$this->demand_table_name.client_id = $this->user_table_name.id");
        $this->db->where('id',1);

        return $this->db->get()->result();
    }


    public function getallnotification($user_id)
    {
        $this->db->select("$this->notification.*");
        $this->db->from($this->notification);
       // $this->db->join("$this->user_table_name","$this->demand_table_name.client_id = $this->user_table_name.id");
        $this->db->where('user_id',$user_id);

        return $this->db->get()->result();
    }

public function getallnotificationbyid($user_id,$type_id)
    {
        $this->db->select("$this->notification.*");
        $this->db->from($this->notification);
       // $this->db->join("$this->user_table_name","$this->demand_table_name.client_id = $this->user_table_name.id");
        $this->db->where('user_id',$user_id);
$this->db->where('type_id',$type_id);
$this->db->order_by('notification.created', 'DESC');

        return $this->db->get()->result();
    }



    public function getallnotificationcount($user_id,$type_id)
    {
        $this->db->select("$this->notification.*");
        $this->db->from($this->notification);
       // $this->db->join("$this->user_table_name","$this->demand_table_name.client_id = $this->user_table_name.id");
        $this->db->where('user_id',$user_id);

$this->db->where('type_id',$type_id);
$this->db->where('read_status',0);
        $data = $this->db->get()->result();
       /*        echo $str = $this->db->last_query();
        exit();*/
        return $data;
    }
/*public function getabout1()
    {
        $this->db->select("$this->about.*");
        $this->db->from($this->about);
       // $this->db->join("$this->user_table_name","$this->demand_table_name.client_id = $this->user_table_name.id");
        $this->db->where('id',1);

        return $this->db->get()->result();
    }*/
public function getuseremail($id)
    {
        $this->db->select("email");
        $this->db->from('users');
       // $this->db->join("$this->user_table_name","$this->demand_table_name.client_id = $this->user_table_name.id");
        $this->db->where('id',$id);

        $data = $this->db->get()->result();
        $email = $data[0]->email;
        return $email;
    }

public function getterm1()
    {
        $this->db->select("$this->terms.*");
        $this->db->from($this->terms);
       // $this->db->join("$this->user_table_name","$this->demand_table_name.client_id = $this->user_table_name.id");
        $this->db->where('id',1);

        return $this->db->get()->result();
    }


    public function addProgressReport($mission_id,$data)
    {


        $this->db->insert('project_status',$data);
        $response['status'] = true;
        $response['message'] = 'Inserted Successfully';

$update_data1 = array('mission_status'=>2);
     // $this->db->where($con);
     // $this->db->update($this->project_offer_table_name,$update_data);
  

  $this->db->where('mission_id',$mission_id);

      $this->db->update('mission',$update_data1);

        return $response;
    }


public function sendDispute($data)
    {
       $res = $this->db->insert('chat',$data);
        $response['status'] = true;
        $response['message'] = 'Inserted Successfully';

       
        if($res == 1)
        return true;
        else
        return false;

        //return $response;
    }

public function sendDispute1($data)
    {
       $res = $this->db->insert('litigations',$data);
        $response['status'] = true;
        $response['message'] = 'Inserted Successfully';

       
        if($res == 1)
        return true;
        else
        return false;

        //return $response;
    }
    public function GetReciverChatHistory($receiver_id,$mission_id){
    
    $sender_id = 4;
    
    //SELECT * FROM `chat` WHERE `sender_id`= 197 AND `receiver_id` = 184 OR `sender_id`= 184 AND `receiver_id` = 197
    $condition= "(`sender_id`= '$sender_id' AND `receiver_id` = '$receiver_id' OR `sender_id`= '$receiver_id' AND `receiver_id` = '$sender_id')";
    
    $this->db->select('*');
    $this->db->from('chat');
    $this->db->where('project_id',$mission_id);
    $this->db->where($condition);

      $query = $this->db->get();
$query->result_array();
/*echo $str = $this->db->last_query();
exit();*/
    if ($query) {
       return $query->result_array();
     } else {
       return false;
     }
  }

    public function addDemand($data)
    {
        $this->db->insert('mission',$data);
        $response['status'] = true;
        $response['message'] = 'Inserted Successfully';
        return $response;
    }

    public function addReviewUsers($data)
    {
        $this->db->select("*");
        $response = array();
        $this->db->from('user_review');
        $con = array('by_user_id'=>$data['by_user_id'],'to_user_id'=>$data['to_user_id']);
        $this->db->where($con);
        $count = $this->db->get()->num_rows();

        if($count <= 0)
        {
         $this->db->insert('user_review',$data);
         $response['status'] = true;
         $response['message'] = 'Inserted Successfully';
        }
        
        else
        {
          $this->db->where($con);
          $this->db->update('user_review',$data);
          $response['status'] = true;
         $response['message'] = 'Updated Successfully';
        }

        return $response;
    }


public function add_discuss($data)
    {
       
         $this->db->insert('add_discuss',$data);
         $response['status'] = true;
         $response['message'] = 'Inserted Successfully';
        

        return $response;
    }

    /*public function getClientMissionList()
    {
        $this->db->select("mission.mission_id,mission.mission_title,mission.mission_description,
                           mission.mission_image,mission.mission_doc,CONCAT(mission.mission_budget_currency,
                           '',mission.mission_budget) as mission_budget,DATEDIFF(NOW(), mission.created) as duration,users.picture_url as User_image");
        $this->db->from('mission');
        $this->db->join('users','mission.user_id= users.id');
        $mission = $this->db->get()->result();
        return $mission;
    }*/


    public function getClientMissionList()
    {
        $this->db->select("mission.mission_id,mission.client_id,mission.mission_title,mission.mission_description,
                           mission.mission_image,mission.mission_doc,mission.mission_budget as mission_budget,DATEDIFF(NOW(), mission.created) as duration,users.picture_url as User_image, project_category.picture_url as category_project_image");
        $this->db->from('mission');
        $this->db->join('users','mission.user_id= users.id');
        $this->db->join('project_category','mission.mission_category= project_category.project_id');
        $mission = $this->db->get()->result();
        return $mission;
    }
public function getClientMissionbyidList($category_id,$client_id)
    {
        $this->db->select("mission.mission_id,mission.client_id,mission.mission_title,mission.mission_description,
                           mission.mission_image,mission.mission_doc,mission.mission_budget as mission_budget,DATEDIFF(NOW(), mission.created) as duration,users.picture_url as User_image, project_category.picture_url as category_project_image");
        $this->db->from('mission');
        $this->db->join('users','mission.user_id= users.id');
        $this->db->join('project_category','mission.mission_category= project_category.project_id');
        
        $this->db->where('mission.client_id != ', $client_id); 

        $this->db->where('mission.accepted_by = ', 0);
        if($category_id)
        {
          $this->db->where('mission.mission_category = ', $category_id); 
        }
$this->db->order_by('mission.mission_id', 'DESC');
        $mission = $this->db->get()->result();
        return $mission;
    }

    public function fetchMyMissionByStatusId($myofferedmission,$status,$user_id)
    {
      //$myofferedmission_array = array($myofferedmission);
      $this->db->select("mission.mission_id,mission.client_id,mission.mission_title,mission.mission_description,mission.mission_status,mission.created as date,users.first_name,mission.client_id,users.last_name,project_category.picture_url as category_image,project_category.title as category_title");
      $this->db->from('mission');
      $this->db->join('users','mission.user_id = users.id');

      $this->db->join('project_category','mission.mission_category = project_category.project_id');
      //$this->db->join('project_offer','mission.mission_id = project_offer.user_id');
      if($status!=0)
      {
        $this->db->where('mission.accepted_by',$user_id);
      }
      $this->db->where('mission.mission_status',$status);
      $this->db->where_in('mission.mission_id',$myofferedmission);

      //$this->db->where('project_offer.accepted_by',$user_id);
    $this->db->order_by('mission.mission_id', 'DESC');
if($myofferedmission)
{
     return $this->db->get()->result();
}

else{
 return array();
}

    }



public function fetchofferedmission($user_id)
    {
      $this->db->select("project_id");
      $this->db->from('project_offer');
      $this->db->where('user_id',$user_id);
      $offered_id_array = $this->db->get()->result();
      foreach ($offered_id_array as $value) {
$test_offer[] = $value->project_id;

      }

      //$offer_ids = implode(",", $test_offer);
      
      return $test_offer;
      
    }

    public function fetchMyMissionbidById($bid_id)
    {
      $this->db->select("project_offer.offer_id,project_offer.message,project_offer.offer_budget,project_offer.project_id,project_offer.user_id,project_offer.client_id,project_offer.created_date,mission.mission_id,mission.client_id,mission.mission_title,mission.mission_description,mission.mission_budget,mission.mission_category,mission.mission_image,mission.mission_doc,project_category.title as category_title,project_category.picture_url as category_image,project_category.description as category_description,DATEDIFF(NOW(), mission.created) as duration");
      $this->db->from('project_offer');
      $this->db->join('mission','project_offer.project_id = mission.mission_id');
      $this->db->join('project_category','mission.mission_category = project_category.project_id');
      $this->db->where('project_offer.project_id',$bid_id);

      return $this->db->get()->result();

    }


public function fetchMyDemandbidById($bid_id)
    {
      $this->db->select("project_offer.offer_id,project_offer.message,project_offer.project_id,project_offer.offer_budget,project_offer.user_id,,project_offer.created_date,mission.mission_id,mission.mission_title,mission.mission_budget,mission.mission_category,mission.mission_image,users.picture_url,users.Profile_Rate,DATEDIFF(NOW(), project_offer.created_date) as duration");
      $this->db->from('project_offer');
      $this->db->join('mission','project_offer.project_id = mission.mission_id');
      $this->db->join('users','project_offer.user_id = users.id');
      //$this->db->join('project_category','mission.mission_category = project_category.project_id');
      $this->db->where('project_offer.project_id',$bid_id);

      return $this->db->get()->result();

    }

    public function fetchMyDemandbidBybudget($bid_id)
    {
      $this->db->select("project_offer.offer_id,project_offer.message,project_offer.project_id,project_offer.offer_budget,project_offer.user_id,,project_offer.created_date,mission.mission_id,mission.mission_title,mission.mission_budget,mission.mission_category,mission.mission_image,users.picture_url,users.Profile_Rate,DATEDIFF(NOW(), project_offer.created_date) as duration");
      $this->db->from('project_offer');
      $this->db->join('mission','project_offer.project_id = mission.mission_id');
      $this->db->join('users','project_offer.user_id = users.id');
      //$this->db->join('project_category','mission.mission_category = project_category.project_id');
      $this->db->where('project_offer.project_id',$bid_id);
    $this->db->order_by('project_offer.offer_budget', 'ASC');
      return $this->db->get()->result();

    }
public function fetchMyDemandbidByDate($bid_id)
    {
      $this->db->select("project_offer.offer_id,project_offer.message,project_offer.project_id,project_offer.offer_budget,project_offer.user_id,project_offer.created_date,mission.mission_id,mission.mission_title,mission.mission_budget,mission.mission_category,mission.mission_image,users.picture_url,users.Profile_Rate,DATEDIFF(NOW(), project_offer.created_date) as duration");
      $this->db->from('project_offer');
      $this->db->join('mission','project_offer.project_id = mission.mission_id');
      $this->db->join('users','project_offer.user_id = users.id');
      //$this->db->join('project_category','mission.mission_category = project_category.project_id');
      $this->db->where('project_offer.project_id',$bid_id);
    $this->db->order_by('project_offer.created_date', 'DESC');
      return $this->db->get()->result();

    }


    public function getProjectDetails($project_id)
    {
      $this->db->select("project_status.id,project_status.project_id,project_status.user_id,project_status.client_id,project_status.your_comments,project_status.project_files,project_status.project_image,project_status.project_status,project_status.date_created,users.first_name,users.picture_url");
      $this->db->from('project_status');
      $this->db->join('users','project_status.user_id = users.id');
      //$this->db->join('project_category','mission.mission_category = project_category.project_id');
      $this->db->where('project_status.project_id',$project_id);

    $this->db->order_by('project_status.id', 'DESC');
//$this->db->limit('1');

      return $this->db->get()->result();
      
    }
public function getusersDetails($client_id)
    {




      $this->db->distinct();
      $this->db->select("project_offer.project_id");
      $this->db->from('project_offer');
      $this->db->where('project_offer.user_id',$client_id);

      $mission_ids = $this->db->get()->result();



     if($mission_ids)
     { 
foreach ($mission_ids as $value) {
  
  $mission_ids1[] = $value->project_id;  
}







      $this->db->distinct();
      $this->db->select("mission.client_id as user_id");
      $this->db->from('mission');
      $this->db->where_in('mission.mission_id',$mission_ids1);

      //$this->db->where('mission.mission_id',$client_id);



      $cli_user = $this->db->get()->result();

       }
else{

  $cli_user = array();
}


      $this->db->distinct();
      $this->db->select("mission.mission_id");
      $this->db->from('mission');
      $this->db->where('mission.client_id',$client_id);

      $mission_ids = $this->db->get()->result();

if($mission_ids)
     { 
      foreach ($mission_ids as $value) {
  
  $mission_ids2[] = $value->mission_id;  
}

      

      $this->db->distinct();
      $this->db->select("project_offer.user_id");
      $this->db->from('project_offer');
      //$this->db->where('project_offer.project_id',$client_id);
  $this->db->where_in('project_offer.project_id',$mission_ids2);
      //$this->db->where('mission.mission_id',$client_id);
$emp_user = $this->db->get()->result();


      }

      else{
  $emp_user = array();

      }



$this->db->distinct();
      $this->db->select("add_discuss.reciver_id as user_id");
      $this->db->from('add_discuss');
      $this->db->where_in('add_discuss.sender_id',$client_id);
     // $this->db->where_in('add_discuss.reciver_id',$client_id);

      //$this->db->where('mission.mission_id',$client_id);

      $discuss_user = $this->db->get()->result();


$this->db->distinct();
      $this->db->select("add_discuss.sender_id as user_id");
      $this->db->from('add_discuss');
      $this->db->where_in('add_discuss.reciver_id',$client_id);
     // $this->db->where_in('add_discuss.reciver_id',$client_id);

      //$this->db->where('mission.mission_id',$client_id);

      $discuss_user1 = $this->db->get()->result();



/*    $this->db->distinct();
      $this->db->select("mission.user_id,users.first_name,users.last_name,users.picture_url");
      $this->db->from('mission');
      $this->db->join('users','mission.user_id = users.id');
      $this->db->where('mission.client_id',$client_id);

      $emp_user = $this->db->get()->result();*/


      /*$this->db->distinct();
      $this->db->select("mission.client_id as user_id,users.first_name,users.last_name,users.picture_url");
      $this->db->from('mission');
      $this->db->join('users','mission.client_id = users.id');
      $this->db->where('mission.user_id',$client_id);

      $cli_user = $this->db->get()->result();*/

      $ar_meregee = array_merge($emp_user,$cli_user,$discuss_user,$discuss_user1);
      

     // print_r($ar_meregee);

      foreach ($ar_meregee as  $value) {
         $users_list[] = $value->user_id;
      }


$users_list = array_diff($users_list, array($client_id));
     

      


$this->db->distinct();
      $this->db->select("users.id,users.first_name,users.last_name,users.picture_url");
      $this->db->from('users');
      //$this->db->join('users','mission.client_id = users.id');
      $this->db->where_in('users.id',$users_list);
       $this->db->order_by('users.chated_on', 'DESC');
 $user1_list = $this->db->get()->result();

/*$ar_meregee = array_map('json_encode', $ar_meregee);
$ar_meregee = array_unique($ar_meregee);
$ar_meregee = array_map('json_decode', $ar_meregee);*/

    /*  print_r($ar_meregee);
      exit();*/
    if($users_list){
      return $user1_list;
    }
    else {
      return array();
    }

      
    }

    public function fetchMyDemandByStatusId($user_id,$status)
    {
/*$this->db->select("mission.mission_id as id,mission.description,mission.mission_title,mission.mission_status,mission.created as date,CONCAT(users.first_name,' ',users.last_name) as Fullname,project_category.picture_url as category_image,project_category.title as category_title,project_offer.user_id as client_id ");*/

if($status == 0){
$this->db->select("mission.mission_id as id,mission.description,mission.mission_title,mission.mission_status,mission.created as date,CONCAT(users.first_name,' ',users.last_name) as Fullname,project_category.picture_url as category_image,project_category.title as category_title ");
}
else
{
  $this->db->select("mission.mission_id as id,mission.description,mission.mission_title,mission.mission_status,mission.created as date,CONCAT(users.first_name,' ',users.last_name) as Fullname,project_category.picture_url as category_image,project_category.title as category_title,project_offer.user_id as client_id ");
}

$this->db->from('mission');
$this->db->join('users','mission.client_id = users.id');
if($status != 0){
$this->db->join('project_offer','mission.mission_id = project_offer.project_id');
}
$this->db->join('project_category','mission.project_category = project_category.project_id');
$this->db->where('mission.mission_status',$status);
$this->db->where('mission.client_id',$user_id);
if($status != 0){
$this->db->where('project_offer.accept_status',1);
}
$this->db->order_by('mission.mission_id', 'DESC');


 return $this->db->get()->result();  

/*echo $str = $this->db->last_query();
exit();*/
    }


    public function getSingleMission($mission_id)
    {   
        $this->db->select("mission.mission_id as id,mission.mission_title,mission.mission_description,mission.mission_status,mission.created as date,project_category.picture_url as category_image,CONCAT(mission.mission_budget_currency,
        '',mission.mission_budget) as mission_budget,DATEDIFF(NOW(), mission.created) as duration,project_category.title as category_title,mission.mission_image as image,mission.mission_doc as file");
        $this->db->from('mission');
        $this->db->join('users','mission.user_id = users.id');
        $this->db->join('project_category','mission.mission_category = project_category.project_id');
        $this->db->where('mission.mission_id',$mission_id);
        $data = $this->db->get()->result();
   /*     echo $str = $this->db->last_query();
        exit();*/
        return $data;
    }


    public function acceptBidOffer($con)
    {
    	$update_data = array('status'=>1);
     	$this->db->where($con);
     	$this->db->update($this->bidding_table_name,$update_data);
   

     		return true;
     
    
     	
    }


    public function updateHighlight($user_id,$send_id)
    {
      $update_data = $send_id;
      $this->db->where('id',$user_id);
      $this->db->update($this->user_table_name,$update_data);
   

        return true;
     
    
      
    }
     public function getclientDetails($id)
    {
      $this->db->select("user_id");
      $this->db->from('project_offer');
      $this->db->where('offer_id',$id);
      $data = $this->db->get()->result();

    $data = $data[0]->user_id;
      return $data;

    }
public function updateacceptby($project_id,$user_id)
    {
      $update_data = array('accepted_by '=>$user_id);
          $con = array('mission_id'=>$project_id);
      $this->db->where($con);
      $this->db->update('mission',$update_data);
   

        return true;
     
    
      
    }

public function update_chat_time($sender_id,$project_status)
    {
      $update_data = array('chated_on '=>$project_status);
          $con = array('id'=>$sender_id);
      $this->db->where($con);
      $this->db->update('users',$update_data);
   

        return true;
     
    
      
    }

    public function not_satisfied_model($con)
    {
      $update_data = array('mission_status'=>1);
      $this->db->where('mission_id',$con);
      $this->db->update('mission',$update_data);
      if($this->db->affected_rows() > 0)
      {
        return true;
      }
      else 
      {
        return false;
      }
      
    }


    public function acceptOffer($con,$accept_status,$mission_id)
    {
      $update_data = array('status'=>1,'accept_status'=>1);
       $update_data1 = array('mission_status'=>0);

  

      $this->db->where('mission_id',$mission_id);

      $this->db->update('mission',$update_data1);

            $this->db->where($con);
      $this->db->update($this->project_offer_table_name,$update_data);


      /*if($this->db->affected_rows() > 0)
      {*/
        return true;
     /* }
      else 
      {
        return false;
      }*/
        

    }
    


    public function acceptOfferafter($mission_id)
    {
      //$update_data = array('status'=>1,'accept_status'=>1);
       $update_data1 = array('mission_status'=>1);
     // $this->db->where($con);
     // $this->db->update($this->project_offer_table_name,$update_data);
  

  $this->db->where('mission_id',$mission_id);

      $this->db->update('mission',$update_data1);


      if($this->db->affected_rows() > 0)
      {
        return true;
      }
      else 
      {
        return false;
      }
        

    }

    public function getUserReviews($user_id)
    {
        $this->db->select("user_review.id,user_review.to_user_id,user_review.rating,user_review.comment,user_review.created,CONCAT(users.first_name,' ',users.last_name) as Review_by,");
        $this->db->from('user_review');
        $this->db->join('users','user_review.by_user_id = users.id');
        // $this->db->join('users','user_review.from_user_id = users.id');
        $this->db->where('to_user_id',$user_id);
        $data = $this->db->get()->result();
        return $data;

    }


    public function getUserDetail($user_id)
    {
      $this->db->select("CONCAT(first_name,' ',last_name) as full_name,picture_url");
      $this->db->from('users');
      $this->db->where('id',$user_id);
      $data = $this->db->get()->row();
      return $data;

    }


    public function GetUserProfile($user_id){
     $this->db->select("users.picture_url,users.first_name,users.about,users.level_of_study,users.Field_of_study,users.university,users.skills,project_category.title");
     $this->db->from('users');
     $this->db->join('project_category','users.intrested_category = project_category.project_id');
     $this->db->where('users.id',$user_id);
     $data = $this->db->get()->row();
     return $data;
    }


    public function getPaymentIn($user_id)
    {
      $this->db->select("transaction.*");
      $this->db->from('transaction');

      $this->db->where('transaction.sent_to',$user_id);
      $this->db->order_by('transaction.id', 'DESC');
      $data = $this->db->get()->result();
      foreach ($data as $value) {

      $sent_from = $value->sent_from;
      $this->db->select("username");
      $this->db->from('users');
      $this->db->where('id',$sent_from);
      $data_sent_from = $this->db->get()->result();
      $sent_from_username = $data_sent_from[0]->username;

      $sent_to = $value->sent_to;
      $this->db->select("username");
      $this->db->from('users');
      $this->db->where('id',$sent_to);
      $data_sent_to = $this->db->get()->result();
      $sent_to_username = $data_sent_to[0]->username;


      $mission_id = $value->mission_id;
      $this->db->select("mission_title");
      $this->db->from('mission');
      $this->db->where('mission_id',$mission_id);
      $mission_title = $this->db->get()->result();
      $mission_title1 = $mission_title[0]->mission_title;

      $student_one[] = array("id"=>$value->id, "sent_from"=>$value->sent_from,   
                  "sent_to"=>$value->sent_to, "amount"=>$value->amount,   
                  "tra_id"=>$value->tra_id, "created_date"=>$value->created_date, "username"=>$value->username, "project_title"=>$mission_title1, "sent_from_username"=>$sent_from_username, "sent_to_username"=>$sent_to_username);


      }

      return $student_one;

    }

     public function inserransection($data)
    {
        $this->db->insert('transaction',$data);
        $response['status'] = true;
        $response['message'] = 'Inserted Successfully';
        return $response;
    }
public function withdrawpayment($data)
    {
        $this->db->insert('withdrawpayment',$data);
        $response['status'] = true;
        $response['message'] = 'Inserted Successfully';
        return $response;
    }
    public function gettokendata($user_id)
    {
      $this->db->select("auth_token");
      $this->db->from('users');
      $this->db->where('id',$user_id);
      $data = $this->db->get()->result();
      //echo $str = $this->db->last_query();
      $dta=  $data[0]->auth_token;
//print_r($data);


      return $dta;

    }

    public function getPaymentOut($user_id)
    {
/*      $this->db->select("*");
      $this->db->from('transaction');
      $this->db->where('sent_from',$user_id);
      $data = $this->db->get()->result();
      foreach ($data as $value) {*/

      $this->db->select("transaction.*");
      $this->db->from('transaction');
      $this->db->join('mission','transaction.mission_id = mission.mission_id');
      $this->db->where('transaction.sent_from',$user_id);
      $this->db->where('mission.mission_status',3);  
      $this->db->order_by('transaction.id', 'DESC'); 
      $data = $this->db->get()->result();
/*      echo $str = $this->db->last_query();
exit();*/
      foreach ($data as $value) {

      $sent_from = $value->sent_from;
      $this->db->select("username");
      $this->db->from('users');
      $this->db->where('id',$sent_from);
      $data_sent_from = $this->db->get()->result();
      $sent_from_username = $data_sent_from[0]->username;

      $sent_to = $value->sent_to;
      $this->db->select("username");
      $this->db->from('users');
      $this->db->where('id',$sent_to);
      $data_sent_to = $this->db->get()->result();
      $sent_to_username = $data_sent_to[0]->username;

      $mission_id = $value->mission_id;
      $this->db->select("mission_title");
      $this->db->from('mission');
      $this->db->where('mission_id',$mission_id);
      $mission_title = $this->db->get()->result();
      $mission_title1 = $mission_title[0]->mission_title;

      $student_one[] = array("id"=>$value->id, "sent_from"=>$value->sent_from,   
                  "sent_to"=>$value->sent_to, "amount"=>$value->amount,   
                  "tra_id"=>$value->tra_id, "created_date"=>$value->created_date, "username"=>$value->username, "project_title"=>$mission_title1, "sent_from_username"=>$sent_from_username, "sent_to_username"=>$sent_to_username);


      }
      return $student_one;

    }

    public function missionAmount($mission_id)
    {
      $this->db->select("mission.mission_id,project_offer.offer_budget as mission_budget,mission.bank_fee");
      $this->db->from('mission');
      $this->db->join('project_offer','mission.mission_id = project_offer.project_id');
      $this->db->where('mission.mission_id',$mission_id);
      $data = $this->db->get()->result();
      return $data;

    }


public function addchatimg($app)

  {

     if(!empty($app))

      {

        $this->db->insert('chat_image',$app);
$insert_id = $this->db->insert_id();

       $this->db->select("*");
      $this->db->from('chat_image');
      $this->db->where('id',$insert_id);
      $data = $this->db->get()->result();
      return $data;

       //return true;

      }

  }


  public function deleteImageId($id){
        $this->db->where('id',$id);
      $activity =  $this->db->delete('chat_image');
 return $activity;
      }


      public function addvoicefile($app)

  {

     if(!empty($app))

      {

        $this->db->insert('chat_files',$app);
$insert_id = $this->db->insert_id();

       $this->db->select("*");
      $this->db->from('chat_files');
      $this->db->where('id',$insert_id);
      $data = $this->db->get()->result();
      return $data;

       //return true;

      }

  }


  public function deletevoicefileId($id){
        $this->db->where('id',$id);
      $activity =  $this->db->delete('chat_files');
 return $activity;
      }

       public function adddelivered($mission_id)
    {
      //$update_data = array('status'=>1,'accept_status'=>1);
       $update_data1 = array('mission_status'=>2);
     // $this->db->where($con);
     // $this->db->update($this->project_offer_table_name,$update_data);
  

  $this->db->where('mission_id',$mission_id);

      $this->db->update('mission',$update_data1);


      if($this->db->affected_rows() > 0)
      {
        return true;
      }
      else 
      {
        return false;
      }
        

    }





public function addcompleted($mission_id)
    {
      //$update_data = array('status'=>1,'accept_status'=>1);
       $update_data1 = array('mission_status'=>3);
     // $this->db->where($con);
     // $this->db->update($this->project_offer_table_name,$update_data);
  

  $this->db->where('mission_id',$mission_id);

      $this->db->update('mission',$update_data1);


      if($this->db->affected_rows() > 0)
      {
        return true;
      }
      else 
      {
        return false;
      }
        

    }

     public function add_card_details($app)

  {

     if(!empty($app))

      {

        $this->db->insert('card_details',$app);
$insert_id = $this->db->insert_id();

       $this->db->select("*");
      $this->db->from('card_details');
      $this->db->where('id',$insert_id);
      $data = $this->db->get()->result();
      return $data;

       //return true;

      }

  }


public function update_card_details($card_id,$data)
    {
    
  

      $this->db->where('id',$card_id);

      $this->db->update('card_details',$data);
 


      if($this->db->affected_rows() > 0)
      {

        return true;
      }
      else 
      {
        return false;
      }
        

    }

    public function delete_card_details($id){
        $this->db->where('id',$id);
      $activity =  $this->db->delete('card_details');
 return $activity;
      }


public function get_card_details($id)
    {
      $this->db->select("*");
      $this->db->from('card_details');
      $this->db->where('user_id',$id);
      $data = $this->db->get()->result();
      return $data;

    }

    public function get_users_stripe_details($id)
    {
      $this->db->select("stripe_customer_id");
      $this->db->from('users');
      $this->db->where('id',$id);
      $data = $this->db->get()->result();
       $data_stripe = $data[0]->stripe_customer_id;

      return $data_stripe;

    }

    public function get_users_stripe_details_test($id)
    {
      $this->db->select("stripe_card_id");
      $this->db->from('users');
      $this->db->where('id',$id);
      $data = $this->db->get()->result();
       $data_stripe = $data[0]->stripe_card_id;

      return $data_stripe;

    }

    public function get_users_stripe_details_username($id)
    {
      $this->db->select("username");
      $this->db->from('users');
      $this->db->where('id',$id);
      $data = $this->db->get()->result();
       $data_stripe = $data[0]->stripe_customer_id;

      return $data_stripe;

    }

     public function get_users_stripe_details1($id)
    {
      $this->db->select("stripe_customer_id,stripe_card_id");
      $this->db->from('users');
      $this->db->where('id',$id);
      $data = $this->db->get()->result();
      

      return $data;

    }


    public function get_users_stripe_card_($id)
    {
      $this->db->select("name_on_card");
      $this->db->from('users');
      $this->db->where('id',$id);
      $data = $this->db->get()->result();
      

      return $data;

    }

    public function update_customer_stripe($user_id,$data)
    {
        $this->db->where('id',$user_id);

      $this->db->update('users',$data);
/* echo $str = $this->db->last_query();
exit();*/

      if($this->db->affected_rows() > 0)
      {

        return true;
      }
      else 
      {
        return false;
      }
    }


public function insert_customer_name($user_id,$data)
    {
        $this->db->where('id',$user_id);

      $this->db->update('users',$data);
 


      if($this->db->affected_rows() > 0)
      {

        return true;
      }
      else 
      {
        return false;
      }
    }

    public function update_mission_satisfy($user_id,$data)
    {
        $this->db->where('id',$user_id);

      $this->db->update('users',$data);
 


      if($this->db->affected_rows() > 0)
      {

        return true;
      }
      else 
      {
        return false;
      }
    }

      public function update_notification_status($user_id,$type_id,$data)
    {
        $this->db->where('user_id',$user_id);

        $this->db->where('type_id',$type_id);

      $this->db->update('notification',$data);
/*       echo $str = $this->db->last_query();
       exit();*/
    /*  if($this->db->affected_rows() > 0)
      {*/

        return true;
    /*  }
      else 
      {
        return false;
      }*/
    }  



public function update_wallet_amount($user_id,$data)
    {
        $this->db->where('id',$user_id);

      $this->db->update('users',$data);
 


      if($this->db->affected_rows() > 0)
      {

        return true;
      }
      else 
      {
        return false;
      }
    }



    public function change_project_status($user_id,$data)
    {
        $this->db->where('mission_id',$user_id);

      $this->db->update('mission',$data);
 


      if($this->db->affected_rows() > 0)
      {

        return true;
      }
      else 
      {
        return true;
      }
    }

    public function get_update_mission_satisfy($id)
    {
      $this->db->select("satisfy");
      $this->db->from('mission');
      $this->db->where('mission_id',$id);
      $data = $this->db->get()->result();
    
      return $data;

    }

    public function getclient_iddata($id)
    {
      $this->db->select("client_id");
      $this->db->from('mission');
      $this->db->where('mission_id',$id);
      $data = $this->db->get()->result();

    $data = $data[0]->client_id;
      return $data;

    }

     public function get_wallet_balance($id)
    {
      $this->db->select("walet_balance");
      $this->db->from('users');
      $this->db->where('id',$id);
      $data = $this->db->get()->result();

    $data = $data[0]->walet_balance;
      return $data;

    }


    


    public function get_amount($id)
    {


      $this->db->select("mission.mission_id,project_offer.offer_budget");
      $this->db->from('mission');
      $this->db->join('project_offer','mission.mission_id= project_offer.project_id');
      $this->db->where('mission_id',$id);
      $this->db->where('mission.accepted_by != ', 0);

      $data = $this->db->get()->result();

    $data = $data[0]->offer_budget;
      return $data;

    }
public function get_mission_budget($id)
    {


      $this->db->select("mission.mission_id,project_offer.offer_budget,mission.budget");
      $this->db->from('mission');
      $this->db->join('project_offer','mission.mission_id= project_offer.project_id');
      $this->db->where('mission_id',$id);
      $this->db->where('mission.accepted_by != ', 0);

      $data = $this->db->get()->result();

    //$data = $data[0]->offer_budget;
      return $data;

    }

    
}
