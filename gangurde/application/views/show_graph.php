<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Gangurde Hospital</title>
    
<!-- Vendor JS Files -->
<script src="<?php echo base_url();?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/php-email-form/validate.js"></script>


  <script src="https://d3js.org/d3.v4.js"></script>
  <script src="https://d3js.org/d3-scale-chromatic.v1.min.js"></script>

   <!-- Datatable CSS -->
   <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Datatable JS -->
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	
	
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap-extend.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/master_style.css">
	
	<!-- horizontal menu style -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/horizontal_menu_style.css">
	
	<!-- SoftMaterial admin skins -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/skins/_all-skins.css">
	
	<!-- Bootstrap switch-->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/vendor_components/bootstrap-switch/switch.css">
	
		
 
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <style>
		.header_row{
     
			height: 50px;
              width: 100%;
             border: 1px solid #4CAF50;
            
		}
    
   
	</style>
  <style>
    body {
    margin: 0;
   
   }
#style_footer{
     
     background-color:#6495ED ;
     margin-left:10%;color:white;
   }

#example_length{
  margin-top:5px;
}
 @media only screen and (max-width:900px) {
   
   .main-footer{
    height:2%!important;
   }

   #style_footer{
    margin-left:0!important;
   }
  
  } 
</style>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

	<style>
		table, th, td {
  border: 1px solid white;
   border-collapse: collapse; 
 
}
table, th, td {
 
  
}
.right{float:right !important;}
 .col-sm-12{width:50% !important;}
 @media only screen and (max-width:768px) {
  .col-sm-12{width:100% !important;}
  #box{
    width:100% !important;
    margin-bottom:50%!important;
  }
 .right{float:none !important;}
 input.pickyDate{width:100%;}
  /*Usefull class*/
  .topMar {
    margin-top: 20px;
  }
}

#footer_id{
  border: 1px solid #ddd;
  border-radius: 4px;
  margin-top:20px;
  /* padding: 5px;*/
  width: 50%; 
}
#style_footer{
     
     background-color:#6495ED ;
     margin-left:10%;color:white;
   }

 @media only screen and (max-width:900px) {
   
   .main-footer{
     height:2%!important;
   }

   #style_footer{
     margin-left:0!important;
   }
  
  } 

	</style>
</head>


