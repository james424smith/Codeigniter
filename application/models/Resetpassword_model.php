<?php
class Resetpassword_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function getCurrPassword($userid) {
        $query = $this->db->where(['id' =>$userid])->get('register');
        if($query->num_rows() > 0 ) {
            return $query->row(); 
        }
    }

    public function updatePassword($new_password, $userid) {
        $data = array('password'=>$new_password);
        return $this->db->where('id' , $userid)->update('register' , $data);
    }
}
?>