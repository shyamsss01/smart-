<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('Model_Dr');

    }

    public function index()
    {
        $this->load->view('home_page');
    }

    public function dr_login()
    {
        $this->load->view('doctor/login');
    }

    public function sing_up()
    {
        $this->load->view('doctor/sing-up');
    }


    public function sing_up_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('', '');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('hospital_name', 'Hospital Name', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'required|valid_email|is_unique[admin.username]');

        if ($this->form_validation->run() == false) {
            $this->load->view('doctor/sing-up.php');
        } else {
            $formarray = array(
                'address' => $this->input->post('address'),
                'mobile' => $this->input->post('mobile'),
                'hospital_name' => $this->input->post('hospital_name'),
                'password' => $this->input->post('password'),
                'username' => $this->input->post('username')
            );

            $this->load->model('Model_Dr');
            $inserted_id = $this->Model_Dr->registerd($formarray);

            // Generate OTP by adding 2266 to the row ID
            $otp = $inserted_id + 2266;

            $to = $this->input->post('username');

            $message = '
           <!DOCTYPE html>
           <html>
           <head>
               <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
               <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
               <title></title>
           </head>
           <body>
               <table class="emailer-main" border="0" align="center" cellpadding="0" cellspacing="0" style="border:solid 1px #ccc; width:600px;">
                   <tr>
                       <td height="40" align="left" valign="middle" bgcolor="#000" style="border-bottom:solid 1px #ccc;">
                           <img src="https://smartmr.in/assets/img/SmartMR_Logo.png" border="0" />
                       </td>
                   </tr>
                   <tr>
                       <td align="left" valign="top" style="padding:20px; color:#363636; font-size:14px; font-family:Arial, Helvetica, sans-serif;">
                           Dear ' . $this->input->post('hospital_name') . ',
                           <br><br>
                           You have successfully registered. Your account details are as follows:
                           <br><br>
                           <strong>Username:</strong> ' . $this->input->post('username') . '<br>
                           <strong>Password:</strong> ' . $this->input->post('password') . '<br>
                           <strong>Mobile:</strong> ' . $this->input->post('mobile') . '<br>
                           <strong>Doctor/Hospital Name:</strong> ' . $this->input->post('hospital_name') . '<br>
                           <strong>Address:</strong> ' . $this->input->post('address') . '<br><br>
                           <strong>Your OTP:</strong> ' . $otp . '<br>
                       </td>
                   </tr>
                   <tr>
                       <td align="left" valign="top" style="padding:20px; color:#363636; font-size:14px; font-family:Arial, Helvetica, sans-serif;">
                           Regards, <br>
                           eSmart Solutions <br>
                           http://esmartsolution.in/
                       </td>
                   </tr>
                   <tr>
                       <td align="left" valign="top" style="padding:10px; background:#3B4851; color:#fff; font-size:14px; font-family:Arial, Helvetica, sans-serif;">
                           &copy; ' . date("Y") . ' Smart MR app. All rights reserved.
                       </td>
                   </tr>
               </table>
           </body>
           </html>';

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

            $this->email->to($to);
            $this->email->bcc('pvn2266@gmail.com');
            $this->email->subject('Thanks for registering');
            $this->email->message($message);

            if (!$this->email->send()) {
                echo "Email is not sent!!";
            } else {
                $this->session->set_flashdata('success', "Registration Successful! Please Login");
                $this->session->set_flashdata('msg_class', 'alert-success');
                redirect(base_url('doctor/dr_login'));
            }
        }
    }





    public function login_validation()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('otp', 'OTP', 'trim|required|numeric');

        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $entered_otp = $this->input->post('otp');

            $this->load->model('Model_Dr');
            $user_data = $this->Model_Dr->login($username, $password);

            if ($user_data) {
                $generated_otp = $user_data['id'] + 2266; // Generate OTP by adding 2266 to the user's ID

                // Match the entered OTP with the generated OTP
                if ($entered_otp == $generated_otp) {
                    $session_data = array(
                        'username' => $username
                    );
                    $this->session->set_userdata($session_data);
                    redirect(base_url() . 'doctor/today_appointment');
                } else {
                    $this->session->set_flashdata('error', 'Invalid OTP');
                    redirect(base_url('doctor/dr_login'));
                }
            } else {
                $this->session->set_flashdata('error', 'Invalid Username and Password');
                redirect(base_url('doctor/dr_login'));
            }
        } else {
            redirect(base_url('doctor/dr_login'));
        }
    }



    public function logout()
    {
        $this->load->helper('cookie');
        $this->load->driver('cache');
        $user_id = array(
            'name' => 'username',
            'value' => '',
            'expire' => '0',
            'domain' => '.localhost',
            'prefix' => ''
        );

        // delete_cookie($username);               
        $this->session->sess_destroy();
        $this->cache->clean();

        ob_clean();
        redirect(base_url());
    }


    public function dashbord()
    {
        if ($this->session->userdata('username') != '') {

            $this->load->view('doctor/index');
        } else {
            redirect('base_url');
        }
    }

    public function my_profile()
    {
        if ($this->session->userdata('username') != '') {

            $username = $this->session->userdata('username');


            $this->load->model('Model_Dr');
            $data['users'] = $this->Model_Dr->get_loogedinuser($username);



            $this->load->view('doctor/my_profile', $data);

        } else {
            redirect(base_url());
        }

    }


    public function dr_update($id)
    {
        if ($this->session->userdata('username') != '') {



            $username = $this->session->userdata('username');
            $this->load->model("Model_Dr");
            $data['hospital'] = $this->Model_Dr->get_loogedinuser($username);
            $original_value = $data['hospital']->username;


            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('', '');
            $this->form_validation->set_rules('address', 'Address', 'trim|required');
            $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
            $this->form_validation->set_rules('password', 'password', 'trim|required');
            $this->form_validation->set_rules('hospital_name', 'hospital_name', 'trim|required');

            if ($this->input->post('username') != $original_value) {
                $is_unique = '|is_unique[admin.username]';
            } else {
                $is_unique = '';
            }

            $this->form_validation->set_rules('username', 'UserName', 'required|valid_email' . $is_unique);


            //$this->form_validation->set_rules('username','Username','required|valid_email|is_unique[admin.username]');
            if ($this->form_validation->run() == TRUE) {



                $data = [
                    'address' => $this->input->post('address'),
                    'mobile' => $this->input->post('mobile'),
                    'hospital_name' => $this->input->post('hospital_name'),
                    'password' => $this->input->post('password'),
                    'username' => $this->input->post('username'),

                ];


                $this->load->model('Model_Dr');
                $this->Model_Dr->dr_update($id, $data);
                $this->session->set_flashdata('mr_update', 'Profile Updated Successfully !');
                redirect(base_url('doctor/my_profile'));
            } else {
                redirect(base_url('doctor/my_profile'));
            }

        } else {
            redirect(base_url());
        }
    }

    public function forgot_password()
    {

        $this->load->view('doctor/forgot_password.php');
    }

    public function mr_list()
    {
        if ($this->session->userdata('username') != '') {

            $username = $this->session->userdata('username');
            $this->load->model('Model_Dr');
            $data['users'] = $this->Model_Dr->get_loogedinuser($username);
            $temp = $data['users'];
            $id = $temp->id;
            $data['mr_visitors'] = $this->Model_Dr->showdata($id);
            //  print_r($data['mr_visitors']);
            //  exit;
            $this->load->view('doctor/mr_list', $data);
        } else {
            redirect(base_url());
        }
    }

    public function forgot_password_validation()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');

        if ($this->form_validation->run()) {
            $username = $this->input->post('username');

            $this->load->model('Model_Dr');
            $user_data = $this->Model_Dr->get_loogedinuser($username);

            if ($user_data) {
                $hospital_name = $user_data->hospital_name;
                $user_email = $user_data->username;
                $password = $user_data->password;
                $user_id = $user_data->id;

                // Generate OTP by adding 2266 to the user ID
                $otp = $user_id + 2266;

                $to = $user_email;
                $message = '
               <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                   <table class="emailer-main" border="0" align="center" cellpadding="0" cellspacing="0" style="border:solid 1px #ccc; width:600px;">
                       <tr>
                           <td height="40" align="left" valign="middle" bgcolor="#000" style="border-bottom:solid 1px #ccc;">
                               <table border="0" align="left" cellpadding="0" cellspacing="0">
                                   <tr>
                                       <td align="right" class="headlogo" valign="bottom" style="padding-left:10px;"><img src="https://smartmr.in/assets/img/SmartMR_Logo.png" border="0" /></td>
                                   </tr>
                               </table>
                           </td>
                       </tr>
                       <tr>
                           <td align="left" valign="top" style="padding-left:20px; padding-top:20px; color:#363636; padding-bottom:10px; line-height:12px; font-size:14px; padding-right:20px; font-family:Arial, Helvetica, sans-serif;">Dear ' . $hospital_name . '</td>
                       </tr>
                       <tr>
                           <td align="left" valign="top" style="padding-left:20px; padding-top:10px; color:#363636; padding-bottom:15px; line-height:12px; font-size:14px; padding-right:20px; font-family:Arial, Helvetica, sans-serif;">
                               Your password for Smart MR application is: ' . $password . '<br>
                               Your OTP for verification is: ' . $otp . '
                           </td>
                       </tr>
                       <td style="padding:3px 0 15px 20px; color:#363636; font-size:14px; font-family:Arial, Helvetica, sans-serif;">
                           Regards <br>
                           eSmart Solutions <br>
                           http://esmartsolution.in/
                       </td>
                       <tr>
                           <td align="left" valign="top" style="padding:10px 15px; background:#3B4851; font-family:Arial, Helvetica, sans-serif; color:#fff; font-size:14px;">&copy; ' . date("Y") . ' Smart MR app All rights reserved</td>
                       </tr>
                   </table>
               </body>
               </html>';

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

                $this->email->from(
                    'ghanshamchaudhari2004@gmail.com',
                    'Smart MR'
                );


                $this->email->to($to);
                $this->email->bcc('pvn2266@gmail.com');

                $this->email->subject('Forgot Password');
                $this->email->set_mailtype("html");
                $this->email->message($message);

                if (!$this->email->send()) {

                    echo $this->email->print_debugger();

                } else {

                    $this->session->set_flashdata(
                        'success',
                        "Mail has been sent successfully"
                    );

                    $this->session->set_flashdata(
                        'msg_class',
                        'alert-success'
                    );

                    return redirect('doctor/forgot_password');
                }
            } else {
                $this->session->set_flashdata('error', 'Invalid Email');
                redirect(base_url('doctor/forgot_password'));
            }
        } else {
            redirect(base_url('doctor/forgot_password'));
        }
    }




    public function today_appointment()
    {
        if ($this->session->userdata('username') != '') {
            $this->load->view('doctor/today_appointment');
        } else {
            redirect(base_url());
        }
    }

    public function admin_setting()
    {
        if ($this->session->userdata('username') != '') {

            $username = $this->session->userdata('username');
            $this->load->model('Model_Dr');
            $data['users'] = $this->Model_Dr->get_loogedinuser($username);
            $id = $data['users']->id;


            $data['mr_count'] = $this->Model_Dr->mr_count_fetch($id);

            $data['schedules'] = $this->Model_Dr->fetch($id);
            $schedules = $data['schedules'];
            //  print_r( $data['mr_count']);
            //  exit;


            $this->load->view('doctor/admin_setting', $data);
        } else {
            redirect(base_url());
        }
    }

    public function mr_registration()
    {
        if ($this->session->userdata('username') != '') {
            $this->load->view('doctor/mr_registration');
        } else {
            redirect('base_url');
        }
    }

    public function mr_validation()
    {

        if ($this->session->userdata('username') != '') {
            $username = $this->session->userdata('username');
            $this->load->model('Model_Dr');
            $data['users'] = $this->Model_Dr->get_loogedinuser($username);

            $hospital_name = $data['users']->hospital_name;

            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('', '');
            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('company_name', 'Company_name', 'trim|required');

            if ($this->form_validation->run() == false) {
                $this->load->view('doctor/mr_registration');

            } else {

                $data = [
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'mobile' => $this->input->post('mobile'),
                    'email' => $this->input->post('email'),
                    'company_name' => $this->input->post('company_name'),
                    'user_id' => $data['users']->id,

                ];


                $this->load->model('Model_Dr');
                $this->Model_Dr->insert($data);




                $to = $this->input->post('email');


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
                              <td align="left" valign="top" style="padding-left:20px; padding-top:20px; color:#363636; padding-bottom:10px; line-height:12px; font-size:14px; padding-right:20px; font-family:Arial, Helvetica, sans-serif;">Dear ' . $this->input->post('first_name') . ' ' . $this->input->post('last_name') . '<br>
                              Company Name =' . $this->input->post('company_name') . ',<br>
                              Registerd Mobile Number=' . $this->input->post('mobile') . '<br>
                              </td>
                          </tr>
                  <tr>
                      <td align="left" valign="top" style="padding-left:20px; padding-top:10px; color:#363636; padding-bottom:15px; line-height:12px; font-size:14px; padding-right:20px; font-family:Arial, Helvetica, sans-serif;">
                          Your are registered as authenticated MR  for ' . $hospital_name . ' <br>
                          Please Contact to  on +91-9975172266 for your account activation.<br>
                          <br>
                          Note : ' . $hospital_name . ' will accept your appointment only based on this platform to help you get justified opportunity and exposure!!..If you want to make any changes in profile contact to hospital receptionist.
                          <br>
                         
                      </td>
                  </tr>
                  <td style="padding:3px 0 15px 20px;  color:#363636; font-size:14px;  font-family:Arial, Helvetica, sans-serif;">

                  Please login to https://smartmr.in/<br>
            
                  Regards <br>
                  eSmart Solutions <br>
                  http://esmartsolution.in/
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
                    'newline' => "\r\n",
                    'crlf' => "\r\n"
                );

                $this->load->library('email');
                $this->email->initialize($config);



                $this->email->from(
                    'ghanshamchaudhari2004@gmail.com',
                    'Student Management'
                );

                $this->email->to($to);

                $this->email->bcc('pvn2266@gmail.com');

                $this->email->subject('Thanks for registering');

                $this->email->message($message);

                if (!$this->email->send()) {
                    echo $this->email->print_debugger();
                } else {
                    $this->session->set_flashdata('success', "Mail has been sent successfully");
                    $this->session->set_flashdata('msg_class', 'alert-success');
                    redirect('doctor/success');
                }
            }

        } else {
            redirect('base_url');
        }

    }
    public function success()
    {
        if ($this->session->userdata('username') != '') {

            $this->load->view('doctor/success');
        } else {
            redirect(base_url());
        }
    }
    public function mr_visitor_edit($id)
    {
        if ($this->session->userdata('username') != '') {


            $visitor = $this->Model_Dr->fetch_visitor($id);

            if (empty($visitor)) {
                $this->session->set_flashdata('error', 'Record not found..');
            }
            $data['visitor'] = $visitor;
            // print_r($data['visitor']);
            // exit;
            $this->load->view('doctor/mr_edit', $data);
        } else {
            redirect(base_url());
        }
    }


    public function mr_update($id)
    {
        if ($this->session->userdata('username') != '') {
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('', '');
            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('company_name', 'Company_name', 'trim|required');
            if ($this->form_validation->run() == true) {



                $data = [
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'mobile' => $this->input->post('mobile'),
                    'email' => $this->input->post('email'),
                    'company_name' => $this->input->post('company_name'),


                ];

                $this->load->model('Model_Dr');
                $this->Model_Dr->update($id, $data);
                $this->session->set_flashdata('mr_update', 'MR Updated Successfully !');
                redirect(base_url('doctor/mr_list'));


            } else {

                redirect(base_url('doctor/mr_edit'));
            }
        } else {
            redirect(base_url());
        }
    }

    // ============================================
