<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../images/favicon.ico">

    <title>Patholinks- Test Parameter </title>
  
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
	
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

</head>
<?php $this->load->view('header.php'); ?>
<body class="hold-transition skin-blue layout-top-nav" style="background:url(<?php  echo base_url()?>assets/img/add_test.jpg) ;">
<div   style=" width: 100%;" >
 <!-- Main Navbar -->
   <!-- Content Wrapper. Contains page content -->
  <div  style="background:url(<?php  echo base_url()?>assets/img/add_test.jpg) ;">
    <!-- Content Header (Page header) -->
    <section class="content">

    <?php 
$test_id = null;
if (isset($has_test_id)) {
  $test_id=$has_test_id;
}else{
  $test_id= $this->session->userdata('a');
}

$this->load->model('test_model');
$data['test']=$this->Test_model->fetch_single_test($test_id);
 //print_r($data['test']) ;
 
 ?>
  	   <div class="row">
		  	<div class="box">
		  		<div class="box-body">
          <center><h3><span style="font-weight: bold;color:black">Add Parameters for <?php echo $data['test']['test_name']; ?></h3></span></center>
		  			
		  		</div>
		  	</div>	  
		  
		<div class="col-12"  style="background:url(<?php  echo base_url()?>assets/img/add_test.jpg) ;">
		  	<div class="box"  style="background:url(<?php  echo base_url()?>assets/img/add_test.jpg) ;">
		<div class="box-body">
			<!-- <a href="<?php echo base_url();?>/welcome/add_category"><button class="btn btn-success" style="float: right;">Add Category</button></a> -->

			<div class="container">
  
    <div class="card"  >
        <div class="card-header">
            <button class="btn btn-primary" onclick="createProject()"> 
               Add Parameter
            </button>
        </div>
        <div class="card-body">
            <div id="alert-div">
             </div>
            <!-- <table id=""  class="table table-bordered"> -->
			<table id="example8" style="border-style: solid;" class="table table-responsive-md">
                <thead>
                    <tr>
                        <!-- <th>ID</th> -->
					              <th>Parameters</th>
                        <th>Values</th>
                        <th>Unit</th>
                        <th width="240px">Action</th>
                    </tr>
                </thead>
                <tbody id="projects-table-body">
                     
                </tbody>
                 
            </table>
        </div>
    </div>
</div>


<!-- modal for creating and editing function -->
<div class="modal" tabindex="-1" role="dialog" id="form-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="modal-alert-div">
      </div>

        <form>
            <input type="hidden" name="update_id" id="update_id">
             <label> Select Parameter</label>
					   <div class="controls">
						 <select  class="js-example-basic-single form-control" name="parameter" id="parameter">
                        <?php
																
                            if(!empty($parameters)) {
                                  foreach($parameters as $parameter){
                                      ?>
                           <option value="<?php echo $parameter['parameter_id'];?>"><?php echo $parameter['parameter_name'];?></option>
                                                                                    
                                      <?php 
                                                                  }
                                                    }
                         ?>			
						</select>		
					  </div>
             
            <div class="form-group">
             <input type="hidden" class="form-control" id="test_id" name="test_id" value="<?php echo $test_id?>" >
            </div>

          <div class="md-col-6">
          <center><button type="submit" class="btn btn-success" id="save-project-btn">Save </button></center>
          </div>
           
        </form>
      </div>
    </div>
  </div>
</div>
</div> 
</div> 

  <!-- view record modal -->
<div class="modal" tabindex="-1" role="dialog" id="view-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> Sub Parameter Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <table id="example8"   style="border-style: solid;" class="table table-responsive-md" >
                <thead>
                    <tr>
                       <!-- <th>ID</th> -->
					              <th>Sub Parameters</th>
                        <th>Values</th>
                        <th>Unit</th>
                    </tr>
                </thead>
                <tbody id="sub-para-table-body">
              </tbody>
        </div>
    </div>
  </div>
 </div>
    </div>
  </div>
  


  </div>    <!-- /.content -->
  </div> 
</section>

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

