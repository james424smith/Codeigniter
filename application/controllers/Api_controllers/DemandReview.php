<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Load the Rest Controller library
require(APPPATH.'/libraries/REST_Controller.php');

class DemandReview extends REST_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Api_models/ProjectModel');

         
	}

	
	public function addComments_post()
	{
		$uploadData = array();
		$string_image = '';
		$user_id = strip_tags($this->post('user_id'));
		$demand_id = strip_tags($this->post('demand_id'));
		$comment = strip_tags($this->post('comment'));
		$comment_data = array('user_id'=>$user_id,'comment'=>$comment,'demand_id'=>$demand_id);

		$config['upload_path']          = 'uploads/Project_comment_documents';
		$config['allowed_types']        = 'gif|jpg|png|pdf|doc';
		$config['max_size']             = 10000;
		$config['max_width']            = 2024;
		$config['max_height']           = 1768;

		$this->load->library('upload', $config);
		  if(!empty($_FILES['attachment']['name'])){
		  	// count($_FILES['attachment']['name']);
            $filesCount = is_array($_FILES['attachment']['name'])?count($_FILES['attachment']['name']):1;
            	
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = $_FILES['attachment']['name'][$i];
                $_FILES['file']['type']     = $_FILES['attachment']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['attachment']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['attachment']['error'][$i];
                $_FILES['file']['size']     = $_FILES['attachment']['size'][$i];
                
                // File upload configuration
				
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                // Upload file to server
                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    $fileData = $this->upload->data();

                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    if($i==0){
                    	$string_image .=$uploadData[$i]['file_name'];
                    }
                    else {
                        $string_image =$string_image.','.$uploadData[$i]['file_name'];	
                    }
                    
                    // $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                }
                else {
                	// print_r($this->upload->display_errors());exit;
                }
            }
        }
       
         if(!empty($string_image)){
          $comment_data['attachment']=$string_image;
         }
          // $string = implode(',',$uploadData);
          // echo $string;exit;


		

		if($this->ProjectModel->AddProjectComments($comment_data))
		{
			$this->response([
			'status' => TRUE,
			'message' => $this->lang->line('Comment added successfully')
			], REST_Controller::HTTP_OK);

		}
		else 
		{
			$this->response([
			'status' => TRUE,
			'message' => $this->lang->line('Unable To Add')
			], REST_Controller::HTTP_OK);        	
		}
	}

	public function getComments_post()
	{
    	$demand_id = strip_tags($this->post('demand_id'));
    	$comments = $this->ProjectModel->getProjectComments($demand_id);

    	for($i=0;$i<count($comments);$i++){
    	$comments[$i]->project_images = explode(',',$comments[$i]->attachment);
    	unset($comments[$i]->attachment);
    	}
        if(!empty($comments)){
    	$this->response([
			'status' => TRUE,
			'comments' => $comments
			], REST_Controller::HTTP_OK);
    	}

	}



    public function addBid_post()
    {
        $demand_id = strip_tags($this->post('demand_id'));
        $user_id = strip_tags($this->post('user_id'));
        $bid_description = strip_tags($this->post('bid_comment'));

        $insert_bid = array('demand_id'=>$demand_id,'user_id'=>$user_id,'bid_description'=>$bid_description);
        $response = $this->ProjectModel->addBidOnProject($insert_bid);
        if($response['status']){
            $this->response([
            'status' => TRUE,
            'Bid' => $response['message']
            ], REST_Controller::HTTP_OK);    
        }

        else {
           $this->response([
            'status' => FALSE,
            'Bid' => $response['message']
            ], REST_Controller::HTTP_OK);  
        }
    }


    public function BiddingList_post()
    {
        $demand_id = strip_tags($this->post('demand_id'));
        $response = $this->ProjectModel->getBidByProjectId($demand_id);
        if($response){
            $this->response([
            'status' => TRUE,
            'message'=>'Bidding list',
            'Bid' => $response
            ], REST_Controller::HTTP_OK);    
        }

        else {
           $this->response([
            'status' => FALSE,
            'message' => 'Project not found'
            ], REST_Controller::HTTP_OK);  
        }
    }



    public function getYourProjectComments(){
    	$project_id  = strip_tags($this->post('project_id'));

    }



}