<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Forgot Password - Smart MR</title>
    <meta name="description" content="Reset your Smart MR doctor account password">
    <meta name="keywords" content="forgot password, reset password, doctor login, smart mr">

    <!-- Favicons -->
    <link href="<?php echo base_url(); ?>assets/img/favicon.png" rel="icon">
    <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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

    <!-- Custom Styles -->
    <style>
        /* Card Styling */
        .forgot-card {
            background: #ffffff;
            border: none;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.10);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .forgot-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.13);
        }

        .forgot-card-body {
            padding: 2.5rem 2rem;
        }

        /* Logo Section */
        .brand-logo {
            text-decoration: none;
            font-weight: 700;
            font-size: 1.5rem;
            color: #2c3e50;
            letter-spacing: -0.5px;
            transition: color 0.3s ease;
        }

        .brand-logo:hover {
            color: #28a745;
        }

        .brand-logo span {
            color: #28a745;
        }

        /* Headings */
        .page-title {
            font-weight: 700;
            color: #2c3e50;
            font-size: 1.5rem;
            letter-spacing: -0.5px;
        }

        .marquee-warning {
            color: #dc3545;
            font-weight: 700;
            font-size: 0.9rem;
        }

        .spam-note {
            color: #e67e22;
            font-weight: 600;
            font-size: 0.95rem;
            background: #fff8f0;
            padding: 8px 16px;
            border-radius: 8px;
            display: inline-block;
        }

        /* Alert Messages */
        .alert-custom {
            border-radius: 10px;
            border: none;
            padding: 12px 20px;
            font-weight: 500;
        }

        .alert-custom i {
            margin-right: 8px;
        }

        /* Form Inputs */
        .form-input {
            border-radius: 10px;
            padding: 12px 16px;
            border: 2px solid #e9ecef;
            transition: all 0.3s ease;
            font-size: 0.95rem;
            background: #fafbfc;
        }

        .form-input:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.12);
            background: #ffffff;
        }

        .form-input::placeholder {
            color: #a0aec0;
            font-weight: 400;
        }

        /* Submit Button */
        .btn-submit {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            border: none;
            padding: 12px 48px;
            font-weight: 700;
            font-size: 1.05rem;
            border-radius: 50px;
            color: #fff;
            transition: all 0.3s ease;
            letter-spacing: 0.5px;
            min-width: 160px;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(40, 167, 69, 0.35);
            color: #fff;
        }

        .btn-submit:active {
            transform: translateY(0px);
        }

        /* Back to Login Link */
        .back-link {
            color: #6c757d;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            font-size: 0.95rem;
        }

        .back-link:hover {
            color: #28a745;
        }

        .back-link i {
            margin-right: 6px;
            transition: transform 0.3s ease;
        }

        .back-link:hover i {
            transform: translateX(-3px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .forgot-card-body {
                padding: 1.75rem 1.25rem;
            }

            .page-title {
                font-size: 1.25rem;
            }

            .brand-logo {
                font-size: 1.25rem;
            }

            .btn-submit {
                padding: 10px 32px;
                font-size: 0.95rem;
                min-width: 140px;
            }
        }

        @media (max-width: 576px) {
            .forgot-card-body {
                padding: 1.25rem 1rem;
            }

            .form-input {
                padding: 10px 14px;
                font-size: 0.9rem;
            }

            .spam-note {
                font-size: 0.85rem;
                padding: 6px 12px;
            }
        }

        /* Reduced Motion */
        @media (prefers-reduced-motion: reduce) {
            .forgot-card {
                transition: none;
            }
            .btn-submit {
                transition: none;
            }
            .btn-submit:hover {
                transform: none;
            }
            .back-link i {
                transition: none;
            }
            .back-link:hover i {
                transform: none;
            }
        }
    </style>

</head>

<body>

    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-7 col-sm-9 col-11 d-flex flex-column align-items-center justify-content-center">

                            <!-- Logo -->
                            <div class="d-flex justify-content-center py-3">
                                <a href="<?php echo base_url(); ?>" class="brand-logo d-flex align-items-center">
                                    <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Smart MR Logo" height="45" class="me-2">
                                    <span>SMART</span> MR
                                </a>
                            </div>

                            <!-- Forgot Password Card -->
                            <div class="card forgot-card w-100">
                                <div class="card-body forgot-card-body">

                                    <!-- Header -->
                                    <div class="text-center mb-4">
                                        <h5 class="page-title">
                                            <i class="bi bi-key-fill text-success me-2"></i>Forgot Password
                                        </h5>
                                        <marquee class="marquee-warning" behavior="scroll" direction="left" scrollamount="4">
                                            This Forgot Password is only for hospital/doctors, not for MR
                                        </marquee>
                                        <div class="mt-2">
                                            <span class="spam-note">
                                                <i class="bi bi-envelope-exclamation me-1"></i>
                                                Note: Please check SPAM FOLDER for email (if not received)
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Error Message -->
                                    <?php if ($this->session->flashdata('error')): ?>
                                        <div class="alert alert-danger alert-custom" role="alert">
                                            <i class="bi bi-exclamation-triangle-fill"></i>
                                            <?php echo $this->session->flashdata('error'); ?>
                                        </div>
                                    <?php endif; ?>

                                    <!-- Success Message -->
                                    <?php if ($this->session->flashdata('success')): ?>
                                        <div class="alert alert-success alert-custom" role="alert">
                                            <i class="bi bi-check-circle-fill"></i>
                                            <?php echo $this->session->flashdata('success'); ?>
                                        </div>
                                    <?php endif; ?>

                                    <!-- Forgot Password Form -->
                                    <form class="row g-3" method="post" action="<?php echo base_url(); ?>doctor/forgot_password_validation" novalidate>
                                        <div class="col-12">
                                            <div class="input-group">
                                                <span class="input-group-text bg-white border-2 border-end-0 rounded-start-10" style="border-radius: 10px 0 0 10px; border-color: #e9ecef;">
                                                    <i class="bi bi-envelope text-secondary"></i>
                                                </span>
                                                <input 
                                                    type="email" 
                                                    name="username" 
                                                    class="form-control form-input border-start-0 rounded-end-10" 
                                                    id="username"
                                                    placeholder="Enter your registered email address"
                                                    required
                                                    aria-label="Registered Email Address"
                                                    style="border-radius: 0 10px 10px 0;"
                                                >
                                            </div>
                                            <small class="text-muted d-block mt-1">
                                                <i class="bi bi-info-circle me-1"></i>
                                                Enter the email you used during registration
                                            </small>
                                        </div>

                                        <div class="col-12 text-center mt-3">
                                            <button type="submit" class="btn btn-submit">
                                                <i class="bi bi-send me-2"></i>Submit
                                            </button>
                                        </div>
                                    </form>

                                    <!-- Back to Login -->
                                    <div class="text-center mt-4">
                                        <a href="<?php echo base_url(); ?>doctor/dr_login" class="back-link">
                                            <i class="bi bi-arrow-left"></i>Back to Login
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <!-- Footer Credits (Hidden as per original) -->
                            <div class="credits mt-3">
                                <a href="#" style="visibility: hidden;">BootstrapMade</a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center" aria-label="Back to top">
        <i class="bi bi-arrow-up-short"></i>
    </a>

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

</body>

</html>