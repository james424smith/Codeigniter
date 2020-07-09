<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DemandApiModel extends CI_Model
{
    public function __construct()
    {
        $this->demand_table_name = 'publishDemand';
        $this->bidding_table_name = 'project_bidding';
        $this->user_table_name = 'users';
        $this->logged_in_with='';
        $this->response=array();
    }


    public function publishDemandFilter($budget='',$date='')
    {
    	$this->db->select("publishDemand.title,publishDemand.budget,users.id,users.picture_url,publishDemand.created as date,DATEDIFF(NOW(), publishDemand.created) as duration");
    	$this->db->from('publishDemand');
    	$this->db->join('users','publishDemand.client_id = users.id');
        if(!empty($budget))
        {
            $con['publishDemand.budget'] = $budget;
        }
        if(!empty($date))
        {
            $con['publishDemand.created'] = $date;
        }
        $this->db->where($con);
    	return $this->db->get()->result();
    }
 


 public function selectAvgOfRating($user_id)
 {
   $this->db->select("*");
   $this->db->from('user_review');
   $this->db->where('to_user_id',$user_id);
   $data = $this->db->get();

   //$count = $data->num_rows();
   $data = $data->result();
   return $data;
 }  
 } 