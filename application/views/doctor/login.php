<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google AdSense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6136027815494124"
        crossorigin="anonymous">
        </script>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Smart MR - Doctor Login</title>
    <meta name="description" content="Smart MR Doctor Login Portal - Secure access for doctors and hospitals">
    <meta name="keywords" content="doctor login, hospital login, MR appointment, smart mr">

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
        /* Video Background */
        #loginVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        /* Login Card Overlay */
        .login-card {
            background-color: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(4px);
            border: none;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }

        .login-card:hover {
            transform: translateY(-2px);
        }

        /* Card Body Padding */
        .login-card-body {
            padding: 2.5rem 2rem;
        }

        /* Title Styling */
        .login-title {
            font-weight: 700;
            color: #2c3e50;
            letter-spacing: -0.5px;
        }

        .login-subtitle {
            color: #e74c3c;
            font-weight: 600;
        }

        .login-instruction {
            color: #34495e;
            font-size: 0.95rem;
            line-height: 1.6;
            font-weight: 500;
        }

        /* Form Inputs */
        .form-input {
            border-radius: 10px;
            padding: 12px 16px;
            border: 2px solid #e9ecef;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .form-input:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.15);
        }

        /* Login Button */
        .btn-login {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            border: none;
            padding: 12px 48px;
            font-weight: 700;
            font-size: 1.1rem;
            border-radius: 50px;
            color: #fff;
            transition: all 0.3s ease;
            letter-spacing: 0.5px;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(40, 167, 69, 0.35);
            color: #fff;
        }

        .btn-login:active {
            transform: translateY(0px);
        }

        /* Links */
        .auth-links a {
            color: #28a745;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s ease;
            padding: 0 4px;
        }

        .auth-links a:hover {
            color: #1e7e34;
            text-decoration: underline;
        }

        .auth-links .divider {
            color: #adb5bd;
            padding: 0 4px;
        }

        /* Alert Messages */
        .alert-custom {
            border-radius: 10px;
            border: none;
            padding: 12px 20px;
        }

        /* Marque customization */
        .marquee-warning {
            color: #dc3545;
            font-weight: 700;
            font-size: 0.95rem;
        }

        /* OTP Instruction */
        .otp-instruction {
            font-size: 0.9rem;
            font-weight: 600;
            color: #2c3e50;
        }

        .otp-security {
            color: #dc3545;
            font-weight: 700;
            font-size: 0.95rem;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .login-card-body {
                padding: 1.5rem 1.25rem;
            }

            .login-title {
                font-size: 1.25rem;
            }

            .login-instruction {
                font-size: 0.85rem;
            }

            .btn-login {
                padding: 10px 32px;
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {
            .login-card-body {
                padding: 1.25rem 1rem;
            }

            .form-input {
                padding: 10px 14px;
                font-size: 0.9rem;
            }
        }

        /* Accessibility - Reduced Motion */
        @media (prefers-reduced-motion: reduce) {
            .login-card {
                transition: none;
            }

            .btn-login {
                transition: none;
            }

            .btn-login:hover {
                transform: none;
            }
        }
    </style>
</head>

<body>

    <!-- Background Video -->
    <video autoplay muted loop id="loginVideo" aria-hidden="true">
        <source src="<?php echo base_url(); ?>assets/video/main.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div
                            class="col-lg-5 col-md-7 col-sm-9 col-11 d-flex flex-column align-items-center justify-content-center">

                            <!-- Logo (Optional, kept empty as per original) -->
                            <div class="d-flex justify-content-center py-3">
                                <a href="#" class="logo d-flex align-items-center w-auto" aria-label="Home">
                                    <!-- Logo can be added here if needed -->
                                </a>
                            </div>

                            <!-- Login Card -->
                            <div class="card login-card w-100">
                                <div class="card-body login-card-body">

                                    <!-- Header -->
                                    <div class="text-center mb-4">
                                        <h5 class="login-title fs-4">
                                            Doctor Login <span class="text-muted fw-normal">(Not for MR)</span>
                                        </h5>
                                        <marquee class="marquee-warning" behavior="scroll" direction="left"
                                            scrollamount="4">
                                            This Login is only for hospital/doctors not for MR
                                        </marquee>
                                    </div>

                                    <!-- Instructions -->
                                    <div class="alert alert-info alert-custom mb-4" role="alert">
                                        <i class="bi bi-info-circle me-2"></i>
                                        <span class="login-instruction">
                                            Dear doctor, you are expected to create one account and add your MR
                                            profiles.
                                            After that, they will be able to login and take your appointment.
                                        </span>
                                    </div>

                                    <!-- Success Message -->
                                    <?php if (!empty($this->session->userdata('success'))): ?>
                                        <div class="alert alert-success alert-custom" role="alert">
                                            <i class="bi bi-check-circle-fill me-2"></i>
                                            <span style="color: #155724; font-weight: 500;">
                                                <?php echo $this->session->userdata('success'); ?>
                                            </span>
                                        </div>
                                    <?php endif; ?>

                                    <!-- Error Message -->
                                    <?php if ($this->session->flashdata('error')): ?>
                                        <div class="alert alert-danger alert-custom" role="alert">
                                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                            <span style="font-weight: 500;">
                                                <?php echo $this->session->flashdata('error'); ?>
                                            </span>
                                        </div>
                                    <?php endif; ?>

                                    <!-- Login Form -->
                                    <form class="row g-3" method="post"
                                        action="<?php echo base_url(); ?>doctor/login_validation" novalidate>
                                        <div class="col-12">
                                            <input type="email" name="username" class="form-control form-input"
                                                placeholder="Enter Your Registered Email" required
                                                aria-label="Email Address">
                                        </div>

                                        <div class="col-12">
                                            <input type="password" name="password" class="form-control form-input"
                                                placeholder="Enter Password" required aria-label="Password">
                                        </div>

                                        <div class="col-12">
                                            <input type="text" name="otp" class="form-control form-input"
                                                placeholder="Enter One Time OTP" required aria-label="OTP">
                                        </div>

                                        <!-- OTP Instructions -->
                                        <div class="col-12 text-center">
                                            <p class="otp-instruction mb-1">
                                                <i class="bi bi-shield-lock me-1"></i>
                                                For One Time OTP, please use Forgot Password option.
                                                You will receive OTP on your registered email.
                                            </p>
                                            <p class="otp-security mb-0">
                                                <i class="bi bi-exclamation-circle me-1"></i>
                                                This is a one-time activity for security reasons.
                                            </p>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="col-12 text-center mt-3">
                                            <button type="submit" class="btn btn-login">
                                                <i class="bi bi-box-arrow-in-right me-2"></i>Login
                                            </button>
                                        </div>
                                    </form>

                                    <!-- Footer Links -->
                                    <div class="text-center mt-4 auth-links">
                                        <a href="<?php echo base_url(); ?>doctor/sing_up">Create an account</a>
                                        <span class="divider">|</span>
                                        <a href="<?php echo base_url(); ?>doctor/forgot_password">Forgot Password</a>
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