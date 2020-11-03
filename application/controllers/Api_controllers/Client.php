<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
// Load the Rest Controller library
    require(APPPATH.'/libraries/REST_Controller.php');
    require(APPPATH.'/libraries/stripe/vendor/autoload.php');

class Client extends REST_Controller 
{

    public function __construct()
    {
		parent::__construct();
		$this->load->model('Api_models/ClientApiModel');
		$this->load->model('Api_models/DemandApiModel');
    } 


    public function getYourProjectList_post()
    {
    	// $project_id = strip_tags($this->post('project_id'));
    	$client_id = strip_tags($this->post('client_id')); 

         
    	$client_projects = $this->ClientApiModel->getClientProjectList($client_id);

        if($client_projects)
        {
			$this->response([
			'status' => TRUE,
			'message' => $this->lang->line('your projects list'),
			'your_projects'=>$client_projects,
			], REST_Controller::HTTP_OK);
    	}

    	else 
    	{
         	$this->response([
			'status' => false,
			'message' => $this->lang->line('Projects not found'),
			], REST_Controller::HTTP_OK);
    	}

    }



    // public function getDemandTitle_get()
    // {
        
    // }
    

    public function findMissionList_get()
    {
        $mission = $this->ClientApiModel->getClientMissionList();

        for($i=0;$i<count($mission);$i++)
        {
            if($mission[$i]->duration == 0)
            {
                $mission[$i]->duration = 'today';   
            }
            else
            {
                $mission[$i]->duration = $mission[$i]->duration.' '.'days ago';    
            }
            
        }

        if(!empty($mission))
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('your missions list'),
            'your_missions'=>$mission,
            ], REST_Controller::HTTP_OK);
        }

        else 
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('missions not found'),
            
            ], REST_Controller::HTTP_OK);
        }
        
    }

    public function findMissionListbyid_post()
    {
        $client_id=strip_tags($this->post('client_id'));
        $category_id=strip_tags($this->post('category_id'));
        $mission = $this->ClientApiModel->getClientMissionbyidList($category_id,$client_id);

        for($i=0;$i<count($mission);$i++)
        {
            if($mission[$i]->duration == 0)
            {
                $mission[$i]->duration = 'today';   
            }
            else
            {
                $mission[$i]->duration = $mission[$i]->duration.' '.'days ago';    
            }
            
        }

        if(!empty($mission))
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('your missions list'),
            'your_missions'=>$mission,
            ], REST_Controller::HTTP_OK);
        }

        else 
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('missions not found'),
            
            ], REST_Controller::HTTP_OK);
        }
        
    }

    public function myMission_post()
    {
        $status = strip_tags($this->post('status'));
        $user_id = strip_tags($this->post('user_id'));
        $myofferedmission = $this->ClientApiModel->fetchofferedmission($user_id);
        $filtered_mission = $this->ClientApiModel->fetchMyMissionByStatusId($myofferedmission,$status,$user_id);
        
        for($i=0;$i<count($filtered_mission);$i++)
        {
           $filtered_mission[$i]->by = $filtered_mission[$i]->first_name.' '.$filtered_mission[$i]->last_name  ;
           unset($filtered_mission[$i]->first_name);
           unset($filtered_mission[$i]->last_name);
        }

        if(!empty($filtered_mission))
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('your missions list'),
            'your_missions'=>$filtered_mission,
            ], REST_Controller::HTTP_OK);
        }

        else 
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('missions not found'),
            
            ], REST_Controller::HTTP_OK);
        }
        
    }



    public function myMissionbidbyid_post()
    {
        $mission_id = strip_tags($this->post('mission_id'));
        $mission_by_bid = $this->ClientApiModel->fetchMyMissionbidById($mission_id);

         for($i=0;$i<count($mission_by_bid);$i++)
        {
            if($mission_by_bid[$i]->duration == 0)
            {
                $mission_by_bid[$i]->duration = 'today';   
            }
            else
            {
                $mission_by_bid[$i]->duration = $mission_by_bid[$i]->duration.' '.'days ago';    
            }
            
        }
        
        if(!empty($mission_by_bid))
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('Bid list on missions'),
            'your_missions'=>$mission_by_bid,
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






    public function singleMission_post()
    { 
        $mission_id = strip_tags($this->post('mission_id'));
        $single_mission = $this->ClientApiModel->getSingleMission($mission_id);

         for($i=0;$i<count($single_mission);$i++)
        {
            if($single_mission[$i]->duration == 0)
            {
                $single_mission[$i]->duration = 'today';   
            }
            else
            {
                $single_mission[$i]->duration = $single_mission[$i]->duration.' '.$this->lang->line('day ago');    
            }
            
        }

        if(!empty($single_mission))
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('your missions'),
            'your_missions'=>$single_mission,
            ], REST_Controller::HTTP_OK);
        }

        else 
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('missions not found'),
            
            ], REST_Controller::HTTP_OK);
        }
        
    }

public function singleMissionViewDetails_post()
    { 
        $mission_id = strip_tags($this->post('mission_id'));
        $single_mission = $this->ClientApiModel->getSingleMission($mission_id);
        $upload_document_link = "<?php echo base_url();?>uploads/demands_documents/";

         for($i=0;$i<count($single_mission);$i++)
        {
            if($single_mission[$i]->duration == 0)
            {
                $single_mission[$i]->duration = 'today';   
            }
            else
            {
                $single_mission[$i]->duration = $single_mission[$i]->duration.' '.$this->lang->line('day ago');    
            }
            
        }

        if(!empty($single_mission))
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('your missions'),
            'your_missions'=>$single_mission,
            'upload_link' => $upload_document_link,
            ], REST_Controller::HTTP_OK);
        }

        else 
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('missions not found'),
            
            ], REST_Controller::HTTP_OK);
        }
        
    }


    public function addReviewToUser_post()
    {
        $from_user_id = strip_tags($this->post('client_user_id'));
        $to_user_id = strip_tags($this->post('my_user_id'));
        $rating = strip_tags($this->post('rating'));
        $comment = strip_tags($this->post('comment'));

        $comment_notification = "Review: " . $comment;

        $add_review = array('by_user_id'=>$from_user_id,'to_user_id'=>$to_user_id,'rating'=>$rating,'comment'=>$comment);
        $result = $this->ClientApiModel->addReviewUsers($add_review);
        if($result['status'])
        {

         $taken_data = $this->ClientApiModel->gettokendata($to_user_id);

        $this->firebase->send_notification($comment_notification ,$taken_data);

        $this->firebase->insertMessage(array('user_id'=>$to_user_id,'notification'=>$comment_notification,'type_id'=>5));

             $this->response([
            'status' => TRUE,
            'message' => $result['message'],
            ], REST_Controller::HTTP_OK);
        }

        else
        {
             $this->response([
            'status' => TRUE,
            'message' =>'Unable To Insert'
            ], REST_Controller::HTTP_OK);
        }
    }


   
 public function adddiscussuser_post()
    {
        $reciver_id = strip_tags($this->post('reciver_id'));
        $sender_id = strip_tags($this->post('sender_id'));
        

        $add_discuss = array('reciver_id'=>$reciver_id,'sender_id'=>$sender_id);
        $result = $this->ClientApiModel->add_discuss($add_discuss);
        if($result['status'])
        {

             $this->response([
            'status' => TRUE,
            'message' => $result['message'],
            ], REST_Controller::HTTP_OK);
        }

        else
        {
             $this->response([
            'status' => TRUE,
            'message' =>'Unable To Insert'
            ], REST_Controller::HTTP_OK);
        }
    }
   /* public function addReviewToUser_post()
    {
        $from_user_id = strip_tags($this->post('from_user_id'));
        $to_user_id = strip_tags($this->post('to_user_id'));
        $rating = strip_tags($this->post('rating'));
        $comment = strip_tags($this->post('comment'));

        $add_review = array('by_user_id'=>$from_user_id,'to_user_id'=>$to_user_id,'rating'=>$rating,'comment'=>$comment);
        $result = $this->ClientApiModel->addReviewUsers($add_review);
        if($result['status'])
        {
             $this->response([
            'status' => TRUE,
            'message' => $result['message'],
            ], REST_Controller::HTTP_OK);
        }

        else
        {
             $this->response([
            'status' => TRUE,
            'message' =>'Unable To Insert'
            ], REST_Controller::HTTP_OK);
        }
    }*/


    public function myDemandList_post()
    {
        $status = strip_tags($this->post('status'));
        $user_id = strip_tags($this->post('user_id'));
        $filtered_demand = $this->ClientApiModel->fetchMyDemandByStatusId($user_id,$status);


        if(!empty($filtered_demand))
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('your demand list'),
            'data'=>$filtered_demand,
            ], REST_Controller::HTTP_OK);
        }

        else 
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('missions not found'),
            ], REST_Controller::HTTP_OK);
        }

    }

    public function progress_report_post()
    {
        $status = strip_tags($this->post('status'));
        $filtered_demand = $this->ClientApiModel->fetchMyDemandByStatusId($status);
        if(!empty($filtered_demand))
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('your demand list'),
            'data'=>$filtered_demand,
            ], REST_Controller::HTTP_OK);
        }

        else 
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('missions not found'),
            ], REST_Controller::HTTP_OK);
        }

    }

    public function acceptUserOffer_post()
    {
    	$validation_errors='';
    	$count = 0;
     	$demand_id = strip_tags($this->post('demand_id'));
     	$user_id = strip_tags($this->post('user_id'));
     	
		$con = array('demand_id'=>$demand_id,'user_id'=>$user_id);

		$status = $this->ClientApiModel->acceptBidOffer($con);

		if($status)
		{
			$this->response([
			'status' => TRUE,
			'message' => $this->lang->line('accepted offer successfully'),
			], REST_Controller::HTTP_OK);
		}
		else
		{
			$this->response([
			'status' => false,
			'message' => $this->lang->line('Unable to accept'),
			], REST_Controller::HTTP_OK);	
		}
     	
    }


    public function acceptOffer_post()
    {
        $validation_errors='';
        $count = 0;
        $offer_id = strip_tags($this->post('offer_id'));
        $user_id = strip_tags($this->post('user_id'));
        $mission_id = strip_tags($this->post('mission_id'));
        $accept_status= strip_tags($this->post('accept_status'));
        
$client_id = $this->ClientApiModel->getclientDetails($offer_id);


        $con = array('offer_id'=>$offer_id,'user_id'=>$client_id);

 $status = $this->ClientApiModel->updateacceptby($mission_id,$client_id);

        $status = $this->ClientApiModel->acceptOffer($con,$accept_status,$mission_id);

        if($status)
        {
/*
         $taken_data = $this->ClientApiModel->gettokendata($client_id);

        $this->firebase->send_notification("Your offer has been accepted",$taken_data);

        $this->firebase->insertMessage(array('user_id'=>$user_id,'notification'=>"Your offer has been accepted",'demand_id'=>$mission_id));*/



            $this->response([
            'status' => TRUE,
            'message' => 'accepted offer successfully',
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => 'Offer already accepted',
            ], REST_Controller::HTTP_OK);    
        }
        
    }


    public function not_satisfied_post()
    {
        $validation_errors='';
        $count = 0;
        $mission_id = strip_tags($this->post('mission_id'));
        
        $con = array('mission_id'=>$mission_id);

        $status = $this->ClientApiModel->not_satisfied_model($mission_id);

        if($status)
        {
            $this->response([
            'status' => TRUE,
            'message' => 'Offer has moved to in progress mode',
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => 'Offer can not be moved to in progress mode',
            ], REST_Controller::HTTP_OK);    
        }
        
    }



    public function projectPorgress_post()
    {
       
        $project_id = strip_tags($this->post('project_id'));
        //$user_id = strip_tags($this->post('user_id'));
        
        $upload_document_link = "<?php echo base_url();?>uploads/demands_documents/";


        $status = $this->ClientApiModel->getProjectDetails($project_id);

        if($status)
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('progress successfully'),
            'data' => $status,
            'upload_link' => $upload_document_link,
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('Unable to accept'),
            ], REST_Controller::HTTP_OK);    
        }
        
    }



