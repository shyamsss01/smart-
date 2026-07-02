<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {
    public function __construct()
   {
      parent :: __construct();
	  $this->load->library('Session/session');
      $this->load->library('form_validation');
      $this->load->model('');
      $this->load->helper('form');
	 
   
   }
	
	
public function pending_reports()
{
	if($this->session->userdata('username')!=''){


           
		$username = $this->session->userdata('username');
		$data['users']  = $this->Admin_model->get_loogedinuser($username);
		$temp=$data['users']->id;

		$this->load->library('curl');

 
	
		$curl = curl_init();
		$headers = array(  
			"Content-Type: application/json",  		
		);  
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://patholinks.com/apis/pendingpayments.php?userid=$temp",
		
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
           
        ));

		
        $data1 = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
	    	$temp = json_decode($data1);
        
        $data['Reports'] = $temp->Data;
        $data['Pending'] = $temp->Total_Pending;
        //   print_r($data['Pending']);
        //     exit;
		  
	     $this->load->view('Reports/pending_payments',$data);
       

	 }
	  else{redirect(base_url());
	  }

	
}

public function daily_reports()
{
    if($this->session->userdata('username')!=''){


           
		$username = $this->session->userdata('username');
		$data['users']  = $this->Admin_model->get_loogedinuser($username);
		$temp=$data['users']->id;

		
		  
	     $this->load->view('Reports/daily_reports');
       

	 }
	  else{redirect(base_url());
	  }
 
}


public function daily_reports_data()
{

    if($this->session->userdata('username')!=''){


           
		$username = $this->session->userdata('username');
		$data['users']  = $this->Admin_model->get_loogedinuser($username);
		$temp=$data['users']->id;

    $start_date = $this->input->post('start_date');
    $end_date = $this->input->post('end_date');



    $this->load->library('curl');

   
 
	
		$curl = curl_init();

		 
		$headers = array(  
			"Content-Type: application/json",  
			
		);  
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://patholinks.com/apis/getincome.php?userid=$temp&start=$start_date&end=$end_date",
		
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
           
        ));

		
        $data1 = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
		   $temp = json_decode($data1);
        $reports = $temp->Data;
        $modes = $temp->Modes;
       
        
        header('Content-Type: application/json');
        echo json_encode( $temp );
       //echo json_encode(  $modes );

    }
    else{redirect(base_url());
    }
}

public function bussiness_report()
{
    if($this->session->userdata('username')!=''){


           
		$username = $this->session->userdata('username');
		$data['users']  = $this->Admin_model->get_loogedinuser($username);
		$temp=$data['users']->id;

		
		$this->load->view('Reports/bussiness_report');
       

	 }
	  else{redirect(base_url());
	  }
 
}
public function bussiness_report_data()
{
    if($this->session->userdata('username')!=''){


           
		$username = $this->session->userdata('username');
		$data['users']  = $this->Admin_model->get_loogedinuser($username);
		$temp=$data['users']->id;

         $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');



        $this->load->library('curl');

   
 
	
		$curl = curl_init();

		 
		$headers = array(  
			"Content-Type: application/json",  
			
		);  
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://patholinks.com/apis/getreferdata.php?userid=$temp&start=$start_date&end=$end_date",
		
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
           
        ));

		
        $data1 = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
		$temp = json_decode($data1);
       
        
       
        
        header('Content-Type: application/json');
        echo json_encode( $temp );
       //echo json_encode(  $modes );

    }
    else{redirect(base_url());
    }
}

public function service_item_consumtion()
{
  if($this->session->userdata('username')!=''){


           
		$username = $this->session->userdata('username');
		$data['users']  = $this->Admin_model->get_loogedinuser($username);
		$temp=$data['users']->id;

		
		  
	     $this->load->view('Reports/service_item_consumtion');
       

	 }
	  else{redirect(base_url());
	  } 
}

