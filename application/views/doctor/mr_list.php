<!DOCTYPE html>
<html lang="en">

<head>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6136027815494124"
    crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Smart MR · MR List</title>
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

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  
  <!-- SweetAlert for better alerts -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    /* ===== GLOBAL ===== */
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
      font-size: 1.4rem;
      letter-spacing: -0.02em;
      color: #0b2b4f;
      margin-bottom: 1.5rem;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .card-title i {
      color: #2a7de1;
      font-size: 1.6rem;
    }

    /* ===== MARQUEE ===== */
    .custom-marquee {
      background: #fef3c7;
      border-left: 5px solid #f59e0b;
      border-radius: 16px;
      padding: 0.8rem 1rem;
      margin-bottom: 1.8rem;
      color: #92400e;
      font-weight: 500;
      font-size: 0.95rem;
    }

    .custom-marquee marquee {
      color: #92400e;
    }

    /* ===== BUTTONS ===== */
    .btn-success {
      background: #2a7de1;
      border: none;
      border-radius: 40px;
      padding: 0.6rem 1.8rem;
      font-weight: 600;
      font-size: 0.9rem;
      color: #fff;
      transition: 0.2s;
      box-shadow: 0 4px 12px rgba(42, 125, 225, 0.25);
    }

    .btn-success:hover {
      background: #1a5fc7;
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(42, 125, 225, 0.30);
    }

    .btn-primary {
      background: #2a7de1;
      border: none;
      border-radius: 40px;
      padding: 0.4rem 1.2rem;
      font-weight: 500;
      font-size: 0.8rem;
      color: #fff;
      transition: 0.2s;
    }

    .btn-primary:hover {
      background: #1a5fc7;
      transform: translateY(-2px);
    }

    .btn-secondary {
      border-radius: 40px;
      padding: 0.5rem 1.5rem;
      font-weight: 500;
      border: 1.5px solid #e2e8f0;
      background: #f8fafc;
      color: #475569;
    }

    .btn-secondary:hover {
      background: #f1f5f9;
      border-color: #cbd5e1;
    }

    /* ===== TABLE ===== */
    .table-responsive {
      border-radius: 16px;
      overflow: hidden;
    }

    #mytable {
      font-size: 0.9rem;
      border-collapse: separate;
      border-spacing: 0;
      width: 100%;
    }

    #mytable thead th {
      background: #f0f5fe;
      color: #1a3a6b;
      font-weight: 600;
      font-size: 0.8rem;
      text-transform: uppercase;
      letter-spacing: 0.04em;
      padding: 1rem 1rem;
      border: none;
    }

    #mytable tbody tr {
      background: #ffffff;
      transition: 0.15s;
      border-bottom: 1px solid #f1f5f9;
    }

    #mytable tbody tr:hover {
      background: #f8faff;
      box-shadow: 0 2px 12px rgba(0, 20, 40, 0.04);
    }

    #mytable tbody td {
      padding: 0.9rem 1rem;
      border: none;
      vertical-align: middle;
      color: #1e293b;
    }

    /* ===== BADGE ===== */
    .badge-success-custom {
      background: #dbeafe;
      color: #0bb81c;
      padding: 0.4rem 1rem;
      border-radius: 40px;
      font-weight: 600;
      font-size: 0.75rem;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .badge-success-custom i {
      font-size: 0.9rem;
    }

    /* ===== MODAL ===== */
    .modal-content {
      border: none;
      border-radius: 24px;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.12);
    }

    .modal-header {
      border-bottom: 2px solid #f1f5f9;
      padding: 1.5rem 2rem;
    }

    .modal-header .modal-title {
      font-weight: 700;
      font-size: 1.3rem;
      color: #0b2b4f;
    }

    .modal-body {
      padding: 2rem;
    }

    .modal-footer {
      border-top: 2px solid #f1f5f9;
      padding: 1.25rem 2rem;
    }

    .modal .form-label {
      font-weight: 500;
      color: #2c3e50;
      font-size: 0.85rem;
      margin-bottom: 0.3rem;
    }

    .modal .form-control {
      border: 1.5px solid #e9edf4;
      border-radius: 16px;
      padding: 0.65rem 1rem;
      font-size: 0.9rem;
      transition: 0.2s;
      background: #fafcff;
    }

    .modal .form-control:focus {
      border-color: #2a7de1;
      box-shadow: 0 0 0 4px rgba(42, 125, 225, 0.10);
      background: #ffffff;
    }

    .text-danger {
      font-size: 0.8rem;
      margin-top: 0.2rem;
    }

    /* ===== DATATABLE OVERRIDES ===== */
    .dataTables_wrapper .dataTables_filter input {
      border: 1.5px solid #e9edf4;
      border-radius: 40px;
      padding: 0.4rem 1rem;
      font-size: 0.9rem;
      background: #fafcff;
    }

    .dataTables_wrapper .dataTables_filter input:focus {
      border-color: #2a7de1;
      box-shadow: 0 0 0 4px rgba(42, 125, 225, 0.08);
    }

    .dataTables_wrapper .dataTables_length select {
      border: 1.5px solid #e9edf4;
      border-radius: 40px;
      padding: 0.3rem 1.5rem 0.3rem 1rem;
      background: #fafcff;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
      border-radius: 40px !important;
      border: none !important;
      padding: 0.4rem 1rem !important;
      margin: 0 2px;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
      background: #2a7de1 !important;
      color: #fff !important;
      border-radius: 40px !important;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
      background: #eef2ff !important;
      border-radius: 40px !important;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
      .card-body {
        padding: 1.5rem 1rem;
      }
      #mytable thead th,
      #mytable tbody td {
        font-size: 0.8rem;
        padding: 0.6rem 0.5rem;
      }
      .modal-body {
        padding: 1.5rem;
      }
      .btn-success {
        padding: 0.5rem 1.2rem;
        font-size: 0.8rem;
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

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">

              <!-- Header with Button -->
              <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                <h5 class="card-title mb-0">
                  <i class="bi bi-people-fill"></i> Medical Representative List
                </h5>
                <button type="button" class="btn btn-success" id="addMrBtn">
                  <i class="bi bi-plus-circle me-1"></i> Add New MR
                </button>
              </div>

              <!-- Marquee Notice -->
              <div class="custom-marquee">
                <marquee behavior="scroll" direction="left" scrollamount="4">
                  <i class="bi bi-info-circle me-2"></i>
                  <b>Once you add NEW MR profile, ask them to check their EMAIL (Spam folder also) for login details and appointment taking process.</b>
                </marquee>
              </div>

              <!-- Table -->
              <div class="table-responsive">
                <table id="mytable" class="table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Mobile No</th>
                      <th>Company</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="mrTableBody">
                    <?php if (!empty($mr_visitors)) {
                      foreach ($mr_visitors as $mr_visitor) {
                        $name = $mr_visitor['first_name'] . ' ' . $mr_visitor['last_name'];
                        ?>
                        <tr id="row_<?php echo $mr_visitor['mr_id']; ?>">
                          <td><?php echo $name; ?></td>
                          <td><?php echo $mr_visitor['mobile']; ?></td>
                          <td><?php echo $mr_visitor['company_name']; ?></td>
                          <td><?php echo $mr_visitor['email']; ?></td>
                          <td>
                            <span class="badge-success-custom">
                              <i class="bi bi-check-circle-fill"></i> Fees Paid
                            </span>
                          </td>
                          <td>
                            <button class="btn btn-primary btn-sm editMrBtn" data-id="<?php echo $mr_visitor['mr_id']; ?>">
                              <i class="bi bi-pencil"></i> Edit
                            </button>
                          </td>
                        </tr>
                      <?php }
                    } ?>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== MR ADD/EDIT MODAL (SAME) ===== -->
    <div class="modal fade" id="mrModal" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" id="modalTitle"><i class="bi bi-person-plus me-2"></i>Add MR</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body">

            <form id="mrForm">
              <input type="hidden" name="mr_id" id="mr_id">
              <input type="hidden" id="action_type" value="add">

              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label">First Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="first_name" id="first_name" placeholder="e.g. Raj" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label">Last Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="e.g. Kumar" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label">Mobile <span class="text-danger">*</span></label>
                  <input type="number" class="form-control" name="mobile" id="mobile" placeholder="9876543210" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label">Company Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="company_name" id="company_name" placeholder="e.g. Pharma Ltd" required>
                </div>

                <div class="col-md-12">
                  <label class="form-label">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="mr@example.com" required>
                </div>
              </div>

            </form>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              <i class="bi bi-x-circle me-1"></i> Cancel
            </button>
            <button type="button" class="btn btn-success" id="saveMrBtn">
              <i class="bi bi-check2-circle me-1"></i> <span id="saveBtnText">Save MR</span>
            </button>
          </div>

        </div>
      </div>
    </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php $this->load->view('doctor/footer.php'); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- jQuery and DataTables JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>

  <!-- ===== JAVASCRIPT (working same, sirf UI change) ===== -->
  <script>
    var table;

    $(document).ready(function () {
      table = $('#mytable').DataTable({
        dom: 'lfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
       ordering: false,
        searching: true,
        paging: true,
        info: true
      });
    });

    // --- Add MR Button ---
    $(document).on('click', '#addMrBtn', function () {
      $('#modalTitle').html('<i class="bi bi-person-plus me-2"></i>Add New MR');
      $('#saveBtnText').text('Save MR');
      $('#mrForm')[0].reset();
      $('#mr_id').val('');
      $('#action_type').val('add');
      $('.text-danger').remove();
      $('#mrModal').modal('show');
    });

    // --- Edit MR Button ---
    $(document).on('click', '.editMrBtn', function () {
      var mr_id = $(this).data('id');

      $('#modalTitle').html('<i class="bi bi-pencil-square me-2"></i>Edit MR');
      $('#saveBtnText').text('Update MR');
      $('#action_type').val('edit');
      $('.text-danger').remove();

      $.ajax({
        url: "<?php echo base_url('doctor/ajax_get_mr'); ?>",
        type: 'POST',
        data: { mr_id: mr_id },
        dataType: 'json',
        success: function (response) {
          if (response.status == 'success') {
            var data = response.data;
            $('#mr_id').val(data.mr_id);
            $('#first_name').val(data.first_name);
            $('#last_name').val(data.last_name);
            $('#mobile').val(data.mobile);
            $('#company_name').val(data.company_name);
            $('#email').val(data.email);
            $('#mrModal').modal('show');
          } else {
            Swal.fire('Error', 'Failed to fetch MR data', 'error');
          }
        },
        error: function () {
          Swal.fire('Error', 'AJAX Error while fetching data', 'error');
        }
      });
    });

    // --- Save/Update MR Button ---
    $(document).on('click', '#saveMrBtn', function () {
      var action_type = $('#action_type').val();
      var url = (action_type == 'add') 
        ? "<?php echo base_url('doctor/ajax_add_mr'); ?>" 
        : "<?php echo base_url('doctor/ajax_update_mr'); ?>";

      if ($('#first_name').val() == '' || $('#last_name').val() == '' || 
          $('#mobile').val() == '' || $('#company_name').val() == '' || 
          $('#email').val() == '') {
        Swal.fire('Validation Error', 'Please fill all required fields', 'warning');
        return;
      }

      $('#saveMrBtn').prop('disabled', true);
      $('#saveBtnText').text('Processing...');

      $.ajax({
        url: url,
        type: 'POST',
        data: $('#mrForm').serialize(),
        dataType: 'json',
        success: function (response) {
          if (response.status == 'success') {
            var data = response.data;
            
            if (action_type == 'add') {
              var newRowNode = table.row.add([
                data.first_name + ' ' + data.last_name,
                data.mobile,
                data.company_name,
                data.email,
                '<span class="badge-success-custom"><i class="bi bi-check-circle-fill"></i> Fees Paid</span>',
                '<button class="btn btn-primary btn-sm editMrBtn" data-id="' + data.mr_id + '"><i class="bi bi-pencil"></i> Edit</button>'
              ]).draw(false).node();

              $(newRowNode).attr('id', 'row_' + data.mr_id);
              Swal.fire('Success', 'MR Added Successfully!', 'success');
            } else {
              var row = $('#row_' + data.mr_id);
              row.find('td:eq(0)').text(data.first_name + ' ' + data.last_name);
              row.find('td:eq(1)').text(data.mobile);
              row.find('td:eq(2)').text(data.company_name);
              row.find('td:eq(3)').text(data.email);

              table.row(row).data([
                data.first_name + ' ' + data.last_name,
                data.mobile,
                data.company_name,
                data.email,
                row.find('td:eq(4)').html(),
                '<button class="btn btn-primary btn-sm editMrBtn" data-id="' + data.mr_id + '"><i class="bi bi-pencil"></i> Edit</button>'
              ]).draw(false);

              Swal.fire('Success', 'MR Updated Successfully!', 'success');
            }

            var modal = bootstrap.Modal.getInstance(document.getElementById('mrModal'));
            if (modal) modal.hide();
            
            $('#mrForm')[0].reset();
            $('#saveMrBtn').prop('disabled', false);
            $('#saveBtnText').text(action_type == 'add' ? 'Save MR' : 'Update MR');

          } else {
            Swal.fire('Error', response.message || 'Something went wrong', 'error');
            $('#saveMrBtn').prop('disabled', false);
            $('#saveBtnText').text(action_type == 'add' ? 'Save MR' : 'Update MR');
          }
        },
        error: function (xhr, status, error) {
          console.log("XHR => ", xhr);
          console.log("Response => ", xhr.responseText);
          console.log("Status => ", status);
          console.log("Error => ", error);
          Swal.fire('Error', 'AJAX Error: ' + error, 'error');
          $('#saveMrBtn').prop('disabled', false);
          $('#saveBtnText').text(action_type == 'add' ? 'Save MR' : 'Update MR');
        }
      });
    });

    // --- Modal Close Reset ---
    $('#mrModal').on('hidden.bs.modal', function () {
      $('#mrForm')[0].reset();
      $('#saveMrBtn').prop('disabled', false);
      $('#saveBtnText').text('Save MR');
    });
  </script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.querySelector('.toggle-sidebar-btn');

    if (toggleBtn) {
        toggleBtn.addEventListener('click', function () {
            document.body.classList.toggle('toggle-sidebar');
        });
    }
});
</script>
</body>
</html>