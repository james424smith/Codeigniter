<?php 
class WalletwithdrawaskList extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Walletwithdrawask_model');
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

        $walletwithdrawasklist['walletwithdrawasklist'] = $this->Walletwithdrawask_model->WalletwithdrawaskList();
       
        $this->load->view('walletwithdrawaskList', $walletwithdrawasklist); 
        $this->load->view('common/footer');

    }

// delete data
    public function delete_walletwithdrawask($id) {
        $this->load->model("Walletwithdrawask_model");
        $this->Walletwithdrawask_model->did_delete_projectrow($id);
        $projectlist['walletwithdrawasklist'] = $this->Walletwithdrawask_model->WalletwithdrawaskList();
        redirect('walletwithdrawaskList');
    }


    public function edit_walletwithdrawask(){
        $this->load->model('Walletwithdrawask_model');
        // $this->load->view('sidebar');
        $id  = $this->uri->segment(3);
        $data_walletwithdrawask = $this->db->query("select * from  walletwithdrawask  where id=" . $id);
        // $data_projects['project_edit'] = $data_projects->result_array();

        $data['walletwithdrawask_edit'] = $data_walletwithdrawask->result_array();
        // echo '<pre>';print_r($data['project_edit']);exit;
       // print_r($data['services_edit']);exit;
        
        $this->load->view('common/sidebar');
        $this->load->view('common/header');
        $this->load->view("edit_walletwithdrawask", $data);  
        $this->load->view('common/footer');
        
        
    }

    public function save_walletwithdrawask(){
        // print_r($this->input->post());exit;
        $post = $this->input->post();
        $id = $this->input->post('id');


        $walletwithdrawask_update = array('date_of_ask'=>$post['date_of_ask'],'wallet_amount'=>$post['wallet_amount'],'user_email'=>$post['user_email'],'comment'=>$post['comment']);
        
            
            $this->db->where('id',$id);
            $this->db->update('walletwithdrawask',$walletwithdrawask_update);
            redirect('walletwithdrawaskList');    
    }

    public function export_csv(){ 
$post = $this->input->post();
        $from_date = $this->input->post('from_date');
        $from_date_new = date('Y-m-d', strtotime($from_date)); 
    
        $to_date = $this->input->post('to_date');
        $to_date_new = date('Y-m-d', strtotime($to_date));
        // file name 
        $filename = 'walletwithdraw_'.date('Ymd').'.csv'; 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$filename"); 
        header("Content-Type: application/csv; ");
       // get data 
        $usersData = $this->Walletwithdrawask_model->getUserList($from_date_new,$to_date_new);
        // file creation 
        $file = fopen('php://output','w');
        $header = array("Date of ask","Curent available amount in the wallet","User email", "Comment"); 
        fputcsv($file, $header);
        foreach ($usersData as $key=>$line){ 
            fputcsv($file,$line); 
        }
        fclose($file); 
        exit; 
    }
    
}
