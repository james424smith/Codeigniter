<?php

class Footer extends CI_Controller

{

public function __construct()

{

parent::__construct();

   

        // Load form validation library

        $this->load->library('form_validation');

        // $this->load->library('encrypt');

        $this->load->library('session');

        // $this->session->set_userdata("Email",$mailData);

}



    public function index(){



         $this->load->model('Front/Blog_model');



               /*Display Comments*/

        // print_r($data_com);

        // die();

        $data = $formData = array();

        

        // If contact request is submitted

        if($this->input->post('footerSubmit')){

            

            // Get the form data

            $formData = $this->input->post();

            

            // Form field validation rules

            $this->form_validation->set_rules('Name', 'Name', 'trim|required|alpha_numeric_spaces');

            $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email');

             $this->form_validation->set_rules('number', 'Phone', 'trim|required|numeric|min_length[10]|max_length[10]');

            // $this->form_validation->set_rules('subject', 'Subject', 'required');

            // $this->form_validation->set_rules('message', 'Message', 'trim|required');



            

            // Validate submitted form data

            if($this->form_validation->run() == true){

                

                // Define email data

                $mailData = array(

                    'Name' => $formData['Name'],

                    'Email' => $formData['Email'],

                    'number' => $formData['number'],

                    // 'message' => $formData['message'],

                     'value' => $formData['value'],

                );

                 $this->session->set_userdata("Email",$mailData);

                

                // Send an email to the site admin

                $send = $this->sendEmail($mailData);

                

                // Check email sending status

                if($send){

                    // Unset form data

                    $formData = array();

                    

                    $data['status'] = array(

                        'type' => 'success',

                        'msg' => 'Your popup request has been submitted successfully.'

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

        $data['postData'] = $formData;

        

        // Pass the data to view

        $this->load->view('Front/common/header');

                $data['data_com']=$this->Blog_model->display_comments();



        $this->load->view('Front/home', $data);

        $this->load->view('Front/common/footer' , $data);



              }

    

    private function sendEmail($mailData){

        // Load the email library

        $this->load->library('email');

        // Mail config

        $to = 'info@alphawizz.com';

        $from = 'email';

        $fromName = 'Sonali Rathore';

        $mailSubject = 'Popup Request Submitted by '.$mailData['name'];

        

        // Mail content

        $mailContent = '

            <h2>Popup Request Submitted</h2>

            <p><b>Name: </b>'.$mailData['Name'].'</p>

            <p><b>Email: </b>'.$mailData['Email'].'</p>

             <p><b>Phone: </b>'.$mailData['number'].'</p>

            

            <p><b>Looking For: </b>'.$mailData['value'].'</p>

        ';

            

        $config['mailtype'] = 'html';

        $this->email->initialize($config);

        $this->email->to($to);

        $this->email->from($from, $fromName);

        $this->email->subject($mailSubject);

        $this->email->message($mailContent);

        // Send email & return status

        $this->email->send();

        return redirect('Front/home');

   

    }

    

}