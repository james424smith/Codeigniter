<?php
class ContactContent extends CI_Controller
{    
    public function index()
    {


        $this->load->model('ContactContent_model');
        $this->load->view('common/sidebar');
        $this->load->view('common/header');

        /*Display service*/

        $contact_data['contact_data'] = $this->ContactContent_model->display_contact_section1();

        $this->load->view('contact_us/contact_section1', $contact_data);       
        $this->load->view('common/footer');

    }
    // edit project list data
    public function delete_contact()
    {
      $id  = $this->uri->segment(3);
      $this->db->where('id', $id);
      $this->db->delete('contact');
      redirect("ContactContent");
    }
    
    public function edit_section1(){
        $this->load->model('ContactContent_model');
        $this->load->view('common/sidebar');
        $id  = $this->uri->segment(3);
        $contact_data = $this->db->query("select * from  contact  where id=" . $id);
        // $data_projects['project_edit'] = $data_projects->result_array();
        $data['edit_section1'] = $contact_data->result_array();
       // print_r($data['services_edit']);exit;
        $this->load->view("contact_us/contact_edit_section1", $data);       
        
    }
    
    public function save_contact() {
      $this->load->model('ContactContent_model'); 
      
      $response =  $this->input->post('response');
      $contact_data = array(
        'title' => $this->input->post('title'),
        'description' => $this->input->post('description'),
        'number' => $this->input->post('mobile_number'),
        'email' => $this->input->post('email'),
        'response' =>  $response,                 
      );
      $contact_id = $this->input->post('contact_id');
      //var_dump($contact_id);die(); 
      $this->ContactContent_model->update_contact($contact_id, $contact_data);
      if( $response != "" &&  $response != null)
        $this->send_response_email( $response, $this->input->post('email'));
      redirect("ContactContent");
    }


    public function send_response_email($text, $email){
        $this->load->config('email');
        $this->load->library('email');
        $from = $this->config->item('smtp_user');
        $to = $email;

        $subject   =  ' Réponse à votre demande.';
        $message   =  '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        $message  .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';
        $message  .=  '<div class="container">';
        $message  .=  '<div class="container">';
        $message  .=  '<div class="jumbotron text-center">';
        //                $message  .=  '<p class="content">You Recently Requested to reset password for your doctor admin account </br> we reset your password and your new password for username '.$admin_info['username'].' is '.$password;
        $message  .=  $text;

        $message .= '</div>';
        $message .= '</div>';
        
        // $message = 'For your Username '.$admin_info['data']['username'].' Your New Password is '.$password;        
        $this->email->set_header('Content-type', 'text/html');
        $this->email->set_newline("\r\n");
        $this->email->from($from, 'Heelp');
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        //var_dump($to);die();
        if ($this->email->send()) 
        { 
            //var_dump("ddd");die();
        } 
        else 
        {
            $this->session->set_flashdata('faild_send_email', "Incapable d'envoyer des emails.");
        }
    }
    // save edit services list data
    public function save_section1(){
        
        $this->load->model('ContactContent_model'); 

        if(!empty($_FILES['contact_section_image1']['name'])){
          $config['upload_path'] = './uploads/contact';
          $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
          $config['max_size'] = 6000000;
          $config['max_width'] = 45000;
          $config['max_height'] = 45000;

          $this->load->library('upload', $config);
  
          if (!$this->upload->do_upload('contact_section_image1')) 
          {
             $error = array('error' => $this->upload->display_errors());
             $image_name = '';
     
          } 
          else 
          {
            $img_data = $this->upload->data()['file_name'];
            $image_name = $img_data;
          }
        }
        if($image_name){
        $project_data = array(
            'contact_section_title1' => $this->input->post('contact_section_title1'),
            'contact_section_content1' => $this->input->post('contact_section_content1'),
            'contact_section_image1' => ($image_name)?$image_name:$this->input->post('service_image')            
        );
          $id = $this->input->post('id'); 
        }
        else{
          $project_data = array(
            'contact_section_title1' => $this->input->post('contact_section_title1'),
            'contact_section_content1' => $this->input->post('contact_section_content1')
            
         ); 
           $id = $this->input->post('id'); 
        }
        $this->ContactContent_model->edit($id,$project_data);
        $contact_data['contact_data'] = $this->ContactContent_model->display_contact_section1();
        // $this->load->view('sidebar');
        $this->load->view('contact_us/contact_section1', $contact_data);
       
         redirect('ContactContent/index');
    }     

    public function contact_section2(){
        /*Display service*/
        $this->load->model('ContactContent_model');
        $this->load->view('common/sidebar');

        $contact_data2['contact_data2'] = $this->ContactContent_model->display_contact_section2();
        //print_r($contact_data);die();
        $this->load->view('contact_us/contact_section2', $contact_data2);  
    }

    public function edit_section2(){
        $this->load->model('ContactContent_model');
        $this->load->view('common/sidebar');
        $id  = $this->uri->segment(3);
        $contact_data = $this->db->query("select * from  contact_content  where id=" . $id);
        // $data_projects['project_edit'] = $data_projects->result_array();
        $data['edit_section2'] = $contact_data->result_array();
       // print_r($data['services_edit']);exit;
        $this->load->view("contact_us/contact_edit_section2", $data);       
        
    }
    
