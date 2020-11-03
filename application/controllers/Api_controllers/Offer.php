	

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Load the Rest Controller library
require(APPPATH.'/libraries/REST_Controller.php');

class Offer extends REST_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Api_models/ProjectModel');
$this->load->model('Api_models/ClientApiModel');
		
	}

	public function makeAnOffer_post()

	{
		$validation_errors='';
		$count = 0;
		$project_id = strip_tags($this->post('project_id'));
		$user_id = strip_tags($this->post('user_id'));
		$message = strip_tags($this->post('message'));	
		$status = strip_tags($this->post('status'));
		$accept_budget = strip_tags($this->post('accept_budget'));
		$offer_budget = strip_tags($this->post('offer_budget'));
		$date_created = date('Y-m-d H:i:s');

		 $client_id = $this->ProjectModel->getclientDetails($project_id);


        $offer_data = array('project_id'=>$project_id,'user_id'=>$user_id,'message'=>$message,'status'=>$status,'accept_budget'=>$accept_budget,'offer_budget'=>$offer_budget,'created_date'=>$date_created);
		$parameters = ['project_id','user_id','message'];
        for($i=0;$i<count($parameters);$i++)
        {
         	if($offer_data[$parameters[$i]] == '')
         	{
         		if($count == 0)
         		{
					$validation_errors = $parameters[$i];
					$count ++;
         		}
         		else 
         		{
					$validation_errors .= ','. $parameters[$i];
					$count ++;	
         		}
         		
         	}
        }


//$status = $this->ProjectModel->updateacceptby($project_id,$user_id);

        if($count == 0)
        {
			if($this->ProjectModel->addOfferToProject($offer_data))
			{
				
				//echo $token = $this->firebase->getFirebaseToken('users',$client_id);
 				$taken_data = $this->ClientApiModel->gettokendata($client_id);


        		$this->firebase->send_notification("You have received an offer",$taken_data);

        		$this->firebase->insertMessage(array('user_id'=>$client_id,'notification'=>"You have received an offer",'demand_id'=>$project_id,'type_id'=>3));


				$this->response([
				'status' => TRUE,
				'message' => ('Offer addedd')
				], REST_Controller::HTTP_OK);	 	
			}
			else 
			{
			    $this->response([
				'status' => TRUE,
				'message' => 'Unable to add Offer'
				], REST_Controller::HTTP_OK);	 		
			}
        }

        else 
        {
			$this->response([
			'status' => FALSE,
			'message' => $validation_errors.' '. 'is required'
			], REST_Controller::HTTP_BAD_REQUEST);	
        }
          

	}


public function accepOffer_post()

	{
		$project_id = strip_tags($this->post('project_id'));
		$user_id = strip_tags($this->post('user_id'));
		$mission_id = strip_tags($this->post('mission_id'));

        $offer_data = array('project_id'=>$project_id,'user_id'=>$user_id);
		$parameters = ['project_id','user_id','message'];
        

        if($project_id > 0)
        {
			if($this->ProjectModel->addAcceptOffer($offer_data))
			{
				$this->response([
				'status' => TRUE,
				'message' => ('Offer Accepted')
				], REST_Controller::HTTP_OK);	 	
			}
			else 
			{
			    $this->response([
				'status' => TRUE,
				'message' => 'Unable to Accept Offer'
				], REST_Controller::HTTP_OK);	 		
			}
        }

        else 
        {
			$this->response([
			'status' => FALSE,
			'message' => $validation_errors.' '. 'is required'
			], REST_Controller::HTTP_BAD_REQUEST);	
        }
          

	}


public function getofferid_post()
    {
 
 $mission_id = strip_tags($this->post('mission_id'));



        $mission_data = $this->ProjectModel->getalloffer($mission_id);

      /*  print_r($mission_data);
        exit();*/

        if($mission_data)
        {
            $this->response([
            'status' => TRUE,
            'message' => ('Offer Details'),
            'data'=>$mission_data,
            ], REST_Controller::HTTP_OK);
        }

        else 
        {
            $this->response([
            'status' => false,
            'message' => ('Offer Details'),
            ], REST_Controller::HTTP_OK);
        }

    }

}
