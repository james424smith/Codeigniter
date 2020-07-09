<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Register_model');
        

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
        /*Display user list*/
  // if($role =='Admin' ){
        $userlist['userlist'] = $this->Register_model->UserList();
        // echo '<pre>';print_r($userlist['userlist']);exit;
        $this->load->view('userlist', $userlist); 
        $this->load->view('common/footer');
    // }

    }

    // public function test(){
    //     $this->load->library("session");
    //     $language = $this->uri->segment(3);
        
    //     $this->session->set_userdata('language',$language);
    // }

    public function edit_users(){
        $this->load->model('Demands_model');
        // $this->load->view('sidebar');
        $id  = $this->uri->segment(3);
      //  $data_litigations = $this->db->query("select * from  mission  where mission_id=" . $id);
        $this->db->select("mission.mission_id,mission.mission_title,mission.mission_description,mission.status,mission.client_id,mission.accepted_by,mission.budget,project_category.title as category_title,mission.created");
    $this->db->from("mission");
    $this->db->join("project_category","project_category.project_id = mission.mission_category");

    $this->db->where('mission.mission_id', $id);
$data['demands_edit'] = $this->db->get()->result();
        // $data_projects['project_edit'] = $data_projects->result_array();

        //$data['demands_edit'] = $data_demands->result_array();
        // echo '<pre>';print_r($data['project_edit']);exit;
       // print_r($data['services_edit']);exit;
        
        $this->load->view('common/sidebar');
        $this->load->view('common/header');
        $this->load->view("edit_users", $data);  
        $this->load->view('common/footer');
        
        
    }

    public function save_users(){
        // print_r($this->input->post());exit;
        $post = $this->input->post();
        $id = $this->input->post('id');


        $demands_update = array('mission_title'=>$post['mission_title'],'mission_description'=>$post['mission_description'],'budget'=>$post['budget'],'status'=>$post['status']);
        
            
            $this->db->where('mission_id',$id);
            $this->db->update('mission',$demands_update);
            redirect('demandsList');    
    }

// delete data
    public function delete_row($id) {
        $this->load->model("Register_model");
        $this->Register_model->did_delete_row($id);
        $userlist['userlist'] = $this->Register_model->UserList();
        redirect('Table');
    }

 public function block_row($id) {
        $this->load->model("Register_model");
        $this->Register_model->did_block_row($id);
        $userlist['userlist'] = $this->Register_model->UserList();
        redirect('Table');
    }

    public function export_csv(){ 
  $post = $this->input->post();
        $from_date = $this->input->post('from_date');
        $from_date_new = date('Y-m-d', strtotime($from_date)); 
    
        $to_date = $this->input->post('to_date');
        $to_date_new = date('Y-m-d', strtotime($to_date));
        // file name 
        $filename = 'users_'.date('Ymd').'.csv'; 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$filename"); 
        header("Content-Type: application/csv; ");
       // get data 
        $usersData = $this->Register_model->getUserList($from_date_new,$to_date_new);
        // file creation 
        $file = fopen('php://output','w');
        $header = array("Date of profile creation","First name","Last name", "email","Date of Birth","University/School", "Country","Profil Rate (based on reviews rates)","Total earned amount","Current Balance (wallet)"); 
        fputcsv($file, $header);
        foreach ($usersData as $key=>$line){ 
            fputcsv($file,$line); 
        }
        fclose($file); 
        exit; 
    }

}