public function projectDelivered_post()
    {
        
        $project_id = strip_tags($this->post('project_id'));
        //$user_id = strip_tags($this->post('user_id'));
        $upload_document_link = "<?php echo base_url();?>uploads/demands_documents/";

        

        $status = $this->ClientApiModel->getProjectDetails($project_id);

        if($status)
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('progress successfully'),
            'data' => $status,
            'upload_link' => $upload_document_link,
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('Unable to accept'),
            ], REST_Controller::HTTP_OK);    
        }
        
    }


public function projectComplete_post()
    {
       
        $project_id = strip_tags($this->post('project_id'));
        //$user_id = strip_tags($this->post('user_id'));
        
        $upload_document_link = "<?php echo base_url();?>uploads/demands_documents/";


        $status = $this->ClientApiModel->getProjectDetails($project_id);

        if($status)
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('progress successfully'),
            'data' => $status,
            'upload_link' => $upload_document_link,
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('Unable to accept'),
            ], REST_Controller::HTTP_OK);    
        }
        
    }


    public function projectDipute_post()
    {
       
        $project_id = strip_tags($this->post('project_id'));
        //$user_id = strip_tags($this->post('user_id'));
        $upload_document_link = "<?php echo base_url();?>uploads/demands_documents/";

        

        $status = $this->ClientApiModel->projectDispute($project_id);

        if($status)
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('Dispute get successfully'),
            'data' => $status,
            'upload_link' => $upload_document_link,
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('Unable to get'),
            ], REST_Controller::HTTP_OK);    
        }
        
    }

public function projectsenddispute_post()
    {
       
        $project_id = strip_tags($this->post('project_id'));
        $message = strip_tags($this->post('message'));
        $date_created = date('Y-m-d H:i:s');
        $user_id = strip_tags($this->post('user_id'));
              $email =    $this->ClientApiModel->getuseremail($user_id); 
        $send_dispute = array('sender_id'=>$user_id,'receiver_id'=>4,'message'=>$message,'message_date_time'=>$date_created,'project_id'=>$project_id);

         $send_id = array('highlight'=>1);

$send_litigation = array('project_id'=>$project_id,'user_email'=>$email,'description'=>$message,'date_created'=>$date_created);

        $status_dispute = $this->ClientApiModel->sendDispute($send_dispute);
        $status_dispute = $this->ClientApiModel->sendDispute1($send_litigation);
        $status_dispute = $this->ClientApiModel->updateHighlight($user_id,$send_id);

        if($status_dispute)
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('Dispute Message successfully'),
            'data' => $status_dispute
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('Unable to accept'),
            ], REST_Controller::HTTP_OK);    
        }
        
    }


public function projectdefaultsenddispute_post()
    {
       
        $project_id = strip_tags($this->post('project_id'));
        $message = strip_tags($this->post('message'));
        $date_created = date('Y-m-d H:i:s');
        $user_id = strip_tags($this->post('user_id'));
        $message = "Customer Service:

We are very sorry for your dissatisfaction.

However, your dispute has been successfully opened. The average processing time is 8 working days.

You can chat with customer service in case you have arranged with the concerned Heelper, or if you have other information to send us.

Please, note that it may take a few days to process your messages.

Thank you";
        
        $send_dispute = array('sender_id'=>4,'receiver_id'=>$user_id,'message'=>$message,'message_date_time'=>$date_created,'project_id'=>$project_id);

         

        $status_dispute = $this->ClientApiModel->sendDispute($send_dispute);

        

        if($send_dispute)
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('default Message successfully'),
            'data' => $send_dispute
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('Unable to accept'),
            ], REST_Controller::HTTP_OK);    
        }
        
    }


