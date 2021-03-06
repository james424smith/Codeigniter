<?php
class Posts_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function auth_check($data_services)
    {
        $query = $this->db->get_where('posts', $data_services);
        if ($query)
        {
            return $query->row();
        }
        return false;
    }
   

    // Display Services
    function display_services_post()
    {
        $query = $this->db->query("select * from project_category order by project_id");
        return $query->result();
    }
    function display_services_missions()
    {
        $id =$this->session->userdata['id'];
        if($id)
        {
            //var_dump("ddd");die();
            $query = $this->db->query("select * from mission where client_id!=". $id ." and accepted_by=0 order by mission_id desc");
            return $query->result();
        }
        else
        {    
            //var_dump("eee");die();    
            $query = $this->db->query("select * from mission where accepted_by=0 order by mission_id desc");
            return $query->result();
        }
    }

    public function get_count() {
         //$this->db->where('mission_id',$id);
        //$cat = 

        return $this->db->count_all('mission');
    }
     public function get_cat_count($id) {
         $this->db->where('mission_category',$id);
        //$cat = 

        return $this->db->count_all('mission');
    }
    
     public function display_cate_data($limit,$start,$cat_id)
    {
        $id =$this->session->userdata['id'];
        //$query = $this->db->query("select * from mission  order by mission_id");
        $this->db->select('*');
        $this->db->from('mission');
        $this->db->where('client_id != ', $id);
         $this->db->where('mission_category',$cat_id);
        $this->db->order_by('mission_id');
        $this->db->limit($limit,$start);
        //print_r();die();
        $query=$this->db->get()->result_array();
        return $query;

    }

    function display_alldemand($cat_id, $limit, $start)
    {
        $id =$this->session->userdata['id'];
        //$query = $this->db->query("select * from mission  order by mission_id");
        $this->db->select('*');
        $this->db->from('mission');
        $this->db->where('client_id != ', $id);
        $this->db->where('accepted_by = ', 0);
        if($cat_id)
        {
            $this->db->where('mission_category', $cat_id);
        }
        $this->db->order_by('mission_id', 'DESC');
        $this->db->limit($limit, $start);
        //print_r();die();
        $query = $this->db->get()->result_array();
        return $query;
    }

    function count_display_alldemand($cat_id)
    {
        $id =$this->session->userdata['id'];
        //$query = $this->db->query("select * from mission  order by mission_id");
        $this->db->select('*');
        $this->db->from('mission');
        $this->db->where('client_id != ',$id);
        $this->db->where('accepted_by = ', 0);
        if($cat_id)
        {
        $this->db->where('mission_category', $cat_id);
    }
        $this->db->order_by('mission_id');
        
        //print_r();die();
        $query=$this->db->get()->result_array();
        return count($query);

    }

    public function demand($project_data){

        $this->db->insert('mission', $project_data);
        
        return true;
    }
    public function mission($project_data){

        $this->db->insert('project_offer', $project_data);
        //var_dump($project_data);die();
        $update_data = array(
            'mission_budget' => $project_data['offer_budget']
        );
        //var_dump($update_data);die();
        $this->db->where('mission_id', $project_data['project_id']);
        $this->db->where('client_id', $project_data['client_id']);
        $this->db->update('mission', $update_data);
        //var_dump($status);die();
        return true;
    }

    public function mission_update ($mission_id, $message, $offer_budget) {
 
        //var_dump($offer_budget);die();
        $this->db->set("mission_budget", $offer_budget);
        $this->db->where("mission_id", $mission_id);
        $this->db->update("mission");

        $this->db->select("*");
        $this->db->from("mission");
        $this->db->where("mission_id", $mission_id);
        $mission = $this->db->get()->row();

        //var_dump($mission);die();

        $update_data = array(
            "message" => $message,
            "offer_budget" => $offer_budget
        );

        $this->db->where("project_id", $mission_id);
        $this->db->where("client_id", $mission->client_id);
        $this->db->update("project_offer", $update_data);

    }
    public function fetchofferedmission($user_id)
    {
      $this->db->select("project_id");
      $this->db->from('project_offer');
      $this->db->where('user_id', $user_id);
      $offered_id_array = $this->db->get()->result();
      //echo ($this->db->last_query());die();
      
      foreach ($offered_id_array as $value) {
        $test_offer[] = $value->project_id;
      }
      //var_dump($test_offer);
      //$offer_ids = implode(",", $test_offer);
      
      return $test_offer;
      
    }
     public function mymission($myofferedmission) {

        if($myofferedmission == null)
            return null;
        $this->db->select('mission.*,users.username');
        $this->db->from('mission');        
        $this->db->join('users','users.id = mission.client_id');
        $this->db->where_in('mission.mission_id', $myofferedmission);
        $this->db->order_by("mission_id", "Desc");
        $result= $this->db->get()->result_array();
        //var_dump($result);
        
        return $result;
    }

    function display_cat()
    {
        $query = $this->db->query("select * from project_category  order by project_id");
        return $query->result_array();
    }

    public function inprogress_mission($project_data){

        $update = $this->db->insert('project_status', $project_data);

        if($project_data['project_status'] == 2) {
  
            $update_data = array(
                'mission_status' => 2,
            );    
            $this->db->where('mission_id', $project_data['project_id']);
            $this->db->where('accepted_by', $project_data['user_id']);
            $this->db->where('client_id', $project_data['client_id']);
            $this->db->update('mission', $update_data);
        }
        return true;
    }

    public function deliver_mission() {
        
        $this->db->insert('litigations', $project_data);
        return true;
   }

    public function mydemand($status){

        $this->db->select('*');
        $this->db->from('mission');
        $this->db->join('users', 'users.id = mission.client_id');
        $this->db->where('client_id', $this->session->userdata['id']);
        //$this->db->where('mission_status',$status);
        $this->db->order_by("mission_id","Desc");
        $result= $this->db->get()->result_array();
        //print_r($this->db->last_query());die();
        //var_dump($result); die();

        // $this->db->insert('project_offer',$project_data);
        
        return $result;
    }
    public function demand_posted($project) {

        $this->db->select('project_offer.*, users.username,users.picture_url');
        $this->db->from('project_offer'); 
        // $this->db->where('client_id',$this->session->userdata['id']);
        $this->db->join('users','users.id = project_offer.user_id');
        $this->db->where('project_offer.project_id', $project);
        $this->db->order_by('Profile_Rate', 'DESC');
        $result= $this->db->get()->result_array();           
        return $result;
    }

    public function mission_posted($project, $user_id){

        $this->db->select('project_offer.*,users.username,users.picture_url');
        $this->db->from('project_offer'); 
        // $this->db->where('client_id',$this->session->userdata['id']);
        $this->db->join('users','users.id = project_offer.user_id');
        $this->db->where('project_offer.project_id', $project);
        $this->db->where('project_offer.user_id',$user_id);
        $result= $this->db->get()->result_array();           
        
        return $result;
    }
    public function demand_posted2($project){

        $this->db->select('project_offer.*,users.username,users.picture_url');
        $this->db->from('project_offer'); 
        // $this->db->where('client_id',$this->session->userdata['id']);
        $this->db->join('users','users.id = project_offer.user_id');
        $this->db->where('project_offer.project_id', $project);
        $result= $this->db->get()->result_array();           
            
        return $result;
    }
    public function demand_posted3($project){

        $this->db->select('project_offer.*,users.username,users.picture_url');
        $this->db->from('project_offer'); 
        // $this->db->where('client_id',$this->session->userdata['id']);
        $this->db->join('users','users.id = project_offer.user_id');
        $this->db->where('project_offer.project_id',$project);
        
        $this->db->order_by("project_offer.created_date", "DESC");
        $result= $this->db->get()->result_array();           
        // /echo ($this->db->last_query());die();
        return $result;
    }

    public function offeraccept($user_id){
        $data= array('accept_status' => 2);
        $this->db->set($data);
        $this->db->where('user_id', $user_id);
        $status = $this->db->update('project_offer');

        if($status) {
            $data= array('mission_status' => 1);
            $this->db->set($data);
            $this->db->where('user_id', $user_id); 
            $this->db->update('mission');
            return true ;
        }
        else {
                return false ;
        }           
    }
    
        public function deliver_demand($project_data, $user_id) {
            //$this->db->select("*");
            //$this->db->from('litigations');
            //$this->db->where('project_id', $project_data['project_id']);
            //$this->db->where('opener_id', $project_data['opener_id']);
            //$this->db->where('opponent_id', $project_data['opponent_id']);
            //$this->db->where('before_status', 4);
            //$this->db->where('open_close_status', 1);
            //$count = $this->db->get()->num_rows();
            //var_dump($count);die();
            if($project_data['before_status'] == 4)
            {
                return false;
            }
            $this->db->insert('litigations', $project_data);
            $data= array('mission_status' => 4);
            $this->db->set($data);
            $this->db->where('accepted_by', $user_id); 
            $this->db->where('mission_id', $project_data['project_id']);
            $this->db->update('mission');
            return true;
        }

        public function deliver_askmodify($data, $mission_id){
            //print_r($mission_id);die();

            $this->db->set($data);
            $this->db->where('mission_id', $mission_id);
            $status = $this->db->update('mission');
            
             return true ;
        }
        public function saveRating($rating_data)
        {
            $status = $this->db->insert('user_review', $rating_data);
        }
        
        public function isDisputeOpener($missonId, $user_id){
            //var_dump($user_id);die();
            $this->db->select("*");
            $this->db->from("litigations");
            $this->db->where('project_id', $missonId);
            $this->db->where('opener_id', $user_id);
            $this->db->where('open_close_status', 1);
            $count1 = $this->db->get()->num_rows();

            $this->db->select("*");
            $this->db->from("litigation_permission");
            $this->db->where('mission_id', $missonId);
            $this->db->where('user_id', $user_id);
            $count2 = $this->db->get()->num_rows();

            if($count1 > 0 && $count2 == 0)
                return true;
            return false;
        }
        public function setCloseDispute($mission_Id, $openerId)
        {
            $this->db->select("before_status");
            $this->db->from("litigations");
            $this->db->where('project_id', $mission_Id);
            $this->db->where('opener_id', $openerId);
            $before_status = $this->db->get()->row()->before_status;

            $data = array("open_close_status" => 0);
            $this->db->where('project_id', $mission_Id);
            $this->db->where('opener_id', $openerId);
            $this->db->update('litigations', $data);

            $mission_status_update = array("mission_status" => $before_status);
            $this->db->where('mission_id', $mission_Id);
            $this->db->update('mission', $mission_status_update);

            $permission_data = array(
                'mission_id' => $mission_Id,
                'user_id' => $openerId
            );
            $this->db->insert('litigation_permission', $permission_data);
        }


        public function deliver_paym_demand($project_data){

            $status = $this->db->insert('withdrawpayment', $project_data);

            if($status) {
                $this->db->set('mission_status', 3);
                $this->db->where('mission_id', $project_data['mission_id']);
                $status = $this->db->update('mission');
                
                $this->db->select("*");
                $this->db->from('mission'); 
                $this->db->where('mission_id', $project_data['mission_id']);
                $mission = $this->db->get()->row();
                
                $this->db->select("*");
                $this->db->from('users'); 
                $this->db->where('id', $mission->accepted_by);
                $accepted_user = $this->db->get()->row();

                //var_dump($mission);die();
               
                $ballence = $accepted_user->Current_Balance + $mission->mission_budget * 88 / 100;
                $total_earned_amount = $accepted_user->Total_earned_amount + $mission->mission_budget;
                //var_dump($mission->offer_budget);die();
                $employee_user_update_data = array(
                    'Current_Balance' => $ballence,
                    'Total_earned_amount' => $total_earned_amount
                );
                $this->db->set($employee_user_update_data);
                $this->db->where('id', $mission->accepted_by);
                $status = $this->db->update('users');
                
                $this->db->select("*");
                $this->db->from('users'); 
                $this->db->where('id', $this->session->userdata['id']);
                $employer_user = $this->db->get()->row();
                
                $total_spent = $employer_user->spent + $mission->mission_budget;
                $this->db->set('spent', $total_spent);
                $this->db->where('id', $this->session->userdata['id']);
                $status = $this->db->update('users');
                

                $update_data = array(
                    'created_date' => $project_data['date_created'],
                    'status' => 1
                );
                $this->db->set($update_data);
                $this->db->where('mission_id', $project_data['mission_id']);
                $this->db->where('sent_to', $mission->accepted_by);
                $status = $this->db->update('transaction');

                return true;
            }
            else {
                return false;  
            }
        }
        public function inprogress_pay_demand ($project_data){
            $status = $this->db->insert('withdrawpayment',$project_data);
            if($status){
                $this->db->set('mission_status', 2);
                $this->db->where('mission_id', $project_data['mission_id']);
                $status = $this->db->update('mission');
                return true;
            }
            else {
                return false;  
            }
        }
        
        public function selectAvgOfRating($user_id)
        {
            $this->db->select("rating");
            $this->db->from('user_review');
            $this->db->where('to_user_id', $user_id);
            $data = $this->db->get();

            //$count = $data->num_rows();
            $data = $data->result();
            return $data;
        } 

        public function GetNotification($type_id){
            $this->db->select('*');
            $this->db->from('notification');
            $this->db->where('user_id', $this->session->userdata['id']);
            $this->db->where('type_id', $type_id);
            $this->db->order_by('notification_id', 'DESC');

            //$this->db->where('read_status', 0);
            $result = $this->db->get()->result_array();
            return $result;
        }

        public function SetNotificaion_Read($type_id) {

            if($type_id == 4)
            {
                $data = array(
                    "notification" => "You read the message.",
                    'read_status' => 1
                );
                $this->db->set($data);
            }
            else {
                $this->db->set('read_status', 1);
            }
            $this->db->where('user_id', $this->session->userdata['id']);
            $this->db->where('type_id', $type_id);
            $this->db->update('notification');
            return true;
        }

        public function pushNotification($user_id, $type_id, $notification_msg)
        {    
            $date_created = date('Y-m-d H:i:s');
            $data = array(
                "user_type" => 1,
                "user_id" => $user_id,
                "demand_id" => 1,
                "notification" => $notification_msg,
                "read_status" => 0,
                "created" => $date_created,
                "type_id" => $type_id
            );
            //var_dump($data); die();
            $this->db->insert('notification', $data);
            return true;
        }
        public function pushNotificationoffer($user_id, $project_id, $type_id, $notification_msg)
        {    
            $date_created = date('Y-m-d H:i:s');
            $data = array(
                "user_type" => $project_id,
                "user_id" => $user_id,
                "demand_id" => 1,
                "notification" => $notification_msg,
                "read_status" => 0,
                "created" => $date_created,
                "type_id" => $type_id
            );
            //var_dump($data); die();
            $this->db->insert('notification', $data);
            return true;
        }
        public function checkMission($offer_data = array()) {
            if(!empty($offer_data)) {
                $this->db->select('*');
                $this->db->from('project_offer');
                $this->db->where('user_id', $offer_data['user_id']);
                $this->db->where('project_id', $offer_data['project_id']);
                $resultArray = $this->db->get();
                $resultCheck = $resultArray->num_rows();
            }

            if($resultCheck > 0)
                return true;
            return false;
        }

        public function getRatingData($id) {

            $this->db->select("*");
            $this->db->from("user_review");
            $this->db->where("to_user_id", $id);
            $query = $this->db->get();
            return $query->result_array();
        }
}
?>
