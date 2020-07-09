<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
// Load the Rest Controller library
require(APPPATH.'/libraries/REST_Controller.php');
require APPPATH . 'libraries/Format.php';


class DeleteList extends REST_Controller {  
	public function __construct() { 

		parent::__construct();
		// Load the user model
		$this->load->model('Api_models/DeleteModel');

	}
		// delete contact data by id
	function Contact_delete($id) {
		$result = $this->DeleteModel->delete_contact($id);

		if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}
	}

	// delete project delete by id
    public function Project_delete($project_id){
    	$result = $this->DeleteModel->delete_project($project_id);

    	if($result === FALSE) {
    		$this->response(array('status' =>'failed'));
    	}
    	else{
    		$this->response(array('status'=>'success'));
    	}
    }


    // delete project delete by id
    public function publishDemand_delete($id){
    	$result = $this->DeleteModel->delete_demandPublished($id);

    	if($result === FALSE) {
    		$this->response(array('status' =>'failed'));
    	}
    	else{
    		$this->response(array('status'=>'success'));
    	}
    }

    //delete user by id api
    public function RegisteredUser_delete($id){

    	$result = $this->DeleteModel->delete_RegisteredUser($id);

    	if($result=== FALSE) {
    		$this->response(array('status'=>'failed'));
    	}
    	else{
    		$this->response(array('status'=>'success'));
    	}
    }
}

?>