public function getprojectdispute_post()
    {
       
        //$project_id = strip_tags($this->post('project_id'));
       // $message = strip_tags($this->post('message'));
        $date_created = date('Y-m-d H:i:s');
        $user_id = strip_tags($this->post('user_id'));
        $mission_id = strip_tags($this->post('mission_id'));
        
        //$send_dispute = array('sender_id'=>$user_id,'receiver_id'=>18,'message'=>$message,'message_date_time'=>$date_created);

        $receiver_id = $user_id;
        
        //$Logged_sender_id = $this->session->userdata('id');
         
        $history = $this->ClientApiModel->GetReciverChatHistory($receiver_id,$mission_id);

        //aprint_r($history);

        foreach ($history as $value) {
           if($value['sender_id'] == 4)
           {
           
           
            $get_dispute[] = array('id'=>$value['id'],'sender_id'=>$value['sender_id'],'receiver_id'=>$value['receiver_id'],'message'=>$value['message'],'attachment_name'=>$value['attachment_name'],'file_ext'=>$value['file_ext'],'mime_type'=>$value['mime_type'],'message_date_time'=>$value['message_date_time'],'ip_address'=>$value['ip_address'],'message_type'=>'admin_message');
        }
        else{
            $get_dispute[] = array('id'=>$value['id'],'sender_id'=>$value['sender_id'],'receiver_id'=>$value['receiver_id'],'message'=>$value['message'],'attachment_name'=>$value['attachment_name'],'file_ext'=>$value['file_ext'],'mime_type'=>$value['mime_type'],'message_date_time'=>$value['message_date_time'],'ip_address'=>$value['ip_address'],'message_type'=>'users_message');
        }
        }

        //exit();

        //$status_dispute = $this->ClientApiModel->sendDispute($send_dispute);



        if($history)
        {
            $message = "Customer Service:
                        We are very sorry for your dissatisfaction.
                        However, your dispute has been successfully opened. The average processing time is 8 working days.
                        You can chat with customer service in case you have arranged with the concerned Heelper, or if you have other information to send us.
                        Please, note that it may take a few days to process your messages.
                        Thank you";
                    
            $get_dispute[] = array('id'=>1,'sender_id'=>4,'receiver_id'=>$user_id,'message'=>$message,'attachment_name'=>'','file_ext'=>'','mime_type'=>'','message_date_time'=>date('d-m-Y h:i:s'),'ip_address'=>'','message_type'=>'admin_message');


            $col  = 'id';
            $sort = array();
            foreach ($get_dispute as $i => $obj) {
                $sort[$i] = $obj->{$col};
            }

            $sorted_db = array_multisort($sort, SORT_ASC, $get_dispute);

            $this->response([
            'status' => TRUE,
            'message' => 'Dispute Message successfully',
            'data' => $get_dispute
            ], REST_Controller::HTTP_OK);
        }


        else
        {
            $message = "Customer Service:
                        We are very sorry for your dissatisfaction.
                        However, your dispute has been successfully opened. The average processing time is 8 working days.
                        You can chat with customer service in case you have arranged with the concerned Heelper, or if you have other information to send us.
                        Please, note that it may take a few days to process your messages.
                        Thank you";
           
            $get_dispute[] = array(
                    'id' => 1, 
                    'sender_id' => 4, 
                    'receiver_id' => $user_id, 
                    'message' => $message,'attachment_name' => '', 
                    'file_ext' => '', 
                    'mime_type' => '', 
                    'message_date_time' => date('d-m-Y h:i:s'), 
                    'ip_address' => '', 
                    'message_type' => 'admin_message');
            
            $this->response([
                    'status' => TRUE,
                    'message' => 'Dispute Message successfully',
                    'data' => $get_dispute
            ], REST_Controller::HTTP_OK);    
        }
        
    }

    public function update_project_status_post()
    {     
        $project_id = strip_tags($this->post('project_id'));
        $client_id = $this->ClientApiModel->getclient_iddata($project_id);
        $project_status = array('mission_status'=>4,'status'=>4);
           
        $result = $this->ClientApiModel->change_project_status($project_id,$project_status);
         
        if($result)
        {
            $taken_data = $this->ClientApiModel->gettokendata($client_id);
            $this->firebase->send_notification("Your project has been moved in to Dispute",$taken_data);
            $this->firebase->insertMessage(array('user_id'=>$client_id,'notification'=>"Your project has been moved in to Dispute",'demand_id'=>$project_id,'type_id'=>2));
            $this->response([
            'status' => TRUE,
            'message' => 'Updated successfully',
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => 'Can not updated',
            ], REST_Controller::HTTP_OK);    
        }
         
    }


    public function sendProjectPorgress_post()
    {
       
        $project_id = strip_tags($this->post('project_id'));
        $your_comments = strip_tags($this->post('your_comments'));
        $user_id = strip_tags($this->post('user_id'));
        $project_status = strip_tags($this->post('project_status'));
        $date_created = date('Y-m-d H:i:s');
        //$user_id = strip_tags($this->post('user_id'));


        $add_progress_report = array('project_id'=>$project_id,'your_comments'=>$your_comments,'project_status'=>$project_status,'date_created'=>$date_created,'user_id'=>$user_id);


        /*if(!empty($_FILES['project_files']['name'])){
          $config['upload_path'] = './uploads/project_image';
          $config['allowed_types'] = 'gif|jpg|png|jpeg|doc';
          $config['max_size'] = 6000000;
          $config['max_width'] = 45000;
          $config['max_height'] = 45000;
 


          $this->load->library('upload', $config);
  
          if (!$this->upload->do_upload('project_files')) 
          {
             $error = array('error' => $this->upload->display_errors());
             $image = '';
     
          } 
          else 
          {
            $image = $this->upload->data()['file_name'];
            $add_progress_report['project_files'] = $image;
          }
      }*/


            
        
        if(!empty($_FILES['project_files']['name']))
        {
            $count = count($_FILES['project_files']['name']);
            for($i=0;$i<$count;$i++){
            
                $_FILES['file']['name'] = $_FILES['project_files']['name'][$i];
                $_FILES['file']['type'] = $_FILES['project_files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['project_files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['project_files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['project_files']['size'][$i];

                $config['upload_path'] = './uploads/demands_documents';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml|docx|GIF|JPG|PNG|JPEG|PDF|DOC|XML|DOCX|xls|xlsx';
                $config['max_size'] = 6000000;
                $config['max_width'] = 45000;
                $config['max_height'] = 45000;
                //$config['file_name'] = $_FILES['post_image']['name'][$i];
          
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                $this->upload->do_upload('file');
                $uploadData = $this->upload->data(); 
                $image[$i] = $uploadData['file_name'];

                 //$add_progress_report['image'] = $image; 
        
            }
          
         // $add_progress_report['image'] = implode(",", $image);
 
            $add_progress_report['project_files'] = implode(",", $image);
        }




        
        if(!empty($_FILES['project_image']['name']))
        {
            $count = count($_FILES['project_image']['name']);
            for($i=0;$i<$count;$i++){
            
                $_FILES['file']['name'] = $_FILES['project_image']['name'][$i];
                $_FILES['file']['type'] = $_FILES['project_image']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['project_image']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['project_image']['error'][$i];
                $_FILES['file']['size'] = $_FILES['project_image']['size'][$i];

                $config['upload_path'] = './uploads/demands_documents';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml|docx|GIF|JPG|PNG|JPEG|PDF|DOC|XML|DOCX|xls|xlsx';
                $config['max_size'] = 6000000;
                $config['max_width'] = 45000;
                $config['max_height'] = 45000;
          //$config['file_name'] = $_FILES['post_image']['name'][$i];
          

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
          
                $this->upload->do_upload('file');
                $uploadData = $this->upload->data(); 
                $image[$i] = $uploadData['file_name'];

         //$add_progress_report['image'] = $image; 
        
            }
          
         // $add_progress_report['image'] = implode(",", $image);
 
         $add_progress_report['project_image'] = implode(",", $image);
}


      /*if(!empty($_FILES['project_image']['name'])){
          $config['upload_path'] = './uploads/project_image';
          $config['allowed_types'] = 'gif|jpg|png|jpeg|doc';
          $config['max_size'] = 6000000;
          $config['max_width'] = 45000;
          $config['max_height'] = 45000;
 


          $this->load->library('upload', $config);
  
          if (!$this->upload->do_upload('project_image')) 
          {
             $error = array('error' => $this->upload->display_errors());
             $image = '';
     
          } 
          else 
          {
            $image = $this->upload->data()['file_name'];
            $add_progress_report['project_image'] = $image;
          }
      }*/
        
        

        $result = $this->ClientApiModel->addProgressReport($project_id,$add_progress_report);

        if($result['status'])
        {

            $client_id = $this->ClientApiModel->getclient_iddata($project_id);

            $taken_data = $this->ClientApiModel->gettokendata($client_id);

            $this->firebase->send_notification("Your project has been moved in to delivered",$taken_data);

            $this->firebase->insertMessage(array('user_id'=>$client_id,'notification'=>"Your project has been moved in to delivered",'demand_id'=>$project_id,'type_id'=>2));
             $this->response([
            'status' => TRUE,
            'message' => $result['message'],
            ], REST_Controller::HTTP_OK);
        }

        else
        {
             $this->response([
            'status' => TRUE,
            'message' =>'Unable To Insert'
            ], REST_Controller::HTTP_OK);
        }
        
    }

    public function getUserReviews_post()
    {
        $user_id = strip_tags($this->post('user_id'));
        $status = $this->ClientApiModel->getUserReviews($user_id);

        $user_detail = $this->ClientApiModel->getUserDetail($user_id);
        if(!empty($user_detail))
        {
            $avg = $this->DemandApiModel->selectAvgOfRating($user_id);
            $count = 0;
            $total = 0;
            for($j=0;$j<count($avg);$j++)
            {
                $total += $avg[$j]->rating;
                $count++;
            }
            if($count != 0)
            {
                $av =$total/$count;
                $user_detail->rating_avg = number_format($av, 2, '.', '');
            }
            else
            {
                $user_detail->rating_avg = 0;
            }
            
        }

        for($i=0;$i<count($status);$i++)
        {
            $date = $status[$i]->created;
            
            $date1 = date('m/y', strtotime($date));

            $status[$i]->date = DATE_FORMAT(new DateTime($date1), 'M Y');
            unset($status[$i]->created);
        }
        if($status)
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('user comments'),
            'user_detail' =>$user_detail,
            'Reviews' =>$status,
            ], REST_Controller::HTTP_OK);
        }

        else
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('comments not available'),
            ], REST_Controller::HTTP_OK);    
        }
    }

