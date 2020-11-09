<?php 
class ChatController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model(['ChatModel','OuthModel','UserModel']);
        $this->load->helper('string');
        if(!empty($this->session->userdata('id'))){

        }
        else {
            redirect('Login');
        }
    }   

    public function index(){
            
            $data['strTitle']='';
            $data['strsubTitle']='';
            $list=[];
            /*if($this->session->userdata['Admin']['role'] == 'Client_cs'){*/
                $list = $this->UserModel->VendorsList();
            
                $data['strTitle']='All Users';
                $data['strsubTitle']='Vendors';
                $data['chatTitle']='Select Vendor with Chat';
        /* }else{
                $list = $this->UserModel->ClientsListCs();
                $data['strTitle']='All Connected Clients';
                $data['strsubTitle']='Clients';
                $data['chatTitle']='Select Client with Chat';
    
            }*/
            $vendorslist=[];
            foreach($list as $u){
                $vendorslist[]=
                [
                    'id' => $this->OuthModel->Encryptor('encrypt', $u['id']),
                    'name' => $u['name'],
                    'picture_url' => $this->UserModel->PictureUrlById($u['id']),
                ];
            }
            $data['vendorslist']=$vendorslist;
            
            
            $this->parser->parse('construction_services/chat_template',$data);
    }

    

    public function claim_chat()
    {
        //var_dump($this->input->post('user_email'));die();
        $self_id = $this->session->userdata('id');
        $oppsite_id = $this->input->post('user_id');
        if($this->input->post('chat_customer') == "true")
        {
            //var_dump("")
            $this->load->view('Front/claim_chat');
            return;
        }
        //var_dump($this->input->post('user_id'));die();
        $this->load->model('Front/Posts_model');

        if($this->input->post('mission_dispute') == "mission_dispute")
        {
            $this->Posts_model->pushNotification($self_id, 2, "Un litige concernant une de vos Mission a été ouvert!");
            $this->Posts_model->pushNotification($this->input->post('mission_client'), 2, "Un litige concernant une de vos Demande a été ouvert!"); 
            $oppsite_id = $this->input->post('mission_client');
        }
        else
        {
            $this->Posts_model->pushNotification($self_id, 2, "Un litige concernant une de vos Demande a été ouvert!");
            $this->Posts_model->pushNotification($this->input->post('user_id'), 2, "Un litige concernant une de vos Mission a été ouvert!");    
            $oppsite_id = $this->input->post('user_id');
        }


        $messageTxt = reduce_multiples($this->input->post('description'), ' ');
        
        $claim_msg_first = "Nous sommes désolés de votre insatisfaction.<br>
                            Cependant, votre litige a été ouvert avec succès, Le délai moyen de traitement est de 14 jours ouvrés.<br>
                            Vous pouvez desormais, nous contacter via ce service de Chat si vous vous êtes arranger amicalement avec le Heelper concerné, ou si vous avez d'autres informations à nous envoyer.<br>
                            Veuillez noter que le traitement de vos messages peut prendre quelques jours.<br> Merci.";
        
        $claim_msg_second = "Un litige concernant une de vous Demande/Mission a été ouvert.<br> 
                            Le délai moyen de traitement est de 14 jours ouvrés.<br>
                            Nous vous invitons à nous comuniquer dès maintenant toute information que vous jugez importante par rapport à ce litige via ce service de chat.<br>
                            Veuillez noter que le traitement de vos messages peut prendre quelques jours.<br> Merci.";
        
        $data_admin_first = [
            'sender_id' => 4,
            'receiver_id' => $self_id,
            'message' => $claim_msg_first,
            'attachment_name' => "",
            'file_ext' => "",
            'mime_type' => "",
            'message_date_time' => date('Y-m-d H:i:s'), //23 Jan 2:05 pm
            'ip_address' => "127.0.0.1",
            'project_id' => $this->input->post('project_id')
        ];
        $data_admin_second = [
            'sender_id' => 4,
            'receiver_id' => $oppsite_id,
            'message' => $claim_msg_second,
            'attachment_name' => "",
            'file_ext' => "",
            'mime_type' => "",
            'message_date_time' => date('Y-m-d H:i:s'), //23 Jan 2:05 pm
            'ip_address' => "127.0.0.1",
            'project_id' => $this->input->post('project_id')
        ];

        $data = [
            'sender_id' => $this->session->userdata('id'),
            'receiver_id' => 4,
            'message' => $messageTxt,
            'attachment_name' => "",
            'file_ext' => "",
            'mime_type' => "",
            'message_date_time' => date('Y-m-d H:i:s'), //23 Jan 2:05 pm
            'ip_address' => "127.0.0.1",
            'project_id' => $this->input->post('project_id')
        ];

        $query1 = $this->ChatModel->SendTxtMessage($this->OuthModel->xss_clean($data_admin_first)); 
        $send_id = array('highlight' => 0);
        $status_dispute = $this->ChatModel->updateHighlight($self_id, $send_id);
        $taken_data1 = $this->ChatModel->gettokendata($this->OuthModel->Encryptor('decrypt', $self_id));
        $this->firebase->send_notification($claim_msg_first ,$taken_data1);
        //usertype =  proejct_id
        $this->firebase->insertMessage(array('user_type'=> $this->input->post('project_id'), "demand_id" => 2, 'user_id'=> $self_id, 'notification' => "Unread Message.", 'type_id' => 4));


        $query2 = $this->ChatModel->SendTxtMessage($this->OuthModel->xss_clean($data_admin_second));
        $send_id = array('highlight' => 0);
        $status_dispute = $this->ChatModel->updateHighlight($oppsite_id, $send_id);
        $taken_data2 = $this->ChatModel->gettokendata($this->OuthModel->Encryptor('decrypt', $oppsite_id));
        $this->firebase->send_notification($claim_msg_second ,$taken_data2);
        $this->firebase->insertMessage(array('user_type'=> $this->input->post('project_id'), "demand_id" => 2, 'user_id'=> $oppsite_id, 'notification' => "Unread Message.", 'type_id' => 4));

        
        $query3 = $this->ChatModel->SendTxtMessage($this->OuthModel->xss_clean($data)); 
        $send_id = array('highlight' => 0);
        $status_dispute = $this->ChatModel->updateHighlight(4, $send_id);
        $taken_data3 = $this->ChatModel->gettokendata($this->OuthModel->Encryptor('decrypt', 4));
        $this->firebase->send_notification($messageTxt ,$taken_data3);

        $this->firebase->insertMessage(array('user_type'=> 1, "demand_id" => 1, 'user_id'=> 1, 'notification' => "Unread Message.", 'type_id' => 4));
        
        $this->load->model('Front/Posts_model');

        $project_data = array(
            'project_id' => $this->input->post('project_id'),
            'user_email' => $this->input->post('user_email'),
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'comment' => $this->input->post('comment'),
            'opener_id' =>  $self_id,
            'opponent_id' => $oppsite_id,
            'before_status' => $this->input->post('mission_status'),          
            'date_created' => date('Y-m-d H:i:s'),
            'date_modified' =>  date('Y-m-d H:i:s'),
            'open_close_status' => 1  // 1:open 0:close 
        ); 
        $this->Posts_model->deliver_demand($project_data, $this->input->post('user_id'));
        $this->load->view('Front/claim_chat');
    }
    public function send_text_message(){

            $post = $this->input->post();
            //echo $post['receiver_id']; die();
            $messageTxt = 'NULL';
            $attachment_name = '';
            $file_ext = '';
            $mime_type = '';
            
            if(isset($post['type']) == 'Attachment'){ 
                //echo "fff"; die();
                $AttachmentData = $this->ChatAttachmentUpload();
                $attachment_name = $AttachmentData['file_name'];
                $file_ext = $AttachmentData['file_ext'];
                $mime_type = $AttachmentData['file_type'];             
            }
            else {
                $messageTxt = reduce_multiples($post['messageTxt'], ' ');
            }   
            
            $get_project_id = $this->ChatModel->get_project_id($post['receiver_id']); 

            $data = [
                        'sender_id' => $this->session->userdata('id'),
                        'receiver_id' => $post['receiver_id'],
                        'message' =>   $messageTxt,
                        'attachment_name' => $attachment_name,
                        'file_ext' => $file_ext,
                        'mime_type' => $mime_type,
                        'message_date_time' => date('Y-m-d H:i:s'), //23 Jan 2:05 pm
                        'ip_address' => $this->input->ip_address(),
                        'project_id' => $get_project_id
                    ];
            
            $query = $this->ChatModel->SendTxtMessage($this->OuthModel->xss_clean($data)); 

            $send_id = array('highlight' => 0);
            $status_dispute = $this->ChatModel->updateHighlight($post['receiver_id'], $send_id);

            $taken_data = $this->ChatModel->gettokendata($this->OuthModel->Encryptor('decrypt', $post['receiver_id']));

            $this->firebase->send_notification($messageTxt ,$taken_data);

            $this->firebase->insertMessage(array('user_type'=> 1, "demand_id" => 1, 'user_id'=> $post['receiver_id'], 'notification' => "Unread Message.", 'type_id' => 4));
            
            $response='';
            if($query == true){
                $response = ['status' => 1 ,'message' => '' ];
            }
            else{
                $response = ['status' => 0 ,'message' => 'sorry we re having some technical problems. please try again !'                       ];
            }
            
            
            echo json_encode($response);
        }


    public function send_text_message1_post(){
        $post = $this->input->post();
        $messageTxt='NULL';
        $attachment_name='';
        $file_ext='';
        $mime_type='';
        
        if(isset($post['type'])=='Attachment'){ 
            $AttachmentData = $this->ChatAttachmentUpload();
            //print_r($AttachmentData);
            $attachment_name = $AttachmentData['file_name'];
            $file_ext = $AttachmentData['file_ext'];
            $mime_type = $AttachmentData['file_type'];
             
        }else{
            $messageTxt = reduce_multiples($post['messageTxt'],' ');
        }   
         
        $data = [
            'sender_id' => $post['receiver_id'],
            'receiver_id' => 18,
            'message' => $messageTxt,
            'attachment_name' => $attachment_name,
            'file_ext' => $file_ext,
            'mime_type' => $mime_type,
            'message_date_time' => date('Y-m-d H:i:s'), //23 Jan 2:05 pm
            'ip_address' => $this->input->ip_address(),
        ];
    
        $query = $this->ChatModel->SendTxtMessage($this->OuthModel->xss_clean($data)); 
        $response = '';
        if($query == true){
            $response = ['status' => 1 ,'message' => '' ];
        }else{
            $response = ['status' => 0 ,'message' => 'sorry we re having some technical problems. please try again !'                       ];
        }     
        echo json_encode($response);
    }

    public function ChatAttachmentUpload() {
        $file_data='';
        if(isset($_FILES['attachmentfile']['name']) && !empty($_FILES['attachmentfile']['name'])){  
                $config['upload_path']          = './uploads/myattachments';
                $config['allowed_types']        = 'jpeg|jpg|png|txt|pdf|docx|xlsx|pptx|rtf';
                $config['max_size']             = 200;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;
                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('attachmentfile'))
                {
                    echo json_encode(['status' => 0,
                    'message' => '<span style="color:#900;">'.$this->upload->display_errors(). '<span>' ]); die;
                }
                else
                {
                    $file_data = $this->upload->data();
                    return $file_data;
                }
            }
         
    }
    
    public function get_chat_history_by_vendor(){

        $receiver_id =  $this->input->get('receiver_id');
        $Logged_sender_id = $this->session->userdata('id');

        $history = $this->ChatModel->GetReciverChatHistory($receiver_id);        
      
        echo json_encode($history);die();

         
        //print_r($history);
        foreach($history as $chat):
            
            $message_id = $this->OuthModel->Encryptor('encrypt', $chat['id']);
            $sender_id = $chat['sender_id'];
            $userName = $this->UserModel->GetName($chat['sender_id']);
            $userPic = $this->UserModel->PictureUrlById($chat['sender_id']);
            
            $message = $chat['message'];
            $messagedatetime = date('d M H:i A',strtotime($chat['message_date_time']));
            
        ?>
            <?php
                $messageBody = '';
                if($message == 'NULL'){ //fetach media objects like images,pdf,documents etc
                    $classBtn = 'right';
                    if($Logged_sender_id == $sender_id){$classBtn = 'left';}
                    
                    $attachment_name = $chat['attachment_name'];
                    $file_ext = $chat['file_ext'];
                    $mime_type = explode('/',$chat['mime_type']);
                    
                    $document_url = base_url('uploads/myattachments/'.$attachment_name);
                    
                  if($mime_type[0]=='image'){
                    $messageBody.='<img src="'.$document_url.'" onClick="ViewAttachmentImage('."'".$document_url."'".','."'".$attachment_name."'".');" class="attachmentImgCls">';  
                  }else{
                    $messageBody='';
                     $messageBody .= '<div class="attachment">';
                          $messageBody .= '<h4>Attachments:</h4>';
                           $messageBody .= '<p class="filename">';
                            $messageBody .= $attachment_name;
                           $messageBody .= '</p>';
        
                          $messageBody .= '<div class="pull-'.$classBtn.'">';
                            $messageBody .= '<a download href="'.$document_url.'"><button type="button" id="'.$message_id.'" class="btn btn-primary btn-sm btn-flat btnFileOpen">Open</button></a>';
                          $messageBody .= '</div>';
                        $messageBody .= '</div>';
                    }
                        
                                            
                }else{
                    $messageBody = $message;
                }
            ?>
             <?php if($Logged_sender_id != $sender_id){?>     
                  <!-- Message. Default to the left -->
                <div class="d-flex justify-content-start mb-4">
					<div class="img_cont_msg">
						<img src="<?php echo base_url('/uploads/profiles/' . $userPic) ?>" class="rounded-circle user_img_msg">
					</div>
					<div class="msg_cotainer">
                        <?=$messageBody;?>
						<span class="msg_time"><?= $messagedatetime; ?></span>
					</div>		
                 </div>
                    <!-- /.direct-chat-msg -->
            <?php }else{?>
                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right"><?=$userName;?></span>
                        <span class="direct-chat-timestamp pull-left"><?=$messagedatetime;?></span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="<?=$userPic;?>" alt="<?=$userName;?>">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        <?=$messageBody;?>
                            <!--<div class="spiner">
                                <i class="fa fa-circle-o-notch fa-spin"></i>
                            </div>-->
                       </div>
                       <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
             <?php }?>
        
        <?php
        endforeach;    
    }

    public function chat_clear_client_cs(){
        $receiver_id = $this->OuthModel->Encryptor('decrypt', $this->input->get('receiver_id') );
        
        $messagelist = $this->ChatModel->GetReciverMessageList($receiver_id);
        
        foreach($messagelist as $row){
            
            if($row['message']=='NULL'){
                $attachment_name = unlink('uploads/myattachments/'.$row['attachment_name']);
            }
        }
        $this->ChatModel->TrashById($receiver_id);         
    }
    
    public function addChatMember() {
        $user_id = $this->session->userdata['id'];
        $post = $this->input->post();
        $data = [
            'sender_id' => $user_id,
            'reciver_id' => $post['receiver_id'],
            'date_created' => date('Y-m-d H:i:s')
        ];
        $this->ChatModel->insertChattingMember($data);
        //redirect(base_url("Front/home/chat"));
        return "success";
    }

    public function setChatReadStatus() {
        
        $post = $this->input->post();
        $sender_id = $post['receiver_id'];
        $receiver_id = $this->session->userdata['id'];
        //echo  $sender_id;
        return $this->ChatModel->setReadStatus($sender_id, $receiver_id);
    }
}
