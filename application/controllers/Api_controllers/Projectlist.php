<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
// Load the Rest Controller library
require(APPPATH.'/libraries/REST_Controller.php');

class Projectlist extends REST_Controller {
    public function __construct() { 
    	 
        parent::__construct();
        
        // Load the user model
         $this->load->model('Api_models/ProjectModel');
    
    }

     /* project list api*/

    public function ListProject_get(){
      $title = strip_tags($this->post('title'));
      $description = strip_tags($this->post('description'));
      $budget = strip_tags($this->post('budget'));
      $data = $this->ProjectModel->getAllProjects();

      if($data['data']){
        $this->response([
            'status' => TRUE,
            'Projects'=>$data['data']
        ], REST_Controller::HTTP_OK);
      }
      else {
        $this->response([
            'status' => TRUE,
            'message' => 'Doctors Not found'
        ], REST_Controller::HTTP_OK);
      }
    }


    /*single project */


    public function SingleProject_post(){
      $project_id = strip_tags($this->post('project_id'));
      $project = $this->ProjectModel->getSingleProjectDetail($project_id);

      if($project){
        $this->response([
            'status' => TRUE,
            'Projects'=>$project
        ], REST_Controller::HTTP_OK);
      }
    }
 /*demand list api */
    public function Demandlist_get(){
      $title = strip_tags($this->post('title'));
      $description = strip_tags($this->post('description'));
      $budget = strip_tags($this->post('budget'));
      $image = strip_tags($this->post('image'));
      $data = $this->ProjectModel->getAllDemands();

      if($data['data']){
        $this->response([
            'status' => TRUE,
            'Demand'=>$data['data']
        ], REST_Controller::HTTP_OK);
      }
      else {
        $this->response([
            'status' => TRUE,
            'message' => 'Demand list Not found'
        ], REST_Controller::HTTP_OK);
      }
    }

 /*registered user list  api*/
    public function RegisteredUserlist_get(){
      $username = strip_tags($this->post('username'));
      $password = strip_tags($this->post('password'));
      $role = strip_tags($this->post('role'));
      $status = strip_tags($this->post('status'));
      $name = strip_tags($this->post('name'));
      $first_name = strip_tags($this->post('first_name'));
      $last_name = strip_tags($this->post('last_name'));
      $email = strip_tags($this->post('email'));
      $picture_url = strip_tags($this->post('picture_url'));
      $vendor_file = strip_tags($this->post('vendor_file'));
      $about = strip_tags($this->post('about'));
      $address = strip_tags($this->post('address'));
      $created = strip_tags($this->post('created'));
      $data = $this->ProjectModel->getAllRegisterUser();

      if($data['data'])
      {
        $this->response([
            'status' => TRUE,
            'Registered User'=>$data['data']
        ], REST_Controller::HTTP_OK);
      }
      else 
      {
        $this->response([
            'status' => TRUE,
            'message' => 'Registered User list Not found'
        ], REST_Controller::HTTP_OK);
      }
    }


     /*Contact list api page 27 */
    public function Contactlist_get(){
      $title = strip_tags($this->post('title'));
      $description = strip_tags($this->post('description'));
      $email = strip_tags($this->post('email'));
     
      $data = $this->ProjectModel->getAllContact();

      if($data['data']){
        $this->response([
            'status' => TRUE,
            'Contact'=>$data['data']
        ], REST_Controller::HTTP_OK);
      }
      else {
        $this->response([
            'status' => TRUE,
            'message' => 'Contact list Not found'
        ], REST_Controller::HTTP_OK);
      }
    }

   
}