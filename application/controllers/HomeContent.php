<?php
class HomeContent extends CI_Controller
{    
    public function index()
    {

        $this->load->model('HomeContent_model');
        $this->load->view('common/sidebar');

        /*Display service*/

        $data_Services['data_Services'] = $this->HomeContent_model->display_services();
        $this->load->view('home/home_section1', $data_Services);       
        
    }
    // edit project list data
    
    public function edit_section1(){
        $this->load->model('HomeContent_model');
        $this->load->view('common/sidebar');
        $id  = $this->uri->segment(3);
        $data_Services = $this->db->query("select * from  home_content  where id=" . $id);
        // $data_projects['project_edit'] = $data_projects->result_array();
        $data['edit_section1'] = $data_Services->result_array();
       // print_r($data['services_edit']);exit;
        $this->load->view("home/edit_home_section1", $data);       
        
    }
    
    // save edit services list data
    public function save_section1(){
        $this->load->model('HomeContent_model');
        if(!empty($_FILES['section_1_image']['name'])){
          $config['upload_path'] = './uploads/home';
          $config['allowed_types'] = 'gif|jpg|png|jpeg';
          $config['max_size'] = 6000000;
          $config['max_width'] = 45000;
          $config['max_height'] = 45000;

          $this->load->library('upload', $config);
  
          if (!$this->upload->do_upload('section_1_image')) 
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
            'section_1_title' => $this->input->post('section_1_title'),
            'section_1_content' => $this->input->post('section_1_content'),
            'section_1_image' => $image_name           
        );
          $id = $this->input->post('id'); 
        }
        else{
          $project_data = array(
            'section_1_title' => $this->input->post('section_1_title'),
            'section_1_content' => $this->input->post('section_1_content')
         ); 
           $id = $this->input->post('id'); 
        }
        
        $this->HomeContent_model->edit($id,$project_data);
        $data_Services['data_Services'] = $this->HomeContent_model->display_services();
        // $this->load->view('sidebar');
        $this->load->view('home/home_section1', $data_Services);
       
