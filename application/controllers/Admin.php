<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
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

    public function mr_list()
    {
        // Check if the user is logged in
        if ($this->session->userdata('username') != '') {

            // Retrieve logged-in user's data
            $username = $this->session->userdata('username');
            $this->load->model('Model_Dr');
            $data['users'] = $this->Model_Dr->get_loogedinuser($username);

            // Ensure $data['users'] is not null
            if ($data['users']) {
                $temp = $data['users'];
                $id = $temp->id;

                // Get visitors data for the logged-in user
                $data['mr_visitors'] = $this->Model_Dr->showdatatoadmin($id);

                // print_r($data['mr_visitors']);
                // exit;
                // Load the view with the retrieved data
                $this->load->view('Admin/mr_list', $data);
            } else {
                // If user data is not found, redirect to the login page
                $this->session->set_flashdata('error', 'Invalid session. Please log in again.');
                redirect('http://localhost/smartmr1/');
            }
        } else {
            // Redirect to the login page if the user is not logged in
            redirect('http://localhost/smartmr1/');
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
            $this->load->view('Admin/mr_edit', $data);
        } else {
            redirect(base_url());
        }
    }



    public function mr_update($id)
    {
        if ($this->session->userdata('username') != '') {
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('', '');
            $this->form_validation->set_rules('whenpaid', 'whenpaid', 'required');
            $this->form_validation->set_rules('is_active', 'Is Active', 'required');

            if ($this->form_validation->run() == true) {

                $is_active = (int) $this->input->post('is_active');
                $whenpaid = $this->input->post('whenpaid');

                // Set whenpaid to NULL if updating to inactive
                if ($is_active === 0) {
                    $whenpaid = NULL;
                }

                $data = [
                    'whenpaid' => $whenpaid,
                    'is_active' => $is_active,
                ];


                $this->load->model('Model_Dr');
                $this->Model_Dr->update($id, $data);

                // Get user details
                $user = $this->Model_Dr->fetch_visitor($id);
                if (!$user) {
                    $this->session->set_flashdata('error', 'User not found.');
                    redirect(base_url('Admin/mr_list'));
                    return;
                }

                $email = $user['email'];
                $is_active = $this->input->post('is_active');

                // Define email content
                //        if ($is_active == '1') {
                //            $subject = 'SMART MR Account Activated - Payment Successful';
                //            $message = '
                //            <html>
                //            <head><title>Payment Successful</title></head>
                //            <body>
                //               <p>Dear ' . $user['first_name'] . ' ' . $user['last_name'] . ',</p>

                //                <p>Your payment has been received successfully. Your account is now active.</p>
                //               <p>Regards,<br>Smart MR</p>
                //            </body>
                //            </html>';
                //        } else {
                //            $subject = 'SMART MR Account Disabled';
                //            $message = '
                //            <html>
                //            <head><title>Account is Locked</title></head>
                //            <body>
                //               <p>Dear ' . $user['first_name'] . ' ' . $user['last_name'] . ',</p>

                //                <p>Due to non-payment of platform fees, your account is disabled. Kindly pay the fees on UPI 9975172266@hdfcbank to re-active the account.</p>
                //                <p>Regards,<br>Smart MR</p>
                //            </body>
                //            </html>';
                //        }


                if ($is_active == '1') {
                    $subject = 'SMART MR Account Activated - Payment Successful';
                    $message = '
                <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">
                <head>
                    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                    <title>Payment Successful</title>
                    <style type="text/css">
                    .choose-link, .choose-link:visited, .choose-link:hover {text-decoration: none; color:#fff;}
                    @media only screen and (max-width: 600px) {
                        .emailer-main { width: 100% !important; }
                        .headlogo img { width: 100%; }
                    }
                    </style>
                </head>
                <body>
                    <table class="emailer-main" border="0" align="center" cellpadding="0" cellspacing="0" style="border:solid 1px #ccc; width:600px;">
                        <tr>
                            <td height="40" align="left" valign="middle" bgcolor="#000" style="border-bottom:solid 1px #ccc;">
                                <table border="0" align="left" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td align="right" class="headlogo" valign="bottom" style="padding-left:10px;">
                                            <img src="https://smartmr.in/assets/img/SmartMR_Logo.png" border="0" />
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
    <td align="left" valign="top" style="padding:10px 20px; color:#363636; font-size:14px; font-family:Arial, Helvetica, sans-serif;">
        <p>Dear ' . $user['first_name'] . ' ' . $user['last_name'] . ',</p>
    </td>
</tr>
<tr>
    <td align="left" valign="top" style="padding:10px 20px; color:#363636; font-size:14px; font-family:Arial, Helvetica, sans-serif;">
        Your payment has been received successfully. Your account is now active.
    </td>
</tr><br> <br> 

                        <tr>
                            <td align="left" valign="top" style="padding:10px 15px; background:#3B4851; font-family:Arial, Helvetica, sans-serif; color:#fff; font-size:14px;">
                                Regards, Smart MR
                            </td>
                        </tr>
                        
                    </table>
                </body>
                </html>';
                } else {
                    $subject = 'SMART MR Account Disabled';
                    $message = '
                <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">
                <head>
                    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                    <title>Payment Not Received</title>
                    <style type="text/css">
                    .choose-link, .choose-link:visited, .choose-link:hover {text-decoration: none; color:#fff;}
                    @media only screen and (max-width: 600px) {
                        .emailer-main { width: 100% !important; }
                        .headlogo img { width: 100%; }
                    }
                    </style>
                </head>
                <body>
                    <table class="emailer-main" border="0" align="center" cellpadding="0" cellspacing="0" style="border:solid 1px #ccc; width:600px;">
                        <tr>
                            <td height="40" align="left" valign="middle" bgcolor="#000" style="border-bottom:solid 1px #ccc;">
                                <table border="0" align="left" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td align="right" class="headlogo" valign="bottom" style="padding-left:10px;">
                                            <img src="https://smartmr.in/assets/img/SmartMR_Logo.png" border="0" />
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
    <td align="left" valign="top" style="padding:10px 20px; color:#363636; font-size:14px; font-family:Arial, Helvetica, sans-serif;">
        <p>Dear ' . $user['first_name'] . ' ' . $user['last_name'] . ',</p>
    </td>
</tr>
<tr>
    <td align="left" valign="top" style="padding:10px 20px; color:#363636; font-size:14px; font-family:Arial, Helvetica, sans-serif;">
    Due to non-payment of platform fees, your account is disabled. Kindly pay the fees on 
    <a href="upi://pay?pa=9975172266@hdfcbank&pn=SmartMR&mc=0000&tid=123456&url=https://smartmr.in" 
       style="font-weight: bold; color: #1e90ff; text-decoration: none;" target="_blank">
       9975172266@hdfcbank
    </a> 
    to re-activate the account.
</td>

</tr>
<br><br>
                        
                        <tr>
                            <td align="left" valign="top" style="padding:10px 15px; background:#3B4851; font-family:Arial, Helvetica, sans-serif; color:#fff; font-size:14px;">
                                Regards, Smart MR
                            </td>
                        </tr>
                    </table>
                </body>
                </html>';
                }

                // Email configuration
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

                $this->email->clear();  // Clear any previous headers or content

                $this->email->from('ghanshamchaudhari2004@gmail.com', 'Smart MR');
                $this->email->to($email);
                $this->email->subject($subject);
                $this->email->message($message);

                // Send the email
                if (!$this->email->send()) {
                    $this->session->set_flashdata('error', 'MR updated, but email sending failed.');
                } else {
                    $this->session->set_flashdata('success', 'MR updated successfully and email sent.');
                }

                redirect(base_url('Admin/mr_list'));
            } else {
                $this->session->set_flashdata('error', 'Validation failed. Please check your inputs.');
                redirect(base_url('Admin/mr_edit/' . $id));
            }
        } else {
            redirect(base_url());
        }
    }



    // public function mr_update($id)
// {
//     if ($this->session->userdata('username') != '') {
//         $this->load->library('form_validation');
//         $this->form_validation->set_error_delimiters('', '');
//         $this->form_validation->set_rules('created_at', 'Created At', 'required');
//         $this->form_validation->set_rules('is_active', 'Is Active', 'required');

    //         if ($this->form_validation->run() == true) {
//             $data = [
//                 'created_at' => $this->input->post('created_at'),
//                 'is_active'  => $this->input->post('is_active'),
//             ];

    //             $this->load->model('Model_Dr');
//             $this->Model_Dr->update($id, $data);
//             $this->session->set_flashdata('mr_update', 'MR Updated Successfully!');
//             redirect(base_url('Admin/mr_list'));
//         } else {
//             $this->session->set_flashdata('error', 'Validation failed.');
//             redirect(base_url('Admin/mr_edit/' . $id));
//         }
//     } else {
//         redirect(base_url());
//     }
// }

    public function get_mr_visitors_ajax()
    {
        $this->load->model('Model_Dr');

        // Parameters sent by DataTables
        $draw = intval($this->input->post('draw'));
        $start = intval($this->input->post('start'));
        $length = intval($this->input->post('length'));
        $search = $this->input->post('search')['value'];
        $statusFilter = $this->input->post('statusFilter');  // Get status filter value
        $hospitalFilter = $this->input->post('hospitalFilter');

        // User id (assumed logged in)
        $username = $this->session->userdata('username');
        $user = $this->Model_Dr->get_loogedinuser($username);

        $user_id = $user ? $user->id : 0;

        // Minimum search length condition
        if (strlen($search) > 0 && strlen($search) < 3) {
            // Return empty data if search term less than 3 chars
            echo json_encode([
                "draw" => $draw,
                "recordsTotal" => 0,
                "recordsFiltered" => 0,
                "data" => []
            ]);
            return;
        }

        // Get total records count (without search)
        $totalRecords = $this->Model_Dr->count_all_visitors($user_id);

        // Get filtered records count and data
        $visitors = $this->Model_Dr->get_visitors_paginated($user_id, $length, $start, $search, $statusFilter, $hospitalFilter);
        $totalFiltered = $this->Model_Dr->count_filtered_visitors($user_id, $search, $statusFilter, $hospitalFilter);

        $data = [];
        $sr_no = $start + 1;

        foreach ($visitors as $visitor) {
            $name = $visitor['first_name'] . ' ' . $visitor['last_name'];
            $mr_id = $visitor['mr_id'];
            $status = $visitor['is_active'] == 1
                ? '<span class="badge bg-success" style="font-size: 12px;"><i class="bi bi-check-circle"></i>Fees Paid</span>'
                : '<span class="badge bg-danger" style="font-size: 12px;"><i class="bi bi-x-circle"></i>Fees Not Paid</span>';

            $payment_date = !empty($visitor['whenpaid']) ? date("d/m/Y", strtotime($visitor['whenpaid'])) : 'N/A';

            $action = '
<div class="dropdown">
  <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
          data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>

  <ul class="dropdown-menu">

    <li>
      <a class="dropdown-item" href="' . base_url('Admin/mr_visitor_edit/' . $visitor['mr_id']) . '">
        <i class="ti ti-edit"></i> Edit
      </a>
    </li>

    <li>
      <a class="dropdown-item"
         href="javascript:void(0);"
         data-mr_id="' . $visitor['mr_id'] . '"
         data-company_name="' . htmlspecialchars($visitor['company_name'], ENT_QUOTES) . '"
         data-whenpaid="' . htmlspecialchars($visitor['whenpaid'], ENT_QUOTES) . '"
         data-first_name="' . htmlspecialchars($visitor['first_name'], ENT_QUOTES) . '"
         data-last_name="' . htmlspecialchars($visitor['last_name'], ENT_QUOTES) . '"
         data-email="' . htmlspecialchars($visitor['email'], ENT_QUOTES) . '"
         onclick="send_email(this)">
        <i class="ti ti-mail-opened"></i> Send Email
      </a>
    </li>

    <li>
      <a class="dropdown-item"
         href="javascript:void(0);"
         data-mr_id="' . $visitor['mr_id'] . '"
         data-company_name="' . htmlspecialchars($visitor['company_name'], ENT_QUOTES) . '"
         data-whenpaid="' . htmlspecialchars($visitor['whenpaid'], ENT_QUOTES) . '"
         data-first_name="' . htmlspecialchars($visitor['first_name'], ENT_QUOTES) . '"
         data-last_name="' . htmlspecialchars($visitor['last_name'], ENT_QUOTES) . '"
         data-email="' . htmlspecialchars($visitor['email'], ENT_QUOTES) . '"
         onclick="send_receipt(this)">
        <i class="ti ti-clipboard"></i> Send Receipt
      </a>
    </li>

  </ul>
</div>';


            $registration_date = !empty($visitor['created_at'])
                ? date("d/m/Y", strtotime($visitor['created_at']))
                : 'N/A';

            // Calculate days difference
            // if (!empty($visitor['whenpaid'])) {
            //     $today = new DateTime();  // today
            //     $whenPaid = new DateTime($visitor['whenpaid']);
            //     $interval = $today->diff($whenPaid);
            //     $days_since_payment = $interval->days;
            // } else {
            //     $days_since_payment = '0';
            // }

            $days_since_payment = $visitor['days_since_payment'];


            $data[] = [
                'mr_id' => $mr_id,
                'name' => $name,
                'mobile' => $visitor['mobile'],
                'company_name' => $visitor['company_name'],
                'email' => $visitor['email'],
                'hospital_name' => $visitor['hospital_name'],
                'registration_date' => $registration_date,
                'payment_date' => $payment_date,
                'days_since_payment' => $days_since_payment,
                'status' => $status,
                'action' => $action
            ];
        }

        // Return JSON data in DataTables expected format
        echo json_encode([
            "draw" => $draw,
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $totalFiltered,
            "data" => $data
        ]);
    }


    public function send_mr_email()
    {
        $mr_id = $this->input->post('mr_id');
        $company_name = $this->input->post('company_name');
        $whenpaid = $this->input->post('whenpaid');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $email = $this->input->post('email');


        if ($mr_id) {
            // $whenpaid_display = !empty($whenpaid) ? $whenpaid : 'N/A';
            $whenpaid_display = !empty($whenpaid) ? date("d/m/Y", strtotime($whenpaid)) : '';

            $email = $email;

            $subject = 'Account Renewal Needed';
            $message = '
                <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">
                <head>
                    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                    <title>Payment Successful</title>
                    <style type="text/css">
                    .choose-link, .choose-link:visited, .choose-link:hover {text-decoration: none; color:#fff;}
                    @media only screen and (max-width: 600px) {
                        .emailer-main { width: 100% !important; }
                        .headlogo img { width: 100%; }
                    }
                    </style>
                </head>
                <body>
                    <table class="emailer-main" border="0" align="center" cellpadding="0" cellspacing="0" style="border:solid 1px #ccc; width:600px;">
                        <tr>
                            <td height="40" align="left" valign="middle" bgcolor="#000" style="border-bottom:solid 1px #ccc;">
                                <table border="0" align="left" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td align="right" class="headlogo" valign="bottom" style="padding-left:10px;">
                                            <img src="https://smartmr.in/assets/img/SmartMR_Logo.png" border="0" />
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
    <td align="left" valign="top" style="padding:10px 20px; color:#363636; font-size:14px; font-family:Arial, Helvetica, sans-serif;">
        <p>Dear ' . $first_name . ' ' . $last_name . ' (' . $company_name . ')</p>
    </td>
</tr>
<tr>
    <td align="left" valign="top" style="padding:10px 20px; color:#363636; font-size:14px; font-family:Arial, Helvetica, sans-serif;">
       Your account was last recharged on ' . $whenpaid_display . ' and standing annual renewal. Please recharge your account to avoid any Deactivation/Blocking of your account.
    </td>
</tr><br> <br> 

  <!-- Payment Box -->
        <tr>
            <td align="center" valign="top" style="padding:20px;">
                <table width="100%" cellpadding="10" cellspacing="0" border="0" style="border: 2px solid #007bff; border-radius: 8px; background-color: #f9f9f9; font-family: Arial, Helvetica, sans-serif;">
                    <tr>
                        <td colspan="2" align="center" style="font-size:16px; font-weight:bold; color:#007bff; padding-bottom:10px;">
                            Payment Details
                        </td>
                    </tr>
                    <tr>
                        <td align="right" style="font-size:14px; font-weight:bold; padding:5px 10px; width:40%;">UPI ID:</td>
                        <td align="left" style="font-size:14px; padding:5px 10px;">9975172266@hdfcbank</td>
                    </tr>
                    <tr>
                        <td align="right" style="font-size:14px; font-weight:bold; padding:5px 10px;">Amount:</td>
                        <td align="left" style="font-size:14px; padding:5px 10px;">₹300</td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- End Payment Box -->

                        <tr>
                            <td align="left" valign="top" style="padding:10px 15px; background:#3B4851; font-family:Arial, Helvetica, sans-serif; color:#fff; font-size:14px;">
                                Regards, Smart MR
                            </td>
                        </tr>
                        
                    </table>
                </body>
                </html>';


            // Email configuration
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
            $this->email->clear();  // Clear any previous headers or content

            $this->email->from('ghanshamchaudhari2004@gmail.com', 'Smart MR');
            $this->email->to($email);
            $this->email->subject($subject);
            $this->email->message($message);

            // Send the email
            if (!$this->email->send()) {
                $this->session->set_flashdata('error', 'MR updated, but email sending failed.');
            } else {
                $this->session->set_flashdata('success', 'MR updated successfully and email sent.');
            }

            // redirect(base_url('Admin/mr_list'));

            // For this example, always return success:
            echo json_encode([
                'status' => 'success',
                'message' => 'Email sent to ' . $email
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'MR not found.'
            ]);
        }

    }

    public function send_mr_receipt()
    {
        $mr_id = $this->input->post('mr_id');
        $company_name = $this->input->post('company_name');
        $whenpaid = $this->input->post('whenpaid');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $email = $this->input->post('email');

        if ($mr_id) {
            $whenpaid_display = !empty($whenpaid) ? date("d/m/Y", strtotime($whenpaid)) : '';

            $subject = 'SmartMR - Payment Receipt';
            $message = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>Payment Receipt</title>
            <style type="text/css">
                body { font-family: Arial, Helvetica, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
                .receipt-container { max-width: 600px; margin: 20px auto; background-color: #fff; border: 1px solid #ccc; border-radius: 8px; }
                .header { background-color: #3B4851; color: #fff; padding: 15px; text-align: center; border-top-left-radius: 8px; border-top-right-radius: 8px; }
                .header img { max-height: 50px; }
                .content { padding: 20px; color: #333; font-size: 14px; }
                .content h2 { color: #3B4851; margin-top: 0; }
                .payment-box { border: 2px solid #007bff; border-radius: 8px; background-color: #f9f9f9; padding: 15px; margin: 20px 0; }
                .payment-box table { width: 100%; border-collapse: collapse; }
                .payment-box th, .payment-box td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
                .footer { background-color: #3B4851; color: #fff; text-align: center; padding: 15px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px; }
            </style>
        </head>
        <body>
            <div class="receipt-container">
                <div class="header">
                    <img src="https://smartmr.in/assets/img/SmartMR_Logo.png" alt="SmartMR Logo">
                </div>
                <div class="content">
                    <p>Dear <strong>' . $first_name . ' ' . $last_name . '</strong> (' . $company_name . '),</p>
                    <p>Thank you for your payment. This is your payment receipt.</p>

                    <div class="payment-box">
                        <h2>Payment Details</h2>
                        <table>
                            <tr>
                                <th>Company</th>
                                <td>' . $company_name . '</td>
                            </tr>
                            <tr>
                                <th>Payment Date</th>
                                <td>' . $whenpaid_display . '</td>
                            </tr>
                            <tr>
                                <th>Amount Paid</th>
                                <td>₹300</td>
                            </tr>
                        </table>
                    </div>

                    <p>If you have any questions regarding this payment, feel free to contact our support team.</p>
                </div>
                <div class="footer">
                    Regards,<br>
                    <strong>SmartMR Team</strong>
                </div>
            </div>
        </body>
        </html>
        ';

            // Email configuration
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
            $this->email->clear();

            $this->email->from('ghanshamchaudhari2004@gmail.com', 'SmartMR');
            $this->email->to($email);
            $this->email->bcc('esmartcommon@gmail.com');
            $this->email->subject($subject);
            $this->email->message($message);

            if ($this->email->send()) {
                echo json_encode(['status' => 'success', 'message' => 'Receipt sent to ' . $email]);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to send receipt.']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'MR not found.']);
        }
    }


}