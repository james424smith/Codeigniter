 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class ChatModel extends CI_Model {
   	public function __construct()
        {
                parent::__construct();
                 // Your own constructor code
         } 
 	private $Table = 'chat';
	
 
	public function SendTxtMessage($data){
  		$res = $this->db->insert($this->Table, $data ); 
 		if($res == 1)
 			return true;
 		else
 			return false;
	}

	public function updateHighlight($user_id,$send_id)
    {
/*      $update_data = $send_id;
      $this->db->where('id',$user_id);
      $this->db->update("users",$update_data);*/
   $this->db->where('id',$user_id);

      $this->db->update('users',$send_id);

        return true;
      
    }
	public function GetReciverChatHistory($receiver_id){
		
		$sender_id = $this->session->userdata('id');
		
		//SELECT * FROM `chat` WHERE `sender_id`= 197 AND `receiver_id` = 184 OR `sender_id`= 184 AND `receiver_id` = 197
		$condition= "`sender_id`= '$sender_id' AND `receiver_id` = '$receiver_id' OR `sender_id`= '$receiver_id' AND `receiver_id` = '$sender_id'";
		
		$this->db->select('*');
		$this->db->from($this->Table);
		$this->db->where($condition);
   		$query = $this->db->get();
 		if ($query) {
			$this->db->set('read_status', 1);
            $this->db->where('user_id', $this->session->userdata['id']);
            $this->db->where('type_id', 4);
            $this->db->update('notification');
			 return $query->result_array();
		 } else {
			 return false;
		}
	}


	public function gettokendata($user_id)
    {
    	$this->db->select("auth_token");
    	$this->db->from('users');
    	$this->db->where('id',$user_id);
    	$data = $this->db->get()->result();
    	//echo $str = $this->db->last_query();
      	$dta=  $data[0]->auth_token;
		//print_r($data);

      	return $dta;

    }

    public function get_project_id($id)
    {
    	$this->db->select("project_id");
    	$this->db->from('chat');
      	$this->db->where('sender_id', $id);
	  	$this->db->order_by('id', 'DESC');
	  	$this->db->limit('1');
      	$data = $this->db->get()->result();

    	$data = $data[0]->project_id;
      	return $data;
    }


/*public function GetReciverChatHistory($receiver_id){
		
		$sender_id = 18;
		
		//SELECT * FROM `chat` WHERE `sender_id`= 197 AND `receiver_id` = 184 OR `sender_id`= 184 AND `receiver_id` = 197
		$condition= "`sender_id`= '$sender_id' AND `receiver_id` = '$receiver_id' OR `sender_id`= '$receiver_id' AND `receiver_id` = '$sender_id'";
		
		$this->db->select('*');
		$this->db->from('chat');
		$this->db->where($condition);
   		$query = $this->db->get();
 		if ($query) {
			 return $query->result_array();
		 } else {
			 return false;
		 }
	}*/


 	public function GetReciverMessageList($receiver_id){
  		
		$this->db->select('*');
		$this->db->from($this->Table);
		$this->db->where('receiver_id', $receiver_id);
   		$query = $this->db->get();
 		if ($query) {
			 return $query->result_array();
		 } 
		 else {
			 return false;
		 }	 
	}

	public function TrashById($receiver_id)
	{  
 		$res = $this->db->delete($this->Table, ['receiver_id' => $receiver_id] ); 
		if($res == 1)
			return true;
		else
			return false;
	 }
	 
	public function insertChattingMember($data) {
	
		$user_id = $this->session->userdata['id'];

		$this->db->select('*');
		$this->db->from('add_discuss');
		$this->db->where('reciver_id', $data['reciver_id']);
		$this->db->where('sender_id', $data['sender_id']);
		$this->db->or_where('reciver_id', $data['sender_id']);
		$this->db->where('sender_id', $data['reciver_id']);
		
		$resultArray = $this->db->get();
		$resultCheck = $resultArray->num_rows();

		$res = 0;
		if($resultCheck == 0)
			$res = $this->db->insert('add_discuss', $data); 
 
		if($res == 1)
 			return true;
 		else
 			return false;
	}

	public function getChattingMembers() {
		$user_id = $this->session->userdata['id'];

		$this->db->select('*');
		$this->db->from('add_discuss');
		$this->db->where('sender_id', $user_id);
		$this->db->join('users', 'users.id = add_discuss.reciver_id');
		$query1 = $this->db->get();
        //var_dump($query1->result_array());die();
		
		$this->db->select('*');
		$this->db->from('add_discuss');
		$this->db->where('reciver_id', $user_id);
		$this->db->join('users', 'users.id = add_discuss.sender_id');
		$query2 = $this->db->get();
		//var_dump($query2->result_array());die();

		$result = array_merge($query1->result_array(), $query2->result_array());
		// var_dump($result);die();

		return $result;		
	}
 }