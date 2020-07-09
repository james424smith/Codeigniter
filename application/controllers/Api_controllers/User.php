<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Load the Rest Controller library
require(APPPATH.'/libraries/REST_Controller.php');

class User extends REST_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Api_models/UserApiModel');
	}


	public function UserProfile_get()
	{
		$user_id = strip_tags($this->get('user_id'));
        $data = $this->UserApiModel->getUserProfileById($user_id);
        $data->vendor_file = strip_tags($data->vendor_file);
        if($data)
        {
        	$this->response([
			'status' => TRUE,
			'message' => 'User Profile',
			'User'=>$data
			], REST_Controller::HTTP_OK);
        }
        else 
        {
        	$this->response([
			'status' => TRUE,
			'user' => 'User not found'
			], REST_Controller::HTTP_OK);
        }
	}
}

