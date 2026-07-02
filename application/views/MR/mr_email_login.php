<!DOCTYPE html>
<html lang="en">

<head>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6136027815494124" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Smart MR - Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- ===== PREMIUM GOOGLE FONTS ===== -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- DataTable CDN LINKS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

  <style>
    /* ============================================================
       PREMIUM PRODUCTION LEVEL STYLES
       ============================================================ */
    
    /* ----- CSS VARIABLES ----- */
    :root {
      --primary-dark: #0a1628;
      --primary-blue: #1a3a5c;
      --accent-blue: #4facfe;
      --accent-cyan: #00f2fe;
      --accent-gold: #f6b83e;
      --accent-gold-light: #fde8b3;
      --gradient-blue: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
      --gradient-gold: linear-gradient(135deg, #f6b83e 0%, #f5a623 100%);
      --gradient-dark: linear-gradient(135deg, #0a1628 0%, #1a3a5c 100%);
      --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
      --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
      --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
      --shadow-2xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
      --shadow-glow: 0 0 40px rgba(79, 172, 254, 0.15);
      --shadow-gold: 0 0 40px rgba(246, 184, 62, 0.2);
      --radius-sm: 8px;
      --radius-md: 16px;
      --radius-lg: 24px;
      --radius-full: 9999px;
      --transition-fast: 150ms cubic-bezier(0.4, 0, 0.2, 1);
      --transition-base: 300ms cubic-bezier(0.4, 0, 0.2, 1);
      --transition-bounce: 500ms cubic-bezier(0.34, 1.56, 0.64, 1);
      --font-primary: 'Plus Jakarta Sans', -apple-system, sans-serif;
      --font-secondary: 'Inter', -apple-system, sans-serif;
    }

    /* ----- BASE STYLES ----- */
    body {
      font-family: var(--font-secondary);
      background: #f0f4f9;
      color: #1a2a3a;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: var(--font-primary);
      font-weight: 700;
      letter-spacing: -0.02em;
      color: #0a1628;
    }

    /* ===== MAIN CONTAINER - PREMIUM ===== */
    .main-container {
      padding: 30px 20px 40px;
      max-width: 1400px;
      margin: 0 auto;
      flex: 1;
    }

    /* ===== HEADER TITLE SECTION ===== */
    .page-header {
      background: var(--gradient-dark);
      padding: 30px 40px;
      border-radius: var(--radius-lg);
      margin-bottom: 30px;
      position: relative;
      overflow: hidden;
      box-shadow: var(--shadow-xl);
    }

    .page-header::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -10%;
      width: 300px;
      height: 300px;
      background: rgba(79, 172, 254, 0.08);
      border-radius: 50%;
      pointer-events: none;
    }

    .page-header::after {
      content: '';
      position: absolute;
      bottom: -30%;
      left: 20%;
      width: 200px;
      height: 200px;
      background: rgba(246, 184, 62, 0.06);
      border-radius: 50%;
      pointer-events: none;
    }

    .page-header h2 {
      color: #ffffff;
      font-size: 28px;
      font-weight: 800;
      margin: 0;
      position: relative;
      z-index: 1;
      letter-spacing: -0.03em;
    }

    .page-header h2 .highlight {
      background: var(--gradient-gold);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .page-header p {
      color: rgba(255, 255, 255, 0.7);
      margin: 8px 0 0;
      font-size: 14px;
      position: relative;
      z-index: 1;
    }

    /* ===== NOTES / ALERT SECTION ===== */
    .alert-notes {
      background: #ffffff;
      border-radius: var(--radius-lg);
      padding: 20px 28px;
      box-shadow: var(--shadow-md);
      margin-bottom: 30px;
      border-left: 5px solid transparent;
      background-image: linear-gradient(#ffffff, #ffffff), var(--gradient-gold);
      background-origin: padding-box, border-box;
      background-clip: padding-box, border-box;
      transition: var(--transition-base);
    }

    .alert-notes:hover {
      box-shadow: var(--shadow-xl), var(--shadow-gold);
      transform: translateY(-2px);
    }

    .alert-notes .note-item {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      padding: 8px 0;
    }

    .alert-notes .note-item .icon {
      color: var(--accent-gold);
      font-size: 20px;
      flex-shrink: 0;
      margin-top: 2px;
    }

    .alert-notes .note-item .text {
      font-family: var(--font-secondary);
      font-size: 14px;
      font-weight: 500;
      color: #1a2a3a;
      margin: 0;
      line-height: 1.6;
    }

    .alert-notes .note-item .text strong {
      color: #d63031;
      font-weight: 700;
    }

    /* ===== TABLE WRAPPER - PREMIUM ===== */
    .table-wrapper {
      background: #ffffff;
      border-radius: var(--radius-lg);
      padding: 25px 20px;
      box-shadow: var(--shadow-lg);
      transition: var(--transition-base);
      overflow: hidden;
    }

    .table-wrapper:hover {
      box-shadow: var(--shadow-xl), var(--shadow-glow);
    }

    .table-wrapper .table-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
      flex-wrap: wrap;
      gap: 15px;
    }

    .table-wrapper .table-header h5 {
      font-family: var(--font-primary);
      font-weight: 700;
      font-size: 18px;
      color: #0a1628;
      margin: 0;
    }

    .table-wrapper .table-header h5 i {
      color: var(--accent-blue);
      margin-right: 8px;
    }

    .table-wrapper .table-header .badge-count {
      background: var(--gradient-blue);
      color: #ffffff;
      padding: 4px 16px;
      border-radius: var(--radius-full);
      font-size: 13px;
      font-weight: 600;
    }

    /* ===== DATA TABLE - PREMIUM ===== */
    .table.datatable {
      margin-bottom: 0;
      border-collapse: separate;
      border-spacing: 0 8px;
      width: 100%;
    }

    .table.datatable thead th {
      font-family: var(--font-primary);
      font-weight: 700;
      font-size: 13px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      color: #4a5a6a;
      background: #f8faff;
      padding: 14px 16px;
      border: none;
      border-radius: var(--radius-sm);
    }

    .table.datatable tbody tr {
      background: #ffffff;
      border-radius: var(--radius-sm);
      transition: var(--transition-base);
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
    }

    .table.datatable tbody tr:hover {
      transform: translateY(-2px);
      box-shadow: var(--shadow-lg), var(--shadow-glow);
      background: #fafbff;
    }

    .table.datatable tbody td {
      padding: 16px 16px;
      border: none;
      vertical-align: middle;
      font-size: 14px;
      color: #1a2a3a;
      font-weight: 500;
    }

    .table.datatable tbody td:first-child {
      border-radius: var(--radius-sm) 0 0 var(--radius-sm);
    }

    .table.datatable tbody td:last-child {
      border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
    }

    /* ===== BUTTONS - PREMIUM ===== */
    .btn-premium {
      padding: 10px 22px;
      border-radius: var(--radius-full);
      font-family: var(--font-primary);
      font-weight: 700;
      font-size: 13px;
      border: none;
      transition: var(--transition-bounce);
      display: inline-flex;
      align-items: center;
      gap: 8px;
      letter-spacing: 0.3px;
      cursor: pointer;
      text-decoration: none;
    }

    .btn-premium-success {
      background: var(--gradient-blue);
      color: #ffffff;
      box-shadow: 0 4px 20px rgba(79, 172, 254, 0.3);
    }

    .btn-premium-success:hover {
      transform: translateY(-3px) scale(1.02);
      box-shadow: 0 8px 30px rgba(79, 172, 254, 0.4);
      color: #ffffff;
    }

    .btn-premium-danger {
      background: linear-gradient(135deg, #ff6b6b, #ee5a24);
      color: #ffffff;
      box-shadow: 0 4px 20px rgba(238, 90, 36, 0.25);
    }

    .btn-premium-danger:hover {
      transform: translateY(-3px) scale(1.02);
      box-shadow: 0 8px 30px rgba(238, 90, 36, 0.35);
      color: #ffffff;
    }

    .btn-premium-outline {
      background: transparent;
      color: #4a5a6a;
      border: 2px solid #e5e7eb;
    }

    .btn-premium-outline:hover {
      background: var(--gradient-blue);
      color: #ffffff;
      border-color: transparent;
      transform: translateY(-2px);
      box-shadow: 0 4px 20px rgba(79, 172, 254, 0.3);
    }

    /* ===== QR CODE & BENEFITS SECTION ===== */
    .content-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 30px;
      margin-top: 30px;
    }

    @media (max-width: 992px) {
      .content-grid {
        grid-template-columns: 1fr;
      }
    }

    .qr-card {
      background: #ffffff;
      border-radius: var(--radius-lg);
      padding: 30px;
      box-shadow: var(--shadow-md);
      text-align: center;
      transition: var(--transition-base);
      border: 1px solid rgba(255, 255, 255, 0.6);
    }

    .qr-card:hover {
      box-shadow: var(--shadow-xl), var(--shadow-glow);
      transform: translateY(-4px);
    }

    .qr-card .qr-image {
      max-width: 200px;
      margin: 0 auto 16px;
      border-radius: var(--radius-md);
      padding: 10px;
      background: #ffffff;
      box-shadow: var(--shadow-sm);
      transition: var(--transition-base);
    }

    .qr-card .qr-image:hover {
      transform: scale(1.03);
      box-shadow: var(--shadow-md);
    }

    .qr-card .qr-image img {
      width: 100%;
      height: auto;
      border-radius: var(--radius-sm);
    }

    .qr-card .upi-text {
      font-family: var(--font-primary);
      font-weight: 700;
      font-size: 15px;
      color: #0a1628;
    }

    .qr-card .upi-text .upi-id {
      background: var(--gradient-gold);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    /* ===== BENEFITS LIST - PREMIUM ===== */
    .benefits-card {
      background: #ffffff;
      border-radius: var(--radius-lg);
      padding: 30px 32px;
      box-shadow: var(--shadow-md);
      transition: var(--transition-base);
      border: 1px solid rgba(255, 255, 255, 0.6);
    }

    .benefits-card:hover {
      box-shadow: var(--shadow-xl), var(--shadow-gold);
      transform: translateY(-4px);
    }

    .benefits-card .benefit-title {
      font-family: var(--font-primary);
      font-weight: 800;
      font-size: 18px;
      color: #0a1628;
      margin-bottom: 16px;
      padding-bottom: 12px;
      border-bottom: 2px solid rgba(79, 172, 254, 0.1);
    }

    .benefits-card .benefit-title i {
      color: var(--accent-gold);
      margin-right: 10px;
    }

    .benefits-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .benefits-list li {
      padding: 10px 0 10px 36px;
      position: relative;
      font-family: var(--font-secondary);
      font-size: 14px;
      font-weight: 500;
      color: #1a2a3a;
      line-height: 1.6;
      border-bottom: 1px solid rgba(0, 0, 0, 0.04);
    }

    .benefits-list li:last-child {
      border-bottom: none;
    }

    .benefits-list li::before {
      content: '✓';
      position: absolute;
      left: 0;
      top: 50%;
      transform: translateY(-50%);
      width: 26px;
      height: 26px;
      background: var(--gradient-blue);
      color: #ffffff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 13px;
      font-weight: 700;
      box-shadow: 0 4px 12px rgba(79, 172, 254, 0.2);
      transition: var(--transition-base);
    }

    .benefits-list li:hover::before {
      transform: translateY(-50%) scale(1.1) rotate(90deg);
      box-shadow: 0 6px 20px rgba(79, 172, 254, 0.35);
    }

    .benefits-list li:hover {
      padding-left: 42px;
      color: #0a1628;
    }

    .benefits-list li strong {
      color: #0a1628;
    }

    /* ===== DATA TABLE HIDE ELEMENTS ===== */
    .dataTable-info {
      visibility: hidden;
    }
    .dataTable-input {
      visibility: hidden;
    }

    /* ============================================================
       PREMIUM PROFESSIONAL FOOTER
       ============================================================ */
    
    .footer-premium {
      background: var(--gradient-dark);
      color: rgba(255, 255, 255, 0.8);
      padding: 40px 0 0;
      margin-top: 40px;
      position: relative;
      overflow: hidden;
    }

    .footer-premium::before {
      content: '';
      position: absolute;
      top: -100px;
      right: -100px;
      width: 400px;
      height: 400px;
      background: rgba(79, 172, 254, 0.04);
      border-radius: 50%;
      pointer-events: none;
    }

    .footer-premium::after {
      content: '';
      position: absolute;
      bottom: -150px;
      left: -50px;
      width: 300px;
      height: 300px;
      background: rgba(246, 184, 62, 0.03);
      border-radius: 50%;
      pointer-events: none;
    }

    .footer-premium .footer-inner {
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 30px;
      position: relative;
      z-index: 1;
    }

    .footer-premium .footer-top {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1fr;
      gap: 40px;
      padding-bottom: 30px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    }

    @media (max-width: 992px) {
      .footer-premium .footer-top {
        grid-template-columns: 1fr 1fr;
        gap: 30px;
      }
    }

    @media (max-width: 576px) {
      .footer-premium .footer-top {
        grid-template-columns: 1fr;
        gap: 25px;
      }
    }

    .footer-premium .footer-brand h4 {
      color: #ffffff;
      font-weight: 800;
      font-size: 22px;
      margin-bottom: 12px;
      letter-spacing: -0.02em;
    }

    .footer-premium .footer-brand h4 .highlight {
      background: var(--gradient-gold);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .footer-premium .footer-brand p {
      font-size: 14px;
      line-height: 1.8;
      color: rgba(255, 255, 255, 0.6);
      max-width: 360px;
    }

    .footer-premium .footer-brand .social-links {
      display: flex;
      gap: 12px;
      margin-top: 16px;
    }

    .footer-premium .footer-brand .social-links a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.06);
      color: rgba(255, 255, 255, 0.6);
      transition: var(--transition-bounce);
      text-decoration: none;
      font-size: 18px;
    }

    .footer-premium .footer-brand .social-links a:hover {
      background: var(--gradient-blue);
      color: #ffffff;
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(79, 172, 254, 0.3);
    }

    .footer-premium .footer-col h5 {
      color: #ffffff;
      font-weight: 700;
      font-size: 14px;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 16px;
      position: relative;
      padding-bottom: 12px;
    }

    .footer-premium .footer-col h5::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 30px;
      height: 2px;
      background: var(--gradient-blue);
      border-radius: 2px;
    }

    .footer-premium .footer-col ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .footer-premium .footer-col ul li {
      margin-bottom: 10px;
    }

    .footer-premium .footer-col ul li a {
      color: rgba(255, 255, 255, 0.6);
      text-decoration: none;
      font-size: 14px;
      transition: var(--transition-base);
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }

    .footer-premium .footer-col ul li a:hover {
      color: #ffffff;
      transform: translateX(4px);
    }

    .footer-premium .footer-col ul li a i {
      font-size: 12px;
      color: var(--accent-blue);
    }

    .footer-premium .footer-col .contact-item {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      margin-bottom: 12px;
    }

    .footer-premium .footer-col .contact-item .icon {
      color: var(--accent-blue);
      font-size: 18px;
      flex-shrink: 0;
      margin-top: 2px;
    }

    .footer-premium .footer-col .contact-item .text {
      font-size: 14px;
      color: rgba(255, 255, 255, 0.6);
      line-height: 1.6;
    }

    .footer-premium .footer-col .contact-item .text a {
      color: rgba(255, 255, 255, 0.6);
      text-decoration: none;
      transition: var(--transition-fast);
    }

    .footer-premium .footer-col .contact-item .text a:hover {
      color: #ffffff;
    }

    .footer-premium .footer-bottom {
      padding: 20px 0;
      border-top: 1px solid rgba(255, 255, 255, 0.06);
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 15px;
    }

    .footer-premium .footer-bottom p {
      font-size: 13px;
      color: rgba(255, 255, 255, 0.4);
      margin: 0;
    }

    .footer-premium .footer-bottom p strong {
      color: rgba(255, 255, 255, 0.6);
    }

    .footer-premium .footer-bottom .footer-bottom-links {
      display: flex;
      gap: 20px;
    }

    .footer-premium .footer-bottom .footer-bottom-links a {
      font-size: 13px;
      color: rgba(255, 255, 255, 0.4);
      text-decoration: none;
      transition: var(--transition-fast);
    }

    .footer-premium .footer-bottom .footer-bottom-links a:hover {
      color: #ffffff;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
      .main-container {
        padding: 15px 10px 30px;
      }

      .page-header {
        padding: 20px 24px;
      }

      .page-header h2 {
        font-size: 22px;
      }

      .alert-notes {
        padding: 16px 18px;
      }

      .alert-notes .note-item .text {
        font-size: 13px;
      }

      .table-wrapper {
        padding: 16px 10px;
        overflow-x: auto;
      }

      .table-wrapper .table-header h5 {
        font-size: 15px;
      }

      .table.datatable tbody td {
        font-size: 13px;
        padding: 12px 10px;
      }

      .table.datatable thead th {
        font-size: 11px;
        padding: 10px 10px;
      }

      .btn-premium {
        padding: 8px 16px;
        font-size: 12px;
      }

      .qr-card {
        padding: 20px;
      }

      .benefits-card {
        padding: 20px 18px;
      }

      .benefits-list li {
        font-size: 13px;
        padding: 8px 0 8px 34px;
      }

      .benefits-list li::before {
        width: 22px;
        height: 22px;
        font-size: 11px;
      }

      .footer-premium .footer-inner {
        padding: 0 16px;
      }

      .footer-premium .footer-top {
        gap: 25px;
      }

      .footer-premium .footer-bottom {
        flex-direction: column;
        text-align: center;
      }
    }

    @media (max-width: 576px) {
      .page-header h2 {
        font-size: 18px;
      }

      .page-header p {
        font-size: 12px;
      }

      .table-wrapper .table-header {
        flex-direction: column;
        align-items: flex-start;
      }

      .table.datatable tbody td {
        font-size: 12px;
        padding: 10px 8px;
      }

      .btn-premium {
        font-size: 11px;
        padding: 6px 12px;
      }

      .qr-card .qr-image {
        max-width: 150px;
      }
    }

    /* ===== SWEETALERT CUSTOM ===== */
    .swal2-popup {
      border-radius: var(--radius-lg) !important;
      font-family: var(--font-secondary) !important;
    }

    .swal2-title {
      font-family: var(--font-primary) !important;
      font-weight: 700 !important;
    }

    /* ===== BACK TO TOP ===== */
    .back-to-top {
      background: var(--gradient-blue) !important;
      box-shadow: 0 4px 20px rgba(79, 172, 254, 0.3) !important;
      transition: var(--transition-bounce) !important;
      width: 44px;
      height: 44px;
      border-radius: 50% !important;
    }

    .back-to-top:hover {
      transform: translateY(-5px) scale(1.1) !important;
      box-shadow: 0 8px 30px rgba(79, 172, 254, 0.45) !important;
    }

    .back-to-top i {
      color: #ffffff !important;
      font-size: 20px !important;
    }

    /* DataTable Pagination Custom */
    .dataTables_paginate .paginate_button {
      border-radius: var(--radius-sm) !important;
      padding: 6px 14px !important;
      margin: 0 3px !important;
      font-family: var(--font-secondary) !important;
      font-weight: 500 !important;
      transition: var(--transition-fast) !important;
      border: 1px solid #e5e7eb !important;
      background: #ffffff !important;
      color: #4a5a6a !important;
    }

    .dataTables_paginate .paginate_button:hover {
      background: var(--gradient-blue) !important;
      color: #ffffff !important;
      border-color: transparent !important;
      box-shadow: 0 4px 12px rgba(79, 172, 254, 0.25) !important;
    }

    .dataTables_paginate .paginate_button.current {
      background: var(--gradient-blue) !important;
      color: #ffffff !important;
      border-color: transparent !important;
      box-shadow: 0 4px 12px rgba(79, 172, 254, 0.25) !important;
    }
  </style>
</head>

<body>

  <div class="main-container">

    <!-- ===== PAGE HEADER - PREMIUM ===== -->
    <div class="page-header">
      <h2>🚀 <span class="highlight">Smart MR</span> Dashboard</h2>
      <p>Select your hospital to receive OTP and access your appointments</p>
    </div>

    <!-- ===== NOTES / ALERTS - PREMIUM ===== -->
    <div class="alert-notes">
      <div class="note-item">
        <span class="icon">📧</span>
        <p class="text"><strong>Note:</strong> Please choose your correct email ID for OTP. <span style="color: #d63031; font-weight: 700;">(In case of wrong Email ID, Please contact respective hospital for correction)</span></p>
      </div>
      <div class="note-item">
        <span class="icon">📫</span>
        <p class="text"><strong>Note:</strong> Check Email <strong>SPAM</strong> folder, if OTP email is not received in your inbox.</p>
      </div>
    </div>

    <!-- ===== TABLE SECTION - PREMIUM ===== -->
    <div class="table-wrapper">
      <div class="table-header">
        <h5><i class="bi bi-hospital"></i> Hospital List</h5>
        <span class="badge-count"><?php echo !empty($users) ? count($users) : 0; ?> Hospitals</span>
      </div>

      <div class="table-responsive">
        <table id="mytable" class="table datatable table-responsive" style="overflow-x:auto;">
          <thead>
            <tr>
              <th>Hospital Name</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              if(!empty($users)) {
                foreach($users as $user) {
            ?>
              <tr>
                <td><strong><?php echo trim($user['hospital_name']); ?></strong></td>
                <td><?php echo trim($user['email']); ?></td>
                <td>
                  <?php if($user['is_active'] == 1) {
                    $session_data = array('mr_email_send' => trim($user['email']));
                    $this->session->set_userdata($session_data);
                  ?>
                    <form action="<?php echo base_url('MR/mr_otp'); ?>" method="POST" style="margin: 0;">
                      <input type="hidden" name="sendEmailAddress" id="sendEmailAddress" value="<?php echo $user['email']; ?>">
                      <button class="btn btn-premium btn-premium-success">
                        <i class="bi bi-envelope-paper"></i> Send OTP
                      </button>
                    </form>
                  <?php } else { ?>
                    <button class="btn btn-premium btn-premium-danger" onclick="inactive_view()">
                      <i class="bi bi-lock"></i> Account Locked! Recharge
                    </button>
                  <?php } ?>
                </td>
              </tr>
            <?php } } ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- ===== QR CODE & BENEFITS GRID ===== -->
    <div class="content-grid">

      <!-- QR CODE CARD -->
      <div class="qr-card">
        <div class="qr-image">
          <img src="<?php echo base_url();?>assets/img/qrcode_esmar.jpeg" alt="QR Code">
        </div>
        <p class="upi-text">
          💳 UPI ID: <span class="upi-id">9975172266@hdfcbank</span>
        </p>
        <p style="font-size: 13px; color: #6b7a8a; margin-top: 8px;">
          Scan QR code or use UPI ID to make payment
        </p>
        <div style="margin-top: 12px; padding: 12px 16px; background: #f8faff; border-radius: var(--radius-sm);">
          <p style="margin: 0; font-size: 13px; color: #1a2a3a; font-weight: 500;">
            📧 Send screenshot to: <strong style="color: var(--accent-blue);">prasad@esmartsolution.in</strong>
          </p>
          <p style="margin: 6px 0 0; font-size: 14px; color: var(--accent-gold); font-weight: 700;">
            ⏳ Account will be activated in 3-4 working hours
          </p>
        </div>
      </div>

      <!-- BENEFITS CARD -->
      <div class="benefits-card">
        <div class="benefit-title">
          <i class="bi bi-star-fill"></i> Your Benefits
        </div>
        <ul class="benefits-list">
          <li><strong>Fixed Appointment</strong> – No more waiting</li>
          <li><strong>No Morning & Evening Visits</strong> – Save your time</li>
          <li><strong>No Rush</strong> – Avoid competitive MR crowd</li>
          <li><strong>No Reception Staff Persuasion</strong> – Direct access</li>
          <li><strong>Save Petrol & Time</strong> – Optimize your visits</li>
        </ul>
        <div style="margin-top: 16px; padding-top: 16px; border-top: 1px solid rgba(0,0,0,0.05);">
          <p style="margin: 0; font-size: 13px; color: #6b7a8a;">
            <i class="bi bi-info-circle" style="color: var(--accent-blue);"></i>
            Platform fees: <strong>₹300/year</strong> (₹0.80/day)
          </p>
        </div>
      </div>

    </div>

  </div>

  <!-- ============================================================
       PREMIUM PROFESSIONAL FOOTER
       ============================================================ -->
  
  <footer class="footer-premium">
    <div class="footer-inner">
      
      <!-- Footer Top -->
      <div class="footer-top">
        
        <!-- Brand Column -->
        <div class="footer-brand">
          <h4>Smart <span class="highlight">MR</span></h4>
          <p>eSmart Solutions since 2012 has been enabling healthcare providers with innovative solutions to manage their OPD and hospitals efficiently.</p>
          <div class="social-links">
            <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="footer-col">
          <h5>Quick Links</h5>
          <ul>
            <li><a href="#"><i class="bi bi-chevron-right"></i> About Us</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i> How It Works</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i> Pricing</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i> Support</a></li>
          </ul>
        </div>

        <!-- Resources -->
        <div class="footer-col">
          <h5>Resources</h5>
          <ul>
            <li><a href="#"><i class="bi bi-chevron-right"></i> Blog</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i> Help Center</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i> Privacy Policy</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i> Terms of Service</a></li>
          </ul>
        </div>

        <!-- Contact -->
        <div class="footer-col">
          <h5>Get In Touch</h5>
          <div class="contact-item">
            <span class="icon"><i class="bi bi-geo-alt"></i></span>
            <span class="text">6, Sai Krupa Appt,<br>Gulmohar Vihar, Nashik<br>Maharashtra 422007</span>
          </div>
          <div class="contact-item">
            <span class="icon"><i class="bi bi-envelope"></i></span>
            <span class="text"><a href="mailto:prasad@esmartsolution.in">prasad@esmartsolution.in</a></span>
          </div>
          <div class="contact-item">
            <span class="icon"><i class="bi bi-telephone"></i></span>
            <span class="text"><a href="tel:9975172266">+91 99751 72266</a></span>
          </div>
        </div>

      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> <strong>eSmart Solutions</strong>. All rights reserved.</p>
        <div class="footer-bottom-links">
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Service</a>
          <a href="#">Cookie Policy</a>
        </div>
      </div>

    </div>
  </footer>

  <!-- ===== BACK TO TOP ===== -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- ===== VENDOR JS FILES ===== -->
  <script src="<?php echo base_url();?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/php-email-form/validate.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- ===== MAIN JS ===== -->
  <script src="<?php echo base_url();?>assets/js/main.js"></script>

  <script>
    function inactive_view() {
      Swal.fire({
        icon: 'error',
        title: '🔒 Account Inactive',
        text: 'Please Pay ₹300/year fees to activate your account!',
        confirmButtonColor: '#4facfe',
        confirmButtonText: 'Pay Now',
        showCancelButton: true,
        cancelButtonColor: '#6b7a8a',
        cancelButtonText: 'Later'
      });
    }

    // DataTable initialization with premium styling
    $(document).ready(function() {
      $('#mytable').DataTable({
        "pageLength": 10,
        "ordering": false,
        "language": {
          "paginate": {
            "previous": "‹",
            "next": "›"
          }
        },
        "dom": '<"top"f>rt<"bottom"p>'
      });
    });
  </script>

</body>
</html>