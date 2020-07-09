<?php
class Privacy_policy extends CI_Controller
{
    
    public function index()
    {
    	$this->load->model('Front/Blog_model');
    	 $data['data_com']=$this->Blog_model->display_comments();
        $this->load->view('Front/common/header');
        $this->load->view('Front/privacy_policy',$data);
        $this->load->view('Front/common/footer');
    }
    
}
?>