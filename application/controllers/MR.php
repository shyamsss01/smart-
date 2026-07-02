<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MR extends CI_Controller
{

  public function index()
  {
    $this->load->view('MR/mr_login');
  }



  public function login_validation()
  {

    $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|min_length[3]');
    if ($this->form_validation->run()) {

      $username = $this->input->post('mobile');


      $this->load->model('MR_model');
      if ($this->MR_model->login($username)) {
        $session_data = array(
          'mobile' => $username
        );

        $this->session->set_userdata($session_data);
        redirect(base_url() . 'MR/mr_email_login');
      } else {
        $this->session->set_flashdata('error', 'Invalid Username and Password');
        // redirect(base_url());
        redirect('MR/index');
      }

    } else {

    }

  }

  public function mr_email_login()
  {
    if ($this->session->userdata('mobile') != '') {
      $username = $this->session->userdata('mobile');
      $this->load->model('MR_model');
      $data['users'] = $this->MR_model->get_email($username);
      // print_r($data['users']);
      // exit;


      $this->load->view('MR/mr_email_login', $data);

    } else {
      redirect(base_url());
    }
  }

  public function mr_otp()
  {
    if ($this->session->userdata('mobile') != '') {

      $username = $this->session->userdata('mobile');
      $data['random'] = rand(100, 1000);

      $this->load->model('MR_model');
      $data['users'] = $this->MR_model->get_loogedinuser($username);

      $mr_name = $data['users']->first_name . " " . $data['users']->last_name;

      $to = $this->input->post('sendEmailAddress');


      $message = '
      
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional
.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
<style type="text/css">
.choose-link, .choose-link:visited, .choose-link:hover  {text-decoration: none; color:#fff;}
@media only screen and (max-width: 10000px) {
.emailer-main{ margin:0 auto;}
}
@media only screen and (max-width: 600px) {
.emailer-main{ width:100% !important; }
.headlogo img{width:100% }
}
</style>
</head>

<body>
<table class="emailer-main" border="0" align="center" cellpadding="0" cellspacing="0" style="border
:solid 1px #ccc; width:600px;">
  <tr>
      <td height="40" align="left" valign="middle" bgcolor="#000" style="border-bottom:solid 1px #ccc;">
          <table border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                      <td align="right" class="headlogo" valign="bottom" style="padding-left:10px;"><img src="https://smartmr.in/assets/img/SmartMR_Logo.png" border="0" />
                      </td>
                  </tr>
          </table>
      </td>
  </tr>
  <tr>
              <td align="left" valign="top" style="padding-left:20px; padding-top:20px; color:#363636; padding-bottom:10px; line-height:12px; font-size:14px; padding-right:20px; font-family:Arial, Helvetica, sans-serif;">Dear ' . $mr_name . '
              </td>
          </tr>
  <tr>
      <td align="left" valign="top" style="padding-left:20px; padding-top:10px; color:#363636; padding-bottom:15px; line-height:12px; font-size:14px; padding-right:20px; font-family:Arial, Helvetica, sans-serif;">
        OTP For login smart MR application is :' . $data['random'] . '
      </td>
  </tr>
  <td style="padding:3px 0 15px 20px;  color:#363636; font-size:14px;  font-family:Arial, Helvetica, sans-serif;">
              Regards
              </td>
  <tr>
          <td align="left" valign="top" style="padding:10px 15px; background:#3B4851; font-family:Arial, Helvetica, sans-serif; color:#fff; font-size:14px;">&copy; ' . date("Y") . ' Smart MR  app All rights reserved</td>
        </tr>
</table>
</body>
</html> ';



      $config = array(

        'protocol' => 'smtp',
        'smtp_host' => 'smtp.gmail.com',
        'smtp_crypto' => 'ssl',
        'smtp_port' => 465,
        'smtp_user' => 'ghanshamchaudhari2004@gmail.com',
        'smtp_pass' => 'syzrtikfgwpgbubb',
        'mailtype' => 'html',
        'charset' => 'utf-8',
        'newline' => "\r\n",
        'crlf' => "\r\n",
        'smtp_timeout' => 30,
        'wordwrap' => TRUE

      );

      $this->load->library('email');
      $this->email->initialize($config);
      $this->email->from('ghanshamchaudhari2004@gmail.com', 'Student Management');
      $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
      $this->email->to($to);
      //$this->email->cc('khairnarprachi@gmail.com');
      //$this->email->bcc('pvn2266@gmail.com');

      $this->email->subject("OTP For SMART MR Login is " . $data['random'] . "");
      $this->email->message($message);



      if (!$this->email->send()) {
        echo $this->email->print_debugger();
        exit;
      } else {
        $this->session->set_flashdata('success', "Mail has been sent  to your register email id (Please check SPAM folder as well)");
        $this->session->set_flashdata('msg_class', 'alert-success');
        $this->load->view('MR/mr_otp', $data);
      }
      //$this->load->view('MR/mr_otp' , $data);
    } else {
      redirect('base_url');
    }
  }




  public function logout()
  {
    $this->load->helper('cookie');
    $this->load->driver('cache');
    $user_id = array(
      'mobile' => 'mobile',
      'value' => '',
      'expire' => '0',
      'domain' => '.localhost',
      'prefix' => ''
    );

    // delete_cookie($username);               
    $this->session->sess_destroy();
    $this->cache->clean();

    ob_clean();
    redirect(base_url('MR/index'));
  }


  public function my_schedule()
  { {
      if ($this->session->userdata('mobile') != '') {

        $mobile = $this->session->userdata('mobile');

        $this->load->model("MR_model");
        $data['register_hospital'] = $this->MR_model->fetch_hospital($mobile);

        $this->load->view('MR/my_schedule', $data);
      } else {
        redirect(base_url());
      }
    }

  }

  public function attendance_table()
  { {
      if ($this->session->userdata('mobile') != '') {

        $mobile = $this->session->userdata('mobile');

        $this->load->model("MR_model");
        $data['attendance_table'] = $this->MR_model->fetch_attendance_table($mobile);


        // print_r($data['attendance_table']);
        // exit;
        $this->load->view('MR/my_attendance', $data);
      } else {
        redirect(base_url());
      }
    }


  }

  public function dashbord()
  {
    if ($this->session->userdata('mobile') != '') {

      $mobile = $this->session->userdata('mobile');

      $data['hospitals'] = $this->Mr_model->fetch_hospital($mobile);



      $this->load->view('MR/my_calender', $data);
    } else {
      redirect(base_url());
    }
  }

  public function get_hospital_active($hospital_id)
  {
    if ($this->session->userdata('mobile') != '') {
      $mobile = $this->session->userdata('mobile');
      $id = $hospital_id;
      $this->load->model('MR_model');
      $hospital = $this->MR_model->get_hospital($id, $mobile);
      header('Conten-Type:application/json');
      echo json_encode($hospital);
    } else {
      redirect('base_url');
    }
  }
  public function count($hospital_id)
  {

    $id = $hospital_id;
    $this->load->model('MR_model');
    $counts = $this->MR_model->fetch_counts($id);
    header('Conten-Type:application/json');
    echo json_encode($counts);

  }

  public function my_profile()
  {
    if ($this->session->userdata('mobile') != '') {

      $username = $this->session->userdata('mobile');

      $this->load->model('MR_model');
      $data['mr_image'] = $this->MR_model->get_image($username);


      $this->load->model('MR_model');
      $data['users'] = $this->MR_model->get_loogedinuser($username);
      $id = $data['users']->mr_id;
      //print_r(  $data['users']);

      $this->load->model('Model_Dr');
      $visitor = $this->Model_Dr->fetch_visitor($id);




      if (empty($visitor)) {
        $this->session->set_flashdata('error', 'Record not found..');
      }
      $data['visitor'] = $visitor;

      $this->load->view('MR/my_profile', $data);

    } else {
      redirect(base_url());
    }

  }

  public function mr_update($id)
  {
    if ($this->session->userdata('mobile') != '') {


      $this->load->library('form_validation');
      $this->form_validation->set_error_delimiters('', '');
      $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
      $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
      $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
      $this->form_validation->set_rules('email', 'Email', 'trim|required');
      $this->form_validation->set_rules('company_name', 'Company_name', 'trim|required');
      if ($this->form_validation->run() == TRUE) {

        $data = [
          'first_name' => $this->input->post('first_name'),
          'last_name' => $this->input->post('last_name'),
          'mobile' => $this->input->post('mobile'),
          'email' => $this->input->post('email'),
          'company_name' => $this->input->post('company_name'),

        ];


        $this->load->model('Model_Dr');
        $this->Model_Dr->update($id, $data);
        $this->session->set_flashdata('mr_update', 'Visitor Updated Successfully !');
        redirect(base_url('MR/my_profile'));


      } else {

        redirect(base_url('MR/my_profile'));
      }
    } else {
      redirect(base_url());
    }
  }

  public function full_calendar()
  {
    if ($this->session->userdata('mobile') != '') {
      $this->load->view('MR/fullcalendar');
    } else {
      redirect(base_url());
    }

  }


  public function store_mark_attendance($hospital_id)
  {
    if ($this->session->userdata('mobile') != '') {

      $mobile = $this->session->userdata('mobile');

      $this->load->model('fullcalendar_model');
      $this->fullcalendar_model->store_mark_attendance($hospital_id, $mobile);
      header('Content-Type: application/json');
      echo json_encode(['status' => "success"]);
    } else {
      redirect(base_url());
    }
  }


  public function load_holiday($hospital_id = null)
  {
    echo "<pre>";
    var_dump($hospital_id);
    exit;
  }

  public function fetch_hospital_id($hospital_id)
  {
    if ($this->session->userdata('mobile') != '') {
      $this->load->model('Mr_model');
      $projects = $this->Mr_model->fetch_hospital_id($hospital_id);
      header('Content-Type: application/json');
      echo json_encode($projects);

    } else {
      redirect(base_url());
    }
  }
  public function load($hospital_id)
  {
    if ($this->session->userdata('mobile') != '') {
      $mobile = $this->session->userdata('mobile');
      $this->load->model('fullcalendar_model');
      $event_data = $this->fullcalendar_model->fetch_all_event($hospital_id, $mobile);
      $this->load->model('fullcalendar_model');
      $hospital_holiday = $this->fullcalendar_model->fetch_hospital_holiday($hospital_id);


      foreach ($hospital_holiday->result_array() as $row) {

        $data[] = array(

          'id' => $row['schedule_id'],
          'title' => 'NOT AVAILABLE',
          'start' => $row['holiday_date'],
          'color' => 'RED',

        );

      }
      ;


      foreach ($event_data->result_array() as $row) {

        $data[] = array(

          'id' => $row['id'],
          'title' => $row['title'],
          'start' => $row['start_event'],
          'color' => '#8AC7DB',
        );

      }

      echo json_encode($data);
    } else {
      redirect(base_url());
    }

  }

  public function mr_schedule_load()
  {
    if ($this->session->userdata('mobile') != '') {
      $mobile = $this->session->userdata('mobile');
      $this->load->model('fullcalendar_model');
      $event_data = $this->fullcalendar_model->mr_schedule_load($mobile);


      foreach ($event_data->result_array() as $row) {

        $hospital_id = $row['hospital_id'];
        $this->load->model('fullcalendar_model');
        $data1['hospital'] = $this->fullcalendar_model->get_hospital($hospital_id);
        $hospital_name = $data1['hospital']->hospital_name;


        $data[] = array(

          'id' => $row['id'],
          'title' => $hospital_name,
          'start' => $row['dateString'],
          'color' => '#8AC7DB',
        );

      }

      echo json_encode($data);
    } else {
      redirect(base_url());
    }

  }

  public function loadhospitaldetails($hospital_id)
  {
    if ($this->session->userdata('mobile') != '') {
      $mobile = $this->session->userdata('mobile');
      $this->load->model('fullcalendar_model');
      $projects = $this->fullcalendar_model->loadhospitaldetails($hospital_id, $mobile);
      header('Content-Type: application/json');
      echo json_encode($projects);

    } else {
      redirect(base_url());
    }
  }




  public function get_hospital($hospital_id)
  {
    if ($this->session->userdata('mobile') != '') {
      $this->load->model('fullcalendar_model');
      $projects = $this->fullcalendar_model->get_hospital($hospital_id);
      header('Content-Type: application/json');
      echo json_encode($projects);

    } else {
      redirect(base_url());
    }
  }


  public function insert()
  {
    if ($this->session->userdata('mobile') != '') {
      $username = $this->session->userdata('mobile');
      $this->load->model('Mr_model');
      $data3['mr_details'] = $this->Mr_model->get_loogedinuser($username);
      $mr_name = $data3['mr_details']->first_name . '' . $data3['mr_details']->last_name;
      $mr_company = $data3['mr_details']->company_name;
      $mr_mobile = $username;

      $data = array(

        'dateString' => $this->input->post('dateString'),
        'hospital_id' => $this->input->post('hospital_id'),
        'mr_mobile' => $mr_mobile,

      );

      $this->load->model('fullcalendar_model');
      $this->fullcalendar_model->insert_event($data);

      $hospital_id = $this->input->post('hospital_id');
      $this->load->model("Mr_model");
      $data1['hospital_details'] = $this->Mr_model->fetch_hospital_id($hospital_id);


      if ($data1['hospital_details']->checkbox_allow == "on") {
        $to = $data1['hospital_details']->username;


        $message = '
      
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional
.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
<style type="text/css">
.choose-link, .choose-link:visited, .choose-link:hover  {text-decoration: none; color:#fff;}
@media only screen and (max-width: 10000px) {
.emailer-main{ margin:0 auto;}
}
@media only screen and (max-width: 600px) {
.emailer-main{ width:100% !important; }
.headlogo img{width:100% }
}
</style>
</head>

<body>
<table class="emailer-main" border="0" align="center" cellpadding="0" cellspacing="0" style="border
:solid 1px #ccc; width:600px;">
  <tr>
      <td height="40" align="left" valign="middle" bgcolor="#000" style="border-bottom:solid 1px #ccc;">
          <table border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>
                      <td align="right" class="headlogo" valign="bottom" style="padding-left:10px;"><img src="https://smartmr.in/assets/img/SmartMR_Logo.png" border="0" />
                      </td>
                  </tr>
          </table>
      </td>
  </tr>
  <tr>
              <td align="left" valign="top" style="padding-left:20px; padding-top:20px; color:#363636; padding-bottom:10px; line-height:12px; font-size:14px; padding-right:20px; font-family:Arial, Helvetica, sans-serif;">Dear ' . $hospital_id . '
              </td>
          </tr>
  <tr>
      <td align="left" valign="top" style="padding-left:20px; padding-top:10px; color:#363636; padding-bottom:15px; line-height:12px; font-size:14px; padding-right:20px; font-family:Arial, Helvetica, sans-serif;">
         MR name: ' . $mr_name . '<br>
         Company name: ' . $mr_company . '<br>
         MR Mobile: ' . $mr_mobile . '<br>
         Appointment date: ' . $this->input->post('dateString') . '<br>
      </td>
  </tr>
  <td style="padding:3px 0 15px 20px;  color:#363636; font-size:14px;  font-family:Arial, Helvetica, sans-serif;">
              Regards  https://smartmr.in/
              </td>
  <tr>
          <td align="left" valign="top" style="padding:10px 15px; background:#3B4851; font-family:Arial, Helvetica, sans-serif; color:#fff; font-size:14px;">&copy; ' . date("Y") . ' Smart MR  app All rights reserved</td>
        </tr>
</table>
</body>
</html> ';



       $config = array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'ssl://smtp.gmail.com',
                    'smtp_port' => 465,
                    'smtp_user' => 'ghanshamchaudhari2004@gmail.com',
                    'smtp_pass' => 'syzrtikfgwpgbubb',
                    'mailtype' => 'html',
                    'charset' => 'utf-8',
                    'wordwrap' => TRUE,
                    'newline' => "\r\n",
                    'crlf' => "\r\n"
                );


        $this->load->library('email');
                $this->email->initialize($config);

        $this->email->from('ghanshamchaudhari2004@gmail.com', 'Smart MR');
        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');
        $this->email->to($to);
        // $this->email->bcc('pvn2266@gmail.com');

        $this->email->subject('Appointment Given');
        $this->email->message($message);



        if (!$this->email->send()) {
          // Generate error
          echo "Email is not sent!!";
        } else {
          $this->session->set_flashdata('success', "Mail has been sent successfully");
          $this->session->set_flashdata('msg_class', 'alert-success');
          return redirect('doctor/forgot_password');
          //return $this->load->view('admin/service_form/view');
        }

      }


    } else {
      redirect(base_url());
    }

  }

  function update()
  {
    if ($this->session->userdata('mobile') != '') {
      if ($this->input->post('id')) {
        $data = array(
          'title' => $this->input->post('title'),
          'start_event' => $this->input->post('start'),
          //'end_event'  => $this->input->post('end')
        );
        $this->load->model('fullcalendar_model');
        $this->fullcalendar_model->update_event($data, $this->input->post('id'));
      }
    } else {
      redirect(base_url());
    }

  }

  function delete()
  {
    if ($this->session->userdata('mobile') != '') {
      $this->load->model('fullcalendar_model');
      if ($this->input->post('id')) {
        $this->fullcalendar_model->delete_event($this->input->post('id'));
      }
    } else {
      redirect(base_url());
    }

  }

  public function users()
  {
    if ($this->session->userdata('mobile') != '') {

      $mobile = $this->session->userdata('mobile');

      $data['hospitals'] = $this->MR_model->fetch_hospital($mobile);

      //  $id= $this->input->post('hospital');
      //  $data['counts']  = $this->MR_model->fetch_counts($id);

      $this->load->view('MR/user_details1.php', $data);
    } else {
      redirect('base_url');
    }
  }

  public function userDetails()
  {

    if ($this->session->userdata('mobile') != '') {

      if (isset($_POST)) {
        $id = $_POST['id'];
      }
      // get data
      $data = $this->MR_model->fetch_counts($id);

      echo json_encode($data);

    } else {
      redirect('base_url');
    }

  }


  public function get_hospital_count()
  {
    if ($this->session->userdata('mobile') != '') {

      $mobile = $this->session->userdata('mobile');
      $hospital = $this->uri->segment(3);
      $start = $this->uri->segment(4);


      //print("SELECT COUNT(*) as selected_date_booking_count ,  (SELECT  mr_count as count_per_day from mr_count WHERE user_id =$hospital ) as per_day_limit, (SELECT  monthly_mr_max_visit_limit from mr_count WHERE user_id =$hospital) as monthly_mr_max_visit_limit , (SELECT count(*) as mr_monthlyvisit  from events evt inner join admin am on am.id = evt.hospital_id WHERE evt.mr_mobile = $mobile and evt.hospital_id =$hospital) as mr_monthlyvisit from events where hospital_id=$hospital and  date(start_event)=$start");
      $this->load->model('fullcalendar_model');
      $projects = $this->fullcalendar_model->get_hospital_count($hospital, $start, $mobile);
      header('Content-Type: application/json');
      echo json_encode($projects);

    } else {
      redirect(base_url());
    }
  }

  public function image_capture()
  {
    if ($this->session->userdata('mobile') != '') {

      $this->load->view('MR/image_capture');
    } else {
      redirect(base_url());
    }
  }

  public function capture()
  {


    if ($this->session->userdata('mobile') != '') {

      $mobile = $this->session->userdata('mobile');

      $created_by = $mobile;


      $filename = 'pic_' . date('YmdHis') . '.jpeg';

      $url = '';
      if (move_uploaded_file($_FILES['webcam']['tmp_name'], 'images/' . $filename)) {
        $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/images/' . $filename;
      }

      $data = [
        'images' => $filename,
        'mr_mobile' => $mobile,

      ];


      $this->load->model('mr_model');
      $this->mr_model->insert_image($mobile, $data);

    } else {
      redirect(base_url());
    }

  }
}