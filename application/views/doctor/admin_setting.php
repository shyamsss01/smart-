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

  <!-- Google Fonts - Modern & Clean -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:300,400,500,600,700&display=swap" rel="stylesheet">

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
  ======================================================== -->

  <style>
    /* ===== GLOBAL RESET & FONTS ===== */
    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      background: #f4f8fc;
      color: #1a2639;
    }

    .card {
      border: none;
      border-radius: 24px;
      box-shadow: 0 12px 40px rgba(0, 20, 40, 0.08);
      background: #ffffff;
      transition: all 0.2s ease;
    }

    .card-body {
      padding: 2rem 2rem;
    }

    .card-title {
      font-weight: 600;
      font-size: 1.25rem;
      letter-spacing: -0.02em;
      color: #0b2b4f;
      margin-bottom: 1.5rem;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .card-title i {
      color: #2a7de1;
      font-size: 1.5rem;
    }

    /* ===== FORM ELEMENTS ===== */
    label {
      font-weight: 500;
      font-size: 0.9rem;
      color: #2c3e50;
      margin-bottom: 0.3rem;
    }

    .form-control, textarea {
      border: 1.5px solid #e9edf4;
      border-radius: 16px;
      padding: 0.6rem 1rem;
      font-size: 0.95rem;
      transition: 0.2s;
      background: #fafcff;
      width: 100%;
    }

    .form-control:focus, textarea:focus {
      border-color: #2a7de1;
      box-shadow: 0 0 0 4px rgba(42, 125, 225, 0.12);
      background: #ffffff;
    }

    textarea {
      border-radius: 16px;
      resize: vertical;
    }

    .btn-success {
      background: #2a7de1;
      border: none;
      border-radius: 40px;
      padding: 0.6rem 2rem;
      font-weight: 600;
      font-size: 0.95rem;
      color: #fff;
      transition: 0.2s;
      box-shadow: 0 4px 12px rgba(42, 125, 225, 0.25);
    }

    .btn-success:hover {
      background: #1a5fc7;
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(42, 125, 225, 0.3);
    }

    .btn-primary {
      background: #2a7de1;
      border: none;
      border-radius: 40px;
      padding: 0.4rem 1.2rem;
      font-weight: 500;
      font-size: 0.85rem;
      color: #fff;
      transition: 0.2s;
    }

    .btn-primary:hover {
      background: #1a5fc7;
      transform: translateY(-2px);
    }

    .btn-danger {
      background: #e74c6f;
      border: none;
      border-radius: 40px;
      padding: 0.4rem 1.2rem;
      font-weight: 500;
      font-size: 0.85rem;
      color: #fff;
      transition: 0.2s;
    }

    .btn-danger:hover {
      background: #c0392b;
      transform: translateY(-2px);
    }

    /* ===== PAGINATION / INPUT GROUP ===== */
    .pagination {
      margin: 0;
      gap: 6px;
    }

    .pagination .page-item {
      flex: 1;
    }

    .pagination .page-item .form-control {
      border-radius: 16px;
      border: 1.5px solid #e9edf4;
      padding: 0.6rem 1rem;
      width: 100%;
    }

    /* ===== TABLE ===== */
    .table {
      border-collapse: separate;
      border-spacing: 0 8px;
      margin-top: 0.5rem;
    }

    .table thead th {
      background: #f0f5fe;
      color: #1a3a6b;
      font-weight: 600;
      font-size: 0.85rem;
      text-transform: uppercase;
      letter-spacing: 0.03em;
      padding: 0.9rem 1rem;
      border: none;
      border-radius: 16px 16px 0 0;
    }

    .table tbody tr {
      background: #ffffff;
      border-radius: 16px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
      transition: 0.15s;
    }

    .table tbody tr:hover {
      box-shadow: 0 6px 18px rgba(0, 20, 40, 0.06);
      transform: scale(1.005);
    }

    .table tbody td {
      padding: 0.9rem 1rem;
      border: none;
      background: #fafcff;
      vertical-align: middle;
      font-size: 0.95rem;
    }

    .table tbody tr td:first-child {
      border-radius: 16px 0 0 16px;
    }

    .table tbody tr td:last-child {
      border-radius: 0 16px 16px 0;
    }

    /* ===== ALERT ===== */
    .alert-success {
      background: #e6f4ea;
      border: none;
      border-radius: 20px;
      color: #1e6b3b;
      padding: 0.9rem 1.5rem;
      font-weight: 500;
    }

    /* ===== LAYOUT TWEAKS ===== */
    .row.gap-3 {
      gap: 1.5rem;
    }

    hr {
      border: none;
      border-top: 2px solid #ecf2f9;
      margin: 2rem 0;
    }

    .form-check {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-top: 0.8rem;
    }

    .form-check-input {
      width: 1.2rem;
      height: 1.2rem;
      border-radius: 6px;
      border: 1.5px solid #cbd5e1;
      accent-color: #2a7de1;
      cursor: pointer;
    }

    .form-check-label {
      font-weight: 400;
      color: #2c3e50;
    }

    .remarks-hint {
      font-size: 0.85rem;
      color: #6b7a8f;
      background: #f4f8fc;
      padding: 0.8rem 1rem;
      border-radius: 16px;
      margin-top: 0.5rem;
      border-left: 4px solid #2a7de1;
    }

    @media (max-width: 768px) {
      .card-body {
        padding: 1.5rem 1rem;
      }
      .table thead th, .table tbody td {
        font-size: 0.8rem;
        padding: 0.6rem;
      }
    }

    /* back-to-top (already in template) */
    .back-to-top {
      background: #2a7de1;
      border-radius: 60px;
      box-shadow: 0 8px 20px rgba(42,125,225,0.25);
    }
    .back-to-top:hover {
      background: #1a5fc7;
    }

    /* hide original VL – we use modern grid */
    .vl {
      display: none;
    }
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
      <div class="row" style="width:100%">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">

              <!-- ===== TWO COLUMN LAYOUT ===== -->
              <div class="row g-4">

                <!-- LEFT: MR LIMITS -->
                <div class="col-md-6">
                  <h6 class="card-title">
                    <i class="ri-user-settings-line"></i> MR Limits
                  </h6>
                  <form action="<?php echo base_url();?>doctor/Mr_count" method="POST">

                    <div class="mb-3">
                      <label for="per_day_mr_count" class="form-label">No. of MR Allowed per day</label>
                      <div class="pagination">
                        <div class="page-item w-100">
                          <?php if(!empty($mr_count['per_day_mr_count'])) { 
                            $per_day = $mr_count['per_day_mr_count']; ?>
                            <input type="number" class="form-control" name="per_day_mr_count" value="<?php echo $per_day ?>">
                          <?php } else { ?>
                            <input type="number" class="form-control" name="per_day_mr_count" placeholder="e.g. 5">
                          <?php } ?>
                        </div>
                      </div>
                    </div>

                    <div class="mb-3">
                      <label for="monthly_mr_max_visit_limit" class="form-label">Max MR Visit (Monthly)</label>
                      <div class="pagination">
                        <div class="page-item w-100">
                          <?php if(!empty($mr_count['monthly_mr_max_visit_limit'])) { 
                            $monthly_mr = $mr_count['monthly_mr_max_visit_limit']; ?>
                            <input type="number" value="<?php echo $monthly_mr ?>" name="monthly_mr_max_visit_limit" class="form-control">
                          <?php } else { ?>
                            <input type="number" name="monthly_mr_max_visit_limit" class="form-control" placeholder="e.g. 50">
                          <?php } ?>
                        </div>
                      </div>
                    </div>

                    <div class="mb-3">
                      <label for="remarks" class="form-label">Remarks</label>
                      <div class="remarks-hint">
                        <i class="bi bi-info-circle me-1"></i> Enter tip for MR. Example: <strong>4 PM to 6 PM Weekday</strong> and <strong>11 AM on weekend!</strong>
                      </div>
                      <?php if(!empty($mr_count['remarks'])) { ?>
                        <textarea name="remarks" class="form-control mt-2" rows="3"><?php echo $mr_count['remarks'] ?></textarea>
                      <?php } else { ?>
                        <textarea name="remarks" class="form-control mt-2" rows="3" placeholder="Add any special instructions..."></textarea>
                      <?php } ?>
                    </div>

                    <div class="form-check mb-4">
                      <?php if(isset($mr_count['checkbox_allow']) && $mr_count['checkbox_allow'] == 'on') { ?>
                        <input type="checkbox" class="form-check-input" id="checkbox_allow" name="checkbox_allow" checked>
                      <?php } else { ?>
                        <input type="checkbox" class="form-check-input" id="checkbox_allow" name="checkbox_allow" value="on">
                      <?php } ?>
                      <label class="form-check-label" for="checkbox_allow">Allow Appointment booking emails by MR</label>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Save MR Limits</button>
                  </form>
                </div>

                <!-- RIGHT: ADD HOLIDAY -->
                <div class="col-md-6">
                  <h6 class="card-title">
                    <i class="ri-calendar-event-line"></i> Add New Holiday
                  </h6>
                  <form action="<?php echo base_url();?>doctor/Calender_Schedule" method="POST">

                    <div class="row g-3 mb-3">
                      <div class="col-md-6">
                        <label for="from_date" class="form-label">From</label>
                        <input type="date" class="form-control" id="date" name="from_date">
                        <p class="text-danger small"><?php echo form_error('from_date');?></p>
                      </div>
                      <div class="col-md-6">
                        <label for="to_date" class="form-label">To</label>
                        <input type="date" name="to_date" class="form-control">
                        <p class="text-danger small"><?php echo form_error('to_date');?></p>
                      </div>
                    </div>

                    <div class="mb-3">
                      <label for="reason_of_holiday" class="form-label">Reason / Event</label>
                      <textarea class="form-control" id="reason_of_holiday" name="reason_of_holiday" placeholder="e.g. Diwali, Christmas, Clinic closure..." rows="2"></textarea>
                      <p class="text-danger small"><?php echo form_error('reason_of_holiday');?></p>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Add Holiday</button>
                  </form>
                </div>
              </div><!-- /.row -->

              <hr>

              <!-- ===== SUCCESS ALERT ===== -->
              <?php if(!empty($this->session->userdata('deleted'))) { ?>
                <div class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
                  <i class="bi bi-check-circle-fill me-2"></i> <?php echo $this->session->userdata('deleted'); unset($_SESSION['success']); ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php } ?>

              <!-- ===== HOLIDAY TABLE ===== -->
              <h6 class="card-title text-center mt-4">
                <i class="ri-table-line"></i> Holiday Table
              </h6>

              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Date</th>
                      <th>Purpose / Event</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(!empty($schedules)) { 
                      foreach($schedules as $schedule) {
                        $date = date_create($schedule['holidayDate']);
                        $Period = date_format($date, "d-m-y");
                    ?>
                      <tr>
                        <td><?php echo $schedule['schedule_id'] ?></td>
                        <td><?php echo $Period ?></td>
                        <td><?php echo $schedule['reason_of_holiday'] ?></td>
                        <td>
                          <a href="<?php echo base_url('doctor/delete/'. $schedule['schedule_id'])?>" class="btn btn-primary btn-sm">Delete</a>
                        </td>
                      </tr>
                    <?php } } ?>
                  </tbody>
                </table>
              </div>

            </div><!-- /.card-body -->
          </div><!-- /.card -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php $this->load->view('doctor/footer.php');?>
  <!-- End Footer -->

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

  <!-- ===== AUTO-HIDE ALERT (working same) ===== -->
  <script>
    $(document).ready(function() {
      $("#success-alert").fadeTo(3000, 500).slideUp(500, function() {
        $("#success-alert").slideUp(500);
      });
    });
  </script>

</body>
</html>