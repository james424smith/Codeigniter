<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_send extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('email');
    }
	public function index()
	{
		$this->load->view('Front/email_send');
	}
	public function send(){

    // $to =  $this->input->post('from');  // User email pass here
    // $subject = 'Welcome To CodingMantra';
    // $from = 'rangariroshni183@gmail.com';             // Pass here your mail id
    // $emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:1px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="background:#000000;padding-left:3%"><img src="http://codingmantra.co.in/assets/logo/logo.png" width="300px" vspace=10 /></td></tr>';
    // $emailContent .='<tr><td style="height:20px"></td></tr>';
    // $emailContent .= $this->input->post('message');  //   Post message available here
    // $emailContent .='<tr><td style="height:20px"></td></tr>';
    // $emailContent .= "<tr><td style='background:#000000;color: #999999;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='http://codingmantra.co.in/' target='_blank' style='text-decoration:none;color: #60d2ff;'>www.codingmantra.co.in</a></p></td></tr></table></body></html>";

    // $config['protocol']    = 'smtp';
    // $config['smtp_host']    = 'ssl://smtp.gmail.com';
    // $config['smtp_port']    = '587';
    // $config['smtp_timeout'] = '60';

    // $config['smtp_user']    = 'rangariroshni183@gmail.com';    //Important
    // $config['smtp_pass']    = 'roshnirangari@123';  //Important

    // $config['charset']    = 'utf-8';
    // $config['newline']    = "\r\n";
    // $config['mailtype'] = 'html'; // or html
    // $config['validation'] = TRUE; // bool whether to validate email or not 

     

    // $this->email->initialize($config);
    // $this->email->set_mailtype("html");
    // $this->email->from($from);
    // $this->email->to($to);
    // $this->email->subject($subject);
    // $this->email->message($emailContent);
    // $this->email->send();
    // $this->session->set_flashdata('msg',"Mail has been sent successfully");
    // $this->session->set_flashdata('msg_class','alert-success');

    // return redirect('email_send');

    /******************************/
//     $from_email = "sonalirathore0009@gmail.com";
//     $to_email = $this->input->post('from');
//     $this->email->from($from_email, 'Identification');
//     $this->email->to($to_email);
//     $this->email->subject('Send Email Codeigniter');
//     $this->email->message('The email send using codeigniter library');
//     //Send mail
//     if($this->email->send())
//         $this->session->set_flashdata("msg","Congragulation Email Send Successfully.");
//     else
//         $this->session->set_flashdata("msg","You have encountered an error");
//     $this->load->view('email_send');
//     }
// ===================

//SMTP & mail configuration
$config = array(
    'protocol'  => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'rangarirohni183@gmail.com',
    'smtp_pass' => 'roshnirangari@123',
    'mailtype'  => 'html',
    'charset'   => 'utf-8'
);
$this->email->initialize($config);
$this->email->set_mailtype("html");
$this->email->set_newline("\r\n");

// Email Name
// $this->email->name('sonali');
$this->email->input->post->name;
//Email content
$htmlContent = 'hii';
$htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

$this->email->to('rangarirohni183@gmail.com');
$this->email->from('rangarirohni183@gmail.com','MyWebsite');
$this->email->subject('Thanks For the Mail');
$this->email->message($htmlContent);

//Send email
$this->email->send();
    $this->load->view('email_send');

}
}