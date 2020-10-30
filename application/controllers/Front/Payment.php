<?php
class Payment extends CI_Controller
{
     public function __construct()
    {
    parent::__construct();
$this->load->model('Front/Payment_model');
    } 

    public function index()
    {
    	$this->load->model('Front/Blog_model');
        $this->load->model('Front/Posts_model');
        $this->load->model('Front/Payment_model');
    	
    	$data['data_com']=$this->Blog_model->display_comments();

    	/* display posts*/
    	$data['data_services']=$this->Posts_model->display_services();
        $this->load->view('Front/common/header');
        $this->load->view('Front/services',$data);
        $this->load->view('Front/common/footer');
    }
     public function demandpost()     
    {
         $this->load->library('session');                 
         // $dum=$this->session->userdata['id'];
         // print_r($dum);die();

          if(!empty($_FILES['file']['name'])){
          $config['upload_path'] = './uploads/demands_documents';
          $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc'; 
          $config['max_size'] = 6000000;
          $config['max_width'] = 45000;
          $config['max_height'] = 45000;

          $this->load->library('upload', $config);
  
          if (!$this->upload->do_upload('file')) 
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
            // $this->load->library('session');
            //$session_id = $this->session->userdata('id');
            //print_r($session_id);die();

        if($image_name){
          $project_data = array(
            'mission_title' => $this->input->post('title'),
            'mission_budget' => $this->input->post('budget'),
            'mission_description' => $this->input->post('description'),
            'user_id' => $this->session->userdata['id'],
            'mission_category' => $this->input->post('project_category'),
            'mission_doc' => ($image_name)?$image_name:$this->input->post('file') 

        );          
        }
        else{
            $session_id= $_SESSION();
           // print_r( $session_id);die();
            $project_data = array(
            'mission_title' => $this->input->post('title'),
            'budget' => $this->input->post('budget'),
            'description' => $this->input->post('description'),
            'user_id' => $this->session->userdata['id'],
            'mission_category' => $this->input->post('project_category'),
         );           
        }
        $this->load->model('Front/Posts_model');
        $this->Posts_model->demand($project_data);
        redirect('Front/home/mydemands');

    }
 		 public function  offerpost() {
 		 	if($this->input->post('accept_budget')==1){

 		 	$project_data = array(
            'message' => $this->input->post('message'),
            'project_id' => $this->input->post('project_id'),
            'user_id' => $this->session->userdata['id'],
            'client_id' => $this->input->post('client_id'),
            'accept_budget' => $this->input->post('accept_budget'),
            'offer_budget' => $this->input->post('missionbudget'),
            'created_date' => date('Y-m-d H:i:s')
        );
 		 }
 		 else{
 		 	$project_data = array(
            'message' => $this->input->post('message'),
            'project_id' => $this->input->post('project_id'),
            'user_id' => $this->session->userdata['id'],
            'client_id' => $this->input->post('client_id'),           
            'offer_budget' => $this->input->post('offer_budget'),
            'created_date' => date('Y-m-d H:i:s')

        );

 		 }

 		$this->load->model('Front/Posts_model');
        $this->Posts_model->mission($project_data);
        redirect('Front/home/mymissions');

        }

        public function download($fileName)     
          {

           
            $this->load->helper('download');

            if ($fileName) {
          $file = base_url("/uploads/demands_documents/") .$fileName;
           //print_r($fileName);die();
          // check file exists    
          if ($file) {

           // get file content
           $data = file_get_contents ( $file );
           //force download
           force_download ( $fileName, $data );
          } else {
           // Redirect to base url
           redirect ( base_url ('Front/make_an_offer') );
          }
    
    }
  }




 public function  inprogress() {   

          if(!empty($_FILES['project_files']['name'])){
          $config['upload_path'] = './uploads/demands_documents';
          $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc'; 
          $config['max_size'] = 6000000;
          $config['max_width'] = 45000;
          $config['max_height'] = 45000;

          $this->load->library('upload', $config);
  
          if (!$this->upload->do_upload('project_files')) 
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
            'project_id' => $this->input->post('project_id'),
            'your_comments' => $this->input->post('your_comments'),
            'project_status' => $this->input->post('project_status'),
            'user_id' => $this->session->userdata['id'],
            'client_id' => $this->input->post('client_id'),            
            'project_files' => ($image_name)?$image_name:$this->input->post('project_files'),
            'date_created' => $this->input->post('date_created'),
            'date_updated' =>  date('Y-m-d H:i:s') 

          );
          
          $this->load->model('Front/Posts_model');
          $this->Posts_model->inprogress_mission($project_data, true);
        }
        else{
          
          $project_data = array(
           'project_id' => $this->input->post('project_id'),
           'budget' => $this->input->post('budget'),
           'description' => $this->input->post('description'),
           'user_id' => $this->session->userdata['id'],
           'client_id' => $this->input->post('client_id'),
           'date_created' => $this->input->post('date_created'),
           'date_updated' =>  date('Y-m-d H:i:s')
         );
         
         $this->load->model('Front/Posts_model');
         $this->Posts_model->inprogress_mission($project_data, false);

        }
        //print_r($project_data);die();
        redirect('Front/home/mymissions');
 }

