   
<!DOCTYPE html>
<html lang="en">

<head>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6136027815494124"
     crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

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
  <script type="text/javascript" src="https://maps.google.com/maps/api/js?libraries=places&amp;sensor=true"></script>


  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php  echo base_url()?>calender/css/style.css">
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php  echo base_url()?>calender/css/style.css">
<!-- 

  <link href="<?php echo base_url();?>assets/calender/calendar.css" rel="stylesheet">
    <script async src="<?php echo base_url();?>assets/calender/calendar.js"></script> -->

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
    
    .fc-view-container{
      width:100% !important;
    }
    .fc-unselecteable{
      width:100% !important;
    }
    
  body {
  margin: 40px 10px;
  padding: 0;
  font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
  font-size: 14px;
}

#calendar {
  max-width: 900px;
  margin: 0 auto;
}
  </style>

  
</head>

 <body  class="body">

    <!-- ======= Header ======= -->
 
  <?php $this->load->view('MR/header.php');?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  
  <?php $this->load->view('MR/sidebar.php');?>
  <!-- End Sidebar-->
  
    <main id="main" class="main">
  <section class="section">
 
      <div>
      <form action="<?php echo base_url('MR/dashbord');?>"  method="post">
                  <center> 

                  <div id="select_list">

                 
                    <select    id="hospital" name="hospital" onchange="leaveChange()" class="form-control">
                    
                          
                    <option  value="">Select Hospital </option>
                               <?php if(!empty($hospitals))  { 
                                
                                     foreach($hospitals as $hospital) {
                                   ?>
                                   
                                      <option  value="<?php echo $hospital['id'];?>"><?php echo $hospital['hospital_name'];?></option>
                                   <?php  
                                   } 
                               }
                             ?>   
                      
                     </select>

                     </div>
                

                    
                  </center>

                  </form>
      </div>
    

  <div class="container" id="attendance"  style="width:100%">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				<center><div  style="margin-top:2%; margin-bottom:2% ;color:blue;font-size:25px;" class="name" id="hospital_name"></div></center>
        <center><div  style="margin-bottom:2% ;color:red;font-size:18px ;font-weight: bold;font-style: italic;" class="name" id="hospital_remarks"></div></center>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="content w-100">
				    <div class="calendar-container">
				      <div class="calendar"> 
				        <div class="year-header"> 
				          <span class="left-button fa fa-chevron-left" id="prev"> </span> 
				          <span class="year" id="label"></span> 
				          <span class="right-button fa fa-chevron-right" id="next"> </span>
				        </div> 
				        <table class="months-table w-100"> 
				          <tbody>
				            <tr class="months-row">
				              <td class="month">Jan</td> 
				              <td class="month">Feb</td> 
				              <td class="month">Mar</td> 
				              <td class="month">Apr</td> 
				              <td class="month">May</td> 
				              <td class="month">Jun</td> 
				              <td class="month">Jul</td>
				              <td class="month">Aug</td> 
				              <td class="month">Sep</td> 
				              <td class="month">Oct</td>          
				              <td class="month">Nov</td>
				              <td class="month">Dec</td>
				            </tr>
				          </tbody>
				        </table> 
				        
				        <table class="days-table w-100"> 
				          <td class="day">Sun</td> 
				          <td class="day">Mon</td> 
				          <td class="day">Tue</td> 
				          <td class="day">Wed</td> 
				          <td class="day">Thu</td> 
				          <td class="day">Fri</td> 
				          <td class="day">Sat</td>
				        </table> 
				        <div class="frame"> 
				          <table class="dates-table w-100"> 
			              <tbody class="tbody">             
			              </tbody> 
				          </table>
				        </div> 
              <input type="hidden" id="hospital_id" value="" name="hospital_id"> 
				        <button class="button" id="add-button">Book Appointment</button>
				      </div>
				    </div>
				    <div class="events-container">
				    </div>
				    <div class="dialog" id="dialog">
              
				        <h2 class="dialog-header"> Add New Appointment </h2>
				        <form class="form" id="form">
				          <div class="form-container" align="center">
                     <div style="display: none;" id="selected_hospital"></div>
                     <h2  class="dialog-header"> Confirm Appointment !</h2>
				            <!-- <label class="form-label" id="valueFromMyButton" for="name">Event name</label>
				            <input class="input" type="text" id="name" maxlength="36">
				            <label class="form-label" id="valueFromMyButton" for="count">Number of people to invite</label>
				            <input class="input" type="number" id="count" min="0" max="1000000" maxlength="7"> -->
				            <input type="button" value="Cancel" class="button" id="cancel-button">
				            <input type="button" value="OK" class="button button-white" id="ok-button">
				          </div>
				        </form>
				      </div>
				  </div>
				</div>
			</div>
		</div>
      
 </section>
</main><!-- End #main -->
  
       
    
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

  
  <script src="<?php  echo base_url()?>calender/js/jquery.min.js"></script>
  <script src="<?php  echo base_url()?>calender/js/popper.js"></script>
  <script src="<?php  echo base_url()?>calender/js/bootstrap.min.js"></script>
  <script src="<?php  echo base_url()?>calender/js/main.js"></script>
    
<script type="text/javascript">



function leaveChange()
{
 
  var hospital_id =document.getElementById("hospital").value ;
  document.getElementById("hospital_id").value = hospital_id;
  var div = document.getElementById('selected_hospital');
  div.innerHTML = hospital_id;

  let url ="<?php  echo base_url()?>MR/fetch_hospital_id/" + hospital_id;
        $.ajax({
            url: url,
            type: "GET",
            success: function(response) {
              
                let projects = response;
                document.getElementById("hospital_name").innerHTML = projects.hospital_name;
                document.getElementById("hospital_remarks").innerHTML ="Note: "+projects.remarks;
                    
            },
            error: function(response) {
                console.log(response)
                
               
            }
        });
    






 
}


function mark_attendance()
{
 	event.preventDefault();
	let text = "Confirm your attendance!";
  if (!(confirm(text) == true)) {

          return ;

  }
    var todayDate = new Date().toISOString().slice(0, 10);
    var hospital_id =document.getElementById("hospital").value ;
 let data={

  attendance_date : todayDate,
	}

let url="<?php  echo base_url('mr/store_mark_attendance/')?>" +hospital_id ; 

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
    </script>




</html>



<!--