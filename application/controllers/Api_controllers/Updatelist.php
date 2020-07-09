<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
// Load the Rest Controller library
require(APPPATH.'/libraries/REST_Controller.php');
require APPPATH . 'libraries/Format.php';


class Updatelist extends REST_Controller {  
	public function __construct() { 

		parent::__construct();
		 $this->load->database();
		// Load the user model
		//$this->load->model('Api_models/UpdateModel');

	}
	 public function Contact_put($id)
    {
        $input = $this->put();
        $this->db->update('contact', $input, array('id'=>$id));
     
        $this->response([' Updated successfully.'], REST_Controller::HTTP_OK);
    }

public function Project_post()
    {
        $input = $this->post();

        $image_name="";
        //Upload Images into the folder
        if (isset($_FILES["picture_url"]) && $_FILES["picture_url"]["size"] > 0) {
            $config['upload_path']   = './uploads/project_image/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['encrypt_name']  = TRUE;

            $this->load->library('upload', $config);
            
            if (!$this->upload->do_upload('picture_url')) {
                $data["responce"] = false;
                $data["error"]    = 'Error! : ' . $this->upload->display_errors();
                   
            }
             else {
                $img_data   = $this->upload->data();

                $image_name = $img_data['file_name'];
                $input['picture_url'] = $image_name;
                
            }    
        }
      
        $this->db->update('project', $input, array('project_id'=>$input['project_id']));
        
     
        $this->response([' Updated successfully.'], REST_Controller::HTTP_OK);
    }

    public function publishDemand_post()
    {
        $input = $this->post();

         $image_name="";
        //Upload Images into the folder
        if (isset($_FILES["image"]) && $_FILES["image"]["size"] > 0) {
            $config['upload_path']   = './uploads/profiles/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            
            $this->load->library('upload', $config);
            
            if (!$this->upload->do_upload('image')) {
                $data["responce"] = false;
                $data["error"]    = 'Error! : ' . $this->upload->display_errors();
                   
            }
             else {
                $img_data   = $this->upload->data();

                $image_name = $img_data['file_name'];
                $input['image'] = $image_name;

            }    
        }
        //$this->db->where(array('id'=>$input['id']));

        //unset($input['id']);
        
        $this->db->update('publishDemand',$input, array('id'=>$input['id']));
     
     
        $this->response(['Updated successfully.'], REST_Controller::HTTP_OK);
    }

    public function RegisteredUser_put($id)
    {
        $input = $this->put();

        $this->db->update('users', $input, array('id'=>$id));
     
        $this->response([' Updated successfully.'], REST_Controller::HTTP_OK);
    }
}