public function getaboutcontent_get()
    {

        $about_data = $this->ClientApiModel->getabout1();

        if($about_data)
        {
            $this->response([
            'status' => TRUE,
            'message' => ('About us content'),
            'data'=>$about_data,
            ], REST_Controller::HTTP_OK);
        }

        else 
        {
            $this->response([
            'status' => false,
            'message' => ('About us content not found'),
            ], REST_Controller::HTTP_OK);
        }

    }


public function getnotificationcontent_post()
    {
        $user_id = strip_tags($this->post('user_id'));
        $notification_data = $this->ClientApiModel->getallnotification($user_id);
        $count = count($notification_data);
        if($notification_data)
        {
            $this->response([
            'status' => TRUE,
            'message' => ('Notification content'),
            'data'=>$notification_data,
            'count'=>$count,
            ], REST_Controller::HTTP_OK);
        }

        else 
        {
            $this->response([
            'status' => false,
            'message' => ('Notification content not found'),
            ], REST_Controller::HTTP_OK);
        }

    }


    public function getnotificationbytype_post()
    {
        $type_id =  strip_tags($this->post('type_id'));
        $user_id = strip_tags($this->post('user_id'));
        $notification_data = $this->ClientApiModel->getallnotificationbyid($user_id,$type_id);
    $count = count($notification_data);
        if($notification_data)
        {
            $this->response([
            'status' => TRUE,
            'message' => ('Notification content'),
            'data'=>$notification_data,
            'count' =>$count
            ], REST_Controller::HTTP_OK);
        }

        else 
        {
            $this->response([
            'status' => false,
            'message' => ('Notification content not found'),
            ], REST_Controller::HTTP_OK);
        }

    }

public function getnotificationcountbytype_post()
    {
        $type_id =  strip_tags($this->post('type_id'));
        $user_id = strip_tags($this->post('user_id'));
        $notification_data = $this->ClientApiModel->getallnotificationbyid($user_id,$type_id);
    $count = count($notification_data);
        if($notification_data)
        {
            $this->response([
            'status' => TRUE,
            'message' => ('Notification count'),
           
            'count' =>$count
            ], REST_Controller::HTTP_OK);
        }

        else 
        {
            $this->response([
            'status' => false,
            'message' => ('Notification count not found'),
            ], REST_Controller::HTTP_OK);
        }

    }


    public function getnotificationcount_post()
    {
        
        $user_id = strip_tags($this->post('user_id'));

        $notification_data_payment = $this->ClientApiModel->getallnotificationcount($user_id,1);
        $notification_missionanddemands = $this->ClientApiModel->getallnotificationcount($user_id,2);
        $notification_Offers = $this->ClientApiModel->getallnotificationcount($user_id,3);
        $notification_messages = $this->ClientApiModel->getallnotificationcount($user_id,4);
        $notification_Reviews = $this->ClientApiModel->getallnotificationcount($user_id,5);


        $count_payment = count($notification_data_payment);
        $count_missionanddemands = count($notification_missionanddemands);
        $count_Offers = count($notification_Offers);
        $count_messages = count($notification_messages);
        
        $count_Reviews = count($notification_Reviews);

        if($notification_data_payment || $notification_missionanddemands || $notification_Offers || $notification_messages || $notification_Reviews)
        {
            $this->response([
            'status' => TRUE,
            'message' => ('Notification count'),
            'count_payment' => $count_payment,
            'count_missionanddemands' => $count_missionanddemands,
            'count_Offers' => $count_Offers,
'count_messages' => $count_messages,
          'count_Reviews' => $count_Reviews, 
            
            ], REST_Controller::HTTP_OK);
        }

        else 
        {
            $this->response([
            'status' => false,
            'message' => ('Notification count not found'),
            ], REST_Controller::HTTP_OK);
        }

    }
    public function gettermcontent_get()
    {
 
        $term_data = $this->ClientApiModel->getterm1();

        if($term_data)
        {
            $this->response([
            'status' => TRUE,
            'message' => ('Terms and condition content'),
            'data'=>$term_data,
            ], REST_Controller::HTTP_OK);
        }

        else 
        {
            $this->response([
            'status' => false,
            'message' => ('Terms and condition content not'),
            ], REST_Controller::HTTP_OK);
        }

    }