// AJAX FUNCTIONS FOR MR (ADD/EDIT/GET) - FIXED
// ============================================

    public function ajax_add_mr()
    {
        header('Content-Type: application/json');

        $mobile = $this->input->post('mobile');
        $email = $this->input->post('email');
        $username = $this->session->userdata('username');
        $user_data = $this->Model_Dr->get_loogedinuser($username);
        $user_id = $user_data->id;

        // 🔥 CHECK: Kya ye mobile already exist karta hai is hospital ke liye?
        $this->db->where('mobile', $mobile);
        $this->db->where('user_id', $user_id);
        $existing_mobile = $this->db->get('mr_register')->row();

        if ($existing_mobile) {
            echo json_encode([
                'status' => 'error',
                'message' => 'This Mobile Number already exists for your hospital!'
            ]);
            return;
        }

        // 🔥 CHECK: Kya ye email already exist karta hai is hospital ke liye?
        $this->db->where('email', $email);
        $this->db->where('user_id', $user_id);
        $existing_email = $this->db->get('mr_register')->row();

        if ($existing_email) {
            echo json_encode([
                'status' => 'error',
                'message' => 'This Email already exists for your hospital!'
            ]);
            return;
        }

        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'mobile' => $mobile,
            'company_name' => $this->input->post('company_name'),
            'email' => $email,
            'user_id' => $user_id,
            'is_active' => 0
        );

        $insert_id = $this->Model_Dr->insert_mr($data);

        if ($insert_id) {
            $data['mr_id'] = $insert_id;

            echo json_encode(['status' => 'success', 'data' => $data]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to add MR']);
        }
    }
    public function ajax_update_mr()
    {
        header('Content-Type: application/json');

        $mr_id = $this->input->post('mr_id');

        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'mobile' => $this->input->post('mobile'),
            'company_name' => $this->input->post('company_name'),
            'email' => $this->input->post('email')
        );

        // 🔥 FIX: Model_Dr use kar
        $updated = $this->Model_Dr->update_mr($mr_id, $data);  // ✅ Model_Dr

        if ($updated) {
            $data['mr_id'] = $mr_id;
            echo json_encode(['status' => 'success', 'data' => $data]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update MR']);
        }
    }

    public function ajax_get_mr()
    {
        header('Content-Type: application/json');

        $mr_id = $this->input->post('mr_id');

        // 🔥 FIX: Model_Dr use kar
        $mr_data = $this->Model_Dr->get_mr_by_id($mr_id);  // ✅ Model_Dr

        if ($mr_data) {
            echo json_encode(['status' => 'success', 'data' => $mr_data]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'MR not found']);
        }
    }


    public function Calender_Schedule()
    {
        if ($this->session->userdata('username') != '') {


            $username = $this->session->userdata('username');
            $this->load->model('Model_Dr');
            $data['users'] = $this->Model_Dr->get_loogedinuser($username);
            $id = $data['users']->id;


            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('', '');
            $this->form_validation->set_rules('reason_of_holiday', 'reason_of_holiday', 'trim|required');
            $this->form_validation->set_rules('from_date', 'from_date', 'trim|required');
            $this->form_validation->set_rules('to_date', 'to_date', 'trim|required');

            if ($this->form_validation->run() == false) {


                $this->load->view('doctor/admin_setting');
            } else {
                $begin = new DateTime($this->input->post('from_date'));
                $end = new DateTime($this->input->post('to_date'));

                for ($i = $begin; $i <= $end; $i->modify('+1 day')) {
                    $holidayDate = $i->format("y-m-d");

                    $schedulearray = array(
                        'reason_of_holiday' => $this->input->post('reason_of_holiday'),
                        'holidayDate' => $holidayDate,
                        'user_id' => $data['users']->id,
                    );


                    $this->load->model('Model_Dr');
                    $this->Model_Dr->calender_schedule($schedulearray);
                }



                $this->session->set_flashdata('schedule', 'Record Added Successfully!');
                redirect(base_url('doctor/admin_setting'));


            }


        } else {
            redirect(base_url());
        }
    }
 
    public function Mr_count()
    {
        if ($this->session->userdata('username') != '') {

            $username = $this->session->userdata('username');
            $this->load->model('Model_Dr');
            $data['hospital'] = $this->Model_Dr->get_loogedinuser($username);
            $hospital_id = $data['hospital']->id;



            $this->load->model('Model_Dr');
            $data['users'] = $this->Model_Dr->get_loogedinuser($username);
            $id = $data['users']->id;

            if (!empty($this->input->post('checkbox_allow'))) {
                $checkbox = $this->input->post('checkbox_allow');
            } else {
                $checkbox = 'off';
            }


            $count = array(

                'per_day_mr_count ' => $this->input->post('per_day_mr_count'),
                'monthly_mr_max_visit_limit' => $this->input->post('monthly_mr_max_visit_limit'),
                'remarks' => $this->input->post('remarks'),
                'checkbox_allow' => $checkbox,
                'user_id' => $data['users']->id,
            );


            $this->load->model('Model_Dr');
            $this->Model_Dr->Mr_count($count, $hospital_id);
            redirect(base_url('doctor/admin_setting'));

        } else {
            redirect(base_url());
        }

    }

    public function delete($schedule_id)
    {
        if ($this->session->userdata('username') != '') {


            $this->load->model('Model_Dr');
            $this->Model_Dr->delete($schedule_id);
            $this->session->set_flashdata('deleted', 'Record deleted successfully!');
            redirect(base_url('doctor/admin_setting'));

        } else {
            redirect(base_url());
        }
    }


    public function mr_schedule_load()
    {
        if ($this->session->userdata('username') != '') {

            $username = $this->session->userdata('username');
            $this->load->model('Model_Dr');
            $data1['users'] = $this->Model_Dr->get_loogedinuser($username);
            $id = $data1['users']->id;

            $this->load->model('fullcalendar_model');
            $event_data = $this->fullcalendar_model->mr_schedule_doctorwise_data($id);


            foreach ($event_data->result_array() as $row) {



                $data[] = array(

                    'id' => $row['id'],
                    'title' => $row['mrName'],
                    'start' => $row['dateString'],
                    'color' => '#8AC7DB',
                );

            }

            echo json_encode($data);
        } else {
            redirect(base_url());
        }

    }
    function event_delete()
    {
        if ($this->session->userdata('username') != '') {
            $this->load->model('fullcalendar_model');
            if ($this->input->post('id')) {

                $event_id = $this->input->post('id');
                $this->load->model('mr_model');
                $data['events_details'] = $this->mr_model->event_detail($event_id);
                $mr_mobile = $data['events_details']->mr_mobile;
                $cancel_date = $data['events_details']->dateString;
                $date = date_format($cancel_date, "d/m/Y");

                $this->load->model('Mr_model');
                $username = $mr_mobile;
                $data3['mr_details'] = $this->Mr_model->get_loogedinuser($username);
                $mr_name = $data3['mr_details']->first_name . ' ' . $data3['mr_details']->last_name;
                $mr_company = $data3['mr_details']->company_name;
                $mr_email = $data3['mr_details']->email;

                $hospital = $this->session->userdata('username');
                $this->load->model('Model_Dr');
                $data['hospital'] = $this->Model_Dr->get_loogedinuser_data($hospital);
                $hospital_id = $data['hospital']->id;
                $this->load->model('Model_Dr');
                $data1['hospital_details'] = $this->mr_model->fetch_hospital_id($hospital_id);
                $hospital_email = $data1['hospital_details']->username;
                $hospital_name = $data1['hospital_details']->hospital_name;
                $this->fullcalendar_model->delete_event($this->input->post('id')); {
                    $to = $mr_email;


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
          your appointment at  ' . $hospital_name . ' has been cancelled for date ' . $cancel_date . '. Please coordinate with reception/admin for re-visit or book again later.
          
        </td>
     </tr>
     <td style="padding:3px 0 15px 20px;  color:#363636; font-size:14px;  font-family:Arial, Helvetica, sans-serif;">
                
     Regards <br>
     eSmart Solutions <br>
     http://esmartsolution.in/
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

                    $this->email->to($to);
                    $this->email->cc($hospital_email);
                    //$this->email->bcc('pvn2266@gmail.com');

                    $this->email->subject('Appointment Canceled');
                    $this->email->message($message);



                    if (!$this->email->send()) {
                        // Generate error
                        echo "Email is not sent!!";
                    } else {
                        $this->session->set_flashdata('success', "Mail has been sent successfully");
                        $this->session->set_flashdata('msg_class', 'alert-success');

                    }


                }
            } else {
                redirect(base_url());
            }

        }




    }
    public function ckeditor()
    {
        $this->load->view('doctor/ckeditor');
    }

}