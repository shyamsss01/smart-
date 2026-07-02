<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../images/favicon.ico">

    <title>Patholinks-All Test </title>
  
	
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.jqueryui.min.css"/>
  
  <!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.jqueryui.min.js"></script>
   -->

	<!-- Bootstrap 4.1-->
	<link rel="stylesheet" href="<?php  echo base_url()?>/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Data Table-->
	<link rel="stylesheet" type="text/css" href="<?php  echo base_url()?>/assets/vendor_components/datatable/datatables.min.css"/>
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?php  echo base_url()?>/assets/css/bootstrap-extend.css">	
	
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php  echo base_url()?>/assets/css/master_style.css">
	
	<!-- horizontal menu style -->
	<link rel="stylesheet" href="<?php  echo base_url()?>/assets/css/horizontal_menu_style.css">

	<!-- SoftMaterial admin skins -->
	<link rel="stylesheet" href="css/skins/_all-skins.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<style>
		.btn-outline-info{
			visibility:hidden;
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
<?php $this->load->view('header.php'); ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper" > 
  
<?php 

  



?>
  <!-- Main Navbar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="container-fluid" >
    <!-- Content Header (Page header) -->
   
<!-- Modal -->
<div class="modal fade" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Set Test Fees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div id="modal-alert-div"></div>	

	  <input type="hidden" id="update_id" name="updated_id">
								<div class="form-group">
								 <label>General Fees</label>
								<div class="controls">
									 <input type="text" class=" form-control" name="general_fess"  id="general_fess" placeholder="Enter General Fees" required >
									</div>
                                </div>


								<div class="form-check">
											<input class="form-check-input" type="checkbox"
                                            value="1" id="outsourceCheck" name="outsourceCheck">
                                           <label class="form-check-label" for="outsourceCheck">
                                                    Outsource
                                            </label> 
											</div>	

											<div id="divToReload">
							
									
										 <label>Select Lab Name</label> 
										
										 <select class="js-example-basic-single form-control" id="outsource_lab" name="outsource_lab" disabled="">
											<option>Select Lab Name</option>
												<?php
																
																if(!empty($labs)) {
																foreach($labs as $lab){
																?>
																
													<option value="<?php echo $lab['outsource_id'];?>"><?php echo $lab['lab_name'];?></option>
													
																	<?php 
																}
																}
															?>
											</select> 
											<div class="input-group-append">
												<button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#add_lab">Add New</button>	
											</div> 
										   </div>
										
										<label>Outsource Amount</label> 
								          <div class="controls">
											<input type="text" class="form-control" id="outsource_amount" value="<?php  echo 0 ?>" name="outsource_amount" placeholder="Enter Outsource Amount" disabled="">		
										</div> 
									


							    
	  
        <input type="hidden" name="test_name" id="test_id">

      </div>
      <div class="modal-footer">
        <button type="button" id="save-project-btn" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>






    <section class="content"  style="background:url(<?php  echo base_url()?>assets/img/add_test.jpg);height: 100%;width:100%; background-repeat: no-repeat;background-size:100%;;  background-position: center;">
		<center><h1 style="color:black">
        All  Test 
      </h1></center>
      <marquee direction="left">
							
							<blink><h4 style="color:red">Note : 1) Please Set Fess if you do not set it Test Name not shown in create case.
						                                        </h4></blink>
						</marquee>   
    <div class="col-12"   >
		  	<div class="box" >
			  <a href="<?php echo base_url()?>test/add_test"><button class="btn btn-success" style="margin-top: 25px;margin-left: 25px;">Add Test</button></a>
		<div class="box-body"  >
			<p> <?php
         if(!empty($this->session->userdata('test')))
         {?>
            <div class="alert alert-info"  id="info-alert" ><?php echo $this->session->userdata('test');
             unset($_SESSION['test']);?></div>
            <?php }
         ?>
         </p>

        <div id="alert-div"></div>
			  <div class="table-responsive">
				<table id="myTable" style="border-style: solid;margin-left:15px;color:black"  class="table table-responsive-md">
					<thead >
						<tr>
							<!-- <th>Test ID</th> -->
							<th style="">Test Name</th>
							<th style="">Short Name</th>
							<th style="">Category</th>
							<th style="">Gender</th>
							<th style="">Fees</th>
							<th style="">Outsource</th>
							<th style="">Outsource Fees</th>
							<th style="">Action</th>
						</tr>
					</thead>
					<tbody>
					<?php if(!empty($tests))  { 
               
               foreach($tests as $test) {
               ?>
						<tr>
						<!-- <td><?php echo $test['test_id'] ?></td> -->
						<td><?php echo $test['test_name'] ?></td>
						<td><?php echo $test['test_short_name'] ?></td>
						<td><?php echo $test['categorey_name'] ?></td>
						<td><?php echo $test['gender'] ?></td>
						<td><?php echo $test['general_fess'] ?></td>
						<td><?php echo $test['lab_name'] ?></td>
						<td><?php echo $test['outsource_amount'] ?></td>
						
            <td>

							<?php 
                    $username =$this->session->userdata('username');
                    $data['users']  = $this->Admin_model->get_loogedinuser($username);
                      $temp=$data['users']->id;

                      if($temp == 1){
                        ?>
            <a href="<?php  echo base_url('test/edit/'.$test['test_id'])?>"><button class= "btn  btn-success btn-xs" >Edit Test</button></a>
						<a href="<?php  echo base_url('test/test_parameter/'.$test['test_id'])?>"><button class= "btn btn-warning btn-xs" >Add Parameter</button></a>
            <a onclick="fess(<?php echo $test['test_id'] ?>)" ><button class= "btn btn-primary btn-xs" >Set Fess</button></a>
             <?php
                      }else{
                        if($test['created_by'] != 1){
                          ?>
                      <a href="<?php  echo base_url('test/edit/'.$test['test_id'])?>"><button class= "btn  btn-success btn-xs" >Edit Test</button></a>
                      <a href="<?php  echo base_url('test/test_parameter/'.$test['test_id'])?>"><button class= "btn btn-warning btn-xs" >Add Parameter</button></a>
                      
                          <?php
                        }else{
                          ?>
                        <a onclick="fess(<?php echo $test['test_id'] ?>)" ><button class= "btn btn-primary btn-xs" >Set Fess</button></a>
                          <?php
                        }
                       
                      }

                      ?>

						</td>
							
						
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </div>
  <footer class="main-footer"  id="style_footer" >
 
 <center><div class="row" >
  <div class="col-md-6">
  <div class="copyright" >
    &copy; Copyright <strong><span >patholinks.com</span></strong>. All Rights Reserved
  </div>
  </div>
  <div class="col-md-6">
  <div class="credits">
   Designed by <a style="color:red"  href="http://esmartsolution.in/">eSmart Solutions</a><a href="https://bootstrapmade.com/" style="visibility: hidden;">BootstrapMade</a>
  </div>
  </div>
 </div></center> 
</footer>
<!-- ./wrapper -->
</body>
	<!-- jQuery 3 -->
	<script src="<?php  echo base_url()?>/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- popper -->
	<script src="<?php  echo base_url()?>/assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.1-->
	<script src="<?php  echo base_url()?>/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="<?php  echo base_url()?>/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="<?php  echo base_url()?>/assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- This is data table -->
    <script src="<?php  echo base_url()?>/assets/vendor_components/datatable/datatables.min.js"></script>
	
	<!-- Editable -->
    <script src="<?php  echo base_url()?>/assets/vendor_components/tiny-editable/mindmup-editabletable.js"></script>
    <script src="<?php  echo base_url()?>/assets/vendor_components/tiny-editable/numeric-input-example.js"></script>
    <script src="<?php  echo base_url()?>/assets/js/pages/editable-tables.js"></script>
		
	<!-- SoftMaterial admin App -->
	<script src="<?php  echo base_url()?>/assets/js/template.js"></script>
	
	<!-- SoftMaterial admin for demo purposes -->
	<script src="<?php  echo base_url()?>/assets/js/demo.js"></script>
	
	<!-- SoftMaterial admin horizontal-layout -->
	<script src="<?php  echo base_url()?>/assets/js/horizontal-layout.js"></script>
	
	<!-- SoftMaterial admin for Data Table -->
	<script src="<?php  echo base_url()?>/assets/js/pages/data-table.js"></script>


<script src="/jquery-3.3.1.min.js"></script>
<script src="/bootstrap.min.js"></script>
<script type="text/javascript">


$('#outsourceCheck').click(function() {
    if ($(this).prop("checked") == true) {
        $("#outsource_lab").removeAttr("disabled");
        $("#outsource_amount").removeAttr("disabled");
    } else if ($(this).prop("checked") == false) {
        $("#outsource_amount").attr("disabled", "disabled");
        $("#outsource_lab").attr("disabled", "disabled");
    }
});




$("#save-project-btn").click(function(event ){
        event.preventDefault();
        if($("#update_id").val() == null || $("#update_id").val() == "")
        {
            save_data()
        } else {
            updateProject();
        }
    })
 


function fess(test_id)
{

	let url = "<?php  echo base_url();?>test/get_test/" + test_id ;

	$.ajax({
            url: url,
            type: "GET",
            success: function(response) {
                let project = response;

		if( project === null)
        {
			document.getElementById("test_id").value= test_id;
              $("#form-modal").modal('show');
        }else {
			
			    $("#update_id").val(project.id );
                $("#general_fess").val(project.general_fess);


			 if(project.outsource_amount=="0"){
                 
				 document.getElementById("outsourceCheck").checked = false;
				 }else{
				 document.getElementById("outsourceCheck").checked = true;
				 
				 $("#outsource_lab").val(project.outsource_lab);
                $("#outsource_amount").val(project.outsource_amount);
			   }
			   
               $("#form-modal").modal('show'); 
        }
               
            },
            error: function(response) {
                 
            }
        });

}

function save_data()
{

	var lab= document.getElementById("outsource_lab").value;

	var outsource_lab = null;
	if(lab === "")
	{
		outsource_lab = null;
	}else{
		outsource_lab = lab;
	}


	

	let url = "<?php echo base_url('test/store_pricing');?>";
        let data = {
            test_id: $("#test_id").val(),
			general_fess: $("#general_fess").val(),
			outsource_lab: outsource_lab,
			outsource_amount: $("#outsource_amount").val(),
            
        };
        $.ajax({
            url: url,
            type: "POST",
            data: data,
            success: function(response) {
 
                $("#save-category").prop('disabled', false);
                let successHtml = '<div class="alert alert-success" role="alert"><b> Test Price Set  Successfully</b></div>';
                $("#alert-div").html(successHtml);
                
                $("#add_categoryLabel").modal('hide');
				          window.location.reload();
            },
            error: function(response) {
                $("#save-category").prop('disabled', false);
            
                let responseData = JSON.parse(response.responseText);
                console.log(responseData.errors);
 
                if (typeof responseData.errors !== 'undefined') 
                {
                    let errorHtml = '<div class="alert alert-danger" role="alert">' +
                                        '<b>Validation Error!</b>' +
                                        responseData.errors +
                                    '</div>';
                    $("#modal-alert-div").html(errorHtml);   
					
                }
            }
			
        });
}


function updateProject()
    {
		

        $("#save-project-btn").prop('disabled', true);
        let url = "<?php echo base_url();?>/test/update_fess_test/" + $("#update_id").val();
		var lab= document.getElementById("outsource_lab").value;
		
		var outsource_lab = null;
	if(lab === "")
	{
		outsource_lab = null;
	}else{
		outsource_lab = lab;
	}


	let data = {
            
			general_fess: $("#general_fess").val(),
			outsource_lab: outsource_lab,
			outsource_amount: $("#outsource_amount").val(),
            
        };
        
        $.ajax({
            url: url,
            type: "POST",
            data: data,
            success: function(response) {
                $("#save-project-btn").prop('disabled', false);
                let successHtml = '<div class="alert alert-success" role="alert"><b>Price Updated Successfully</b></div>';
                $("#alert-div").html(successHtml);
                $("#form-modal").modal('hide');
                window.location.reload();
            },
            error: function(response) {
            
                $("#save-project-btn").prop('disabled', false);
            
                let responseData = JSON.parse(response.responseText);
                console.log(responseData.errors);
 
                if (typeof responseData.errors !== 'undefined') 
                {
                    let errorHtml = '<div class="alert alert-danger" role="alert">' +
                                        '<b>Validation Error!</b>' +
                                        responseData.errors +
                                    '</div>';
                    $("#modal-alert-div").html(errorHtml);      
                }
            }

        });
    }
</script>


<!-- Template Main JS File -->
<!-- <script src="<?php echo base_url();?>assets/js/main.js"></script>
<script src="//code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>



<script type="text/javascript">
    $(document).ready(function () {
 
        $('#myTable').DataTable(
          
        );

    });
</script> -->



</html>

