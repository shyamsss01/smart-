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
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
 
  <?php $this->load->view('doctor/header.php');?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  
  <?php $this->load->view('doctor/sidebar.php');?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Medical Representative Registration</h5>

<form action="<?php echo base_url('Admin/mr_update/' . $visitor['mr_id']); ?>" method="POST">
    <div class="row mb-3">
        <!-- Created At Field -->
        <div class="col-md-6">
    <label for="whenpaid">Payment Date</label>
    <input type="text" id="whenpaid" name="whenpaid" class="form-control datepicker" 
           value="<?php echo $visitor['whenpaid']; ?>" required>
</div>
        <!-- Is Active Field -->
        <div class="col-md-6">
            <label for="is_active">Is Active</label>
            <select id="is_active" name="is_active" class="form-control" required>
                <option value="1" <?php echo ($visitor['is_active'] == 1) ? 'selected' : ''; ?>>Active</option>
                <option value="0" <?php echo ($visitor['is_active'] == 0) ? 'selected' : ''; ?>>Inactive</option>
            </select>
            <p><?php echo form_error('is_active'); ?></p>
        </div>
    </div>
    <center><button type="submit" class="btn btn-success">Save</button></center>
</form>


            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
 
  <?php $this->load->view('doctor/footer.php');?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  
  <script>
  $(document).ready(function() {
  $("#info-alert").hide();

    $("#info-alert").fadeTo(2000, 500).slideUp(500, function() {
      $("#info-alert").slideUp(500);
    });
 
});
</script>
<!-- Include Datepicker Library -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        flatpickr("#whenpaid", {
    //enableTime: true,
    dateFormat: "Y-m-d",
   defaultDate: new Date(), // Set current date and time if no value exists
});

    });
</script>

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

</body>
</html>