      public function delivered_mission(){
        $project_data = array(
            'project_id' => $this->input->post('project_id'),
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),            
            'date_modified' =>  date('Y-m-d H:i:s') 

        ); 
        $this->load->model('Front/Posts_model');
        $this->Posts_model->deliver_mission($project_data);
        redirect('Front/home/mymissions');

      }

      public function acceptoffer(){
        
        $this->load->view('Front/acceptoffer');


      } 
      public function payment_card_details(){
        //var_dump("ddd");die();
        $this->load->view('Front/card_details');
      } 

      public function payment_success(){
        
        $is_wallet = $this->input->post('wallet');
        
        if($is_wallet == 1)
        {
          $this->load->model("Front/User");
          $self_user = $this->User->getSelfUser();          
          $offer_id = $this->input->post('offer_id');
          $total_amount = $this->input->post('total_amount') + 0;
          //var_dump($total_amount);die();
          if($self_user[0]['Current_Balance'] < $total_amount)
          {
            $this->session->set_flashdata('lack_wallet', 'Your balance is not enough to pay.');
            redirect('Front/Payment/acceptoffer/' . $offer_id);
          }
          else
          {
              $balance = $self_user[0]['Current_Balance'] - $total_amount;

              $this->load->model('Front/Payment_model');
              $this->Payment_model->paid_by_wallet($balance);
              
              $this->session->set_flashdata('wallet_pay_success', 'paid successfully.');
              $this->load->view('Front/payment_success');
          }
        }
        else 
        {
          //var_dump($this->input->post('get_offer_user_id')); die();
          $get_offer_user_id = $this->input->post('get_offer_user_id');
          $get_offer_project_id = $this->input->post('get_offer_project_id');
          $this->load->model('Front/Posts_model');
          $this->Posts_model->pushNotification($get_offer_user_id, 3, "Your offer has been accepted.");
          $this->load->view('Front/payment_success');
        }
      } 

 public function delivered_demand(){
        $project_data = array(
            'project_id' => $this->input->post('project_id'),
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),            
            'date_modified' =>  date('Y-m-d H:i:s') 

        ); 
        $this->load->model('Front/Posts_model');
        $this->Posts_model->deliver_demand($project_data);
        redirect('Front/home/mydemands');

      }


      public function add_credit_card()
    {
       
        $card_no = strip_tags($this->input->post('card_no'));
        $date_created = date('Y-m-d H:i:s');
        $user_id = strip_tags($this->input->post('user_id'));
        $name = strip_tags($this->input->post('name'));
        //$user_id = strip_tags($this->post('user_id'));
        $expiry_month = strip_tags($this->input->post('expiry_month'));
        $expiry_year = strip_tags($this->input->post('expiry_year'));
        $expiry = $expiry_month . "/" . $expiry_year;


        $add_card_details = array('card_no'=>$card_no,'date_created'=>$date_created,'user_id'=>$user_id,'name'=>$name,'expiry'=>$expiry);


        

           
          $result = $this->Payment_model->add_card_details($add_card_details);
         
 redirect(base_url() . 'Front/payment/credit_card'); 
         
}


public function update_credit_card()
    {
       
        $card_no = strip_tags($this->input->post('card_no'));
        $expiry_month = strip_tags($this->input->post('expiry_month'));
        $expiry_year = strip_tags($this->input->post('expiry_year'));
       $expiry = $expiry_month . "/" . $expiry_year;
        $date_created = date('Y-m-d H:i:s');
        $user_id = strip_tags($this->input->post('user_id'));
        $card_id = strip_tags($this->input->post('card_id'));
        //$user_id = strip_tags($this->post('user_id'));
        $name = strip_tags($this->input->post('name'));
//$expiry = strip_tags($this->post('expiry'));

        $update_card_details = array('card_no'=>$card_no,'date_created'=>$date_created,'name'=>$name,'expiry'=>$expiry);


        

           
          $result = $this->Payment_model->update_card_details($card_id,$update_card_details);
         
redirect(base_url() . 'Front/payment/credit_card'); 
         
}

        /*public function delete_card_details_post(){
        $card_id = strip_tags($this->post('card_id'));
        $card_data = $this->Payment_model->delete_card_details($card_id);
        if($card_data)
        {
        $this->response([
        'status' => TRUE,
        'message' => ('Card Deleted'),
        'data'=>$card_data,
        ], REST_Controller::HTTP_OK);
        }

        else 
        {
        $this->response([
        'status' => false,
        'message' => ('Card not Deleted'),
        ], REST_Controller::HTTP_OK);
        }
        }*/



public function credit_card()

{
  $this->load->model('Front/Payment_model');

  $user_id = $this->session->userdata['id'];



$card_details_data['card_details'] = $this->Payment_model->get_card_details($user_id);
         

         $this->load->view('Front/credit_card',$card_details_data);

 }





}
?>