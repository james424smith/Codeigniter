<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Load the Rest Controller library
require(APPPATH.'/libraries/REST_Controller.php');

class Demand extends REST_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Api_models/DemandApiModel');

        
        
    }


    public function Demands_post()
    {
    	$budget = strip_tags($this->post('budget'));
        $date = strip_tags($this->post('date'));
    	$data = $this->DemandApiModel->publishDemandFilter($budget,$date);

         // print_r($data);exit;

    	 for($i=0;$i<count($data);$i++)
        {
        	$avg = $this->DemandApiModel->selectAvgOfRating($data[$i]->id);
            $count = 1;
            $total = 0;
        	for($j=0;$j<count($avg);$j++)
        	{
              $total += $avg[$j]->rating;
              $count++;
        	}

        	$data[$i]->rating_avg = round($total/$count);



            if($data[$i]->duration == 0)
            {
                $data[$i]->duration = $this->lang->line('today');   
            }
            else
            {
                $data[$i]->duration = $data[$i]->duration.' '.$this->lang->line('days ago');    
            }
            
        }


    	if(!empty($data))
    	{
          
            $this->response([
            'status' => TRUE,
            'message' => $this->lang->line('Demand Filters'),
            'your_demands'=>$data,
            ], REST_Controller::HTTP_OK);
    	}

    	else
    	{
           
            $this->response([
            'status' => FALSE,
            'message' => $this->lang->line('Demand Filters')
            ], REST_Controller::HTTP_OK);
    	}
    }

}   