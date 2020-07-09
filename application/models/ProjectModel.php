<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectModel extends CI_Model {
    public function __construct(){
     
        
        $this->logged_in_with='';
        $this->response= array();
        $this->message = array();
    }


    public function getAllProjects(){

        $this->db->select("*");
        $this->db->from('project');
       
        $data = $this->db->get()->result();
        //echo "<pre>";print_r($data);die;
        $this->message['data'] = $data;
        
        return empty($this->message)?false:$this->message;
    }

    // public function getAllDoctorsbysearch($content){
    //      $this->db->select("Doctors.*,Hospital.hospital_name");
    //      $this->db->from('Doctors');
    //      $this->db->join('Hospital','Doctors.hospital_id=Hospital.id','left');
        
    //      if(!empty($content)){
    //        $this->db->like('Hospital.hospital_name',$content);
    //        $this->db->or_like('Doctors.first_name',$content); 

    //      }
    //       $data = $this->db->get()->result();

    //       return empty($data)?false:$data;

    // }

   


    // public function getUserImage($doctor_id){
    //    $this->db->select("image");
    //    $this->db->from('Doctors');
    //    $this->db->where('id',$doctor_id);
    //    return $this->db->get()->result();
    // }

  // public function getAppointmentByDoctor($doctor_id,$date='',$attend_status=0){
  //   $this->db->select("*");
  //   $this->db->from('Appointment');
  //   $this->db->where('doctor_id',$doctor_id);
  //   if(!empty($date)){
  //     $date = new DateTime($date);
  //     $curr_date = $date->format('d-m-Y');
  //     $this->db->where('appointment_date', $curr_date);
  //   }

  //   if($attend_status==1){
  //     $this->db->where('status',0);
  //   }if($attend_status == 2){
  //     $this->db->where('status',1);
  //   }


  //   $data = $this->db->get()->result();

  //   return $data;

  // }


    // public function checkPhone($phone_number,$doctor_id){
    //   $this->db->select("*");
    //   $this->db->from('Doctors');
    //   $this->db->where('phone_number',$phone_number);
    //   $this->db->where('id !=', $doctor_id);
    //   $count = $this->db->get()->num_rows();

      

      

    //   if($count > 0){
    //     return true;
    //   }
    //   else {
    //     return false;
    //   }
    // }

  // public function checkEmail($email,$doctor_id){
  //   $this->db->select("*");
  //   $this->db->from('Doctors');
  //   $this->db->where('email',$email);
  //   $this->db->where('id !=', $doctor_id);
  //   $count = $this->db->get()->num_rows();


  //   if($count > 0){
  //     return true;
  //   }
  //   else {
  //     return false;
  //   }
  // }


  //   public function AvailabilityDoctors($available){
  //     $this->db->select("*");
  //     $this->db->from("Doctor_schedule");
  //     $this->db->where('doctor_id',$available['doctor_id']);
  //     $count = $this->db->get()->result();
  //     if(!empty($count)){
  //       $count = count($count);
  //       if($count>0){
  //         $this->db->where('doctor_id',$available['doctor_id']);
  //         $this->db->update('Doctor_schedule',$available);
  //         return true;
  //       }else {
  //         $this->db->insert('Doctor_schedule',$available);
  //         return true;
  //       }
  //     }else{
  //       $this->db->insert('Doctor_schedule',$available);
  //       return true;
  //     }
  //   }


  //   public function doctorPrf($id){
  //     $this->db->select("Doctors.*");
  //       $this->db->from('Doctors');
  //       // $this->db->join('Hospital','Doctors.hospital_id=Hospital.id','left');
  //        $this->db->where('Doctors.id',$id);
  //         $data = $this->db->get()->result();
  //         return empty($data)?false:$data;
  //   }

  //   public function getDoctorSchedule($doctor_id){
  //     $this->db->select("Doctor_schedule.*");
  //     $this->db->from('Doctors');
  //     $this->db->join('Doctor_schedule','Doctor_schedule.doctor_id=Doctors.id');
  //     $this->db->order_by('Doctor_schedule.id','desc');
      
  //     $this->db->where('Doctors.id',$doctor_id);
  //     return $this->db->get()->result();
  //   }



  // public function AddDoctorReview($data){
  //   $where_condition = array('doctor_id'=>$data['doctor_id'],'patient_id'=>$data['patient_id']);
  //   $this->db->select('*');
  //   $this->db->from('Doctor_review');
  //   $this->db->where($where_condition);
  //   $d = $this->db->get()->num_rows();
  //   if(empty($d)){
  //     if($d == 0){
  //       $this->db->insert('Doctor_review',$data);
  //       $this->response['status']=true;
  //       $this->response['message'] ='review addedd';
  //     }

  //   }
  //   else {
  //     $this->db->update('Doctor_review',$data);
  //     $this->db->where($where_condition);
  //     $this->response['status']=true;
  //     $this->response['message'] = 'review updated';
  //   }

  //   return $this->response;
  // }


  //  public function doctorReviewsList($doctor_id){
  //     $this->db->select("*");
  //     $this->db->from('Doctor_review');
  //     $this->db->where(array('doctor_id'=>$doctor_id));
  //     $data = $this->db->get()->result();
  //     return empty($data)?false:$data;
  //  }

  // public function updateDoctorProfile($data,$doctor_id){
  //   $this->db->where('id',$doctor_id);
  //   $this->db->update('Doctors',$data);

  //   return true;
  // }
}