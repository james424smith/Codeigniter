
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserApiModel extends CI_Model {
	public function __construct(){
		$this->UserTable = 'users';
	}


	public function getUserProfileById($id){
		$this->db->select("*");
		$this->db->from($this->UserTable);
		$this->db->where('id',$id);
		$user_profile = $this->db->get()->row();
		return empty($user_profile)?false:$user_profile;

	}

}