<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Load the Rest Controller library
require(APPPATH.'/libraries/REST_Controller.php');

class Language extends REST_Controller 
{

	public function __construct()
	{
		parent::__construct();
	}

	public function setLanguage_post()
	{
		$language_key = strip_tags($this->post("language_key"));
		if($language_key == 2)
		{
			$this->session->set_userdata('language_key',1);
			$this->response([
            'status' => TRUE,
            'message' => $this->lang->line('Language Set Successfully')
            ], REST_Controller::HTTP_OK);
		}

		if($language_key == 1)
		{
			$this->session->set_userdata('language_key',2); 
			$this->response([
            'status' => TRUE,
            'message' => $this->lang->line('Language Set Successfully')
            ], REST_Controller::HTTP_OK); 
		}		
	}

}	