<body>
<div>
  <div>
    <div style="margin-left:80%;margin-top:2%" >
    <a href="<?php echo base_url('welcome/logout') ?>"><b>Logout</b></a>
    </div>
  </div>

 <!-- Main content -->
    <section class="content"  >
    <div class="card">
        <div class="card-body">
                <div id="name"  style="text-align: center; margin-top: 25px;" >
                <label style ="margin-left: 25px; color:black"> <b>From:</b></label>
                <input type="date"class="pickyDate" id="start" name="start">

                <label style ="margin-left: 25px; color:black"><b>To:</b></label>
                <input type="date" id="end" class="pickyDate" name="end">
                <br>
                <input style ="margin-left: 25px; margin-top:5px; background-color: #008CBA; color:white " type="submit" onclick="reports_date()">
                </div>
               </div>
     </section>
     <?php 
        {
          ?>
         <div class="row">
              <div class="col-xl-3 col-md-6 col-12">
            <div class="box">
              <div class="flexbox flex-justified text-center bg-primary rounded">
                <div class="no-shrink py-30">
                
                <img  style=" height:60px;"  src="<?php echo base_url('/assets/img/examination_1.png') ?>">
                <!-- <span class="fa fa-wheelchair font-size-50"></span> -->
                </div>
      
                <div class="py-30 bg-white text-dark">
                <div class="font-size-30 countnm"><p id="patient_count"></p></div>
                <span>Patient</span>
                </div>
              </div>			
            </div>
              </div>
              <!-- /.col -->
            
              <div class="col-xl-3 col-md-6 col-12" >
            <div class="box">
              <div class="flexbox flex-justified text-center bg-info rounded">
                <div class="no-shrink py-30">
                
                <img  style=" height: 50px;"  src="<?php echo base_url('/assets/img/test_tube.png') ?>">
                <!-- <span class="fa fa-flask font-size-50"></span> -->
                </div>
      
                <div class="py-30 bg-white text-dark">
                <?php //  print_r($PatientCount)
                ?>
                <div class="font-size-30 countnm"><p id="casecount"></p></div>
                <span>Prescriptions</span>
                </div>
              </div>			
            </div>
              </div>
              <!-- /.col -->
              
              <div class="col-xl-3 col-md-6 col-12">
            <div class="box">
              <div class="flexbox flex-justified text-center bg-danger rounded">
                <div class="no-shrink py-30">
                <!-- <span class="fas fa-hand-holding-usd font-size-50"></span> -->
                
                <img  style=" height: 50px;"  src="<?php echo base_url('/assets/img/salary.png') ?>">
                <!-- <a  style="font-size-50" href="" title="money icons"></a> -->
                </div>
      
                <div class="py-30 bg-white text-dark">
                <div class="font-size-30 countnm"><p id="profit"></p></div>
                <span>Discount</span>
                </div>
              </div>			
            </div>
              </div>
              <!-- /.col -->
            
              <div class="col-xl-3 col-md-6 col-12">
            <div class="box">
              <div class="flexbox flex-justified text-center bg-warning rounded">
                <div class="no-shrink py-30">
                
                <img  style=" height: 50px;"  src="<?php echo base_url('/assets/img/wallet.png') ?>">
                <!-- <span class="fa fa-money font-size-50"></span> -->
                </div>
      
                <div class="py-30 bg-white text-dark">
                <div class="font-size-30 countnm"><p id="expense"></p></div>
                <span>Expense</span>
                </div>
              </div>			
             </div>
              </div>
              <!-- /.col -->
            
            </div>	
            <?php	   }
  ?>




<div class="row">
	  
          <div class="col-12 col-lg-6">
             <div class="box">
                 <div class="box-header with-border" style="background-color:#4f81c5;">
                   <h4  style="color:white" class="box-title">Patient_Case_Chart</h4>
                    <ul  class="box-controls pull-right">
                   <li ><a style="color:white"  class="box-btn-close" href="#"></a></li>
                   <li><a style="color:white"  class="box-btn-slide" href="#"></a></li>	
                   <li><a style="color:white" class="box-btn-fullscreen" href="#"></a></li>
                 </ul>
                 </div>
                 <div class="box-body">					
         <div id="bar-chart"></div>	
                 
                 </div>
             </div>
         </div>   
        <div class="col-12 col-lg-6"> 
           <!-- AREA CHART --->
            <div class="box">
             <div class="box-header with-border" style="background-color:#4f81c5;">
               <h4  style="color:white" class="box-title">Bussiness Chart</h4>
                 
               <ul  class="box-controls pull-right">
                   <li ><a style="color:white"  class="box-btn-close" href="#"></a></li>
                   <li><a style="color:white"  class="box-btn-slide" href="#"></a></li>	
                   <li><a style="color:white" class="box-btn-fullscreen" href="#"></a></li>
                 </ul>
           <ul class="box-controls pull-right">
                   <li><a class="box-btn-close" href="#"></a></li>
                   <li><a class="box-btn-slide" href="#"></a></li>	
                   <li><a class="box-btn-fullscreen" href="#"></a></li>
                 </ul>
             </div>
             <div class="box-body chart-responsive">
                  
             <div id="pieChart2"></div>
           
             </div>
             <!-- /.box-body -->
            </div>
           <!-- /.box-->
 
          </div> 
         
     
          <div class="box">
         <div class="box-header with-border" style="background-color:#1B7E82;">
           <center><h4 style="color:white"  class="box-title">Monthly Bussiness Statistics</h4></center>

           <ul  class="box-controls pull-right">
                  <li ><a style="color:white"  class="box-btn-close" href="#"></a></li>
                  <li><a style="color:white"  class="box-btn-slide" href="#"></a></li>	
                  <li><a style="color:white" class="box-btn-fullscreen" href="#"></a></li>
                </ul>
         </div>
         <div class="box-body">					
         <div id="admin_columnChart"></div>	        
         </div>
       </div>
     </div>  

