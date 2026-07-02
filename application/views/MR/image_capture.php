   
<!DOCTYPE html>
<html lang="en">

<head>
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


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  
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
    #imageprev{
      margin-top: -242px;
      width:200px;
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
           <h5 class="card-title">Capture MR Image</h5>
           <script type="text/javascript" src="<?php echo base_url() ?>assets/js/webcam.min.js"></script>
              <div class="row">
                <div class="col-md-6">
                <img  src="<?php echo base_url()?>assets/img/profile-img.jpg"  class="rounded-circle" >
                  <div   style="margin-top:9%;width:100px" name="" id="results"> </div>
                  <label>Uploaded Image</label>
                </div>
                <div class="col-md-6">
                <div id="welcomeDiv"  style="display:none;" class="answer_list" > 
                           <div class="clearfix"  name="my_camera" id="my_camera"></div><br>
                           <button type="button" class="btn btn-success" onClick="take_snapshot()"><i class="fa fa-camera fa-fw"></i> Capture Image</button>
                       </div>
                       <input type="button" name="answer" value="Start Camera" onclick="start_camera()" />     
                 </div>

                </div>
              </div>
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

  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  
  <script type="text/javascript" src="webcamjs/webcam.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.js"></script>
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.swf" type=" MIME">
<script src="<?php echo base_url();?>assets/js/main.js"></script>
  <script language="JavaScript">
 
        function take_snapshot() {                
          Webcam.snap(function (data_uri) {                    
                    document.getElementById('results').innerHTML =
                            '' +
                            '<img  id="imageprev" src="' + data_uri + '"/>';

                            var base64image = document.getElementById("imageprev").src;
                    Webcam.upload( base64image,'<?php echo base_url('MR/capture') ?>', function(code, text) 
                     {
            if (code == '200') {
              
              alert ('Image uploaded successfully!');
            } else {
              alert('error');
            }
        } );
                });
        }
    </script>
<script language="JavaScript">
        Webcam.set({
            width: 250,
            height: 200,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
        Webcam.attach('#my_camera');

        function start_camera() {
   document.getElementById('welcomeDiv').style.display = "block";
}

    </script>




