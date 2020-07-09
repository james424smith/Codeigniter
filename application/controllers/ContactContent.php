<?php
class ContactContent extends CI_Controller
{    
    public function index()
    {


        $this->load->model('ContactContent_model');
        $this->load->view('common/sidebar');

        /*Display service*/

        $contact_data['contact_data'] = $this->ContactContent_model->display_contact_section1();
        //print_r($contact_data);die();
        $this->load->view('contact_us/contact_section1', $contact_data);       
        
    }
    // edit project list data
    
    public function edit_section1(){
        $this->load->model('ContactContent_model');
        $this->load->view('common/sidebar');
        $id  = $this->uri->segment(3);
        $contact_data = $this->db->query("select * from  contact_content  where id=" . $id);
        // $data_projects['project_edit'] = $data_projects->result_array();
        $data['edit_section1'] = $contact_data->result_array();
       // print_r($data['services_edit']);exit;
        $this->load->view("contact_us/contact_edit_section1", $data);       
        
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