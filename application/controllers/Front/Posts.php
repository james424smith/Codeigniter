<?php
class Posts extends CI_Controller
{
    
    public function index()
    {
    	$this->load->model('Front/Blog_model');
      $this->load->model('Front/Posts_model');
    	
    	$data['data_com']=$this->Blog_model->display_comments();

    	/* display posts*/
    	$data['data_services']=$this->Posts_model->display_services();
        $this->load->view('Front/common/header');
        $this->load->view('Front/services', $data);
        $this->load->view('Front/common/footer');
    }
    public function demandpost()     
    {
         $this->load->library('session');                 
         if($this->session->userdata['id']) {

          if(!empty($_FILES['file']['name'])) {
      
            $config['upload_path'] = './uploads/demands_documents';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|txt'; 
            $config['max_size'] = 6000000;
            $config['max_width'] = 45000;
            $config['max_height'] = 45000;

            $this->load->library('upload', $config);
  
            if (!$this->upload->do_upload('file')) 
            {
              //echo "file"; die();
              $error = array('error' => $this->upload->display_errors());
              $image_name = '';
            } 
            else 
            {              
              $img_data = $this->upload->data()['file_name'];
              $image_name = $img_data;
              //echo $_FILES['file']['name'];die();
            }
        }

        if($image_name) {
          $project_data = array(
            'mission_title' => $this->input->post('title'),
            'title' => $this->input->post('title'),
            'mission_budget' => $this->input->post('budget'),
            'budget' => $this->input->post('budget'),
            'description' => $this->input->post('description'),
            'mission_description' => $this->input->post('description'),
            'client_id' => $this->session->userdata['id'],
            'project_category' => $this->input->post('project_category'),
            'mission_category' => $this->input->post('project_category'),
            'mission_doc' => ($image_name) ? $image_name : $this->input->post('file'),
            'file' => $image_name,
            'created_date' => date('Y-m-d H:i:s')
          );          
        }
        else {
            $project_data = array(
             'mission_title' => $this->input->post('title'),
             'budget' => $this->input->post('budget'),
             'description' => $this->input->post('description'),
             'client_id' => $this->session->userdata['id'],
             'mission_category' => $this->input->post('project_category'),
             'created_date' => date('Y-m-d H:i:s')
          );           
        }
        $this->load->model('Front/Posts_model');
        $this->Posts_model->demand($project_data);
        $this->Posts_model->pushNotification($this->session->userdata['id'], 2, "Votre demande a bien été publiée");
        redirect('Front/home/mydemands');
      }
      else {
        redirect(base_url() . 'Front/home/login'); 
      }
    }

