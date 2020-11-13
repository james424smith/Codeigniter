<?php 
class WithdrawpaymentList extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Withdrawpayment_model');
        $this->withdrawpayment = 'withdrawpayment';
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

        $withdrawpaymentlist['withdrawpaymentlist'] = $this->Withdrawpayment_model->WithdrawpaymentList();

        $this->load->view('withdrawpaymentList', $withdrawpaymentlist); 
        $this->load->view('common/footer');

    }

// delete data
    public function delete_withdrawpayment($id) {
        $this->load->model("Withdrawpayment_model");
        $this->Withdrawpayment_model->did_delete_projectrow($id);
        $projectlist['withdrawpaymentlist'] = $this->Withdrawpayment_model->WithdrawpaymentList();
        redirect('withdrawpaymentList');
    }


    public function edit_withdrawpayment(){
        $this->load->model('Withdrawpayment_model');
        // $this->load->view('sidebar');
        $id  = $this->uri->segment(3);
        //$data_withdrawpayment = $this->db->query("select * from  withdrawpayment  where id=" . $id);
        // $data_projects['project_edit'] = $data_projects->result_array();

        $this->db->select("withdrawpayment.mission_id, withdrawpayment.id, mission.mission_title, withdrawpayment.mission_amount,withdrawpayment.offer_amount,withdrawpayment.amount_to_pay,withdrawpayment.pay_status,withdrawpayment.date_created,withdrawpayment.date_of_pay,withdrawpayment.date_updated,withdrawpayment.mission_status,withdrawpayment.employer_id,emplyee_id,transection_id");
    $this->db->from('withdrawpayment');
    $this->db->join("mission","withdrawpayment.mission_id = mission.mission_id");
    $this->db-> where("withdrawpayment.id", $id);
    //$this->db->limit(5);
    //$data = $this->db->get()->result();

        $withdrawpayment_edit['withdrawpayment_edit'] = $this->db->get()->result();
        // echo '<pre>';print_r($data['project_edit']);exit;
        //print_r($withdrawpayment_edit);exit;


        
        $this->load->view('common/sidebar');
        $this->load->view('common/header');
        $this->load->view("edit_withdrawpayment", $withdrawpayment_edit);  
        $this->load->view('common/footer');
        
        
    }

    public function save_withdrawpayment(){
        // print_r($this->input->post());exit;
        $post = $this->input->post();
        $id = $this->input->post('id');
        $date_created = date('Y-m-d H:i:s');
if($post['pay_status'] == 1)
{
     $withdrawpayment_update = array('pay_status'=>$post['pay_status'],'amount_to_pay'=>$post['amount_to_pay'],'date_of_pay'=>$date_created,'transection_id'=>$post['transection_id']);
}
else{
     $withdrawpayment_update = array('pay_status'=>$post['pay_status'],'amount_to_pay'=>$post['amount_to_pay'],'transection_id'=>$post['transection_id']);
}
       
    
            
            $this->db->where('id',$id);
            $this->db->update('withdrawpayment',$withdrawpayment_update);

            redirect('withdrawpaymentList');    
    }

    public function export_csv(){ 
        $post = $this->input->post();
        $from_date = $this->input->post('from_date');
        $from_date_new = date('Y-m-d', strtotime($from_date)); 
    
        $to_date = $this->input->post('to_date');
        $to_date_new = date('Y-m-d', strtotime($to_date));

        $usersData = $this->Withdrawpayment_model->getUserList($from_date_new,$to_date_new);

        foreach ($usersData as $value) {

            $date = $value['date_created'];

            if($value['mission_status'] == 0) { $miss_sta = "Proposed";} else if($value['mission_status'] == 1) { $miss_sta = "In Progress";}  else if($value['mission_status'] == 2) { $miss_sta = "Delivered";}  else if($value['mission_status'] == 3) { $miss_sta = "Completed";}  else if($value['mission_status'] == 4) { $miss_sta = "Dispute";}

            $mission = $value['mission_title'];

            $amount_to_pay = $value['amount_to_pay'];

            $this->db->select("username");
            $this->db->from("users");
            $this->db->where('id', $value['employer_id']);
            $data1 = $this->db->get()->result();
            $employer = $data1[0]->username;

            $this->db->select("username");
            $this->db->from("users");
            $this->db->where('id', $value['employee_id']);
            $data1 = $this->db->get()->result();
            $employee = $data1[0]->username;

            if($value['pay_status'] == 1)
            {
                $pay_status = "Paid";
            }
            else{
                $pay_status = "Unpaid";
            }

            $transection_id = $value['transection_id'];

            $tesd[] = array("date"=>$date, "miss_sta"=>$miss_sta, "mission"=>$mission, "amount_to_pay"=>$amount_to_pay, 'employer'=> $employer, 'employee'=>$employee,'pay_status'=>$pay_status,'transection_id'=>$transection_id,'account_number'=>$account_number,'transection_id'=>$transection_id);

        }

   
      
        // file name 
        $filename = 'walletwithdraw_'.date('Ymd').'.csv'; 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$filename"); 
        header("Content-Type: application/csv; ");
       // get data 
        
        // file creation 
        $file = fopen('php://output','w');
        $header = array("Date of Request","Project Id","Mission Status", "Amount to Pay", "Employer", "Employee", "Pay Status", "Transection Id", "Account Number", "Ifsc Code"); 
        fputcsv($file, $header);
        foreach ($tesd as $key=>$line){ 
            fputcsv($file,$line); 
        }
        fclose($file); 
        exit; 
    }
    
}
