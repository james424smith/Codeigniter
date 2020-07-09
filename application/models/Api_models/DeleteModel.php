<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeleteModel extends CI_Model {
	public function __construct(){
		$this->ProjectCategoryTable = 'project_category';

	}

	//delete contact list by id
	function delete_contact($id) {
		$this->db->where('id', $id);
		$this->db->delete('contact');
	}

	//delete project list by id
	function delete_project($project_id) {
		$this->db->where('project_id', $project_id);
		$this->db->delete($this->ProjectCategoryTable);
	}


	//delete publish demand list by id
	function delete_demandPublished($id) {
		$this->db->where('id', $id);
		$this->db->delete('publishDemand');
	}


	// delete registered user by id

	 function delete_RegisteredUser($id){
		$this->db->where('id', $id);
		$this->db->delete('users');
	}



}

?>