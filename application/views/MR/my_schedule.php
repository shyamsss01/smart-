   
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
            <button type="button" style="float: right; margin-top:15px" class="btn btn-primary"  onclick="show_model()">
            Mark Todays Attendance
              </button>
              <h5 class="card-title">My Schedule</h5>
              <!-- Button trigger modal -->


              <div class="wrapper">
               <div class="container">
                  <div id="calendar" >
                  </div>
                 </div>
              </div>

            </div>
          </div>

        </div>
      </div>

      
    </section>


<!-- Modal -->
<div class="modal"  id="exampleModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h5 class="modal-title">Mark Todays Attendance</h5></center>
      </div style="border: 1px solid black;">
      <div class="modal-body">
        <div>
        <table class="responsive" style="margin-left:15%; ">
        <?php if(!empty( $register_hospital))  { 
              

              foreach( $register_hospital as  $hospital) {  
            ?>     
       
       <tr style="margin-top:5% ">
       <td><?php  echo $hospital['hospital_name']?></td>
       <td><button  style="margin-left:25px" type="button" class="btn btn-primary btn-sm" onclick="mark_attendance(<?php  echo $hospital['user_id'] ?>)">Mark Attendance</button></td>
     
      </tr>
      <?php  } 
          }
        ?> 
        </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
       
    
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
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
   
<script type="text/javascript">

function show_model()
{
  $("#exampleModal").modal('show');
}

function mark_attendance(hospital_id)
{

 	event.preventDefault();
	let text = "Confirm your attendance!";
  if (!(confirm(text) == true)) {

          return ;

  }
    var todayDate = new Date().toISOString().slice(0, 10);
 let data={

  attendance_date : todayDate,
	}

let url="<?php  echo base_url('MR/store_mark_attendance/')?>" +hospital_id ; 

$.ajax({
		 url: url,
		 type: "POST",
		 data: data,
		 success: function(response) {
			$( "#attendance" ).load(window.location.href + " #attendance" );
      alert("Attendance marked successfully");
		 },
		 error: function(response) {
	   
			alert("You have already marked attendance");
      //console.log(response);
			 return false;
		 }
		 
	 });

}   




















    $(document).ready(function(){
        var calendar = $('#calendar').fullCalendar({
            editable:true,
            // header:{
            //     left:'prev,next today',
            //     center:'title',
            //     right:'month,agendaWeek,agendaDay'
            // },
            events:"<?php echo base_url('MR/mr_schedule_load'); ?>",
            selectable:true,
            selectHelper:true,
           

  eventClick:function(event)
  {

              alert("Please Contact hospital to cancele your oppintment..!")
    
       
    }


            
            })
            });


            
             
    </script>





