<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adduser extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library("Excel");
		$this->load->model('Register_model');
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
		$this->load->view('adduser');
		$this->load->view('common/footer');

	}

	public function user()
	{
		$name=$this->input->post('username');
		$email=$this->input->post('email');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$dob = $this->input->post('dob');
		$school = $this->input->post('sa');
		$password = md5($this->input->post('password'));
		$mobile = $this->input->post('mobile');
		$address = $this->input->post('address');
		$gender = $this->input->post('gender');
		$city = $this->input->post('city');
		$country = $this->input->post('country');
		$role = $this->input->post('role');
		$que = $this->db->query("select * from users where email='".$email."'");
		$row = $que->num_rows();
		if($row>0)
		{
			$data['error']="<h3 style='color:red'>This user already exists</h3>";
		}
		else
		{
			$user = array("username"=>$name,'email'=>$email,'password'=>$password,'mobile_no'=>$mobile,'address'=>$address,'gender'=>$gender,'city'=>$city,'first_name'=>$first_name,'last_name'=>$first_name,'dob'=>$dob,'school_address'=>$school,'country'=>$country,'role'=>$role);

			$config = array(
			'upload_path' => "./uploads/profiles",
			'allowed_types' => "gif|jpg|png|jpeg|pdf",
			
			$config['max_size']      = 100,
			$config['max_width']     = 1024, 
			$config['max_height']    = 768
			);


			$this->load->library('upload', $config);
			if($this->upload->do_upload('image'))
			{
				
				$user['picture_url'] = $this->upload->data()['file_name'];
			}
			else
			{
               print_r($this->upload->display_errors());
			}

			$this->db->insert('users',$user);
			// echo $this->db->last_query();exit;

			$data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
		}			

		$this->load->view('common/sidebar');
		$this->load->view('adduser',$data);

		$this->load->view('common/header');

		/*Display user list*/
		$userlist['userlist'] = $this->Register_model->UserList();
		$this->load->view('userlist', $userlist);
		$this->load->view('common/footer');	
	}

	



	function import()
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
		$username = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
		$first_name = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
		$last_name = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
		$email = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
		$password = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
		$cell_number = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
		$home_address = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
		$city = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
		$dob = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
		$school = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
		$country = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
		$role = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
		$gender = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
		$data[] = array(
		'username'  => $username,
		'first_name'   => $first_name,
		'last_name'    => $last_name,
		'email'  => $email,
		'password'   => $password,
		'mobile_no' =>$cell_number,
		'address' =>$home_address,
        'city' =>$city,
        'school_address'=>$school,
        'country' =>$country,
        'role' => $role,
        'gender'=>$gender,

		);
		
	}
	
    foreach($data as $d)
    {
     if($this->Register_model->checkEmailAvailability($d['email']))
     {

     }
     else
     {
      $this->db->insert('users',$d);
     }
     
    }
	


	}

	//	print_r($data);exit;

	// $this->excel_import_model->insert($data);
	//echo 'Data Imported successfully';
	} 
	}



	
	
}