public function post_a_demand_post()
    {
        $category_id = strip_tags($this->post('category_id'));
        $title = strip_tags($this->post('title'));
        $description = strip_tags($this->post('description'));
        $budget = strip_tags($this->post('budget'));
        $client_id = strip_tags($this->post('client_id'));
         $date_created = date('Y-m-d H:i:s');
       
        $add_demand = array('client_id'=>$client_id,'user_id'=>$client_id,'project_category'=>$category_id,'mission_category'=>$category_id,'title'=>$title,'mission_title'=>$title,'description'=>$description,'mission_description'=>$description,'budget'=>$budget,'mission_budget'=>$budget,'created'=>$date_created);


        /*if(!empty($_FILES['project_file']['name'])){
          $config['upload_path'] = './uploads/demands_documents';
          $config['allowed_types'] = 'gif|jpg|png|jpeg|doc';
          $config['max_size'] = 6000000;
          $config['max_width'] = 45000;
          $config['max_height'] = 45000;
 


          $this->load->library('upload', $config);
  
          if (!$this->upload->do_upload('project_file')) 
          {
             $error = array('error' => $this->upload->display_errors());
             $image = '';
     
          } 
          else 
          {
            $image = $this->upload->data()['file_name'];
            $add_demand['file'] = $image;
          }
      }*/


/*if(!empty($_FILES['project_image']['name'])){
          $config['upload_path'] = './uploads/demands_documents';
          $config['allowed_types'] = 'gif|jpg|png|jpeg|doc';
          $config['max_size'] = 6000000;
          $config['max_width'] = 45000;
          $config['max_height'] = 45000;
 


          $this->load->library('upload', $config);
  
          if (!$this->upload->do_upload('project_image')) 
          {
             $error = array('error' => $this->upload->display_errors());
             $image = '';
     
          } 
          else 
          {
            $image = $this->upload->data()['file_name'];
            $add_demand['file'] = $image;
          }
      }*/

       
        
        if(!empty($_FILES['project_image']['name']))
        {
$count = count($_FILES['project_image']['name']);
        for($i=0;$i<$count;$i++){
            
          $_FILES['file']['name'] = $_FILES['project_image']['name'][$i];
          $_FILES['file']['type'] = $_FILES['project_image']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['project_image']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['project_image']['error'][$i];
          $_FILES['file']['size'] = $_FILES['project_image']['size'][$i];

          $config['upload_path'] = './uploads/demands_documents';
          $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml|docx|GIF|JPG|PNG|JPEG|PDF|DOC|XML|DOCX|xls|xlsx';
          $config['max_size'] = 6000000;
          $config['max_width'] = 45000;
          $config['max_height'] = 45000;
          //$config['file_name'] = $_FILES['post_image']['name'][$i];
          

          $this->load->library('upload', $config);
          $this->upload->initialize($config);
          
         $this->upload->do_upload('file');
         $uploadData = $this->upload->data(); 
         $image[$i] = $uploadData['file_name'];

         $add_demand['image'] = $image; 
        
         }
          
          $add_demand['image'] = implode(",", $image);
 
         $add_demand['mission_image'] = implode(",", $image);
}

         

  
        
        if(!empty($_FILES['project_file']['name']))
        {
 $count = count($_FILES['project_file']['name']);
        for($i=0;$i<$count;$i++){
            
          $_FILES['file']['name'] = $_FILES['project_file']['name'][$i];
          $_FILES['file']['type'] = $_FILES['project_file']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['project_file']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['project_file']['error'][$i];
          $_FILES['file']['size'] = $_FILES['project_file']['size'][$i];

          $config['upload_path'] = './uploads/demands_documents';
          $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml|docx|GIF|JPG|PNG|JPEG|PDF|DOC|XML|DOCX|xls|xlsx';
          $config['max_size'] = 6000000;
          $config['max_width'] = 45000;
          $config['max_height'] = 45000;
          //$config['file_name'] = $_FILES['post_image']['name'][$i];
          

          $this->load->library('upload', $config);
          $this->upload->initialize($config);
          
         $this->upload->do_upload('file');
         $uploadData = $this->upload->data(); 
         $image1[$i] = $uploadData['file_name'];

         $add_demand['file'] = $image1; 
        
         }
          
          $add_demand['file'] = implode(",", $image1);
 
        $add_demand['mission_doc'] = implode(",", $image1);
}


        $result = $this->ClientApiModel->addDemand($add_demand);

        if($result['status'])
        {
             $this->response([
            'status' => TRUE,
            'message' => $result['message'],
            ], REST_Controller::HTTP_OK);
        }

        else
        {
             $this->response([
            'status' => TRUE,
            'message' =>'Unable To Insert'
            ], REST_Controller::HTTP_OK);
        }
    }



    public function UserProfile_post()
    {
    	$user_id = strip_tags($this->post('user_id'));
    	$user = $this->ClientApiModel->GetUserProfile($user_id);

    	$user_detail = $this->ClientApiModel->getUserDetail($user_id);
        if(!empty($user_detail))
        {
            $avg = $this->DemandApiModel->selectAvgOfRating($user_id);
            $count = 0;
            $total = 0;
            for($j=0;$j<count($avg);$j++)
            {
                $total += $avg[$j]->rating;
                $count++;
            }
            if($count != 0)
            {
                $user->rating_avg = number_format($total/$count, 2, '.', '');
                $user->round_avg = number_format($total/$count, 2, '.', '');
            }
            else
            {
                $user->rating_avg = 0;
                
                $user->round_avg = 0;
            }
            
        }



        if(!empty($user))
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('your profile'),
            'data'=>$user,
            ], REST_Controller::HTTP_OK);
        }

        else 
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('user not found'),
            ], REST_Controller::HTTP_OK);
        }

    }



    public function myDemandbidbyid_post()
    {
        $demand_id = strip_tags($this->post('demand_id'));
        $demand_by_bid = $this->ClientApiModel->fetchMyDemandbidById($demand_id);

        for($i=0;$i<count($demand_by_bid);$i++)
        {
            if($demand_by_bid[$i]->duration == 0)
            {
                $demand_by_bid[$i]->duration = 'today';   
            }
            else
            {
                $demand_by_bid[$i]->duration = $demand_by_bid[$i]->duration  . ' Day Ago';    
            }

            $avg = $this->DemandApiModel->selectAvgOfRating($demand_by_bid[$i]->user_id);
            $count = 0;
            $total = 0;
            for($j=0;$j<count($avg);$j++)
            {
                $total += $avg[$j]->rating;
                $count++;
            }
            if($count != 0)
            {
                $av =$total/$count;
                $demand_by_bid[$i]->Profile_Rate = number_format($av, 2, '.', '');
            }
            else
            {
                $demand_by_bid[$i]->Profile_Rate = 0;
            }
            
        }




/*    $sortarray = array();

    foreach ($demand_by_bid as $key => $row)
    {
        $sortarray[$key] = $row['Profile_Rate'];
    }

  $Profile_Rate =  array_multisort($sortarray, SORT_ASC, $array);*/

$col  = 'Profile_Rate';
$sort = array();
foreach ($demand_by_bid as $i => $obj) {
  $sort[$i] = $obj->{$col};
}

$sorted_db = array_multisort($sort, SORT_DESC, $demand_by_bid);


    
        
        if(!empty($demand_by_bid))
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('Bid list on Demand'),
            'your_missions'=>$demand_by_bid,
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




public function myDemandbidbybudget_post()
    {
        $demand_id = strip_tags($this->post('demand_id'));
        $demand_by_bid = $this->ClientApiModel->fetchMyDemandbidBybudget($demand_id);
        
        for($i=0;$i<count($demand_by_bid);$i++)
        {
            if($demand_by_bid[$i]->duration == 0)
            {
                $demand_by_bid[$i]->duration = 'today';   
            }
            else
            {
                $demand_by_bid[$i]->duration = $demand_by_bid[$i]->duration . ' Days Ago';    
            }

            $avg = $this->DemandApiModel->selectAvgOfRating($demand_by_bid[$i]->user_id);
            $count = 0;
            $total = 0;
            for($j=0;$j<count($avg);$j++)
            {
                $total += $avg[$j]->rating;
                $count++;
            }
            if($count != 0)
            {
                $av =$total/$count;
                $demand_by_bid[$i]->Profile_Rate = number_format($av, 2, '.', '');
            }
            else
            {
                $demand_by_bid[$i]->Profile_Rate = 0;
            }
            
        }

        if(!empty($demand_by_bid))
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('Bid list on Demand'),
            'your_missions'=>$demand_by_bid,
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

    public function myDemandbidbydate_post()
    {
        $demand_id = strip_tags($this->post('demand_id'));
        $demand_by_bid = $this->ClientApiModel->fetchMyDemandbidByDate($demand_id);

        for($i=0;$i<count($demand_by_bid);$i++)
        {
            if($demand_by_bid[$i]->duration == 0)
            {
                $demand_by_bid[$i]->duration = 'today';   
            }
            else
            {
                $demand_by_bid[$i]->duration = $demand_by_bid[$i]->duration . ' Days Ago';    
            }

            $avg = $this->DemandApiModel->selectAvgOfRating($demand_by_bid[$i]->user_id);
            $count = 0;
            $total = 0;
            for($j=0;$j<count($avg);$j++)
            {
                $total += $avg[$j]->rating;
                $count++;
            }
            if($count != 0)
            {
                $av =$total/$count;
                $demand_by_bid[$i]->Profile_Rate = number_format($av, 2, '.', '');
            }
            else
            {
                $demand_by_bid[$i]->Profile_Rate = 0;
            }
            
        }
        
        if(!empty($demand_by_bid))
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('Bid list on Demand'),
            'your_missions'=>$demand_by_bid,
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




public function demandPorgress_post()
    {
       
        $project_id = strip_tags($this->post('project_id'));
        //$user_id = strip_tags($this->post('user_id'));
        
        

        $status = $this->ClientApiModel->getProjectDetails($project_id);

        if($status)
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('progress successfully'),
            'data' => $status
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('Unable to accept'),
            ], REST_Controller::HTTP_OK);    
        }
        
    }

    public function demandDelivered_post()
    {
       
        $project_id = strip_tags($this->post('project_id'));
        //$user_id = strip_tags($this->post('user_id'));
        
        

        $status = $this->ClientApiModel->getProjectDetails($project_id);

        if($status)
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('progress successfully'),
            'data' => $status
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('Unable to accept'),
            ], REST_Controller::HTTP_OK);    
        }
        
    }


    public function demandomplete_post()
    {
       
        $project_id = strip_tags($this->post('project_id'));
        //$user_id = strip_tags($this->post('user_id'));
        
        

        $status = $this->ClientApiModel->getProjectDetails($project_id);

        if($status)
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('progress successfully'),
            'data' => $status
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('Unable to accept'),
            ], REST_Controller::HTTP_OK);    
        }
        
    }


public function getuserslist_post()
    {
       
        $client_id = strip_tags($this->post('client_id'));
        //$user_id = strip_tags($this->post('user_id'));
        
        

        $status = $this->ClientApiModel->getusersDetails($client_id);

        if($status)
        {
            $this->response([
            'status' => TRUE,
            'message' => 'users details',
            'data' => $status
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => 'Unable to get',
            ], REST_Controller::HTTP_OK);    
        }
        
    }


    public function demandDipute_post()
    {
       
        $project_id = strip_tags($this->post('project_id'));
        //$user_id = strip_tags($this->post('user_id'));
        
        

        $status = $this->ClientApiModel->getProjectDetails($project_id);

        if($status)
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('progress successfully'),
            'data' => $status
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('Unable to accept'),
            ], REST_Controller::HTTP_OK);    
        }
        
    }


public function payment_out_post()
    {
       
        $user_id = strip_tags($this->post('user_id'));
        //$user_id = strip_tags($this->post('user_id'));
        
        

        $status = $this->ClientApiModel->getPaymentIn($user_id);

        if($status)
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('progress successfully'),
            'data' => $status
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('Unable to accept'),
            ], REST_Controller::HTTP_OK);    
        }
        
    }

       
      public function payment_in_post()
    {
       
        $user_id = strip_tags($this->post('user_id'));
        //$user_id = strip_tags($this->post('user_id'));
       

        $status = $this->ClientApiModel->getPaymentOut($user_id);

        if($status)
        {
            $this->response([
            'status' => TRUE,
            'message' => 'Payment Status',
            'data' => $status
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => 'Unable to accept',
            ], REST_Controller::HTTP_OK);    
        }
        
    }



public function retrieve_a_card_post()

