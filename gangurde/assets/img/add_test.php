<!DOCTYPE html>
<html>
 <head>
  
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../images/favicon.ico">

    <title>Patholinks-Add Test </title>
  
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />  
</head>
<?php $this->load->view('header.php'); ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="container" style="width:100%">
<?php 
$username =$this->session->userdata('username');
$data['users']  = $this->Admin_model->get_loogedinuser($username);
$temp=$data['users']->id;
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       
      </h1>
    
            <div class="row" >
		  	<div class="box">
		  		<div class="box-body" style="background:url(<?php  echo base_url()?>assets/img/add_test.jpg) ; height: 100%;width:100%; background-repeat: no-repeat;background-size: 100% 100%;;  background-position: center;">
		  			<center><h3 style="color:black">Add New Test</h3></center>
		  		</div>
		  	</div>	  
		  
		<div class="col-12">
		  	<div class="box">

		<div class="box-body" style="background:url(<?php  echo base_url()?>assets/img/add_test.jpg) ; height: 100%;width:100%; background-repeat: no-repeat;background-size: 100% 100%;;  background-position: center;">
		<form action="<?php  echo base_url();?>test/add_test_validation" method="post">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<center><h5 class="box-title title" style="color:black">New Test Details</h5></center>
						<marquee direction="left">
							
							<blink><h6 style="color:red">At least one parameter is required to create a test successfully. If parameter is not available, test name will be used as parameter.</h6></blink>
						</marquee>
					</div>
				</div>
				<br>
                  <div id="alert-div" style="color:black"></div>
				<div class="row" style="color:black">
					<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									<label>Select Category</label>
									<div class="input-group mb-3">
									<select class="js-example-basic-single form-control" id="categorey" name="categorey">
										<?php
                         
															if(!empty($categories)) {
															foreach($categories as $categorey){
															?>
												<option value="<?php echo $categorey['id'];?>"><?php echo $categorey['name'];?></option>
												
																<?php 
															}
															}
														?>
										</select>
										<!-- <div class="input-group-append">
										<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_category">Add New</button>
											 	
										</div> -->
									</div>
									</div>		
								</div>
								<div class="col-md-6">
								<!-- <input type="checkbox" id="" name="checkbox_test_name" value="yes"> -->
								<input type="checkbox" id="checkbox_test_name" name="checkbox_test_name" value="yes" checked>
								
                                <label style="color:black"for="checkbox_test_name"><span style="font-weight: bold;color:red">Show Test Name in Print/Report</span></label>
								</div>
								<div class="col-md-12">

									<div class="form-group">
										<label>Test Name</label>
										<div class="controls">
										<input type="text" class="form-control" name="test_name" id="test_name" placeholder="Enter Test Name" required>
											<p><?php echo form_error('test_name');?></p>			
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
											<label>Short Name</label>
											<div class="controls">
												<input type="text" class="form-control" name="test_short_name"  id="test_short_name" placeholder="Enter Short Name">	
											</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label>Test For</label>
									<div class="controls">
										<select class="form-control"  name="gender" id="gender">
											<option value="male">Male</option>
											<option value="female">Female</option>
											<option value="all">All</option>
										</select>		
									</div>
									</div>	
								</div>
							</div>
					</div>
					
                        <div class="col-md-4">
						<div class="row">
							<div class="col-md-6"  style="margin-left:33px">
								<div class="form-group">
								<?php

					           if($temp!= 1){
						             ?>
								 <label>General Fees</label> 
								<div class="controls">
								 <input type="text" class=" form-control" name="general_fess"  id="general_fess" placeholder="Enter General Fees" required >
									<p><?php echo form_error('general_fess');?></p>		 
								</div>
								<?php
					               }?>
							    </div>
							</div>
						    </div>
							<div id="divToReload">
							<div class="col-md-12" style="margin-top:25px" >
							<div class="form-group">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6">
										<?php

                                       if($temp!= 1){
	                                         ?>
											<label>Select Lab Name</label>
										<?php
										}
										?> </div>
										<div class="col-md-6">
											<?php

					                       if($temp!= 1){
						                       ?>
											<input class="form-check-input" type="checkbox"
                                            value="1" id="outsourceCheck" name="outsourceCheck"style=" accent-color: red;">
                                            <label  class="form-check-label" for="outsourceCheck">
											<span style="font-weight: bold;color:green"> Outsource</span>
                                                   
                                            </label>
											<?php
					                          }?>
											
									</div>
								</div>
									
									 <?php
                                      if($temp!= 1){
														?>
										<div class="input-group mb-3">
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
										<?php
					                          }?>
									</div>
								</div>
								</div>
								<div class="col-md-12" style="margin-left:15px;margin-top:17px" >
									<div class="form-group" >
                                                 <?php

													if($temp!= 1){
														?>
										<label>Outsource Amount</label> 
										 <div class="controls">
											<input type="text" class="form-control" id="outsource_amount" value="<?php  echo 0 ?>" name="outsource_amount" placeholder="Enter Outsource Amount" disabled="">		
										</div> 
										<?php
					                          }?>
									</div>
								</div>
						</div>
						
					</div>
					
					<div class="col-md-4">	
						<div class="row">
								<div class="col-md-12">
									<div class="form-group">
									<label>Method</label>
									<div class="controls">
										<input type="text" class="form-control" name="method" id="method" placeholder="Enter Method">		
									</div>
								</div>
								</div>
								<div class="col-md-12" style="margin-top:16px">
									<div class="form-group">
									<label>Instrument</label>
									<div class="controls">
										<input type="text" class="form-control"  id="instrument" name="instrument" placeholder="Enter Instrument">		
									</div>
									</div>
								</div>
						</div>
					</div>
				</div>
				</div>	


				<div class="col-md-12">
                      <label for="inputText">Editable Text</label>
                      <textarea class="form-control" id="editable" name="editable"></textarea> 
                    </div> 
                    

					<div class="col-md-12">
                      <label for="inputText">Non_Editable Text</label>
                      <textarea class="form-control" id="non_editable" name="non_editable"></textarea> 
                    </div> 
                

			</div>
			<hr>
			
					
          <center><button class="btn btn-success" id="submitButton">Save</button></center>
          </div>
          
        </div>
		</div>  
	</form>	  
      </div>
		
	  <div class="row">
	  			
	  </div>
      
