   
<!DOCTYPE html>
<html lang="en">

<head>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6136027815494124"
     crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0">

  <title>Smart MR</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/simple-datatables/style.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style type="text/css">
    .form-control{margin-bottom: 2%;}
    .month{
      width: calc(103% - 11px)!important;
    }
    .year{
      width: calc(103% - 11px)!important;
    }
    .date{
      width: calc(103% - 11px)!important;
    }
    #mytable_filter{
        margin-left:80%!important;
        margin-bottom:12px!important;
    }
  </style>

  
</head>

 <body>

    <!-- ======= Header ======= -->
 
  <?php $this->load->view('MR/header.php');?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  
  <?php $this->load->view('MR/sidebar.php');?>
  <!-- End Sidebar-->
  

  <main id="main" class="main">
      
      <section class="section">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
              
                <div class="card-body">
               
                  <center><h5 class="card-title">My Attendance</h5></center>
                  <!-- Button trigger modal -->
    
                  <table id="mytable" class="table table-bordered">
                      <thead>
                        <tr>
                           <th scope="col">Hospital Name</th>
                          <th scope="col">Date-Time</th>
                          </tr>
                      </thead>
                      <tbody>

                             <?php if(!empty( $attendance_table))  { 
              
                               foreach( $attendance_table as  $attendance) {
                                $date=date_create($attendance['attended_date_time']);
                                $Period=date_format($date,"d-m-y h:i:sa");

                              
                             ?>     
                        
                        <tr>
                        <td><?php  echo $attendance['hospital_name'] ?></td>
                        <td><?php  echo $Period ?></td>
                       </tr>
                       <?php  } 
                           }
                         ?> 
            
                      </tbody>
                  </table>
                  
    
                </div>
              </div>
    
            </div>
          </div>
    
          
        </section>

    <!-- ======= Footer ======= -->
 
  <?php $this->load->view('doctor/footer.php');?>
  <!-- End Footer -->
  </body>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url();?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url();?>assets/js/main.js"></script>
    <script src="//code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>

<script>
$(document).ready( function () {
  $('#mytable').DataTable({
    dom:'Bfrtip',
    buttons: [
          'copy', 'csv', 'excel', 'pdf', 'print'
      ]
  
  });

} );
</script>