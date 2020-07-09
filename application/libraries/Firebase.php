<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Firebase
{
        protected $ci;

        public function __construct()
        {
                $this->ci =& get_instance();
                $this->ci->load->database();
        }

        public function send_notification($message,$token)
        {
        $url = 'https://fcm.googleapis.com/fcm/send';
        $api_key = 'AAAAguQYVVg:APA91bFS3HsQMvB1QMQFvGOGDgqffJ4xYwyR0CsUevBiH-r1h9JqHCR6CwP_2IbncIgpZ1ELK6Ba27zYp3vtkydUXxhBlFRA16e0QxU3NSPHt3OleKkRzoAvakn3f2h28KZkyTkvDaFi';

        $fields = array (
        'registration_ids' => array (
        $token
        ),
        'data' => array (
             'flag' => 'Other',
        "title" => 'Heelp Application',
        "message" => $message
        )
        );


        $field_object = (object)$fields;
        // print_r(json_encode($field_object));exit;
        //header includes Content type and api key
        $headers = array(
        'Content-Type:application/json',
        'Authorization:key='.$api_key
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($field_object));
        $result = curl_exec($ch);

        // print_r($result);exit;

        if ($result === FALSE) {
        die('FCM Send Error: ' . curl_error($ch));
        }
        curl_close($ch);
        }



               public function send_notification_chat($message,$token)
        {
        $url = 'https://fcm.googleapis.com/fcm/send';
        $api_key = 'AAAAguQYVVg:APA91bFS3HsQMvB1QMQFvGOGDgqffJ4xYwyR0CsUevBiH-r1h9JqHCR6CwP_2IbncIgpZ1ELK6Ba27zYp3vtkydUXxhBlFRA16e0QxU3NSPHt3OleKkRzoAvakn3f2h28KZkyTkvDaFi';

        $fields = array (
        'registration_ids' => array (
        $token
        ),
        'data' => array (
             'flag' => 'Chat',
        "title" => 'Heelp Application',
        "message" => $message
        )
        );

        $field_object = (object)$fields;
        // print_r(json_encode($field_object));exit;
        //header includes Content type and api key
        $headers = array(
        'Content-Type:application/json',
        'Authorization:key='.$api_key
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($field_object));
        $result = curl_exec($ch);

        // print_r($result);exit;

        if ($result === FALSE) {
        die('FCM Send Error: ' . curl_error($ch));
        }
        curl_close($ch);
        }

        public function getFirebaseToken($tblname,$id)
        {
          $this->ci->db->select('auth_token');
          $this->ci->db->from($tblname);
          $this->ci->db->where('id',$id);
          $data = $this->ci->db->get()->row();
          
          return empty($data->Firebase_token)?false:$data->Firebase_token;
        }


        public function insertMessage($data)
        {
           $this->ci->db->insert('notification',$data);
        }


        public function getAppointmentDetailByTokenNumber($token_number)
        {
            $this->ci->db->select('*');
            $this->ci->db->from('Appointment');
            $this->ci->db->where('appointment_id',$token_number);
            $row = $this->ci->db->get()->row();
            return $row;
        }

}


