<?php 
class ProjectList extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Register_model');
        if(!empty($this->session->userdata('admin_id'))){


        }
        else {
            redirect('Login');
        }

    }   
    public function index()
    {
        $this->load->view('common/sidebar');
        $this->load->view('common/header');
        /*Display user list*/

        $projectlist['projectlist'] = $this->Register_model->ProjectList();
       
        $this->load->view('projectList', $projectlist); 
        $this->load->view('common/footer');

    }

// delete data
    public function delete_projectrow($project_id) {
        $this->load->model("Register_model");
        $this->Register_model->did_delete_projectrow($project_id);
        $projectlist['projectlist'] = $this->Register_model->ProjectList();
        redirect('projectList');
    }


    public function edit_projectlist(){
        $this->load->model('Register_model');
        // $this->load->view('sidebar');
        $id  = $this->uri->segment(3);
        $data_project = $this->db->query("select * from  project_category  where project_id=" . $id);
        // $data_projects['project_edit'] = $data_projects->result_array();

        $data['project_edit'] = $data_project->result_array();
        // echo '<pre>';print_r($data['project_edit']);exit;
       // print_r($data['services_edit']);exit;
        
        $this->load->view('common/sidebar');
        $this->load->view('common/header');
        $this->load->view("edit_projectlist", $data);  
        $this->load->view('common/footer');
        
        
    }

    public function save_projectlist(){
        // print_r($this->input->post());exit;
        $post = $this->input->post();
        $id = $this->input->post('id');


        $project_update = array('title'=>$post['title'],'description'=>$post['description'],'budget'=>$post['budget']);
        

            $config = array(
            'upload_path' => "uploads/project_image",
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "1768",
            'max_width' => "2024"

            );

            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            if($this->upload->do_upload('profile_image'))
            {   
                $project_update['picture_url'] = $this->upload->data()['file_name'];

            }
            else
            {
                //print_r($this->upload->display_errors());exit;
            }
            
            $this->db->where('project_id',$id);
            $this->db->update('project_category',$project_update);
            redirect('projectList');    
    }
    
}
