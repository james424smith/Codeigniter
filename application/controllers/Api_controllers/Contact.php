<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Load the Rest Controller library
require(APPPATH.'/libraries/REST_Controller.php');

class Contact extends REST_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Api_models/ClientApiModel');

        
         
    }

    public function Enquiry_post()
    {
    	$title = strip_tags($this->post('title'));
    	$description = strip_tags($this->post('description'));
        $email = $this->config->item('enquiry_email');
        $user_id = strip_tags($this->post('user_id'));
        // echo $email;exit;

        $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');
        $to = $email;
        $subject = $title;
        $message = $description;

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) 
        {
            $this->response([
            'status' => TRUE,
            'message' => 'Your Enquiry has successfully been sent.',
            ], REST_Controller::HTTP_OK);
       
        } 
        else 
        {
            $this->response([
            'status' => FALSE,
            'message' => $this->lang->line('Unable to send email'),
            ], REST_Controller::HTTP_OK);
            
        }

    }

}     