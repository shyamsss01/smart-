<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Dr extends CI_Model {


    function __construct()
    {
         parent::__construct();
    }

    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('admin');
    
        if ($query->num_rows() > 0) {
            return $query->row_array(); // Return user data including the ID
        } else {
            return false;
        }
    }
    

    public function registerd($formarray)
    {
        $this->db->insert('admin', $formarray);
        return $this->db->insert_id(); // Return the inserted ID
    }
    
    public function get_loogedinuser($username)
      {
        $this->db->where('username' , $username);
        $query= $this->db->get('admin');
        return $query->row();
       }

    public function get_loogedinuser_data($hospital)
    {
        $this->db->where('username' , $hospital);
        $query= $this->db->get('admin');
        return $query->row();
    }   

    // ============================================
// MR AJAX FUNCTIONS (Add/Update/Get)
// ============================================

// Insert MR via AJAX
public function insert_mr($data) {
    $this->db->insert('mr_register', $data);
    return $this->db->insert_id();
}

// Update MR via AJAX
public function update_mr($mr_id, $data) {
    $this->db->where('Mr_id', $mr_id);
    return $this->db->update('mr_register', $data);
}

// Get Single MR by ID via AJAX
public function get_mr_by_id($mr_id) {
    $this->db->where('Mr_id', $mr_id);
    $query = $this->db->get('mr_register');
    return $query->row_array();
}

    public function insert($data)
    {
        $this->db->insert('mr_register',$data);
    }

    Public function showdata( $id)
    {
        $this->db->order_by('Mr_id', "desc");
        $this->db->where('user_id' , $id);   
        $query = $this->db->get('mr_register');
       return $query->result_array();
    }
    
    public function showdatatoadmin() 
{
    $this->db->order_by('Mr_id', "desc"); // Order by Mr_id in descending order
    $query = $this->db->get('mr_register'); // Get all rows from mr_register
    return $query->result_array(); // Return results as an array
}


    Public  Function fetch_visitor($id)
    {
       $this->db->where('Mr_id' , $id);
       $visitor= $this->db->get('mr_register')->row_array();
       return  $visitor ; 

    //    $this->db->select('*');
    //    $this->db->from('mr_register');
    //    $this->db->join('mr_image', 'mr_image.mr_mobile=mr_register.mobile');
    //    $this->db->where('mr_register.Mr_id',$id); 
    //    $visitor= $this->db->get()->row_array();
    //    return $visitor;
    
    
    }

      public function fetch_image($mobile)
      {
        $this->db->where('mr_mobile' , $mobile);
        $visitor= $this->db->get('mr_image')->row_array();
        return  $visitor ; 
      }

      
    Public  Function dr_update($id , $data ) 
    {
   $this->db->where('id' ,$id);
   $this->db->update('admin' , $data );
   }




    Public  Function update($id , $data ) 
     {
    $this->db->where('Mr_id' ,$id);
    $this->db->update('mr_register' , $data );
    }

    public function calender_schedule($schedulearray)
    {
        $this->db->insert('dr_calender_schedule',$schedulearray);
		
    }

    public function mr_count_fetch($id)
    {
        $this->db->where('user_id' ,$id);
        $query = $this->db->get("mr_count");
        return $query->row_array();
    }

    public function fetch($id)
    {
       
        $this->db->where('user_id' ,$id);
        $query = $this->db->get("dr_calender_schedule");
        return $query->result_array();
    }

    public function mr_count($count ,$hospital_id )
    {
        //$this->db->insert('mr_count',$count);
        $this->db->where('id',$hospital_id);
        $q = $this->db->get('mr_count');
     
        if ( $q->num_rows() > 0 ) 
        {
           $this->db->where('id',$hospital_id);
           $this->db->update('mr_count',$count);
        } else {
           $this->db->set('id', $hospital_id);
           $this->db->insert('mr_count',$count);
        }
    }
   
    public function delete($schedule_id)
    {
        $this->db->where('schedule_id',$schedule_id);
        $this->db->delete('dr_calender_schedule');
        return false;
    }


