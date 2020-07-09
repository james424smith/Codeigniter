<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
   public function __construct()
   {
		parent::__construct();
		$this->load->model('Register_model');
		if(!empty($this->session->userdata('id'))){
		}
		else 
		{
			redirect('Login');
		}
	}
	
	public function index()
	{ 
		$data['user'] = $this->Register_model->getUserCount();
		$data['demand'] = $this->Register_model->getDemandCount();
		$data['project'] = $this->Register_model->getProjectCount();
		$data['latest_project_list'] = $this->Register_model->getLatestProject();
		$data['latest_user_list'] = $this->Register_model->getLatestUserList();
		$this->load->view('common/sidebar');
		$this->load->view('common/header');
		$this->load->view('home',$data);
		$this->load->view('common/footer');
	}
}
