<?php
class About extends CI_Controller
{
   
    public function index()
    {
    	

        $this->load->view('Front/common/header');
         $this->load->model('Front/About_model');
        //$this->load->view('about',$data);
        $data['data']=$this->About_model->about_data();
        $data['team']=$this->About_model->about_team();
        $this->load->view('Front/about',$data);
        $this->load->view('Front/common/footer');
    }
    
}
?>