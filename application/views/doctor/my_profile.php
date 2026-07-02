<!DOCTYPE html>
<html lang="en">

<head>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6136027815494124"
    crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMART MR · Profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts - Modern & Clean -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:300,400,500,600,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

  <style>
    /* ===== GLOBAL ===== */
    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      background: #f4f8fc;
      color: #1a2639;
    }

    .pagetitle h1 {
      font-weight: 700;
      font-size: 1.8rem;
      color: #0b2b4f;
      letter-spacing: -0.02em;
    }

    .breadcrumb {
      background: transparent;
      padding: 0;
      font-size: 0.9rem;
    }

    .breadcrumb-item a {
      color: #2a7de1;
      text-decoration: none;
      font-weight: 500;
    }

    .breadcrumb-item.active {
      color: #64748b;
      font-weight: 500;
    }

    /* ===== CARD ===== */
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

    /* ===== TABS ===== */
    .nav-tabs-bordered {
      border-bottom: 2px solid #ecf2f9;
      margin-bottom: 1.5rem;
    }

    .nav-tabs-bordered .nav-link {
      border: none;
      padding: 0.8rem 1.5rem;
      font-weight: 600;
      font-size: 0.95rem;
      color: #64748b;
      border-radius: 40px 40px 0 0;
      transition: 0.2s;
      background: transparent;
      margin-right: 0.5rem;
    }

    .nav-tabs-bordered .nav-link:hover {
      color: #0b2b4f;
      background: #f0f5fe;
    }

    .nav-tabs-bordered .nav-link.active {
      color: #2a7de1;
      background: #eef2ff;
      border-bottom: 3px solid #2a7de1;
    }

    .tab-content {
      padding-top: 0.5rem;
    }

    /* ===== PROFILE OVERVIEW ===== */
    .profile-overview .card-title {
      font-weight: 600;
      font-size: 1.1rem;
      color: #0b2b4f;
      margin-bottom: 1.5rem;
    }

    .profile-overview .row {
      padding: 0.6rem 0;
      border-bottom: 1px solid #f1f5f9;
    }

    .profile-overview .row:last-child {
      border-bottom: none;
    }

    .profile-overview .label {
      font-weight: 500;
      color: #475569;
      font-size: 0.9rem;
    }

    .profile-overview .col-md-8 {
      font-weight: 500;
      color: #0b2b4f;
      font-size: 0.95rem;
    }

    /* ===== FORM ===== */
    .form-label {
      font-weight: 500;
      color: #2c3e50;
      font-size: 0.9rem;
    }

    .form-control {
      border: 1.5px solid #e9edf4;
      border-radius: 16px;
      padding: 0.7rem 1rem;
      font-size: 0.95rem;
      transition: 0.2s;
      background: #fafcff;
    }

    .form-control:focus {
      border-color: #2a7de1;
      box-shadow: 0 0 0 4px rgba(42, 125, 225, 0.10);
      background: #ffffff;
    }

    .form-control[type="password"] {
      letter-spacing: 2px;
    }

    .btn-primary {
      background: #2a7de1;
      border: none;
      border-radius: 40px;
      padding: 0.7rem 2.5rem;
      font-weight: 600;
      font-size: 0.95rem;
      color: #fff;
      transition: 0.2s;
      box-shadow: 0 4px 12px rgba(42, 125, 225, 0.25);
    }

    .btn-primary:hover {
      background: #1a5fc7;
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(42, 125, 225, 0.30);
    }

    /* ===== ALERT ===== */
    .alert-success {
      background: #e6f4ea;
      border: none;
      border-radius: 20px;
      color: #1e6b3b;
      padding: 0.9rem 1.5rem;
      font-weight: 500;
      box-shadow: 0 4px 12px rgba(30, 107, 59, 0.10);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
      .card-body {
        padding: 1.5rem 1rem;
      }

      .nav-tabs-bordered .nav-link {
        padding: 0.6rem 1rem;
        font-size: 0.85rem;
      }

      .profile-overview .row {
        flex-direction: column;
        gap: 0.2rem;
      }

      .profile-overview .label {
        font-weight: 600;
      }
    }

    /* ===== BACK TO TOP ===== */
    .back-to-top {
      background: #2a7de1;
      border-radius: 60px;
      box-shadow: 0 8px 20px rgba(42, 125, 225, 0.25);
    }

    .back-to-top:hover {
      background: #1a5fc7;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php $this->load->view('doctor/header.php'); ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php $this->load->view('doctor/sidebar.php'); ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1><i class="bi bi-person-circle me-2" style="color:#2a7de1;"></i>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <!-- ===== SUCCESS ALERT (working same) ===== -->
    <p>
      <?php if (!empty($this->session->userdata('mr_update'))) { ?>
      <div class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i>
        <?php echo $this->session->userdata('mr_update');
        unset($_SESSION['success']); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php } ?>
    </p>

    <section class="section profile">
      <div class="row">
        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">

              <!-- ===== BORDERED TABS ===== -->
              <ul class="nav nav-tabs nav-tabs-bordered">
                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">
                    <i class="bi bi-eye me-1"></i> Overview
                  </button>
                </li>
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">
                    <i class="bi bi-pencil-square me-1"></i> Edit Profile
                  </button>
                </li>
              </ul>

              <div class="tab-content pt-2">

                <!-- ===== TAB 1: OVERVIEW ===== -->
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">
                    <i class="bi bi-person-badge me-2" style="color:#2a7de1;"></i> Profile Details
                  </h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Hospital Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $users->hospital_name; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8"><?php echo $users->address; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo $users->mobile; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Username</div>
                    <div class="col-lg-9 col-md-8"><?php echo $users->username; ?></div>
                  </div>
                </div>

                <!-- ===== TAB 2: EDIT PROFILE ===== -->
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <form action="<?php echo base_url('doctor/dr_update/' . $users->id); ?>" method="POST">

                    <div class="row mb-3">
                      <label for="hospital_name" class="col-md-4 col-lg-3 col-form-label">Hospital Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="hospital_name" type="text" class="form-control" id="hospital_name"
                          value="<?php echo $users->hospital_name; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="address"
                          value="<?php echo $users->address; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="mobile" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="mobile" type="number" class="form-control" id="mobile"
                          value="<?php echo $users->mobile; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="username" type="email" class="form-control" id="username"
                          value="<?php echo $users->username; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="password" class="col-md-4 col-lg-3 col-form-label">Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="password"
                          value="<?php echo $users->password; ?>">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check2-circle me-1"></i> Save Changes
                      </button>
                    </div>
                  </form>

                </div><!-- End Edit Profile Tab -->

              </div><!-- End Tab Content -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php $this->load->view('doctor/footer.php'); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

  <!-- ===== AUTO-HIDE ALERT (working same) ===== -->
  <script>
    $(document).ready(function () {
      $("#success-alert").fadeTo(3000, 500).slideUp(500, function () {
        $("#success-alert").slideUp(500);
      });
    });
  </script>

</body>

</html>