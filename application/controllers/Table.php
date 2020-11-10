<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Register_model');
        

        if(!empty($this->session->userdata('admin_id'))){
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
        $userlist['selfadmin'] = $this->Register_model->getSelfUser();
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
        
        $id  = $this->uri->segment(3);
        $this->db->select("*");
        $this->db->from("users");
        $this->db->where('id', $id);
        $data['users_edit'] = $this->db->get()->result();
        $data['selfadmin'] = $this->Register_model->getSelfUser();

        $this->load->view('common/sidebar');
        $this->load->view('common/header');
        $this->load->view("edit_users", $data);  
        $this->load->view('common/footer');
    }

    public function save_users(){
        //print_r($this->input->post());exit;
        $post = $this->input->post();
        $id = $this->input->post('user_id');

        $user_update = array(
            'first_name' => $post['first_name'],
            'last_name' => $post['last_name'],
            'username' => $post['username'],
            'email' => $post['email'],
            'dob' => $post['username'],
            'school_address' => $post['school_address'],
            'country' => $post['country'],
            'Profile_Rate' => $post['Profile_Rate'],
            'Total_earned_amount' => $post['Total_earned_amount'],       
            'spent' => $post['spent'],
            'stripe_customer_id' => $post['stripe_customer_id'],
            'stripe_card_id' => $post['stripe_card_id']
        );

        $this->db->set($user_update);
        $this->db->where('id', $id);
        $this->db->update('users');
        redirect('table');    
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
