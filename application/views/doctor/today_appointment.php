<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Smart MR · Doctor Schedule</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts (clean, modern) -->
  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- FullCalendar + dependencies (CDN) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

  <!-- Template Main CSS (your existing style) -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

  <!-- ====== PRODUCTION UI – clean, light, professional ====== -->
  <style>
    /* reset / base */
    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      background: #f4f7fc;
      color: #1e293b;
    }

    .card {
      border: none;
      border-radius: 24px;
      box-shadow: 0 20px 40px -12px rgba(0, 20, 40, 0.12);
      transition: all 0.2s ease;
      background: #ffffff;
    }

    .card-body {
      padding: 2rem 1.8rem 2rem 1.8rem;
    }

    .card-title {
      font-weight: 600;
      font-size: 1.5rem;
      letter-spacing: -0.02em;
      color: #0b2b4f;
      margin-bottom: 1.75rem;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .card-title i {
      color: #2a7de1;
      font-size: 1.8rem;
    }

    /* FullCalendar override – clean light */
    #calendar {
      max-width: 100%;
      margin: 0 auto;
      background: white;
      border-radius: 20px;
      padding: 0.25rem 0.25rem 0.25rem 0.25rem;
    }

    .fc {
      font-family: 'Inter', sans-serif;
    }

    .fc-toolbar {
      margin-bottom: 1.5rem !important;
      padding: 0 0.5rem;
    }

    .fc-toolbar h2 {
      font-weight: 600;
      font-size: 1.4rem;
      color: #0b2b4f;
      letter-spacing: -0.01em;
    }

    .fc-button {
      background: white !important;
      border: 1px solid #e2e8f0 !important;
      color: #1e293b !important;
      font-weight: 500 !important;
      padding: 0.45rem 1rem !important;
      border-radius: 40px !important;
      box-shadow: 0 2px 4px rgba(0,0,0,0.02);
      transition: 0.15s;
      text-transform: capitalize;
    }

    .fc-button:hover {
      background: #f1f5f9 !important;
      border-color: #cbd5e1 !important;
      color: #0b2b4f !important;
      box-shadow: 0 4px 8px rgba(0,0,0,0.03);
    }

    .fc-button-primary:not(:disabled):active,
    .fc-button-primary:not(:disabled).fc-button-active {
      background: #eef2ff !important;
      border-color: #818cf8 !important;
      color: #4338ca !important;
    }

    .fc-state-default.fc-corner-left,
    .fc-state-default.fc-corner-right {
      border-radius: 40px !important;
    }

    .fc-day-header {
      font-weight: 500;
      font-size: 0.85rem;
      text-transform: uppercase;
      letter-spacing: 0.03em;
      color: #64748b;
      padding: 0.5rem 0;
    }

    .fc-day-number {
      font-weight: 500;
      color: #1e293b;
    }

    .fc-basic-view .fc-body .fc-row {
      min-height: 4.5rem;
    }

    .fc-day-grid-event {
      background: #eef2ff !important;
      border: none !important;
      border-radius: 30px !important;
      padding: 4px 10px !important;
      color: #1e3a8a !important;
      font-weight: 500;
      font-size: 0.8rem;
      margin: 2px 6px !important;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
      transition: 0.1s;
    }

    .fc-day-grid-event:hover {
      background: #dbeafe !important;
      transform: scale(1.01);
      cursor: pointer;
    }

    .fc-day-grid-event .fc-content {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .fc-day-grid-event .fc-time {
      font-weight: 400;
      opacity: 0.7;
      margin-right: 4px;
    }

    .fc-highlight {
      background: rgba(42, 125, 225, 0.08) !important;
    }

    .fc-unthemed td.fc-today {
      background: #f8faff !important;
    }

    .fc-unthemed .fc-today .fc-day-number {
      background: #2a7de1;
      color: white !important;
      border-radius: 40px;
      padding: 0 8px;
      display: inline-block;
      min-width: 28px;
    }

    .fc-day-header.fc-widget-header {
      border: none !important;
    }

    .fc-row .fc-widget-header {
      border: none !important;
    }

    .fc-unthemed .fc-widget-content {
      border-color: #edf2f7 !important;
    }

    .fc-scroller {
      overflow: auto;
    }

    /* month/year/date – kept as in original (no changes to working) */
    .form-control {
      margin-bottom: 2%;
    }
    .month, .year, .date {
      width: calc(103% - 11px)!important;
    }

    /* mini top bar (header/sidebar are loaded via views) – we keep consistency */
    .main {
      padding: 20px 25px 30px;
    }

    .section {
      margin-top: 0;
    }

    .wrapper {
      background: transparent;
    }

    /* subtle responsive */
    @media (max-width: 768px) {
      .card-body {
        padding: 1.5rem 1rem;
      }
      .fc-toolbar {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }
      .fc-toolbar .fc-left,
      .fc-toolbar .fc-right {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
      }
    }

    /* back to top (preserved) */
    .back-to-top {
      position: fixed;
      visibility: hidden;
      opacity: 0;
      right: 20px;
      bottom: 20px;
      background: #2a7de1;
      color: #fff;
      width: 44px;
      height: 44px;
      border-radius: 60px;
      transition: all 0.3s;
      box-shadow: 0 8px 20px rgba(42,125,225,0.25);
      z-index: 996;
      text-decoration: none;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
    }
    .back-to-top:hover {
      background: #1a5fc7;
      color: #fff;
      transform: translateY(-3px);
    }

    /* small loading / alert */
    .fc-more {
      background: #eef2ff;
      border-radius: 40px;
      padding: 2px 10px;
      font-weight: 500;
      color: #1e3a8a;
    }

    /* footer / header will keep original style from views */
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
              <h5 class="card-title">
                <i class="ri-calendar-2-line"></i> My Schedule
              </h5>

              <div class="wrapper">
                <div class="container" style="padding:0;">
                  <div id="calendar"></div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php $this->load->view('doctor/footer.php');?>
  <!-- End Footer -->

  <!-- back-to-top -->
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

  <!-- Template Main JS -->
  <script src="<?php echo base_url();?>assets/js/main.js"></script>

  <!-- FullCalendar extra dependencies (already loaded) -->
  <script type="text/javascript">
    $(document).ready(function(){
      var calendar = $('#calendar').fullCalendar({
        editable: true,
        // header: { left: 'prev,next today', center: 'title', right: 'month,agendaWeek,agendaDay' },  // kept commented as per original
        events: "<?php echo base_url('Doctor/mr_schedule_load'); ?>",
        selectable: true,
        selectHelper: true,

        eventClick: function(event) {
          var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
          if (confirm("Are you sure you want to delete this event?")) {
            var id = event.id;
            $.ajax({
              url: "<?php echo base_url('Doctor/event_delete'); ?>",
              type: "POST",
              data: { id: id },
              success: function() {
                calendar.fullCalendar('refetchEvents');
                alert('Event Removed');
              }
            });
          }
        }
      });
    });
  </script>

  <!-- keep original month/year/date style untouched -->
  <style>
    /* ensure fullcalendar respects container */
    .fc-view-container {
      background: transparent;
    }
    .fc-toolbar .fc-center {
      display: flex;
      align-items: center;
    }
    /* small fix for button grouping */
    .fc-button-group .fc-button {
      border-radius: 40px !important;
      margin: 0 2px;
    }
    .fc-button-group .fc-button:first-child {
      border-radius: 40px 0 0 40px !important;
    }
    .fc-button-group .fc-button:last-child {
      border-radius: 0 40px 40px 0 !important;
    }
    .fc-button-group .fc-button.fc-state-active {
      background: #eef2ff !important;
      border-color: #818cf8 !important;
      color: #4338ca !important;
    }
  </style>

</body>
</html>