         redirect('HomeContent/index');
    } 


    // ======================================================== section second========================================
    public function section2()
    {

        $this->load->model('HomeContent_model');
        $this->load->view('common/sidebar');

        /*Display service*/

        $data_Services['data_Services'] = $this->HomeContent_model->display_services();
        $this->load->view('home/home_section2', $data_Services);       
        
    }
     public function edit_section2(){
        $this->load->model('HomeContent_model');
        $this->load->view('common/sidebar');
        $id  = $this->uri->segment(3);
        $data_Services = $this->db->query("select * from  home_content  where id=" . $id);
        // $data_projects['project_edit'] = $data_projects->result_array();
        $data['edit_section2'] = $data_Services->result_array();
       // print_r($data['services_edit']);exit;
        $this->load->view("home/edit_home_section2", $data);       
        
    }
    public function save_section2(){
        $this->load->model('HomeContent_model'); 
        if(!empty($_FILES['section_2_image']['name'])){
          $config['upload_path'] = './uploads/home';
          $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
          $config['max_size'] = 6000000;
          $config['max_width'] = 45000;
          $config['max_height'] = 45000;

          $this->load->library('upload', $config);
  
          if (!$this->upload->do_upload('section_2_image')) 
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
            'section_2_title' => $this->input->post('section_2_title'),
            'section_2_content' => $this->input->post('section_2_content'),
            'section_2_image' => ($image_name)?$image_name:$this->input->post('section_2_image')            
        );
          $id = $this->input->post('id'); 
        }
        else{
          $project_data = array(
            'section_2_title' => $this->input->post('section_2_title'),
            'section_2_content' => $this->input->post('section_2_content')
         ); 
           $id = $this->input->post('id'); 
        }
        $this->HomeContent_model->edit($id,$project_data);
        $data_Services['data_Services'] = $this->HomeContent_model->display_services();
        // $this->load->view('sidebar');
        $this->load->view('home/home_section2', $data_Services);
       
         redirect('HomeContent/section2');
    } 
    // ======================================================= section 3 posts ================================================
  public function demand()
    {

        $this->load->model('HomeContent_model');
        $this->load->view('common/sidebar');
        /*Display service*/
        $data_Services['data_Services'] = $this->HomeContent_model->display_demand();
        $this->load->view('home/demand_posts', $data_Services);       
        
    }
    public function Add_demand(){
        $this->load->model('HomeContent_model');
        $this->load->view('common/sidebar');
         $this->load->view('home/add_demand_posts');
       }
      public function edit_demand(){
        $this->load->model('HomeContent_model');
        $this->load->view('common/sidebar');
        $id  = $this->uri->segment(3);
        $data_Services = $this->db->query("select * from  posts  where id=".$id);
        // $data_projects['project_edit'] = $data_projects->result_array();
        $data['demand_data'] = $data_Services->result_array();
       // print_r($data['services_edit']);exit;
        $this->load->view("home/edit_demand_posts", $data);       
        
    }
    public function save_demand(){
        $this->load->model('HomeContent_model');        
         if(!empty($_FILES['profile_image']['name'])){
        $config['upload_path'] = './uploads/posts/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['profile_image']['name'];
        
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('profile_image')){
            $uploadData = $this->upload->data();
            $attachment_image = $uploadData['file_name'];
            $data['profile_image'] = $attachment_image;
        }else{
            $attachment_image = '';
        }
    }
    else{
        $attachment_image = '';
    } 
        if($attachment_image){
        $member_data = array(
         
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),            
            'profile_image' => ($attachment_image)?$attachment_image:$this->input->post('profile_image')            
        );
          $id = $this->input->post('id'); 
        }
        else{
          $member_data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),                     
            'profile_image' => ($image_name)?$image_name:$this->input->post('profile_image')   
         ); 
           $id = $this->input->post('id'); 
        }
        $this->HomeContent_model->edit_demand($id,$member_data);
        $data_Services['data_Services'] = $this->HomeContent_model->display_demand();
        // $this->load->view('sidebar');
        $this->load->view('home/demand_posts', $data_Services);
       
         redirect('HomeContent/demand');
    } 
    
    public function insertNewDemand(){
        $title = $this->input->post('title');
        $description = $this->input->post('description');       

        if(!empty($_FILES['profile_image']['name'])){
        $config['upload_path'] = './uploads/posts/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['profile_image']['name'];
        
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('profile_image')){
            $uploadData = $this->upload->data();
            $attachment_image = $uploadData['file_name'];
            $data['profile_image'] = $attachment_image;
        }else{
            $attachment_image = '';
        }
    }
    else{
        $attachment_image = '';
    } 

    
    $demand_data = array(
        //'user_name'=>$username,        
        'profile_image'=>$attachment_image,
        'title'=>$title,
        'description'=>$description,       
      );
     $this->load->model('HomeContent_model');
      $activity = $this->HomeContent_model->add_demand($demand_data);

      redirect('HomeContent/demand');
 

     
   }
    public function delete_demand_post(){
        $this->load->model('HomeContent_model');
        $id = $this->uri->segment(3);
        $data = $this->HomeContent_model->deleteDemandById($id);
        redirect('HomeContent/demand');
    

    }
     // ======================================================= section 4 ================================================
  public function ourTeam()
    {

        $this->load->model('HomeContent_model');
        $this->load->view('common/sidebar');
        $data_Services['data_Services'] = $this->HomeContent_model->display_ourteam();
        $this->load->view('home/ourteam', $data_Services);       
        
    }
     public function addNewMember(){
        $this->load->model('HomeContent_model');
        $this->load->view('common/sidebar');
         $this->load->view('home/addnewmember');
       }

    public function insertNewMember(){
        $member_name = $this->input->post('member_name');
        $member_skills = $this->input->post('member_skills');
        $member_bio = $this->input->post('member_bio');

        if(!empty($_FILES['member_profile']['name'])){
        $config['upload_path'] = './uploads/profiles/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['member_profile']['name'];
        
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('member_profile')){
            $uploadData = $this->upload->data();
            $attachment_image = $uploadData['file_name'];
            $data['member_profile'] = $attachment_image;
        }else{
            $attachment_image = '';
        }
    }
    else{
        $attachment_image = '';
    } 

    
    $member_data = array(
        //'user_name'=>$username,        
        'member_profile'=>$attachment_image,
        'member_name'=>$member_name,
        'member_skills'=>$member_skills,
        'member_bio'=>$member_bio,
      );
     $this->load->model('HomeContent_model');
      $activity = $this->HomeContent_model->add_member($member_data);

      redirect('HomeContent/ourTeam');
 

     
   }
     public function edit_our_team(){
        $this->load->model('HomeContent_model');
        $this->load->view('common/sidebar');
        $team_id  = $this->uri->segment(3);
        $data_Services = $this->db->query("select * from  home_ourteam  where team_id=".$team_id);
        // $data_projects['project_edit'] = $data_projects->result_array();
        $data['our_team_data'] = $data_Services->result_array();
       // print_r($data['services_edit']);exit;
        $this->load->view("home/edit_our_team", $data);       
        
    }
    public function save_team(){
        $this->load->model('HomeContent_model');        
         if(!empty($_FILES['member_profile']['name'])){
        $config['upload_path'] = './uploads/profiles/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['member_profile']['name'];
        
        //Load upload library and initialize configuration
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        
        if($this->upload->do_upload('member_profile')){
            $uploadData = $this->upload->data();
            $attachment_image = $uploadData['file_name'];
            $data['member_profile'] = $attachment_image;
        }else{
            $attachment_image = '';
        }
    }
    else{
        $attachment_image = '';
    } 
        if($attachment_image){
        $member_data = array(
         
            'member_name' => $this->input->post('member_name'),
            'member_skills' => $this->input->post('member_skills'),
            'member_bio' => $this->input->post('member_bio'),
            'member_profile' => ($attachment_image)?$attachment_image:$this->input->post('member_profile')            
        );
          $id = $this->input->post('team_id'); 
        }
        else{
          $member_data = array(
            'member_name' => $this->input->post('member_name'),
            'member_skills' => $this->input->post('member_skills'),
            'member_bio' => $this->input->post('member_bio'),
            'member_profile' => ($image_name)?$image_name:$this->input->post('member_profile')   
         ); 
           $id = $this->input->post('team_id'); 
        }
        $this->HomeContent_model->edit_team($id,$member_data);
        $data_Services['data_Services'] = $this->HomeContent_model->display_ourteam();
        // $this->load->view('sidebar');
        $this->load->view('home/ourteam', $data_Services);
       
         redirect('HomeContent/ourteam');
    } 
    public function delete_member(){
        $this->load->model('HomeContent_model');
        $id = $this->uri->segment(3);
        $data = $this->HomeContent_model->deleteMemberById($id);
        redirect('HomeContent/ourteam');
    

    }


}
?>