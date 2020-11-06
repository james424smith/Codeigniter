<?php

class UserSetting extends CI_Controller {
	public function index(){
		$this->load->view('common/header');		
		$this->load->view('common/sidebar');
		$this->load->view('reset_password');
		$this->load->view('common/footer');

	}
	public function updatePwd() {
		
		$this->form_validation->set_rules('password' ,'Current Password','required');
		$this->form_validation->set_rules('newpass' , 'New Password','required|alpha_numeric');
		$this->form_validation->set_rules('confpassword' , 'Confirm Password','required|matches[newpass]');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('common/header');	
			$this->load->view('common/sidebar');
			$this->load->view('reset_password');
			$this->load->view('common/footer');	

		}
		else {
			$curr_password = md5($this->input->post('password'));
			$new_password = md5($this->input->post('newpass'));
			$conf_password = md5($this->input->post('confpassword'));
			$this->load->model('Resetpassword_model');

			if(!empty($this->session->userdata('user')['username'])){
				$username = $this->session->userdata('user')['username'];
				$this->db->select('*');
				$this->db->from('users');
				$this->db->where('username', $username);
				$u = $this->db->get()->result_array();
				$userid = $u[0]['id'];
			}
			//var_dump($userid);die();
			$passwd = $this->Resetpassword_model->getCurrPassword($userid);
			if($passwd->password == $curr_password && $new_password == $conf_password)
			{
				if($this->Resetpassword_model->updatePassword($new_password , $userid)) 
				{
					$this->session->set_flashdata('password_update_success','Your password updated successfully.');
					redirect('home');
				}
			}
			else if ($new_password != $conf_password)
			{
				$this->session->set_flashdata('faild_confirm','Your new password is different from the confrim password.');
				redirect('UserSetting');
			}
			else 
			{
				$this->session->set_flashdata('faild_old','Your old password is wrong.');
				redirect('UserSetting');
			}
			
		}
	}
	public function updateSecPwd() {
		//var_dump($this->input->post());die();
			$curr_password = $this->input->post('sec_password');
			$new_password = $this->input->post('sec_newpass');
			$conf_password = $this->input->post('sec_confpassword');
			$this->load->model('Resetpassword_model');

			if(!empty($this->session->userdata('user')['username'])){
				$username = $this->session->userdata('user')['username'];
				$this->db->select('*');
				$this->db->from('users');
				$this->db->where('username', $username);
				$u = $this->db->get()->result_array();
				$userid = $u[0]['id'];
			}
			//var_dump($userid);die();
			$passwd = $this->Resetpassword_model->getCurrPassword($userid);
			if($passwd->second_password == $curr_password && $new_password == $conf_password)
			{
				if($this->Resetpassword_model->updateSecPassword($new_password , $userid)) 
				{
					$this->session->set_flashdata('sec_password_update_success','Your second password updated successfully.');
					redirect('home');
				}
			}
			else if ($new_password != $conf_password)
			{
				$this->session->set_flashdata('sec_faild_confirm','Your new second password is different from the confrim password.');
				redirect('UserSetting');
			}
			else 
			{
				$this->session->set_flashdata('sec_faild_old','Your old second password is wrong.');
				redirect('UserSetting');
			}
	}

	public function UpdateUser(){
		$this->db->where('username', $this->session->userdata('user')['username']);
		$data['users'] = $this->db->get()->result_array();
		$data = $this->input->post();
		$update_data = array('user' => $data['username'], 'email' => $data['email']);
		$this->db->where('id', $data['id']);

		if($this->db->update('users', $update_data)){
			$this->session->set_userdata('user', array('username' => $update_data['username']));
			$this->session->set_flashdata('result', 'Informations utilisateur mises à jour avec succès.');
			redirect('UserSetting/Account');
		}

	}
}
?>