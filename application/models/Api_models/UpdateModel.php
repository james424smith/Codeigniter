	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class UpdateModel extends CI_Model {
		public function __construct(){
			$this->ContactTable = 'contact';
		}
		// Update Query
		public function update($data){
			$id= $data['id'];
			$this->db->where('id',$id);
			$this->db->update($this->ContactTable,$data);
		}
	}


	