 		public function offerpost() {      
      if($this->session->userdata['id']) {
        if($this->input->post('accept_budget') == 0 && $this->input->post('offer_budget') == NULL)
        {
          $this->session->set_flashdata('warning', "Veuillez envoyer votre budget d'offre.");  
          redirect('Front/home/make_an_offer/'. $this->input->post('project_id'));
          return null;
        }

 		 	  if($this->input->post('accept_budget') == 1) {
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

      else {
        $project_data = array(
            'message' => $this->input->post('message'),
            'project_id' => $this->input->post('project_id'),
            'user_id' => $this->session->userdata['id'],
            'client_id' => $this->input->post('client_id'),           
            'offer_budget' => $this->input->post('offer_budget'),
            'created_date' => date('Y-m-d H:i:s')
        );
      }

        //var_dump($this->input->post('offer_budget'));die();
 		    $this->load->model('Front/Posts_model');
        if($this->Posts_model->checkMission($project_data))
        {
            $this->session->set_flashdata('error', 'Vous avez déjà proposé.');  
            redirect('Front/home/make_an_offer/'. $project_data['project_id']);
            //$this->load->view('Front/make_an_offer');
            return null;
        }
        $this->Posts_model->pushNotification($this->session->userdata['id'], 3, "Votre offre a été envoyée avec succès.");
        $this->Posts_model->pushNotification($this->input->post('client_id'), 3, "Vous avez reçu une offre");

        $this->Posts_model->mission($project_data);
        redirect('Front/home/mymissions');
      }
      else{
        redirect(base_url() . 'Front/home/login');  
      }

    }

    public function mission_update()
    {
      $mission_id = $this->input->post('mission_id');
      $message = $this->input->post('message');
      $offer_budget = $this->input->post('offer_budget');
      $this->load->model('Front/Posts_model');
      $this->Posts_model->mission_update($mission_id, $message, $offer_budget);
      $this->Posts_model->pushNotification($this->session->userdata['id'], 2, "You offer was updated successfully.");
      
      redirect('Front/home/mission_posted_details/' . $mission_id);
      //var_dump($mission_id);die();
    }

      public function download($fileName)     
      {      
        $this->load->helper('download');
        if ($fileName) {
          $file = base_url("/uploads/demands_documents/") . $fileName;
  
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
          if(empty($_FILES['project_files']['name']) || !$this->input->post('your_comments'))
          {
              $this->session->set_flashdata('error_send', 'Envoyez votre livraison et commentez');
              redirect('Front/home/mission_inprogress_details/' . $this->input->post('project_id')); 
          }

          if(!empty($_FILES['project_files']['name'])) {
            $config['upload_path'] = './uploads/demands_documents';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx|txt'; 
            $config['max_size'] = 6000000;
            $config['max_width'] = 45000;
            $config['max_height'] = 45000;

            $this->load->library('upload', $config);
  
            if (!$this->upload->do_upload('project_files')) 
            {
              
              $error = array('error' => $this->upload->display_errors());
              $image_name = '';
              $this->session->set_flashdata('error_file', 'Le fichier est faux.');
              redirect('Front/home/mission_inprogress_details/' . $this->input->post('project_id')); 
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
              'project_status' => 2,
              'user_id' => $this->session->userdata['id'],
              'client_id' => $this->input->post('client_id'),            
              'project_files' => ($image_name) ? $image_name : $this->input->post('project_files'),
              'date_created' => $this->input->post('date_created'),
              'date_updated' =>  date('Y-m-d H:i:s')  
            );                     
        }
        else {  
          //var_dump("qq"); die();
        
            $project_data = array(
                'project_id' => $this->input->post('project_id'),
                'your_comments' => $this->input->post('your_comments'),
                'project_status' => $this->input->post('project_status'),
                'user_id' => $this->session->userdata['id'],
                'client_id' => $this->input->post('client_id'),            
                'date_created' => $this->input->post('date_created'),
                'date_updated' =>  date('Y-m-d H:i:s') 
            );
        }
        //print_r($project_data);die();
        $this->load->model('Front/Posts_model');
        $this->Posts_model->inprogress_mission($project_data);

        $this->Posts_model->pushNotification($this->input->post('client_id'), 2, "Vous avez reçu un nouveau livrable.");
        $this->Posts_model->pushNotification($this->session->userdata['id'], 2, "Vous avez reçu un nouveau livrable.");

        $this->session->set_flashdata('delivery_success', 'Votre livraison a été envoyée avec succès.');
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
      public function inprogress_demand(){
        //var_dump("dd");die();        
        $project_data = array(
            'project_id' => $this->input->post('project_id'),
            'user_email' => $this->input->post('user_email'),
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'comment' => $this->input->post('description'),           
            'date_created' => date('Y-m-d H:i:s'),
            'date_modified' =>  date('Y-m-d H:i:s') 
        ); 
        $this->load->model('Front/Posts_model');
        $this->Posts_model->deliver_demand($project_data, $this->input->post('user_id'));
        redirect('Front/home/mydemands');

      }


     public function modify($mission_id){
     // print_r($mission_id);die();
       $this->load->library("session");

        $this->load->model('Front/Posts_model');
        $data= array('mission_status' => 1);
        $status = $this->Posts_model->deliver_askmodify($data, $mission_id);
        $this->Posts_model->pushNotification($this->session->userdata['id'], 3, "vous avez reçu une demande de modification.");
        if($status) {
          $this->session->set_flashdata('success_ask_modify', 'Votre demande de modification a été envoyée avec succès.');  
          redirect('Front/home/mydemands');
        }
      }

      public function complete_modify($mission_id){
     // print_r($mission_id);die();
       $this->load->library("session");

        $this->load->model('Front/Posts_model');
        $data= array('mission_status' => 1);
        $status = $this->Posts_model->deliver_askmodify($data,$mission_id);
        
        if($status) {
           redirect('Front/home/mydemands');
        }
      }
       public function delivered_pay_demand(){

          $date_created = date('Y-m-d H:i:s');
          $project_data = array(
            'mission_id' => $this->input->post('mission_id'),
            'mission_amount' => $this->input->post('mission_amount'),
            'amount_to_pay' => $this->input->post('amount_to_pay'),          
            'pay_status' => $this->input->post('pay_status'),
            'date_created' => $date_created,
            'mission_status' =>  $this->input->post('mission_status'),
            'employer_id' => $this->input->post('employer_id'),
            'date_of_pay' =>  date('Y-m-d H:i:s')
         );
         $rating_data = array(
           "by_user_id" => $this->session->userdata['id'],
           "to_user_id" => $this->input->post('employer_id'),
           "rating" => $this->input->post('rating'),
           "comment" => $this->input->post('comment'),
           "created" => $date_created
         );

         //print_r( $project_data);die();
        $this->load->model('Front/Posts_model');
        $this->Posts_model->deliver_paym_demand($project_data);
        $this->Posts_model->pushNotification($this->input->post('employer_id'), 1, "Paiement effectué avec succés.");
        $this->Posts_model->pushNotification($this->session->userdata['id'], 1, "Un nouveau paiement a été reçu.");

        if($this->input->post('rating') != 0)
        {
          $this->Posts_model->saveRating($rating_data);
          $this->Posts_model->pushNotification($this->input->post('employer_id'), 5,  "Vous avez reçu un avis de votre client.");
        }
        
      redirect('Front/home/mydemands');
    }

       public function inprogress_pay_demand(){
         $project_data = array(
           'mission_id' => $this->input->post('mission_id'),
           'mission_amount' => $this->input->post('mission_amount'),
           'amount_to_pay' => $this->input->post('amount_to_pay'),          
           'pay_status' => $this->input->post('pay_status'),
           'date_created' => $this->input->post('date_created'),
           'mission_status' =>  $this->input->post('mission_status'),
           'employer_id' =>  $this->input->post('employer_id'),
           'date_of_pay' =>  date('Y-m-d H:i:s'),

         );  
         //print_r( $project_data);die();
        $this->load->model('Front/Posts_model');
        $this->Posts_model->deliver_paym_demand($project_data);
        redirect('Front/home/mydemands');
       }
       public function complete_pay_demand(){
         $project_data = array(
           'mission_id' => $this->input->post('mission_id'),
           'mission_amount' => $this->input->post('mission_amount'),
           'amount_to_pay' => $this->input->post('amount_to_pay'),          
          'pay_status' => $this->input->post('pay_status'),
          'date_created' => $this->input->post('date_created'),
          'mission_status' =>  $this->input->post('mission_status'),
          'employer_id' =>  $this->input->post('employer_id'),
          'date_of_pay' =>  date('Y-m-d H:i:s'),

         );  
         //print_r( $project_data);die();
        $this->load->model('Front/Posts_model');
        $this->Posts_model->deliver_paym_demand($project_data);
        redirect('Front/home/mydemands');
       }

       public function Notification(){
         $this->load->view('Front/common/header');
        $this->load->view('Front/notification');
         $this->load->view('Front/common/footer');  
       }


}
?>