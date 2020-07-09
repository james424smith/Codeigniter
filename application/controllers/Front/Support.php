<?php

class Support extends CI_Controller

{

public function __construct()

{

parent::__construct();   

        // Load form validation library

        $this->load->library('form_validation');

        // $this->load->library('encrypt');

        //$this->load->model('Blog_model');
}

    public function send(){

        //$data = $formData = array();
        // If contact request is submitted

        if($this->input->post()){           

            // Get the form data

            $formData = array(
                'name' => $this->input->post('name'), 
                'email' => $this->input->post('email'),  
                'description' => $this->input->post('description')
                ); 

               


            // Form field validation rules

            $this->form_validation->set_rules('name', 'Name', 'trim|required|alpha_numeric_spaces');

            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            

            // Validate submitted form data

            if($this->form_validation->run() == true){                

                // Define email data

                $mailData = array(

                    'name' => $formData['name'],

                    'email' => $formData['email'],

                    'description' => $formData['description']

                );
               


                // Send an email to the site admin

                $send = $this->sendEmail($mailData);  


               // print_r($send);die();
                // Check email sending status

                if($send){
                    // Unset form data

                    $formData = array();                    

                    $data['status'] = array(

                        'type' => 'success',

                        'msg' => 'Your support request has been submitted successfully.'
                    );

                }else{

                    $data['status'] = array(

                        'type' => 'error',

                        'msg' => 'Some problems occured, please try again.'

                    );

                }

            }

        }        

       

        $this->load->view('Front/Support_contact',$data);

       //$this->load->view('Front/common/footer');
        

    }    

   private function sendEmail($mailData){

        // Load the email library

        $this->load->library('email');

        // Mail config

        $to = 'rangariroshni183@gmail.com';

        $from = $mailData['email'];

        $fromName = $mailData['name'];

        $mailSubject = 'Support Request Submitted by '.$mailData['name'];

        

        // Mail content

        $mailContent = '

            <h2>Support Request Submitted</h2>

            <p><b>Name: </b>'.$mailData['name'].'</p>

            <p><b>Email: </b>'.$mailData['email'].'</p>

            <p><b>description: </b>'.$mailData['description'].'</p>
           

        ';

            

        $config['mailtype'] = 'html';

        $this->email->initialize($config);

        $this->email->to($to);

        $this->email->from($from, $fromName);

        $this->email->subject($mailSubject);

        $this->email->message($mailContent);

        // Send email & return status

        return $this->email->send();
        

    }
    

}