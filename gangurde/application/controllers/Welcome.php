<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

  public function __construct()
  {
     parent :: __construct();
     $this->load->library('Session/session');
     $this->load->library('form_validation');
     $this->load->model('');
     $this->load->helper('form');
  
  
  }
	public function index()
	{
		$this->load->view('login.php');
	}

   public function login_validation()
   {
	

		$username=$this->input->post('username');
    $password=$this->input->post('password');

	
         if($username == "prasad" &&  $password=="prasad" )
         {
           $session_data = array(
               'username' => $username
           );

           $this->session->set_userdata($session_data);
           redirect(base_url('welcome/show_graph'));
         }
         else{
           $this->session->set_flashdata('error','Invalid Username and Password');
           $this->load->view('login.php');
         
         }

}

public function  logout()
{
  $this->load->helper('cookie');
       $this->load->driver('cache');   
       $user_id = array(
           'name'   => 'username',
           'value'  => '',
           'expire' => '0',
           'domain' => 'localhost',
           'prefix' => ''
       );

       delete_cookie($username);               
       $this->session->sess_destroy();
       $this->cache->clean();

       ob_clean();
       redirect(base_url());      
}
public function show_graph()
{
  if($this->session->userdata('username')!=''){

    $this->load->view('show_graph.php');
  }else{
    redirect(base_url());
  }
}

public function bussiness_report_data()
{
  if($this->session->userdata('username')!=''){


     $temp = 1;
    $start_date = $this->input->post('start_date');
    $end_date = $this->input->post('end_date');

    $this->load->library('curl');


    $curl = curl_init();

		 $headers = array(  
			"Content-Type: application/json",  
			
		);  
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://esmartsolution.in/gangurdehospital/employee/admindashboard.php?userid=1&start_date=$start_date&end_date=$end_date",
		

          

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
        // $reports = $temp->Data;
        // $modes = $temp->Modes;
       
        
        header('Content-Type: application/json');
        echo json_encode( $temp );
       //echo json_encode(  $modes );


   

  }else{

  }
}
}
