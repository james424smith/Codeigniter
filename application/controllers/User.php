<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function __construct() {

		parent::__construct();
        $this->load->model('Register_model');

		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		
		
		
		if(!empty($this->session->userdata('id'))){


		}
		else {
			redirect('Login');
		}
	


	}
	public function index()
	{
		$this->load->view('common/sidebar');
		$this->load->view('common/header');
		 $demandlist['demandlist'] = $this->Register_model->DemandList();
		
        $this->load->view('user', $demandlist); 
		$this->load->view('common/footer');

	}


    public function delete_row_demand($id){

        $this->load->model("Register_model");
        $this->Register_model->delete_demand($id);
        $demandlist['demandlist']=$this->Register_model->DemandList();
        redirect('user');
             
    }
     
     public function edit_userList(){
        $id  = $this->uri->segment(3);

        $this->load->view('common/header');     
        $this->load->view('common/sidebar');
        $data_User = $this->db->query("select * from  publishDemand  where id=" . $id);
        // $data_projects['project_edit'] = $data_projects->result_array();
        $data['user_edit'] = $data_User->result_array();
        $data['project_category']=$this->Register_model->getProjectCategories();
       // print_r($data['services_edit']);exit;
        $this->load->view("edit_userlist", $data);  
        $this->load->view('common/footer');
        
    }

      public function save(){
        $this->load->model('Service_model');        
        $image_name="";
        // if (isset($_FILES["image"]) && $_FILES["image"]["size"] > 0) {
            $config['upload_path']   = './uploads/profiles/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['encrypt_name']  = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('profile_image')) {
                $data["responce"] = false;
                $data["error"]    = 'Error! : ' . $this->upload->display_errors();
                // print_r($data);exit;                
            } else {
                $img_data   = $this->upload->data();
                $image_name = $img_data['file_name'];                
            }
        // }
        $user_data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'image' => ($image_name)?$image_name:$this->input->post('user_image'),
            'project_category' => $this->input->post('project_category')            
        );
        
        $this->Service_model->edit('publishDemand', 'id = ' . $this->input->post('id'), $user_data);
        $data_User['data_User'] = $this->Service_model->display_user();
        // $this->load->view('sidebar');
        // $this->load->view('services_list', $data_Services);
       
         redirect('user');
    } 



}