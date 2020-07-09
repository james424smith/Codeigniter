<?php 
class LitigationsList extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Litigations_model');
        if(!empty($this->session->userdata('id'))){


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

        $litigationslist['litigationslist'] = $this->Litigations_model->LitigationsList();
       
        $this->load->view('litigationsList', $litigationslist); 
        $this->load->view('common/footer');

    }

// delete data
    public function delete_litigations($id) {
        $this->load->model("Litigations_model");
        $this->Litigations_model->did_delete_projectrow($id);
        $projectlist['litigationslist'] = $this->Litigations_model->LitigationsList();
        redirect('litigationsList');
    }


    public function edit_litigations(){
        $this->load->model('Litigations_model');
        // $this->load->view('sidebar');
        $id  = $this->uri->segment(3);
        $data_litigations = $this->db->query("select * from  litigations  where id=" . $id);
        // $data_projects['project_edit'] = $data_projects->result_array();

        $data['litigations_edit'] = $data_litigations->result_array();
        // echo '<pre>';print_r($data['project_edit']);exit;
       // print_r($data['services_edit']);exit;
        
        $this->load->view('common/sidebar');
        $this->load->view('common/header');
        $this->load->view("edit_litigations", $data);  
        $this->load->view('common/footer');
        
        
    }

    public function save_litigations(){
        // print_r($this->input->post());exit;
        $post = $this->input->post();
        $id = $this->input->post('id');


        $litigations_update = array('project_id'=>$post['project_id'],'user_email'=>$post['user_email'],'title'=>$post['title'],'description'=>$post['description'],'comment'=>$post['comment']);
        
            
            $this->db->where('id',$id);
            $this->db->update('litigations',$litigations_update);
            redirect('litigationsList');    
    }


    public function export_csv(){ 
$post = $this->input->post();
        $from_date = $this->input->post('from_date');
        $from_date_new = date('Y-m-d', strtotime($from_date)); 
    
        $to_date = $this->input->post('to_date');
        $to_date_new = date('Y-m-d', strtotime($to_date));
        // file name 
        $filename = 'litigations_'.date('Ymd').'.csv'; 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$filename"); 
        header("Content-Type: application/csv; ");
       // get data 
        $usersData = $this->Litigations_model->getUserList($from_date_new,$to_date_new);
        // file creation 
        $file = fopen('php://output','w');
        $header = array("Date of litigation","Project id","User who open litigation", "Title","Description of litigation","Comment"); 
        fputcsv($file, $header);
        foreach ($usersData as $key=>$line){ 
            fputcsv($file,$line); 
        }
        fclose($file); 
        exit; 
    }
    
}
