<?php
class AboutContent extends CI_Controller
{    
    public function index()
    {

        $this->load->model('AboutContent_model');
        $this->load->view('common/sidebar');

        /*Display service*/

        $aboutdata_Section1['aboutdata_Section1'] = $this->AboutContent_model->display_about_section1();
        $this->load->view('about_us/about_section1', $aboutdata_Section1);       
        
    }
    // edit project list data
    
    public function edit_section1(){
        $this->load->model('AboutContent_model');
        $this->load->view('common/sidebar');
        $id  = $this->uri->segment(3);
        $aboutdata_Section1 = $this->db->query("select * from  about_content  where id=" . $id);
        // $data_projects['project_edit'] = $data_projects->result_array();
        $data['edit_section1'] = $aboutdata_Section1->result_array();
       // print_r($data['services_edit']);exit;
        $this->load->view("about_us/edit_about_section1", $data);       
        
    }
    
    // save edit services list data
    public function save_section1(){
        $this->load->model('AboutContent_model');       

        if(!empty($_FILES['about_image']['name'])){
          $config['upload_path'] = './uploads/about';
          $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
          $config['max_size'] = 6000000;
          $config['max_width'] = 45000;
          $config['max_height'] = 45000;

          $this->load->library('upload', $config);
  
          if (!$this->upload->do_upload('about_image')) 
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
            'about_title' => $this->input->post('about_title'),
            'about_content' => $this->input->post('about_content'),
            'about_image' => ($image_name)?$image_name:$this->input->post('service_image')            
        );
          $id = $this->input->post('id'); 
        }
        else{
          $project_data = array(
            'about_title' => $this->input->post('about_title'),
            'about_content' => $this->input->post('about_content')
         ); 
           $id = $this->input->post('id'); 
        }
        $this->AboutContent_model->edit($id,$project_data);
        $aboutdata_Section1['aboutdata_Section1'] = $this->AboutContent_model->display_about_section1();
        // $this->load->view('sidebar');
        $this->load->view('about_us/about_section1', $aboutdata_Section1);
       
         redirect('AboutContent/index');
    } 
   
     // ======================================================= section 2 ================================================
  public function about_team()
    {

        $this->load->model('AboutContent_model');
        $this->load->view('common/sidebar');

        /*Display service*/

        $data_Services['data_Services'] = $this->AboutContent_model->display_ourteam();
        $this->load->view('about_us/about_team', $data_Services);       
        
    }    
    
     public function addNewMember(){  
        $this->load->model('AboutContent_model');     
        $this->load->view('common/sidebar');
        $this->load->view('about_us/about_addnew');
       }

    public function insertNewMember(){
        $team_title = $this->input->post('team_title');
        $team_content = $this->input->post('team_content');
        $team_fb = $this->input->post('team_fb');
        $team_insta = $this->input->post('team_insta');
        $team_whatsp = $this->input->post('team_whatsp');
        $team_twitter = $this->input->post('team_twitter');

        if(!empty($_FILES['team_image']['name'])){
        $config['upload_path'] = './uploads/about/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['team_image']['name'];
        
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('team_image')){
            $uploadData = $this->upload->data();
            $attachment_image = $uploadData['file_name'];
            $data['team_image'] = $attachment_image;
        }else{
            $attachment_image = '';
        }
    }
    else{
        $attachment_image = '';
    } 

    
    $member_data = array(
        //'user_name'=>$username,        
        'team_image'=>$attachment_image,
        'team_title'=>$team_title,
        'team_content'=>$team_content,
        'team_fb'=>$team_fb,
        'team_insta'=>$team_insta,
        'team_whatsp'=>$team_whatsp,
        'team_twitter'=>$team_twitter,
      );
     $this->load->model('AboutContent_model');
      $activity = $this->AboutContent_model->add_member($member_data);

      redirect('AboutContent/about_team');
 

     
   }
     public function edit_our_team(){
        $this->load->model('AboutContent_model');
        $this->load->view('common/sidebar');
        $team_id  = $this->uri->segment(3);
        $data_Services = $this->db->query("select * from  about_team  where id=".$team_id);
        // $data_projects['project_edit'] = $data_projects->result_array();
        $data['our_team_data'] = $data_Services->result_array();
       // print_r($data['services_edit']);exit;
        $this->load->view("about_us/about_team_edit", $data);       
        
    }
    public function save_team(){
        $this->load->model('AboutContent_model');        
         if(!empty($_FILES['team_image']['name'])){
        $config['upload_path'] = './uploads/profiles/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['team_image']['name'];
        
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('team_image')){
            $uploadData = $this->upload->data();
            $attachment_image = $uploadData['file_name'];
            $data['team_image'] = $attachment_image;
        }else{
            $attachment_image = '';
        }
    }
    else{
        $attachment_image = '';
    } 
        if($attachment_image){
        $member_data = array(          
         
            'team_title' => $this->input->post('team_title'),
            'team_content' => $this->input->post('team_content'),
            'team_fb' => $this->input->post('team_fb'),
            'team_insta' => $this->input->post('team_insta'),
            'team_whatsp' => $this->input->post('team_whatsp'),
            'team_twitter' => $this->input->post('team_twitter'),
            'team_image' => ($attachment_image)?$attachment_image:$this->input->post('team_image')            
        );
          $id = $this->input->post('id'); 
        }
        else{
          $member_data = array(
            'team_title' => $this->input->post('team_title'),
            'team_content' => $this->input->post('team_content'),
            'team_fb' => $this->input->post('team_fb'),
            'team_insta' => $this->input->post('team_insta'),
            'team_whatsp' => $this->input->post('team_whatsp'),
            'team_twitter' => $this->input->post('team_twitter'),
            'team_image' => ($image_name)?$image_name:$this->input->post('team_image')   
         ); 
           $id = $this->input->post('id'); 
        }
        $this->AboutContent_model->edit_team($id,$member_data);
        $data_Services['data_Services'] = $this->AboutContent_model->display_ourteam();
        // $this->load->view('sidebar');
        $this->load->view('about_us/about_team', $data_Services);
       
         redirect('AboutContent/about_team');
    } 
    public function delete_member(){
        $this->load->model('AboutContent_model');
        $id = $this->uri->segment(3);
        $data = $this->AboutContent_model->deleteMemberById($id);
        redirect('AboutContent/about_team');
    

    }
}
?>