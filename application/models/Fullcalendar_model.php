<?php

class Fullcalendar_model extends CI_Model
{
     public  function fetch_all_event($hospital_id , $mobile){

  $array = array('hospital_id' =>  $hospital_id, 'mr_mobile' => $mobile);
  $this->db->where($array);
  return $this->db->get('events');
 }

public function mr_schedule_doctorwise_data($id)
{
  $year = date("Y"); 
  $sql= "SELECT e1.id, e1.dateString, CONCAT(mr.first_name, ' ', mr.last_name, '(', mr.company_name, ')') as mrName FROM events e1 INNER JOIN  mr_register mr on mr.mobile=e1.mr_mobile WHERE e1.hospital_id = $id and mr.user_id = $id AND mr.is_active = 1 and YEAR(e1.dateString) = '$year'";
  $query = $this->db->query($sql);
  
  return $query;
  
}

public function  mr_schedule_load( $mobile)
{
  $array = array('mr_mobile' => $mobile);
  $this->db->where($array);
  return $this->db->get('events');
}

 public function get_hospital($hospital_id )
 {
      
     $query= $this->db->get_where('admin', ['id' => $hospital_id ])->row();
     return $query;
 }

  public function get_hospital_count($hospital , $start , $mobile)  
  {
    $array = explode("-", $start);
    date_default_timezone_set("Asia/Kolkata");
    $currentDate=date('Y-m-d'); //Returns IST
    // $currentMonthStartDate=date('Y-m-01'); //Returns IST	
    // $currentMonthEndDate  = date('Y-m-t');

    $currentMonthStartDate= $array[0]."-".$array[1]."-01";   //date('Y-m-01'); //Returns IST	
    $currentMonthEndDate  =   $array[0]."-".$array[1]."-31"; // date('Y-m-t');
    

    $sql="SELECT COUNT(*) as dayCount , (SELECT  per_day_mr_count  from mr_count WHERE user_id =$hospital ) as per_day_limit, (SELECT  monthly_mr_max_visit_limit from mr_count WHERE user_id =$hospital) as monthly_mr_max_visit_limit , (SELECT count(*)  from events evt inner join admin am on am.id = evt.hospital_id WHERE evt.mr_mobile = '$mobile' and evt.hospital_id =$hospital and  evt.datestring between '$currentMonthStartDate' and '$currentMonthEndDate') as mr_monthlyvisit from events e1 where e1.hospital_id=$hospital and  date(e1.dateString)='$start'";
    $query = $this->db->query($sql);
    
    return $query->result_array();
      
  }

  function loadhospitaldetails($hospital_id ,  $mobile)
  {
   
    $array = array('hospital_id' =>  $hospital_id, 'mr_mobile' => $mobile);
   $this->db->where($array);
   $query= $this->db->get('events')->result_array();
    return $query;
  }

function fetch_hospital_holiday($hospital_id)
{
  $query= $this->db->get_where('dr_calender_schedule', ['user_id' => $hospital_id ]);
  return $query;
}

function get_holiday($hospital_id)
{
  $query= $this->db->get_where('dr_calender_schedule', ['user_id' => $hospital_id ])->result_array();
  return $query;
}

 function insert_event($data)
 {
    $query = $this->db->insert('events', $data);
   return $query;
 }

 function update_event($data, $id)
 {
  $this->db->where('id', $id);

  $this->db->update('events', $data);
 }

 function delete_event($id)
 {
  $this->db->where('id', $id);
  $this->db->delete('events');
 }

 function store_mark_attendance($hospital_id , $mobile)
 {
  $data = array(
     'attendance_date'  => $this->input->post('attendance_date'),
     'attended'         => "yes",
     'hospital_id'       => $hospital_id,
     'mobile'           => $mobile
 );

 $result = $this->db->insert('mr_mark_attendance', $data);
 return $result;

 }
}

?>