public function count_all_visitors($user_id)
{
   // $this->db->where('user_id', $user_id);
    return $this->db->count_all_results('mr_register');
}

public function count_filtered_visitors($user_id, $search, $statusFilter = null, $hospitalFilter = null)
{
    $this->db->from('mr_register');
    $this->db->join('admin', 'mr_register.user_id = admin.id', 'left');  // join admin table
    $this->db->order_by('mr_register.Mr_id', "desc");

    if (!empty($search)) {
        $this->db->group_start();
        $this->db->like('mr_register.first_name', $search);
        $this->db->or_like('mr_register.last_name', $search);
        $this->db->or_like('mr_register.mobile', $search);
        $this->db->or_like('mr_register.company_name', $search);
        $this->db->or_like('mr_register.email', $search);
        $this->db->or_like('admin.hospital_name', $search); // search hospital_name too
        $this->db->group_end();
    }

    if (!empty($statusFilter)) {
        if ($statusFilter === 'Fees Paid') {
            $this->db->where('mr_register.is_active', 1);
        } elseif ($statusFilter === 'Fees Not Paid') {
            $this->db->where('mr_register.is_active', 0);
        }
    }

    if (!empty($hospitalFilter)) {
    $this->db->where('admin.hospital_name', $hospitalFilter);
}


    return $this->db->count_all_results();
}

public function get_visitors_paginated($user_id, $limit, $start, $search, $statusFilter = null, $hospitalFilter = null)
{
    // $this->db->select('mr_register.*, admin.hospital_name');  
    $this->db->select('mr_register.*, admin.hospital_name, 
                  CASE WHEN mr_register.whenpaid IS NOT NULL THEN DATEDIFF(CURDATE(), mr_register.whenpaid) ELSE 0 END as days_since_payment');

    $this->db->from('mr_register');
    $this->db->join('admin', 'mr_register.user_id = admin.id', 'left');
  //  $this->db->order_by('whenpaid', 'DESC'); // latest payment first

   // $this->db->order_by('mr_register.Mr_id', "desc");

    if (!empty($search)) {
        $this->db->group_start();
        $this->db->like('mr_register.first_name', $search);
        $this->db->or_like('mr_register.last_name', $search);
        $this->db->or_like('mr_register.mobile', $search);
        $this->db->or_like('mr_register.company_name', $search);
        $this->db->or_like('mr_register.email', $search);
        $this->db->or_like('admin.hospital_name', $search); // search hospital_name
        $this->db->group_end();
    }

    if (!empty($statusFilter)) {
        if ($statusFilter === 'Fees Paid') {
            $this->db->where('mr_register.is_active', 1);
        } elseif ($statusFilter === 'Fees Not Paid') {
            $this->db->where('mr_register.is_active', 0);
        }

    }

        if (!empty($hospitalFilter)) {
    $this->db->where('admin.hospital_name', $hospitalFilter);
}

//=====indexing sort code ==========
$order_column_index = $this->input->post('order')[0]['column'];
$order_dir = $this->input->post('order')[0]['dir'];

// Map columns index → DB columns
$order_columns = [
    0 => 'mr_register.mr_id',
    1 => 'mr_register.first_name',
    2 => 'mr_register.mobile',
    3 => 'mr_register.company_name',
    4 => 'mr_register.email',
    5 => 'admin.hospital_name',
    6 => 'mr_register.created_at',
    7 => 'mr_register.whenpaid',
    8 => 'days_since_payment',   // Here is Days column
    9 => 'mr_register.is_active'
];

// Protect in case column index is not mapped
$order_by_column = isset($order_columns[$order_column_index]) ? $order_columns[$order_column_index] : 'mr_register.mr_id';

// Apply order by
$this->db->order_by($order_by_column, $order_dir);

//=====indexing sort code end ==========

    $this->db->limit($limit, $start);
    $query = $this->db->get();
    return $query->result_array();
}

}