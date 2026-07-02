<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller {
 
   public function __construct() {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('Test_model', 'test');
      
 
   }
   public function get_test($test_id)
   {
     if($this->session->userdata('username')!=''){

      $username = $this->session->userdata('username');
      $data['users']  = $this->Admin_model->get_loogedinuser($username);
      $temp=$data['users']->id;

     $project = $this->test->get_test($test_id ,   $temp);
     header('Content-Type: application/json');
     echo json_encode($project); 
     }else{
     redirect(base_url());
     }  
   }





public function store_pricing()
{
  if($this->session->userdata('username')!=''){

    $username = $this->session->userdata('username');
    $data['users']  = $this->Admin_model->get_loogedinuser($username);
    $temp=$data['users']->id;

    $this->form_validation->set_rules('general_fess','General Fess','trim|required');
    
    if (!$this->form_validation->run())
    {
      http_response_code(412);
      header('Content-Type: application/json');
      echo json_encode([
        'status' => 'error',
        'errors' => validation_errors()
      ]);
    } else {
       $this->test->store_pricing($temp);
       header('Content-Type: application/json');
       echo json_encode(['status' => "success"]);
    }
 
    }else{
    redirect(base_url());
    }
}


public function update_fess_test($id)
{
  if($this->session->userdata('username')!=''){

    $username = $this->session->userdata('username');
    $data['users']  = $this->Admin_model->get_loogedinuser($username);
    $temp=$data['users']->id;

    $this->form_validation->set_rules('general_fess','General Fess','trim|required');
    
    if (!$this->form_validation->run())
    {
      http_response_code(412);
      header('Content-Type: application/json');
      echo json_encode([
        'status' => 'error',
        'errors' => validation_errors()
      ]);
    } else {
       $this->test->update_pricing($id);
       header('Content-Type: application/json');
       echo json_encode(['status' => "success"]);
    }
 
    }else{
    redirect(base_url());
    }
}

   public function add_test()
	{
		if($this->session->userdata('username')!=''){

      $this->load->model('project_model');
      $data['categories'] = $this->project_model->get_all();
      $categories = $data['categories'];

      $username=$this->session->userdata('username');
      $data['users']=$this->Admin_model->get_loogedinuser($username);
      $temp =$data['users']->id;

      $this->load->model('Outsource_model');
      $data['labs'] = $this->Outsource_model->get_all($temp);

    

      $this->load->model('unit_model');
      $data['units']=$this->unit_model->units();


      $data['parameters'] =$this->test->get_all();

      $data['sub_parameters'] =$this->test->get_subparameters();

      $parameter_id= $this->input->post('parameter_id');
       // print_r($parameter_id);
       // exit;

    $this->load->view('Test/add_test.php' , $data); 
   }else{
     redirect(base_url());
    }  

	}

  
   public function show_all($parameter_id){
  
      if($this->session->userdata('username')!=''){
         if($this->session->userdata('username')!=''){

          


          
            $this->load->model('test_model');
            $projects = $this->test_model->get_sub_parameter_of_para($parameter_id);
            header('Content-Type: application/json');
            echo json_encode($projects);
            }else{
                redirect(base_url());
            }
    }else{
      redirect('base_url');
    }
    
    }


    public function show_parameter($parameter_id)
    {
      if($this->session->userdata('username')!=''){
         if($this->session->userdata('username')!=''){
            $this->load->model('test_model');
            $projects = $this->test_model->get_parameter($parameter_id);
            header('Content-Type: application/json');
            echo json_encode($projects);
            }else{
                redirect(base_url());
            }
    }else{
      redirect('base_url');
    }

    
    }

    public function add_test_validation()
    {


      if($this->session->userdata('username')!=''){


         $username = $this->session->userdata('username');
         $data['users']  = $this->Admin_model->get_loogedinuser($username);
         $temp=$data['users']->id;

        

         $this->form_validation->set_rules('test_name','Test Name ','trim|required');
         $this->form_validation->set_rules('gender','Gender','trim|required');
         if($temp != 1){
          $this->form_validation->set_rules('general_fess','Amount','trim|required');
         }
         if($this->form_validation->run()==true){

          $cate_id =$this->input->post('categorey');
          $id=  $cate_id;
          $this->load->model("Project_model");
          $cate_name = $this->Project_model->get($id)->name;

          $checkbox_test_name =null;
          $checked= $this->input->post('checkbox_test_name');
          if($checked == "yes") {
            $checkbox_test_name ="yes";
         }else{
          $checkbox_test_name ="no";
         }

         $checkbox_for_underline =null;
         $checked_underline= $this->input->post('checkbox_for_underline');
         if($checked_underline == "yes") {
           $checkbox_for_underline ="yes";
        }else{
         $checkbox_for_underline ="no";
        }

          $data=[
            'categorey_name'      =>   $cate_name,
            'categorey'           =>   $this->input->post('categorey'),
            'test_name'           =>   $this->input->post('test_name'),
            'test_short_name'     =>   $this->input->post('test_short_name'),
            'gender'              =>   $this->input->post('gender'),
            'method'              =>   $this->input->post('method'),
            'instrument'          =>   $this->input->post('instrument'),
            'editable'            =>   $this->input->post('editable'),
            'non_editable'        =>   $this->input->post('non_editable'),
            'checkbox_test_name'  =>  $checkbox_test_name,
            'checkbox_for_underline' => $checkbox_for_underline,
             'created_by'         =>   $temp

         ];
      
        
         $this->load->model('test_model');
         $data['test_id']=$this->test_model->insert_test($data);
         $test_id=$data['test_id'];



           
            if($temp !=1){
              $out_source = $this->input->post('outsource_amount');
            if (($out_source != 0 )) {
               $data1=[
                'test_id'             =>  $test_id,
                'general_fess'        => $this->input->post('general_fess'),
                'outsource_lab'        => $this->input->post('outsource_lab'),
                'outsource_amount'     => $out_source,
                'user_id'        =>$temp,

               ];
             }else{
               $data1=[
                'test_id'             =>  $test_id,
                'general_fess'        => $this->input->post('general_fess'),
                'outsource_lab'        => null,
                'outsource_amount'     => 0,
                'user_id'             =>$temp,
               ];
             }    
             
             $this->load->model('test_model');
             $this->test_model->insert_test_pricing($data1);
            }
             
             $this->session->set_flashdata('test','Test has been created Successfully !');
             $this->session->set_userdata('a',  $test_id);
             $data['response']= 1;
             return $this->load->view('Test/add_test.php' , $data) ;
      }else{
        
         return $this->load->view('Test/add_test.php' , $data) ;
       
   }
         

      }
      else{
         redirect(base_url());
      }
       
    }
         

     
    
    public function edit($test_id)
    {
      if($this->session->userdata('username')!=''){
          
         $username = $this->session->userdata('username');
         $data['users']  = $this->Admin_model->get_loogedinuser($username);
         $temp=$data['users']->id;
      
         $this->load->model('test_model');
         $data['tests'] = $this->test_model->fetch_single_test($test_id);
        //  print_r($data['tests']);
        //  exit;



         $this->load->model('project_model');
         $data['categories'] = $this->project_model->get_all();
         $categories = $data['categories'];


         $this->load->model('Outsource_model');
         $data['labs'] = $this->Outsource_model->get_all($temp);

          // print_r($data['labs']);
          // exit;
         $data['parameters'] =$this->test->get_all();


         $this->load->view('Test/test_edit', $data);
      }else{
         redirect (base_url());
      }
    }


    public function add_test_update($test_id)
    {
      
      if($this->session->userdata('username')!=''){

        $username = $this->session->userdata('username');
        $data['users']  = $this->Admin_model->get_loogedinuser($username);
        $temp=$data['users']->id;

            
        $data['test']=$this->test->fetch_single_test($test_id);

       
        $original_value= $data['test']['test_name'];
       
          $test= $this->input->post('test_name');

         
 
        if($this->input->post('test_name') != $original_value) {
          $this->form_validation->set_rules('test_name', 'Test Name', 'required|trim|required');
        }
     
        if($temp != 1){
          $this->form_validation->set_rules('general_fess','Amount','trim|required');
         }
     
      $this->form_validation->set_rules('gender','Gender','trim|required');
        if($this->form_validation->run()==true){


        

           $cate_id =$this->input->post('categorey');
           $id=  $cate_id;
           $this->load->model("Project_model");
           $cate_name = $this->Project_model->get($id)->name;

               $checkbox_test_name =null;
               $checked= $this->input->post('checkbox_test_name');
               if($checked == "yes") {
                 $checkbox_test_name ="yes";
              }else{
               $checkbox_test_name ="no";
              }

              $checkbox_for_underline =null;
              $checked_underline= $this->input->post('checkbox_for_underline');
              if($checked_underline == "yes") {
                $checkbox_for_underline ="yes";
             }else{
              $checkbox_for_underline ="no";
             }



               $data=[
                       'categorey_name'      =>   $cate_name,
                       'categorey'          =>   $this->input->post('categorey'),
                       'test_name'          =>   $this->input->post('test_name'),
                       'test_short_name'    =>   $this->input->post('test_short_name'),
                       'gender'             =>   $this->input->post('gender'),
                       'method'             =>   $this->input->post('method'),
                       'instrument'         =>   $this->input->post('instrument'),
                       'editable'           =>   $this->input->post('editable'),
                       'non_editable'       =>   $this->input->post('non_editable'),
                       'checkbox_for_underline' => $checkbox_for_underline,
                       'checkbox_test_name'  =>$checkbox_test_name
      
                    ];

                    $this->load->model('test_model');
                    $data['test_id']=$this->test_model->update_test($data ,$test_id );
        




                 if($temp != 1){
                $out_source = $this->input->post('outsource_amount');
                 if(!empty($out_source))
               {
                $updated_outsource_lab      =  $this->input->post('outsource_lab');
                $updated_outsource_amount   =  $this->input->post('outsource_amount');
               }else{
                $updated_outsource_lab      =  Null;
                $updated_outsource_amount   =  0;
               }

                $data1=[
                  'general_fess'       =>   $this->input->post('general_fess'),
                  'outsource_lab'      =>    $updated_outsource_lab,
                  'outsource_amount'   =>    $updated_outsource_amount,
                ]  ;  

             $this->load->model('test_model');
            $this->test_model->update_test_charges($data1 ,$test_id );
          }



            $this->session->set_flashdata('test','Test has been Updated Successfully !');
            redirect(base_url('welcome/test'));
     }else{
       
     redirect(base_url('welcome/test'));
      
  }
        

     }
     else{
        redirect(base_url());
     }
    }


    public function test_parameter($test_id)
    {
      $data['parameters'] =$this->test->get_all();
        // print_r( $data['has_test_id']);
        $data['has_test_id']=$test_id;
       
      $this->load->view('Test/add_test_parameter.php', $data);
    }



    public function add_test_parameter()
    {
      $data['parameters'] =$this->test->get_all();

      $this->load->view('Test/add_test_parameter.php', $data);

    }
    public function testparameter_validation() 
  {
    if($this->session->userdata('username')!=''){

    $username = $this->session->userdata('username');
    $data['users']  = $this->Admin_model->get_loogedinuser($username);
    $temp=$data['users']->id;

    $this->form_validation->set_rules('parameter','parameter','trim|required');
    if (!$this->form_validation->run())
    {
      http_response_code(412);
      header('Content-Type: application/json');
      echo json_encode([
        'status' => 'error',
        'errors' => validation_errors()
      ]);
    } else {
       $this->load->model("test_model");
       $this->test_model->insert_parameter($temp);
       header('Content-Type: application/json');
       echo json_encode(['status' => "success"]);
    }
 
    }else{
    redirect(base_url());
    }
  }
 
    public function show_test_parameters($test_id)
    {
      if($this->session->userdata('username')!=''){
         $this->load->model("test_model");
         $projects = $this->test_model->get_all_test_parameter($test_id);
         header('Content-Type: application/json');
         echo json_encode($projects);
         }else{
             redirect(base_url());
         }
    }
    public function testparameter_edit($test_para_id)
    {
      if($this->session->userdata('username')!=''){
         $this->load->model("test_model");
         $project = $this->test_model->get_test_para_id($test_para_id);
         header('Content-Type: application/json');
         echo json_encode($project); 
         }else{
         redirect(base_url());
         }  
    }
    public function testparameter_update($test_para_id)
    {
      if($this->session->userdata('username')!=''){
         $this->form_validation->set_rules('parameter','parameter','trim|required');
    
     if (!$this->form_validation->run())
     {
       http_response_code(412);
       header('Content-Type: application/json');
       echo json_encode([
         'status' => 'error',
         'errors' => validation_errors()
       ]);
     } else {
        $this->load->model('test_model');
        $this->test_model->testparameter_update($test_para_id);
        header('Content-Type: application/json');
        echo json_encode(['status' => "success"]);
     }
     }else{
     redirect(base_url());
     }  
  
    }
    public function testparameter_delete($test_para_id)
    {
      if($this->session->userdata('username')!=''){

        $username = $this->session->userdata('username');
        $data['users']  = $this->Admin_model->get_loogedinuser($username);
        $temp=$data['users']->id;
  
            $this->load->model('test_model');
            $this->test_model->testparameter_delete($test_para_id , $temp);
            header('Content-Type: application/json');
            echo json_encode(['status' => "success"]);
          }else{
            redirect(base_url());
        }
        
          
    }
    
    public function show_subparameter($parameter)
    {
      if($this->session->userdata('username')!=''){
        $this->load->model('test_model');
        $project = $this->test_model->get_sub_parameter_of_para($parameter);
              header('Content-Type: application/json');
              echo json_encode($project);
        }else{
            redirect(base_url());
        }
    }
}