public function service_data_items()
{
  if($this->session->userdata('username')!=''){


           
		$username = $this->session->userdata('username');
		$data['users']  = $this->Admin_model->get_loogedinuser($username);
		$temp=$data['users']->id;

         $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');



        $this->load->library('curl');

   
 
	
		$curl = curl_init();

		 
		$headers = array(  
			"Content-Type: application/json",  
			
		);  
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://patholinks.com/apis/labtestreport.php?userid=$temp&start=$start_date&end=$end_date",
		
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
           
        ));

		
        $data1 = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
		    $temp = json_decode($data1);
       
        
       
        
        header('Content-Type: application/json');
        echo json_encode( $temp );
      

    }
    else{redirect(base_url());
    }
}


public function commision_master()
{
  if($this->session->userdata('username')!=''){


           
		$username = $this->session->userdata('username');
		$data['users']  = $this->Admin_model->get_loogedinuser($username);
		$temp=$data['users']->id;

		
		  
	     $this->load->view('Reports/commision_report');
       

	 }
	  else{redirect(base_url());
	  } 
}

public function bussiness_commision_data()
{
  if($this->session->userdata('username')!=''){


           
		$username = $this->session->userdata('username');
		$data['users']  = $this->Admin_model->get_loogedinuser($username);
		$temp=$data['users']->id;

         $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $this->load->library('curl');

   
 
	
		$curl = curl_init();

		 
		$headers = array(  
			"Content-Type: application/json",  
			
		);  
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://patholinks.com/apis/commisionreport.php?userid=$temp&start=$start_date&end=$end_date",
		
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
           
        ));

		
        $data1 = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
		    $temp = json_decode($data1);
       
        
       
        
        header('Content-Type: application/json');
        echo json_encode( $temp );
      

    }
    else{redirect(base_url());
    }
}

public function Recharge_master()
{
  if($this->session->userdata('username')!=''){


           
		$username = $this->session->userdata('username');
		$data['users']  = $this->Admin_model->get_loogedinuser($username);
		$temp=$data['users']->id;

	 $this->load->view('Reports/recharge_master');
       

	 }
	  else{redirect(base_url());
	  } 
}

public function recharge_show_all()
{
  if($this->session->userdata('username')!=''){

  $username = $this->session->userdata('username');
		$data['users']  = $this->Admin_model->get_loogedinuser($username);
		$temp=$data['users']->id;

	$this->load->model("recharge_model");
   $projects = $this->recharge_model->get_all($temp);
   header('Content-Type: application/json');
   echo json_encode($projects);
    }else{redirect(base_url());
      } 
}


public function payment_master()
{
  if($this->session->userdata('username')!=''){

    $username = $this->session->userdata('username');
      $data['users']  = $this->Admin_model->get_loogedinuser($username);
      $temp=$data['users']->id;
  
    $this->load->model("recharge_model");
    $data['payment_master'] = $this->recharge_model->payment_master($temp);
    
    // print_r( $data['payment_master']);
    // exit;
    $this->load->view('Reports/payment_master' , $data);
  

      }else{redirect(base_url());
        } 

}

public function commision_master_individual()
{
  if($this->session->userdata('username')!=''){


           
		$username = $this->session->userdata('username');
		$data['users']  = $this->Admin_model->get_loogedinuser($username);
		$temp=$data['users']->id;

    $this->load->model('Admin_model');
    $data['ref_data']=$this->Admin_model->ref_data($temp);
  
	 $this->load->view('Reports/commision_master_individual' , $data);
       

	 }
	  else{redirect(base_url());
	  } 
}

public function bussiness_commision_data_ref_id($ref_id)
{
  if($this->session->userdata('username')!=''){


           
		$username = $this->session->userdata('username');
		$data['users']  = $this->Admin_model->get_loogedinuser($username);
		$temp=$data['users']->id;

         $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $this->load->library('curl');

   
 
	
		$curl = curl_init();

		 
		$headers = array(  
			"Content-Type: application/json",  
			
		);  
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://patholinks.com/apis/commisionreport_individual.php?userid=$ref_id&start=$start_date&end=$end_date",
		
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
           
        ));

		
        $data1 = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
		    $temp = json_decode($data1);
       
      
        
        header('Content-Type: application/json');
        echo json_encode( $temp );
      

    }
    else{redirect(base_url());
    }
}
}



 