{
$user_id=strip_tags($this->post('user_id'));
$status = $this->ClientApiModel->get_users_stripe_details($user_id);
$status_test = $this->ClientApiModel->get_users_stripe_details_test($user_id);
$status1 = $this->ClientApiModel->get_users_stripe_card_($user_id);

if($status_test)
{
$stripeSecret= 'sk_test_agIhwfWd0DII3LbPRvfHs0ws00IlypxkxU';

   \Stripe\Stripe::setApiKey($stripeSecret);

/*$charge = \Stripe\Customer::allSources(
  $status,
  ['object' => 'card', 'limit' => 1]
);*/

$charge = \Stripe\Customer::retrieveSource(
  $status,
  $status_test
);

 if($charge)
        {



            $this->response([
            'status' => TRUE,
            'message' => 'Card Data',
            'data' => $charge,
            'username'=>$status1
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' =>'Card data not found',
            ], REST_Controller::HTTP_OK);    
        }

    }

    else{
        $this->response([
            'status' => false,
            'message' =>'Card data not found',
            ], REST_Controller::HTTP_OK);   
    }

}


public function paymentStrip_post()
    {
       

        $client_id=strip_tags($this->post('client_id'));
        $email_id=strip_tags($this->post('email_id'));
        $user_id=strip_tags($this->post('user_id'));
        $user_name=strip_tags($this->post('user_name'));
        $amount=strip_tags($this->post('amount'));
        $projectaname=strip_tags($this->post('projectaname'));
        $token_Id=strip_tags($this->post('token_Id'));
        $mission_id=strip_tags($this->post('mission_id'));

        $amount_12 =($amount*12)/100;

        $amount_with_tax = $amount+0.25;

        $total_amount = round($amount_with_tax + $amount_12);

        $date_created = date('Y-m-d H:i:s');
    
    if($token_Id) {

   
    
      //stripe secret key or revoke key
      $stripeSecret = 'sk_test_agIhwfWd0DII3LbPRvfHs0ws00IlypxkxU';

      // See your keys here: https://dashboard.stripe.com/account/apikeys
      \Stripe\Stripe::setApiKey($stripeSecret);

     // Get the payment token ID submitted by the form:
      $token = $token_Id;


/*      $customer = \Stripe\Customer::create([
    'source' => $token,
    'email' => $email_id,
]);*/

// Charge the Customer instead of the card:
/*$charge = \Stripe\Charge::create([
    'amount' => $amount,
    'currency' => 'EUR',
    'customer' => $customer->id,
]);
*/
      // Charge the user's card:
      $charge = \Stripe\Charge::create(array(
          "amount" => $total_amount,
          "currency" => "EUR",
          "description" => "This is a paymet",
          "source" => $token,
       ));
            
       // after successfull payment, you can store payment related information into your database
             
        $data = array('success' => true, 'data'=> $charge);

       // echo json_encode($data); 
}


        if($data)
        {

$status = $this->ClientApiModel->acceptOfferafter($mission_id);


 $taken_data = $this->ClientApiModel->gettokendata($client_id);

        $this->firebase->send_notification("Your offer has been accepted",$taken_data);

        $this->firebase->insertMessage(array('user_id'=>$client_id,'notification'=>"Your offer has been accepted",'demand_id'=>$mission_id,'type_id'=>3));


        $taken_data = $this->ClientApiModel->gettokendata($client_id);

        $this->firebase->send_notification("Your payment has been submitted to Admin",$taken_data);

        $this->firebase->insertMessage(array('user_id'=>$client_id,'notification'=>"Your payment has been submitted to Admin",'demand_id'=>$mission_id,'type_id'=>1));


        $taken_data1 = $this->ClientApiModel->gettokendata($user_id);

        $this->firebase->send_notification("Paiement effectué avec succés ",$taken_data1);

        $this->firebase->insertMessage(array('user_id'=>$user_id, 'notification' => "Paiement effectué avec succés ",'demand_id'=>$mission_id,'type_id'=>1));

$charge_transection = $charge->balance_transaction;
$add_demand = array('sent_from'=>$client_id,'sent_to'=>$user_id,'amount'=>$amount,'tra_id'=>$charge_transection,'created_date'=>$date_created,'username'=>$user_name,'project_title'=>$projectaname,'mission_id'=>$mission_id);

 $result = $this->ClientApiModel->inserransection($add_demand);

            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('progress successfully'),
            'data' => $data
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('Unable to accept'),
            ], REST_Controller::HTTP_OK);    
        }
        
    }


    public function getmissionAmount_post()
    {
       
        $mission_id = strip_tags($this->post('mission_id'));
        //$user_id = strip_tags($this->post('user_id'));
        
        $bank_fee_per = 10;
        $service_fee_per = 10;

        $status = $this->ClientApiModel->missionAmount($mission_id);

        if($status)
        {
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('progress successfully'),
            'data' => $status
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('Unable to accept'),
            ], REST_Controller::HTTP_OK);    
        }
        
    }


 public function send_notzification_post()
 {
    $token = "cloTet7fL_U:APA91bFtARj6lBBegH-soeLwqFbX1fSPP1ItWabjR7qbwrrC7LUhNkAHJHuzaLggBQXfGZDNMxjnJyHG8_Zkbt-7M4n__d1TQGDJIvbkmc8pOpCWtwSUA86ndk9hSLqscla9_UTwDAsY";
    $this->firebase->send_notification("Your offer has been accepted",$token);

       
 }

public function addchatimage_post()

{

    $date_created = date('Y-m-d H:i:s');

    $profile_data = array('date_created'=>$date_created);

     if(!empty($_FILES['picture_url']['name'])){



      //exit($_FILES['photo']['name']);

      $config['upload_path'] = './uploads/chat_image';

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

        $profile_data['image_name'] = "https://alphawizz.com/Freelance/uploads/chat_image/" .$image;

      }

      }


      $activity = $this->ClientApiModel->addchatimg($profile_data);


      if($activity)
        {
            $this->response([
            'status' => TRUE,
            'message' => 'Image added successfully',
            'data' => $activity
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => 'Unable to add',
            ], REST_Controller::HTTP_OK);    
        }


  }



  public function addchatvoicenote_post()

{

    $date_created = date('Y-m-d H:i:s');

    $profile_data = array('date_created'=>$date_created);

     if(!empty($_FILES['voice_url']['name'])){



      //exit($_FILES['photo']['name']);

      $config['upload_path'] = './uploads/voice_files';

      $config['allowed_types'] = 'gif|jpg|png|jpeg|mp3|mp4|3gp';

      $config['max_size'] = 20000;

      $config['max_width'] = 45000;

      $config['max_height'] = 45000;







      $this->load->library('upload', $config);



      if (!$this->upload->do_upload('voice_url')) {

        $error = array('error' => $this->upload->display_errors());

        $image = '';

      





      }

      else {

        $image = $this->upload->data()['file_name'];

        $profile_data['voicefile_name'] = "https://alphawizz.com/Freelance/uploads/voice_files/" .$image;

      }

      }


      $activity = $this->ClientApiModel->addvoicefile($profile_data);


      if($activity)
        {
            $this->response([
            'status' => TRUE,
            'message' => 'Voice file added successfully',
            'data' => $activity
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => 'Unable to add',
            ], REST_Controller::HTTP_OK);    
        }


  }


  public function delete_chatimage_post(){
        $image_id = strip_tags($this->post('image_id'));
        $image_data = $this->ClientApiModel->deleteImageId($image_id);
        if($image_data)
        {
            $this->response([
            'status' => TRUE,
            'message' => ('Image Deleted'),
            'data'=>$image_data,
            ], REST_Controller::HTTP_OK);
        }

        else 
        {
            $this->response([
            'status' => false,
            'message' => ('Image not Deleted'),
            ], REST_Controller::HTTP_OK);
        }
    }

    public function delete_chatfiles_post(){
        $voice_id = strip_tags($this->post('voice_id'));
        $image_data = $this->ClientApiModel->deletevoicefileId($voice_id);
        if($image_data)
        {
            $this->response([
            'status' => TRUE,
            'message' => ('Image Deleted'),
            'data'=>$image_data,
            ], REST_Controller::HTTP_OK);
        }

        else 
        {
            $this->response([
            'status' => false,
            'message' => ('Image not Deleted'),
            ], REST_Controller::HTTP_OK);
        }
    }



 public function send_message_post()
 {

$sender_id = strip_tags($this->post('sender_id'));
$receiver_id = strip_tags($this->post('receiver_id'));
$message_dta = strip_tags($this->post('message_dta'));
$date_created =  date('Y-m-d H:i:s');


$result = $this->ClientApiModel->update_chat_time($sender_id,$date_created);

$result = $this->ClientApiModel->update_chat_time($receiver_id,$date_created);

$taken_data = $this->ClientApiModel->gettokendata($receiver_id);

$token = $taken_data;


   $data = $this->firebase->send_notification_chat($message_dta,$token);

            $this->response([
            'status' => TRUE,
            'message' => "Message sent successfully",
            'data' => $data
            ], REST_Controller::HTTP_OK);
        
            
        
       
 }


 public function transfer_amount_post()
    {
       

        $client_id=strip_tags($this->post('client_id'));
        $user_id=strip_tags($this->post('user_id'));
        $user_name=strip_tags($this->post('user_name'));
        $amount=strip_tags($this->post('amount'));
        $projectaname=strip_tags($this->post('projectaname'));
        $token_Id=strip_tags($this->post('token_Id'));
        $destination_id =strip_tags($this->post('destination_id'));
        


    
/*    if($token_Id) {*/

   
    
      //stripe secret key or revoke key
      $stripeSecret = 'sk_test_4eC39HqLyjWDarjtT1zdp7dc';

      // See your keys here: https://dashboard.stripe.com/account/apikeys
      \Stripe\Stripe::setApiKey($stripeSecret);

     // Get the payment token ID submitted by the form:
      $token = $token_Id;

      // Charge the user's card:
/*      $charge = \Stripe\Charge::create(array(
          "amount" => $amount,
          "currency" => "EUR",
          "description" => "stripe integration in PHP with source code - tutsmake.com",
          "source" => $token,
       ));*/

/*        $transfer = \Stripe\Transfer::create([
        'amount' => $amount,
        'currency' => 'eur',
        'destination' => '{{CONNECTED_STRIPE_ACCOUNT_ID}}',
        'transfer_group' => '{ORDER10}',
        ]);*/


$transfer = \Stripe\Transfer::create([
  'amount' => $amount,
  'currency' => 'eur',
  'destination' => $destination_id,
  'transfer_group' => 'ORDER_95',
]);


            
       // after successfull payment, you can store payment related information into your database
             
        $data = array('success' => true, 'data'=> $transfer);

       // echo json_encode($data); 
/*}*/


        if($data)
        {

//$status = $this->ClientApiModel->acceptOfferafter($mission_id);

            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('progress successfully'),
            'data' => $data
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => $this->lang->line('Unable to accept'),
            ], REST_Controller::HTTP_OK);    
        }
        
    }

    public function adddelivered_post()
    {
        
        $mission_id = strip_tags($this->post('mission_id'));

        $status = $this->ClientApiModel->adddelivered($mission_id);

        if($status)
        {

            $this->response([
            'status' => TRUE,
            'message' => 'delivered successfully',
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => 'can not update',
            ], REST_Controller::HTTP_OK);    
        }
        
    }


    public function add_credit_card_post()
    {
       
        $card_no = strip_tags($this->post('card_no'));
        $date_created = date('Y-m-d H:i:s');
        $user_id = strip_tags($this->post('user_id'));
        $name = strip_tags($this->post('name'));
        //$user_id = strip_tags($this->post('user_id'));
 $expiry = strip_tags($this->post('expiry'));

        $add_card_details = array('card_no'=>$card_no,'date_created'=>$date_created,'user_id'=>$user_id,'name'=>$name,'expiry'=>$expiry);


        

           
          $result = $this->ClientApiModel->add_card_details($add_card_details);
         
 if($result)
        {

            $this->response([
            'status' => TRUE,
            'message' => 'Added successfully',
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => 'can not Added',
            ], REST_Controller::HTTP_OK);    
        }
         
}