<div class="row" style="margin-top:25px"> 
		<div class="col-lg-6 col-12">
			<div class="box">
				<div class="box-header with-border" style="background-color:#FF9149;">
					<h4 style="color:white" class="box-title">IPD_Pendings</h4>
                   <ul  class="box-controls pull-right">
                  <li><a style="color:white"  class="box-btn-close" href="#"></a></li>
                  <li><a style="color:white"  class="box-btn-slide" href="#"></a></li>	
                  <li><a style="color:white" class="box-btn-fullscreen" href="#"></a></li>
                </ul>
				</div>
				
					
           <table class="table table-responsive" id="IPD_Pendings" style="width=100%">
            <thead>
              <tr>
                <th style=" padding-left: 50px;" >Id</th>
								<th style=" padding-left: 150px;">Patient Name</th>
                <th style=" padding-left: 150px;">Mobile</th>
								<th style=" padding-left: 150px;">Address</th>
								<th style=" padding-left: 150px;">Pending</th>
              </tr>
            </thead>
            <tbody>
            <tbody id="IPD_Pendings-table-body">
            </tbody>
           </table>
		</div>
		</div>
		 
		<div class="col-lg-6 col-12">
			<!-- TO DO List -->
			  <div class="box box-solid box-warning">
				<div class="box-header with-border">
				 <h4 styl="margin-bootom:5px;" class="box-title">OPD_Pendings</h4>
				    <ul class="box-controls pull-right">
						
					  <li><a class="box-btn-slide" href="#"></a></li>	
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					  <li>

                      </li>
					</ul>
				</div>
				<!-- /.box-header -->
			
				
				<div class="box-body">
				
				<div id="modal-alert-range-div"></div>
				<div class="table-responsive">
					<table class="table" id="OPD_Pendings">
						<thead>
								
                                 <th style=" padding-left: 50px;" >Id</th>
								<th style=" padding-left: 150px;">Patient Name</th>
                                <th style=" padding-left: 150px;">Mobile</th>
								<th style=" padding-left: 150px;">Address</th>
								<th style=" padding-left: 150px;">Pending</th>
							</tr>
						</thead>
						<tbody>
                        <tbody id="OPD_Pendings-table-body">
						</tbody>
					</table>
				</div>
              </div>	 
					 
				
					  
				  
				</div>
				<!-- /.box-body -->
			  <!-- /.box -->  
		</div>
    <!-- /.content -->

</body>
<!-- ./wrapper -->

	<!-- ./wrapper -->
  
	<!-- jQuery 3 -->
	<script src="<?php echo base_url();?>assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- jQuery UI 1.11.4 -->
	<script src="<?php echo base_url();?>assets/vendor_components/jquery-ui/jquery-ui.js"></script>
	
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	
	<!-- popper -->
	<script src="<?php echo base_url();?>assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?php echo base_url();?>/assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>	
	
	<!-- Slimscroll -->
	<script src="<?php echo base_url();?>/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	
	<!-- FastClick -->
	<script src="<?php echo base_url();?>/assets/vendor_components/fastclick/lib/fastclick.js"></script>

	<!-- fullCalendar -->
	<script src="<?php echo base_url();?>/assets/vendor_components/fullcalendar/lib/moment.min.js"></script>
	<script src="<?php echo base_url();?>/assets/vendor_components/fullcalendar/fullcalendar.js"></script>
	
	<!-- Sparkline -->
	<script src="<?php echo base_url();?>/assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	
	
	
	<!-- SoftMaterial admin App -->
	<script src="<?php echo base_url();?>/assets/js/template.js"></script>
	
	<!-- SoftMaterial admin dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo base_url();?>/assets/js/pages/dashboard.js"></script>
	
	<!-- SoftMaterial admin for demo purposes -->
	<script src="<?php echo base_url();?>/assets/js/demo.js"></script>	
	
	<!-- SoftMaterial admin horizontal-layout -->
	<script src="<?php echo base_url();?>/assets/js/horizontal-layout.js"></script>
	
	<!-- Lion_admin for calendar -->
	<script src="<?php echo base_url();?>/assets/js/pages/calendar.js"></script>
	

