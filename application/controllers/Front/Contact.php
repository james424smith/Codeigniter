<?php

class Contact extends CI_Controller

{

public function __construct()

{

parent::__construct();   

        // Load form validation library

        $this->load->library('form_validation');

        // $this->load->library('encrypt');

        //$this->load->model('Blog_model');
}

    public function index(){

        $data = $formData = array();
        // If contact request is submitted

        if($this->input->post('contactSubmit')){           

            // Get the form data

            $formData = $this->input->post();           

            // Form field validation rules

            $this->form_validation->set_rules('name', 'Name', 'trim|required|alpha_numeric_spaces');

            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('contact_no', 'Phone', 'trim|required|numeric|min_length[10]|max_length[10]');

            // Validate submitted form data

            if($this->form_validation->run() == true){                

                // Define email data

                $mailData = array(

                    'name' => $formData['name'],

                    'email' => $formData['email'],

                    'contact_no' => $formData['contact_no'],

                    'message' => $formData['message']

                );
               

                // Send an email to the site admin

                $send = $this->sendEmail($mailData);    
               
                // Check email sending status

                if(!$send){
                    // Unset form data

                    $formData = array();                    

                    $data['status'] = array(

                        'type' => 'success',

                        'msg' => 'Your contact request has been submitted successfully.'
                    );

                }else{

                    $data['status'] = array(

                        'type' => 'error',

                        'msg' => 'Some problems occured, please try again.'

                    );

                }

            }

        }        

        // Pass POST data to view

        // $data['postData'] = $formData;

        // $data['data_com']=$this->Blog_model->display_comments();

        // Pass the data to view
         $this->load->model('Front/Contact_model');
       /*Home Section1*/
        $data['section_1']=$this->Contact_model->display_ourteam();

        $this->load->view('Front/common/header');

        $this->load->view('Front/contact', $data);

       $this->load->view('Front/common/footer');
        

    }    

    private function sendEmail($mailData){

        // Load the email library

        $this->load->library('email');

        // Mail config

        $to = 'rangariroshni183@gmail.com';

        $from = 'email';

        $fromName = $this->input->post('name');

        $mailSubject = 'Contact Request Submitted by '.$mailData['name'];

        

        // Mail content

        $mailContent = '

            <h2>Contact Request Submitted</h2>

            <p><b>Name: </b>'.$mailData['name'].'</p>

            <p><b>Email: </b>'.$mailData['email'].'</p>

            <p><b>Phone: </b>'.$mailData['contact_no'].'</p>

            <p><b>Message: </b>'.$mailData['message'].'</p>

        ';

            

        $config['mailtype'] = 'html';

        $this->email->initialize($config);

        $this->email->to($to);

        $this->email->from($from, $fromName);

        $this->email->subject($mailSubject);

        $this->email->message($mailContent);

        // Send email & return status

        $this->email->send();


    }
    public function contact_data()
    {
        $this->load->view('Front/common/header');      

      
    }  
    

    

}