public function update_credit_card_post()
    {
       
        $card_no = strip_tags($this->post('card_no'));
        
        
       
        $date_created = date('Y-m-d H:i:s');
        $user_id = strip_tags($this->post('user_id'));
        $card_id = strip_tags($this->post('card_id'));
        //$user_id = strip_tags($this->post('user_id'));
        $name = strip_tags($this->post('name'));
$expiry = strip_tags($this->post('expiry'));

        $update_card_details = array('card_no'=>$card_no,'date_created'=>$date_created,'user_id'=>$user_id,'name'=>$name,'expiry'=>$expiry);


        

           
          $result = $this->ClientApiModel->update_card_details($card_id,$update_card_details);
         
 if($result)
        {

            $this->response([
            'status' => TRUE,
            'message' => 'Updated successfully',
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => 'can not Added',
            ], REST_Controller::HTTP_OK);    
        }
         
}

        public function delete_card_details_post(){
        $card_id = strip_tags($this->post('card_id'));
        $card_data = $this->ClientApiModel->delete_card_details($card_id);
        if($card_data)
        {
        $this->response([
        'status' => TRUE,
        'message' => ('Card Deleted'),
        'data'=>$card_data,
        ], REST_Controller::HTTP_OK);
        }

        else 
        {
        $this->response([
        'status' => false,
        'message' => ('Card not Deleted'),
        ], REST_Controller::HTTP_OK);
        }
        }

public function get_card_details_post()

{


$user_id = strip_tags($this->post('user_id'));


$card_details_data = $this->ClientApiModel->get_card_details($user_id);
         if($card_details_data)
         {   
            $this->response([
            'status' => TRUE,
            'message' => "Card Details",
            'data' => $card_details_data
            ], REST_Controller::HTTP_OK);  
         }
         else{
            $this->response([
            'status' => False,
            'message' => "Card Details Not",
            ], REST_Controller::HTTP_OK);  
         }

 }


 public function addstripecard_post()

{

$user_id=strip_tags($this->post('user_id'));
$username=strip_tags($this->post('username'));
$token_Id =strip_tags($this->post('token_Id'));

$status = $this->ClientApiModel->get_users_stripe_details1($user_id);

$stripe_customer_id = $status[0]->stripe_customer_id;



$stripeSecret= 'sk_test_agIhwfWd0DII3LbPRvfHs0ws00IlypxkxU';

\Stripe\Stripe::setApiKey($stripeSecret);

if($stripe_customer_id)
{


$charge = \Stripe\Customer::createSource(
  $stripe_customer_id,
  ['source' => $token_Id]
);

 if($charge)
        {

$card = $charge->id;

$cuustomer_id = $charge->customer;


            $update_card_details = array('stripe_customer_id'=>$cuustomer_id,'stripe_card_id'=>$card);

            $status = $this->ClientApiModel->update_customer_stripe($user_id,$update_card_details);

             $update_card_details = array('name_on_card'=>$username);

            $status = $this->ClientApiModel->insert_customer_name($user_id,$update_card_details);

            $this->response([
            'status' => TRUE,
            'message' => 'Card Data',
            'data' => $charge,
            'username'=>$username,
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' =>'Card data not found',
            ], REST_Controller::HTTP_OK);    
        }

    }

    else{



$charge = \Stripe\Customer::create(array(
            'source'   => $token_Id,
            'description' => "Charge with one time setup fee"
            ));


        if($charge)
        {




$card = $charge->default_source;

$cuustomer_id = $charge->id;

$update_card_details = array('stripe_customer_id'=>$cuustomer_id,'stripe_card_id'=>$card);

            $status = $this->ClientApiModel->update_customer_stripe($user_id,$update_card_details);

            $update_card_details = array('name_on_card'=>$username);

            $status = $this->ClientApiModel->insert_customer_name($user_id,$update_card_details);

            $this->response([
            'status' => TRUE,
            'message' => 'Card Data',
            'data' => $charge,
            'username'=>$username,
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' =>'Card data not found',
            ], REST_Controller::HTTP_OK);    
        }
    }

}

public function deletestripecard_post()

{
$user_id=strip_tags($this->post('user_id'));
$status = $this->ClientApiModel->get_users_stripe_details1($user_id);

$stripe_customer_id = $status[0]->stripe_customer_id;

$stripe_card_id = $status[0]->stripe_card_id;

if($stripe_card_id)
{
$stripeSecret= 'sk_test_agIhwfWd0DII3LbPRvfHs0ws00IlypxkxU';

   \Stripe\Stripe::setApiKey($stripeSecret);

$charge = \Stripe\Customer::deleteSource(
  $stripe_customer_id,
 $stripe_card_id
);

 if($charge)
        {

$update_card_details = array('stripe_card_id'=>"");

            $status = $this->ClientApiModel->update_customer_stripe($user_id,$update_card_details);



            $this->response([
            'status' => TRUE,
            'message' => 'Card Data Deleted',
            'data' => $charge
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' =>'Card data not Deleted',
            ], REST_Controller::HTTP_OK);    
        }

    }

    else{
        $this->response([
            'status' => false,
            'message' =>'Card data not found',
            ], REST_Controller::HTTP_OK);   
    }

}

public function editstripecard_post()