<script>
 

function reports_date()
{

var start = document.getElementById("start").value;
var end  = document.getElementById("end").value;


let data={
     
    start_date  : start,
    end_date  : end,
      
       }
 
      let url="<?php  echo base_url('welcome/bussiness_report_data')?>"; 
  
       $.ajax({
            url: url,
            type: "POST",
            data: data,
            success: function(response) {
            console.log(response);
           // alert(response);

            let project = response;
            //************************************for first line***************************************//
               document.getElementById("patient_count").innerHTML = project.PatientCount;
               document.getElementById("casecount").innerHTML = project.Prescriptions;
               document.getElementById("profit").innerHTML = project.Discount;
               document.getElementById("expense").innerHTML = project.Expense;
 

//************************************for pie  Chart***************************************//
               let Case_Chart = project.monthWisePatient_Case_Chart;


let pie_chart = project.monthly_bussiness_Bar_Chart;

  var options = {
      

       series: [ parseInt(pie_chart.total_bill_amount), parseInt(pie_chart.total_discount) , parseInt(pie_chart.total_expenses),parseInt(pie_chart.total_pending)],
      
      
      chart: {
        height: 350,
        type:'pie',
        toolbar: {
          show: true
        }
      },
      labels: ['Total bill','Total Discount', 'Total Expense','Total Pending']
    
 };

        var chart = new ApexCharts(document.querySelector("#pieChart2"), options);
        chart.render();



//************************************for Bussiness Chart***************************************//
let  case_count =project.monthWisePatient_Case_Chart;
var totalPatients = [];
var totalCases = [];
var month=[];
  // Access the array elements
var passedArray = case_count;      
  // Display the array elements
  for(var i = 0; i < passedArray.length; i++){
    totalPatients.push(passedArray[i].totalPatients);
    totalCases.push(passedArray[i].totalCases);
    month.push(passedArray[i].month)
   
  }

  var options = {
series: [{
                      name: 'Total New  Patients',
                      data: totalPatients
                    }, {
                      name: 'Prescriptions',
                      data:totalCases
                    }],
                    chart: {
                      type: 'bar',
                      height: 350
                    },
                    plotOptions: {
                      bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded',
                         //groupWidth: '75%' 
                      },
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      show: true,
                      width: 2,
                      colors: ['transparent']
                    },
                    xaxis: {
                      categories: month,
                    },
                    yaxis: {
                      title: {
                        text: 'MonthWise Patient Case'
                      }
                    },
                    fill: {
                      opacity: 1
                    },
                    tooltip: {
                      y: {
                        formatter: function(val) {
                          return " " + val + " "
                        }
                      }
                    }


};

var chart = new ApexCharts(document.querySelector("#bar-chart"), options);

chart.render();
//************************************for Monthly Bussiness Statistics***************************************//
var totalPatients = [];
 var totalCases = [];
 var total_payable_amount = [];
 var total_discount_amount = [];
 var total_received_amount = [];
 var total_pending_amount = [];
 var total_outsource_amount = [];
 var total_profit = [];
 var total_expense = [];
 var month=[];
   // Access the array elements
   var passedArray = project.monthWiseadmin_bussiness_Chart
;
         
   // Display the array elements
   for(var i = 0; i < passedArray.length; i++){
     totalPatients.push(passedArray[i].totalPatients);
     totalCases.push(passedArray[i].totalCases);
     total_payable_amount.push(passedArray[i].total_payable_amount);
     total_discount_amount.push(passedArray[i].total_discount_amount);
     total_received_amount.push(passedArray[i].total_received_amount);
     total_pending_amount.push(passedArray[i].total_pending_amount);
     total_outsource_amount.push(passedArray[i].total_expense);
     month.push(passedArray[i].month)
    
   }

var options = {
  series: [{
                       name: 'Patients',
                       data: totalPatients
                     }, {
                       name: 'Prescriptions',
                       data:totalCases
                     },
                     {
                       name: 'Payable Amount',
                       data:total_payable_amount
                     },
                     {
                       name: 'Discount Amount',
                       data:total_discount_amount
                     },
                     {
                       name: 'Recived Amount',
                       data:total_received_amount
                     },
                     {
                       name: 'Pending Amount',
                       data:total_pending_amount
                     },
                    {
                       name: 'Expense',
                       data:total_expense
                     }

                    ],
                     chart: {
                       type: 'bar',
                       height: 350
                     },
                     plotOptions: {
                       bar: {
                         horizontal: false,
                         columnWidth: '55%',
                         endingShape: 'rounded',
                          //groupWidth: '75%' 
                       },
                     },
                     dataLabels: {
                       enabled: false
                     },
                     stroke: {
                       show: true,
                       width: 2,
                       colors: ['transparent']
                     },
                     xaxis: {
                       categories: month,
                     },
                     yaxis: {
                       title: {
                         text: 'Monthly Bussiness '
                       }
                     },
                     fill: {
                       opacity: 1
                     },
                     tooltip: {
                       y: {
                         formatter: function(val) {
                           return " " + val + " "
                         }
                       }
                     }

};

var chart = new ApexCharts(document.querySelector("#admin_columnChart"), options);

chart.render();
//*****************************************************************************************************//


//**********************************for IPD_Pendings table*********************************** //
             
                let IPD_Pendings = project.IPD_Pendings;
                $("#IPD_Pendings-table-body").html("");      
               for (var i = 0; i < IPD_Pendings.length; i++)
				
                {
                     
                       
                    let projectRow = 
                   
                                            '<tr>'   +
                                            '<td>'   +   IPD_Pendings[i].patientId + '</td>' +
                                             '<td>'  +   IPD_Pendings[i].patientName + '</td>' +
                                             '<td>'  +   IPD_Pendings[i].mobile1 + '</td>' +
                                              '<td>' +   IPD_Pendings[i].address + '</td>' +
                                             '<td>'  +   IPD_Pendings[i].pending + '</td>' +
                                           '</tr>';
                   $("#IPD_Pendings-table-body").append(projectRow);

                }

               
            //**********************************for OPD_Pendings table*********************************** //
               $("#OPD_Pendings-table-body").html("");
               let OPD_Pendings = project.OPD_Pendings;
               for (var i = 0; i < OPD_Pendings.length; i++)
				
                {
                   
                  
                    let projectRow1 = 
                   
                                            '<tr>' +
                                            '<td>' +    OPD_Pendings[i].patientid + '</td>' +
                                             '<td>' +   OPD_Pendings[i].patientName + '</td>' +
                                             '<td>' +   OPD_Pendings[i].mobile1 + '</td>' +
                                              '<td>' +  OPD_Pendings[i].address + '</td>' +
                                             '<td>'  +  OPD_Pendings[i].pending + '</td>' +
                                           '</tr>';
                   $("#OPD_Pendings-table-body").append(projectRow1);
                        

               }

               

                              },
            error: function(response) {
                console.log(response);
                alert(response);
                return false;
            }
            
        });


}

</script>



</html>

