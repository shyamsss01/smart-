<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mr_model extends CI_Model {

    public function login( $username)
    {
        $this->db->where('mobile',$username);
      
        $query=$this->db->get('mr_register');
     
        if($query->num_rows()>0)
     
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function get_loogedinuser($username)
    {
      $this->db->where('mobile',$username);
      $query= $this->db->get('mr_register');
      return $query->row();
     }

       public function get_hospital($id , $mobile)
       {
        $data = array('mobile' => $mobile ,'user_id'=>$id );
        $this->db->where($data);
        $query= $this->db->get('mr_register');
        return $query->row();
       }

       public function get_email($username)
       {
           
       $multiClause = array('mr.mobile' => $username );

       $this->db->select('mr.email, ad.hospital_name ,mr.is_active' );
       $this->db->from('mr_register mr');
       $this->db->join('admin ad ', 'ad.id=mr.user_id' ,'inner');
       $this->db->where($multiClause ); 
       $projects = $this->db->get();
         return  $projects->result_array();
      
      }


      
     public function fetch_hospital($mobile)
     {
           $condition = array('mr.mobile'=>$mobile ,'mr.is_active'=>1 );
            $this->db->select('*');
            $this->db->from('mr_register mr');
            $this->db->join('admin ad', 'ad.id=mr.user_id');
            $this->db->where($condition); 
            $query= $this->db->get();
            return  $query->result_array();
     }

    public function fetch_hospital_id($hospital_id)
    {
    
      $condition = array('mr.user_id'=>$hospital_id );
      $this->db->from('mr_count mr');
      $this->db->join('admin ad', 'ad.id=mr.user_id');
      $this->db->where($condition); 
      $query= $this->db->get();
      return $query->row();


    }

    public function event_detail($event_id)
    {
      $this->db->where('id',$event_id);
      $query= $this->db->get('events');
      return $query->row();
    }
     public function fetch_counts($id)
     {
         $counts =$this->db->get_where('mr_count',['user_id',$id])->result();
         return  $counts;     
     }

      public function fetch_attendance_table($mobile)
      {
        $this->db->select('*');
        $this->db->from('mr_mark_attendance');
        $this->db->join('admin', 'admin.id=mr_mark_attendance.hospital_id');
        $this->db->where('mr_mark_attendance.mobile',$mobile); 
        $query= $this->db->get();
        return  $query->result_array();
      }
    
      public function insert_image($mobile ,$data)
      
        {
            
         $this->db->where('mr_mobile',$mobile);
         $q = $this->db->get('mr_image');
      
         if ( $q->num_rows() > 0 ) 
         {
            $this->db->where('mr_mobile',$mobile);
            $query= $this->db->update('mr_image',$data);
         } else {
            $this->db->set('mr_mobile', $mobile);
            $query=  $this->db->insert('mr_image',$data);
         }
         return $query;
      
      }
      

      public function get_image($username)
      { $this->db->where('mr_mobile	',$username);
        $query= $this->db->get('mr_image');
        return $query->row();
      }
    

}