    // save edit services list data
    public function save_section2(){
        $this->load->model('ContactContent_model');        
        //$image_name="";
        // if ($_FILES["contact_section_image1"]["name"]) {
        //     $config['upload_path']   = './uploads/home';
        //     $config['allowed_types'] = 'gif|jpg|png|jpeg';
        //     $config['encrypt_name']  = TRUE;
        //     $this->load->library('upload', $config);
        //     $img_data   = $this->upload->data();
        //     $image_name = $img_data['file_name'];                
            
        // }
        // if($image_name){
        $project_data = array(
            'address_title' => $this->input->post('address_title'),
            'address_content' => $this->input->post('address_content')
        );
          $id = $this->input->post('id'); 
        // }
        // else{
        //   $project_data = array(
        //     'contact_section_title1' => $this->input->post('contact_section_title1'),
        //     'contact_section_content1' => $this->input->post('contact_section_content1')
            
        //  ); 
        //    $id = $this->input->post('id'); 
        // }
        $this->ContactContent_model->edit_address($id,$project_data);
        $contact_data['contact_data'] = $this->ContactContent_model->display_contact_section2();
        // $this->load->view('sidebar');
        $this->load->view('contact_us/contact_section2', $contact_data);
       
         redirect('ContactContent/contact_section2');
    }

    public function edit_section3(){
        $this->load->model('ContactContent_model');
        $this->load->view('common/sidebar');
        $id  = $this->uri->segment(3);
        $contact_data = $this->db->query("select * from  contact_content  where id=" . $id);
        // $data_projects['project_edit'] = $data_projects->result_array();
        $data['edit_section3'] = $contact_data->result_array();
       // print_r($data['services_edit']);exit;
        $this->load->view("contact_us/contact_edit_section3", $data);       
        
    }
    
    // save edit services list data
    public function save_section3(){
        $this->load->model('ContactContent_model');        
        //$image_name="";
        // if ($_FILES["contact_section_image1"]["name"]) {
        //     $config['upload_path']   = './uploads/home';
        //     $config['allowed_types'] = 'gif|jpg|png|jpeg';
        //     $config['encrypt_name']  = TRUE;
        //     $this->load->library('upload', $config);
        //     $img_data   = $this->upload->data();
        //     $image_name = $img_data['file_name'];                
            
        // }
        // if($image_name){
        $project_data = array(
            'call_us_title' => $this->input->post('call_us_title'),
            'call_us_content' => $this->input->post('call_us_content')
        );
          $id = $this->input->post('id'); 
        // }
        // else{
        //   $project_data = array(
        //     'contact_section_title1' => $this->input->post('contact_section_title1'),
        //     'contact_section_content1' => $this->input->post('contact_section_content1')
            
        //  ); 
        //    $id = $this->input->post('id'); 
        // }
        $this->ContactContent_model->edit_callus($id,$project_data);
        $contact_data['contact_data'] = $this->ContactContent_model->display_contact_section3();
        // $this->load->view('sidebar');
        $this->load->view('contact_us/contact_section2', $contact_data);
       
         redirect('ContactContent/contact_section2');
    }

    public function edit_section4(){
        $this->load->model('ContactContent_model');
        $this->load->view('common/sidebar');
        $id  = $this->uri->segment(3);
        $contact_data = $this->db->query("select * from  contact_content  where id=" . $id);
        // $data_projects['project_edit'] = $data_projects->result_array();
        $data['edit_section4'] = $contact_data->result_array();
       // print_r($data['services_edit']);exit;
        $this->load->view("contact_us/contact_edit_section4", $data);       
        
    }
    
    // save edit services list data
    public function save_section4(){
        $this->load->model('ContactContent_model');        
        //$image_name="";
        // if ($_FILES["contact_section_image1"]["name"]) {
        //     $config['upload_path']   = './uploads/home';
        //     $config['allowed_types'] = 'gif|jpg|png|jpeg';
        //     $config['encrypt_name']  = TRUE;
        //     $this->load->library('upload', $config);
        //     $img_data   = $this->upload->data();
        //     $image_name = $img_data['file_name'];                
            
        // }
        // if($image_name){
        $project_data = array(
            'email_title' => $this->input->post('email_title'),
            'email_content' => $this->input->post('email_content')
        );
          $id = $this->input->post('id'); 
        // }
        // else{
        //   $project_data = array(
        //     'contact_section_title1' => $this->input->post('contact_section_title1'),
        //     'contact_section_content1' => $this->input->post('contact_section_content1')
            
        //  ); 
        //    $id = $this->input->post('id'); 
        // }
        $this->ContactContent_model->edit_email($id,$project_data);
        $contact_data['contact_data'] = $this->ContactContent_model->display_contact_section4();
        // $this->load->view('sidebar');
        $this->load->view('contact_us/contact_section2', $contact_data);
       
         redirect('ContactContent/contact_section2');
    }          

   
}
?>