{

$user_id=strip_tags($this->post('user_id'));
$name_on_card=strip_tags($this->post('name_on_card'));
$exp_month=strip_tags($this->post('exp_month'));
$exp_year=strip_tags($this->post('exp_year'));
$name=strip_tags($this->post('name'));

$status = $this->ClientApiModel->get_users_stripe_details1($user_id);

$stripe_customer_id = $status[0]->stripe_customer_id;

$stripe_card_id = $status[0]->stripe_card_id;

if($stripe_card_id)
{
    if($exp_month>12 || $exp_year>70)
    {
 $this->response([
            'status' => false,
            'message' =>'Expiry Details are not correct',
            ], REST_Controller::HTTP_OK);    
        

    }

    else{



$stripeSecret= 'sk_test_agIhwfWd0DII3LbPRvfHs0ws00IlypxkxU';

   \Stripe\Stripe::setApiKey($stripeSecret);

$charge = \Stripe\Customer::updateSource(
  $stripe_customer_id,
  $stripe_card_id,
  ['name' => $name, 'exp_month'=>$exp_month, 'exp_year'=>$exp_year]
);

   }

 if($charge)
        {

$update_card_details = array('name_on_card'=>$name);

            $status = $this->ClientApiModel->insert_customer_name($user_id,$update_card_details);

            $this->response([
            'status' => TRUE,
            'message' => 'Card Data updated',
            'data' => $charge
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' =>'Card data not updated',
            ], REST_Controller::HTTP_OK);    
        }

    }

    else{
        $this->response([
            'status' => false,
            'message' =>'Card data not found',
            ], REST_Controller::HTTP_OK);   
    }

}

public function update_mission_satisfy_post()

{
	$mission_id=strip_tags($this->post('mission_id'));

$update_card_details = array('satisfy'=>1);

            $status = $this->ClientApiModel->update_mission_satisfy($mission_id,$update_card_details);

             if($status)
        {



            $this->response([
            'status' => TRUE,
            'message' => 'Card Data updated',
            'data' => $status
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' =>'Card data not updated',
            ], REST_Controller::HTTP_OK);    
        }
  }


public function update_notification_status_post()

{



$user_id=strip_tags($this->post('user_id'));

$type_id=strip_tags($this->post('type_id'));

$update_card_details = array('read_status'=>1);

$status = $this->ClientApiModel->update_notification_status($user_id,$type_id,$update_card_details);

             if($status)
        {
            $this->response([
            'status' => TRUE,
            'message' => 'Notification Updated',
            'data' => $status
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' =>'Notification not updated',
            ], REST_Controller::HTTP_OK);    
        }
  }



public function get_satisfy_post()

{
$mission_id=strip_tags($this->post('mission_id'));
$status = $this->ClientApiModel->get_update_mission_satisfy($mission_id);
if($status)
        {
        $this->response([
        'status' => TRUE,
        'message' => ('Satisfy data'),
        'data'=>$status,
        ], REST_Controller::HTTP_OK);
        }

        else 
        {
        $this->response([
        'status' => false,
        'message' => ('Satisfy data not found'),
        ], REST_Controller::HTTP_OK);
        }
}

public function update_wallet_post()

{

 $mission_id = strip_tags($this->post('mission_id'));

$user_id=strip_tags($this->post('user_id'));

$amount = strip_tags($this->post('amount'));

$wallet_balance = $this->ClientApiModel->get_wallet_balance($user_id);

$wallet_amount_updated = $amount + $wallet_balance;

$update_card_details = array('walet_balance'=>$wallet_amount_updated);

$status = $this->ClientApiModel->update_wallet_balance($user_id,$update_card_details);


$wallet_balance = $this->ClientApiModel->get_wallet_balance(4);
$wallet_amount_updated = $wallet_balance - $amount ;
$update_card_details = array('walet_balance'=>$wallet_amount_updated);

$status = $this->ClientApiModel->update_wallet_balance(4,$update_card_details);


$status = $this->ClientApiModel->addcompleted($mission_id);

            $client_id = $this->ClientApiModel->getclient_iddata($mission_id);


$taken_data = $this->ClientApiModel->gettokendata($client_id);

$this->firebase->send_notification("You have received project progress report",$taken_data);

$this->firebase->insertMessage(array('user_id'=>$client_id,'notification'=>"You have received project progress report",'demand_id'=>$project_id,'type_id'=>2));

             if($status)
        {



            $this->response([
            'status' => TRUE,
            'message' => 'Card Data updated',
            'data' => $status
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' =>'Card data not updated',
            ], REST_Controller::HTTP_OK);    
        }
  }



public function get_amount_post()

{

 $mission_id = strip_tags($this->post('mission_id'));



$wallet_balance = $this->ClientApiModel->get_amount($mission_id);






             if($wallet_balance)
        {



            $this->response([
            'status' => TRUE,
            'message' => 'Amount',
            'amount' => $wallet_balance
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' =>'Amount not updated',
            ], REST_Controller::HTTP_OK);    
        }
  }


  public function amount_released_post()

{
$date_created = date('Y-m-d H:i:s');
/*$user_id=strip_tags($this->post('user_id'));

$amount = strip_tags($this->post('amount'));

$mission_id = strip_tags($this->post('mission_id'));





$status = $this->ClientApiModel->addcompleted($mission_id);

             if($status)
        {



            $this->response([
            'status' => TRUE,
            'message' => 'Card Data updated',
            'data' => $status
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' =>'Card data not updated',
            ], REST_Controller::HTTP_OK);    
        }*/

$mission_id = strip_tags($this->post('mission_id'));

$user_id=strip_tags($this->post('user_id'));

$client_id1=strip_tags($this->post('client_id'));

$amount = strip_tags($this->post('amout'));

$amount_9 = ($amount * 9)/100;

$total_amount = $amount + $amount_9;

$wallet_balance = $this->ClientApiModel->get_wallet_balance($user_id);


$wallet_amount_updated = $total_amount + $wallet_balance;
$update_card_details = array('walet_balance'=>$wallet_amount_updated);

$status = $this->ClientApiModel->update_wallet_amount($user_id,$update_card_details);

$wallet_balance = $this->ClientApiModel->get_wallet_balance(4);
$wallet_amount_updated = $wallet_balance - $total_amount ;
$update_card_details = array('walet_balance'=>$wallet_amount_updated);

$status = $this->ClientApiModel->update_wallet_amount(4,$update_card_details);


$status = $this->ClientApiModel->addcompleted($mission_id);

$client_id = $this->ClientApiModel->getclient_iddata($mission_id);


$taken_data = $this->ClientApiModel->gettokendata($client_id1);

$this->firebase->send_notification("A request to release your payment has been sent to Admin",$taken_data);

$this->firebase->insertMessage(array('user_id'=>$client_id1,'notification'=>"A request to release your payment has been sent  to Admin",'demand_id'=>$mission_id,'type_id'=>1));           


$taken_data = $this->ClientApiModel->gettokendata($client_id);

$this->firebase->send_notification("Your project is moved to completed",$taken_data);

$this->firebase->insertMessage(array('user_id'=>$client_id,'notification'=>"Your have project is moved to completed",'demand_id'=>$mission_id,'type_id'=>2));
$mission_budget = $this->ClientApiModel->get_mission_budget($mission_id);

$mission_amount = $mission_budget[0]->budget;
$offer_amount = $mission_budget[0]->offer_budget;

$amount_to_pay = ($offer_amount*9)/100;
$amount_to_pay = $offer_amount - $amount_to_pay;

$this->ClientApiModel->withdrawpayment(array('mission_id'=>$mission_id,'mission_amount'=>$mission_amount,'offer_amount'=>$offer_amount,'amount_to_pay'=>$amount_to_pay,'date_created'=>$date_created,'mission_status'=>3,'employer_id'=>$client_id,'emplyee_id'=>$client_id1));   


             if($status)
        {



            $this->response([
            'status' => TRUE,
            'message' => 'A request to release a payment has been sent',
            'data' => $status
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' =>'A request to release a payment has not been sent',
            ], REST_Controller::HTTP_OK);    
        }
  }


  public function get_wallet_balance_post()

{
$user_id=strip_tags($this->post('user_id'));
$status = $this->ClientApiModel->get_wallet_balance($user_id);
if($status)
        {
        $this->response([
        'status' => TRUE,
        'message' => ('Wallet data'),
        'data'=>$status,
        ], REST_Controller::HTTP_OK);
        }

        else 
        {
        $this->response([
        'status' => false,
        'message' => ('Wallet data not found'),
        ], REST_Controller::HTTP_OK);
        }
}




public function pay_wallet_post()
    {
       
        $user_id = strip_tags($this->post('user_id'));
        
        $admin_id = 4;
       
        $amount = strip_tags($this->post('amount'));

      $status = $this->ClientApiModel->get_wallet_balance($user_id);

      $amount1 = $status +$amount;

        $update_card_details = array('walet_balance'=>$amount1);


        

           
          $result = $this->ClientApiModel->update_wallet_amount($admin_id,$update_card_details);
         
 if($result)
        {

            $this->response([
            'status' => TRUE,
            'message' => 'Updated successfully',
            ], REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
            'status' => false,
            'message' => 'can not Added',
            ], REST_Controller::HTTP_OK);    
        }
         
}



}    