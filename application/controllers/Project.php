<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {


	public function __construct() {

		parent::__construct();
		$this->load->library('Excel');
		$this->load->model('Register_model');
		$this->load->library(array('session'));
		$this->load->helper(array('url'));

		if(!empty($this->session->userdata('id'))){

		}
		else {
			redirect('Login');
		}
	


	}
	public function index()
	{
		$this->load->view('common/sidebar');
		$this->load->view('common/header');
		$this->load->view('project');
		$this->load->view('common/footer');

	}
   
   public function addProject(){
        
		$title=$this->input->post('title');
		$description=$this->input->post('description');
		$budget=$this->input->post('budget');
		
		
			$user = array("title"=>$title,'description'=>$description,'budget'=>$budget);

			$config = array(
			'upload_path' => "uploads/project_image",
			'allowed_types' => "gif|jpg|png|jpeg|pdf",
			
			'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			'max_height' => "1768",
			'max_width' => "2024"

			);

			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);
			if($this->upload->do_upload('picture_url'))
			{	
				$user['picture_url'] = $this->upload->data()['file_name'];
			}
			else
			{
				print_r($this->upload->display_errors());
			}

			

			$this->db->insert('project_category',$user);
			// echo $this->db->last_query();exit;

			redirect('projectList');

	
	}


	public function import()
	{
		if(isset($_FILES["file"]["name"]))
	{
	$path = $_FILES["file"]["tmp_name"];
	$object = PHPExcel_IOFactory::load($path);
	foreach($object->getWorksheetIterator() as $worksheet)
	{
	$highestRow = $worksheet->getHighestRow();
	$highestColumn = $worksheet->getHighestColumn();
     $count = 0;
	for($row=2; $row<=$highestRow; $row++)
	{
		$title = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
		$description = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
		$budget = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
		
		$data[] = array(
		'title'  => $title,
		'description'   => $description,
		'budget'    => $budget,
		

		);

		$project = array("title"=>$title,'description'=>$description,'budget'=>$budget);

		
	}
	//print_r($data);exit;
	
    foreach($data as $d)
    {
     
      $this->db->insert('project_category',$d);
   
     
    }
	


	}

	}

	}


}