<script type="text/javascript">
 
 $(document).ready(function() {
  $('.js-example-basic-single').select2();
});
 showAllProjects();
 
    /*
        This function will get all the project records
    */
  
    function showAllProjects()
    {

        var test_id=document.getElementById("test_id").value;  
          //alert(test_id);

        let url ="<?php echo base_url()?>test/show_test_parameters/" + test_id ;

       
        $.ajax({
            url: url,
            type: "GET",
            success: function(response) {
                $("#projects-table-body").html("");
               
                let projects = response;
                for (var i = 0; i < projects.length; i++)
				
                {
					
                    let sub =  '<button ' +
                                        ' class="btn btn-info btn-sm" ' +
                                        ' onclick="showProject(' + projects[i].parameter + ')"> Sub Parameters' +
                                    '</button> ';
                    let editBtn =  '<button ' +
                                        ' class="btn btn-success btn-sm " ' +
                                        ' onclick="editProject(' + projects[i].test_para_id + ')">Edit' +
                                    '</button> ';
                    let deleteBtn =  '<button ' +
                                        ' class="btn btn-danger btn-sm" ' +
                                        ' onclick="destroyProject(' + projects[i].test_para_id + ')">Delete' +
                                    '</button>'
 
                                    let str = projects[i].has_values_items ; 
                                          let res = str.replace(/;/g, " /  " );

                       var projectRow=null;

                       if(projects[i].unit_title === null)
                                    {
                                      projectRow = 
                                                            '<tr>' +
                                            // '<td>' + projects[i].test_para_id + '</td>' +  
                                            '<td>' + projects[i].parameter_name + '</td>' +
                                            '<td>' + res + '</td>' +
                                            '<td>' + " "+ '</td>' +
                                            '<td  width="240px">' + editBtn + deleteBtn+ " " + sub+    '</td>' +
                                                            '</tr>';

                                    }else{
                                      
                                      projectRow =
                                      
                                                              '<tr>' +
                                            // '<td>' + projects[i].test_para_id + '</td>' +  
                                            '<td>' + projects[i].parameter_name + '</td>' +
                                            '<td>' +res + '</td>' +
                                            '<td>' + projects[i].unit_title + '</td>' +
                                            '<td  width="240px">' + editBtn +  deleteBtn+ '</td>' +
                                                            '</tr>';


                                    }
					
				
                    $("#projects-table-body").append(projectRow);
					
                }
 
                 
            },
            error: function(response) {
                console.log(response)
            }
        });
    }
 
    /*
        check if form submitted is for creating or updating
    */
    $("#save-project-btn").click(function(event ){
        event.preventDefault();
        if($("#update_id").val() == null || $("#update_id").val() == "")
        {
            storeProject();
        } else {
            updateProject();
        }
    })
 
 
    /*
        show modal for creating a record and 
        empty the values of form and remove existing alerts
    */
    function createProject()
    {
        $("#alert-div").html("");
        $("#modal-alert-div").html("");
        $("#update_id").val("");
        $("#test_id").val("<?php  echo  $test_id?>");
        $("#parameter").val("");
        $("#form-modal").modal('show'); 
    }
 
    /*
        submit the form and will be stored to the database
    */
    function storeProject()
    {   
        $("#save-project-btn").prop('disabled', true);
          

        let url = "<?php echo base_url('test/testparameter_validation');?>";
        
        let data = {
            test_id: $("#test_id").val(),
            parameter:$("#parameter").val(),
            
        };
        
        $.ajax({
            url: url,
            type: "POST",
            data: data,
            success: function(response) {
 
                $("#save-project-btn").prop('disabled', false);
                let successHtml = '<div class="alert alert-success" role="alert"><b>Category Created Successfully</b></div>';
                $("#alert-div").html(successHtml);
                //$("#name").val("");
                $("#test_id").val("<?php  echo  $test_id?>");
                $("#parameter").val("");
                 showAllProjects();
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
 
 
    function showProject(parameter)
    {
       
    
        let url = "<?php  echo base_url('test/show_subparameter/');?>"+parameter ;
        $.ajax({
            url: url,
            type: "GET",
            success: function(response) {
           
              $("#view-modal").modal('show'); 
              let project = response;
              for (var i = 0; i < project.length; i++)


             {

              
              let str = project[i].has_values_items ; 
               let res = str.replace(/;/g, " /  " );

                var  unit = null;
                if(project[i].unit_title  === null){
                  unit = " ";
                }else{
                  unit = project[i].unit_title;  
                }
              let projectRow = 
					
					           '<tr>' +
										// '<td>' + project[i].sub_para_id + '</td>' +  
										'<td>' + project[i].sub_parameter_name + '</td>' +
                    '<td>' + res  + '</td>' +
                    '<td>' + unit	 + '</td>' +
                                    '</tr>';
                    $("#sub-para-table-body").append(projectRow);
                  
                }
 

             },
               
             error: function(response) {
                console.log(response)
            }
          });
    }
 
    /*
        edit record function
        it will get the existing value and show the project form
    */
    function editProject(test_para_id)
    {
        let url = "<?php  echo base_url('test/testparameter_edit/');?>" + test_para_id ;
		
        $.ajax({
            url: url,
            type: "GET",
            success: function(response) {
                let project = response;
                $("#alert-div").html("");
                $("#modal-alert-div").html("");
                $("#update_id").val(project.test_para_id);
               // $("#name").val(project.name);
               $("#parameter").val(project.parameter);
                $("#form-modal").modal('show'); 
            },
            error: function(response) {
                 
            }
        });
    }
 
    /*
        sumbit the form and will update a record
    */
    function updateProject()
    {
        $("#save-project-btn").prop('disabled', true);
        let url = "<?php echo base_url();?>test/testparameter_update/" + $("#update_id").val();
        let data = {
            test_para_id: $("#update_id").val(),
            parameter: $("#parameter").val(),
            
        };
        $.ajax({
            url: url,
            type: "POST",
            data: data,
            success: function(response) {
                $("#save-project-btn").prop('disabled', false);
                let successHtml = '<div class="alert alert-success" role="alert"><b>Category Updated Successfully</b></div>';
                $("#alert-div").html(successHtml);
                $("#parameter").val("");
                
                showAllProjects();
                $("#form-modal").modal('hide');
                window.location.reload();
            },
            error: function(response) {
                /*
                    show validation error
                */
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
 
    function destroyProject(test_para_id)
{
  //alert(range_id);
    let url = "<?php echo base_url();?>test/testparameter_delete/"+test_para_id ;
   
    $.ajax({
      url: url,
        type: "DELETE",
       
        success: function(response) {
          alert(response);
            let successHtml = '<div class="alert alert-success" role="alert"><b>Range Deleted Successfully</b></div>';
           
          $("#modal-alert-range-div").html(successHtml);
         
          $("#form-modal").modal('hide');
          window.location.reload();
          showAllProjects();
        },
        error: function(response) {
            console.log(response)
        }
    });
}

    
</script>
</html>