<!--  Add New Category Modal -->
<div class="modal fade" id="add_category" tabindex="-1" role="dialog" aria-labelledby="add_categoryLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <center><h3 class="modal-title" id="add_categoryLabel">Add Category</h3></center>
	   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div id="modal-alert-div"></div>
	  <form>
      <div class="modal-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>  
      </div>
      <div class="modal-footer">
	  <button type="submit" class="btn btn-outline-primary" onclick="save_new_category()" id="save-category">Save  Category</button>
      </div>
	  </form>
    </div>
  </div>
</div>



<!--  Add New outsource_lab Modal -->
<div  id="labs">
<div class="modal fade" id="add_lab" tabindex="-1" role="dialog" aria-labelledby="add_labLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <center><h3 class="modal-title" id="add_labLabel">Add Outsource Lab</h3></center>
	   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <div id="add_lab_modal-alert-div"></div>
	  <form>
          <div class="modal-body">
	           <div class="form-group">
                <label for="lab_name">Lab Name</label>
                <input type="text" class="form-control" id="lab_name" name="lab_name">

                <label for="contact">Contact</label>
                <input type="number" class="form-control" id="contact" name="contact"  maxlength="10" >

                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address">
               </div>
         </div>
      <div class="modal-footer">
	  <button type="submit" class="btn btn-outline-primary" onclick="save_new_lab()" id="save-outsource">Save  Lab</button>
      </div>
	  </form>
    </div>
  </div>
</div>
</div>
</section>
  
  <!-- /.content-wrapper -->
  

 
	
	<?php 
if (isset($response)) {
	?>
	<div class="modal" tabindex="-1" role="dialog">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
         </div>
          <div class="modal-body">
	      <script>
		
		     var dialog = confirm("Do you want to add parameters?");

			 
			 if (dialog) {

                  let url = "<?php  echo base_url();?>test/add_test_parameter"  ;
                   window.location.replace(url);


                       }
                    else {
									let url = "<?php  echo base_url();?>welcome/test"  ;
									window.location.replace(url);

									}
             </script>
           
           </div>
	      
    </div>
    </div>
  </div>
</div>
	
	
	<?php 
}
 ?>
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
</body>
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
<script type="text/javascript">
function save_new_category()
    {   
    
		let url = "<?php echo base_url('project/store');?>";
        let data = {
            name: $("#name").val(),
            
        };
        $.ajax({
            url: url,
            type: "POST",
            data: data,
            success: function(response) {
 
                $("#save-category").prop('disabled', false);
                let successHtml = '<div class="alert alert-success" role="alert"><b>Category Created Successfully</b></div>';
                $("#alert-div").html(successHtml);
                $("#name").val("");
                $("#add_categoryLabel").modal('close');
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


function save_new_lab()
{
	$("#save-outsource").prop('disabled', true);

        let url = "<?php  echo base_url();?>outsource/store";
        let data = {
            lab_name: $("#lab_name").val(),
            contact:$("#contact").val(),
            address:$("#address").val(),
        };
        $.ajax({
            url: url,
            type: "POST",
            data: data,
            success: function(response) {
 
                $("#save-outsource").prop('disabled', false);
                let successHtml = '<div class="alert alert-success" role="alert"><b>Out-source Lab Created Successfully</b></div>';
                $("#alert-div").html(successHtml);
                $("#lab_name").val("");
                $("#contact").val("");
                $("#address").val("");
				$("#divToReload").load(location.href+" #divToReload>*"); 
                $('#labs').modal('close');
				
            },
            error: function(response) {
                $("#save-outsource").prop('disabled', false);
            
                let responseData = JSON.parse(response.responseText);
                console.log(responseData.errors);
 
                if (typeof responseData.errors !== 'undefined') 
                {
                    let errorHtml = '<div class="alert alert-danger" role="alert">' +
                                        '<b>Validation Error!</b>' +
                                        responseData.errors +
                                    '</div>';
                    $("#add_lab_modal-alert-div").html(errorHtml);      
                }
            }
			
        });
		
}
</script>



<script>
		$('#outsourceCheck').click(function() {
    if ($(this).prop("checked") == true) {
        $("#outsource_lab").removeAttr("disabled");
        $("#outsource_amount").removeAttr("disabled");
    } else if ($(this).prop("checked") == false) {
        $("#outsource_amount").attr("disabled", "disabled");
        $("#outsource_lab").attr("disabled", "disabled");
    }
});
</script>

<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>

<script>
 CKEDITOR.replace( 'editable' );
</script>

<script>
 CKEDITOR.replace( 'non_editable' );
</script>	

<link 
href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css" 
rel="stylesheet" />
<script 
src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
</script>
<script 

src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js">
</script>
<script type="text/javascript">
$(document).ready(function() {
  $('.js-example-basic-single').select2();
});
</script>

</html>