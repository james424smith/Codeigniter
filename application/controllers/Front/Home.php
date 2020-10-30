<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Home extends CI_Controller
{

public function __construct() {
parent::__construct();
$this->load->model('Front/HomeContent_model');
$this->load->helper('url');
$this->load->model('Front/Posts_model');
$this->load->library("pagination");

}

   public function index()
    {
        $this->load->view('Front/common/header');
        // $this->load->view('home');
        $this->load->model('Front/HomeContent_model');
      
        $home_data['data_posts'] = $this->Posts_model->display_services_post();
        $home_data['missions'] = $this->Posts_model->display_services_missions();
        //
        //print_r($home_data['missions']);die();
        /*Home Section1*/
        $home_data['section_1'] = $this->HomeContent_model->display_services();
        $home_data['section_2'] = $this->HomeContent_model->display_section2();
        // team search
        //$keywords = $this->input->post('keywords'); 
        // print_r($keywords);die();
        $home_data['team'] = $this->HomeContent_model->display_ourteam();
      
        /*Home Section1*/
        $this->load->view('Front/home', $home_data);
        $this->load->view('Front/common/footer');  
    }  

    public function search() {
      
        if($this->session->userdata['id'])
        {
        $this->load->view('Front/common/header');
        $keywords = $this->input->post('keywords');
        $home_data['team']=$this->HomeContent_model->display_ourteam_search($keywords);
        
        $this->load->view('Front/search',$home_data);
        $this->load->view('Front/common/footer');  

        }
        else {
            $this->load->view('Front/login');
        }
    }

    public function logout()  
      {  
        // print_r($this->session->userdata('user'));exit;
        $this->session->unset_userdata('id');  
        redirect(base_url() . 'Front/home/login');  
      }  
        
    public function login(){
        $this->load->view('Front/login');  
    }

    public function signUp(){
        $this->load->view('Front/signup');  
    }

     public function mymissions(){
        if($this->session->userdata['id']){
        $this->load->view('Front/my_missions');  
    }
    else{
         $this->load->view('Front/login');  
    }
    }

     public function mydemands(){
         if($this->session->userdata['id']){
        $this->load->view('Front/my_demands');  
    }
    else{
         $this->load->view('Front/login');  
    }
    }

    public function find_mission(){

         /*pagination */
        $cat_id = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $config = array();
        $config["base_url"] = base_url().'Front/Home/find_mission/'.$cat_id;
        $config["total_rows"] = $this->Posts_model->count_display_alldemand($cat_id);
        $config["per_page"] = 10;
        $config["uri_segment"] = 5;    

        $this->pagination->initialize($config);

       $page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;        
       $data["posts"] = $this->Posts_model->display_alldemand($cat_id, $config["per_page"], $page);
       $data["links"] = $this->pagination->create_links();

        $this->load->view('Front/find_mission', $data);  
    }

    public function post_demand(){
        $home_data['data_posts'] = $this->Posts_model->display_services_post();
        $this->load->view('Front/post_demand', $home_data);  
    }
    public function post_demand_inner(){
        $this->load->view('Front/post_demand_inner');  
    }
    public function demand_delivered_details(){
        $this->load->view('Front/demand_delivered_details');  
    }
    public function demand_dispute_details(){
        $this->load->view('Front/demand_dispute_details');  
    }
    public function Payment(){
        $this->load->view('Front/Payment');  
    } 
    public function demand_posted_details(){
        $this->load->view('Front/demand_posted_details');  
    }
    public function mission_posted_details(){
        $this->load->view('Front/mission_posted_details');  
    }
    public function mission_complete_details(){
        $this->load->view('Front/mission_complete_details');  
    }
    public function offer(){
        $this->load->view('Front/offer');  
    }
    public function Support_contact(){
        $this->load->view('Front/Support_contact');  
    } 
    public function about_heelp(){
        $this->load->view('Front/about_heelp');  
    }
     public function my_payment(){
        $this->load->view('Front/my_payment');  
    }
     public function my_wallet(){
        $this->load->view('Front/my_wallet');  
    }
    public function credit_card(){
        $this->load->view('Front/credit_card');  
    }
    public function my_profile(){
        $this->load->view('Front/my_profile');  
    }
    public function review_profile(){
        $this->load->view('Front/review_profile');  
    }

    public function transactions(){
        $this->load->view('Front/transactions');  
    }
    public function chat(){
        $this->load->view('Front/chat');  
    }
    public function make_an_offer(){
        $this->load->view('Front/make_an_offer');  
    }
    public function demand_completed_details(){
        $this->load->view('Front/demand_completed_details');  
    }
    public function demand_inprogress_details(){
        $this->load->view('Front/demand_inprogress_details');  
    }
    public function mission_delivered_details(){
        $this->load->view('Front/mission_delivered_details');  
    }
    public function terms_condition(){
        $this->load->view('Front/terms_condition');  
    }
    public function mission_inprogress_details(){
        $this->load->view('Front/mission_inprogress_details');  
    }
    public function mission_dispute_details(){
        $this->load->view('Front/mission_dispute_details');  
    }
     public function category(){
       //  $config = array();
       //  $config["base_url"] = base_url().'Front/Home/category';
       //  $config["total_rows"] = $this->Posts_model->get_cat_count($cat_id);
       //  $config["per_page"] = 10;
       //  $config["uri_segment"] = 5;    

       //  $this->pagination->initialize($config);

       // $page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;    
         
       // $data["posts"] = $this->Posts_model->display_cate_data($config["per_page"],$page,$cat_id);
       // $data["links"] = $this->pagination->create_links();

        $this->load->view('Front/category');  
    }
    public function heelper_profile(){
       
        // $id  = $this->uri->segment(3);
        // $data_Services = $this->db->query("select * from   home_ourteam  where team_id=" . $id);        
        // $data['profile'] = $data_Services->result_array();
        //print_r($data) ;die();      
         $this->load->view('Front/heelper_profile');
        //$this->load->view('heelper_profile');  
    }
    


 }
?>