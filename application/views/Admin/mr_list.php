<!DOCTYPE html>
<html lang="en">

<head>
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6136027815494124" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Smart MR | Medical Representatives</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Favicons -->
    <link href="<?php echo base_url(); ?>assets/img/favicon.png" rel="icon">
    <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700|Poppins:300,400,500,600,700" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/tabler-icons@latest/iconfont/tabler-icons.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

    <style>
        /* ===== GLOBAL RESET & BASE ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-size: 13px;
            font-family: 'Inter', 'Poppins', sans-serif;
            background: #f6f9fc;
            color: #1a2332;
            line-height: 1.6;
        }

        /* ===== CARD ===== */
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
            background: #ffffff;
            transition: all 0.2s ease;
            overflow: hidden;
        }

        .card-body {
            padding: 1.5rem 1.8rem 2rem;
        }

        /* ===== CARD HEADER ===== */
        .card-header-custom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #eef2f7;
        }

        .card-title-custom {
            font-size: 1.2rem;
            font-weight: 600;
            color: #0b1a33;
            letter-spacing: -0.01em;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .card-title-custom i {
            font-size: 1.4rem;
            color: #2a7de1;
        }

        .badge-count {
            background: #eef4ff;
            color: #2a7de1;
            font-size: 0.7rem;
            font-weight: 600;
            padding: 0.2rem 0.7rem;
            border-radius: 40px;
            margin-left: 0.5rem;
        }

        /* ===== FILTER BAR ===== */
        .filter-bar {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 0.75rem 1rem;
            margin-bottom: 1.5rem;
            background: #f8fafd;
            padding: 0.75rem 1.25rem;
            border-radius: 14px;
            border: 1px solid #e9edf4;
        }

        .filter-bar label {
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.03em;
            color: #5e6f8d;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        .filter-bar label i {
            font-size: 0.9rem;
        }

        .filter-bar .form-select {
            font-size: 0.8rem;
            padding: 0.35rem 2rem 0.35rem 0.9rem;
            border-radius: 10px;
            border: 1px solid #dce2ec;
            background-color: #fff;
            color: #1a2332;
            font-weight: 500;
            min-width: 140px;
            cursor: pointer;
            transition: 0.15s ease;
            height: 36px;
            appearance: auto;
        }

        .filter-bar .form-select:focus {
            border-color: #2a7de1;
            box-shadow: 0 0 0 3px rgba(42, 125, 225, 0.12);
            outline: none;
        }

        .filter-bar .form-select option {
            font-weight: 400;
        }

        /* ===== TABLE WRAPPER ===== */
        .table-responsive-custom {
            border-radius: 14px;
            border: 1px solid #eef2f7;
            overflow-x: auto;
            background: #fff;
        }

        /* ===== TABLE ===== */
        #mytable {
            width: 100% !important;
            font-size: 0.8rem;
            border-collapse: separate;
            border-spacing: 0;
            margin: 0 !important;
        }

        #mytable thead th {
            background: #f8fafd;
            color: #1f2a44;
            font-weight: 600;
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            padding: 0.85rem 0.9rem;
            border-bottom: 1px solid #e4eaf2;
            white-space: nowrap;
            position: sticky;
            top: 0;
            z-index: 2;
        }

        #mytable thead th:first-child {
            border-top-left-radius: 14px;
        }
        #mytable thead th:last-child {
            border-top-right-radius: 14px;
        }

        #mytable tbody td {
            padding: 0.75rem 0.9rem;
            vertical-align: middle;
            border-bottom: 1px solid #f0f3f8;
            color: #1f2a44;
            background: #fff;
        }

        #mytable tbody tr:last-child td {
            border-bottom: none;
        }

        #mytable tbody tr:hover td {
            background: #fafcff;
        }

        /* ===== STATUS BADGE ===== */
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.3rem;
            padding: 0.25rem 0.75rem;
            border-radius: 40px;
            font-size: 0.7rem;
            font-weight: 600;
            letter-spacing: 0.02em;
            white-space: nowrap;
        }

        .status-badge.active {
            background: #e3f5ec;
            color: #0d894f;
        }

        .status-badge.active::before {
            content: '';
            display: inline-block;
            width: 6px;
            height: 6px;
            background: #0d894f;
            border-radius: 50%;
            margin-right: 0.25rem;
        }

        .status-badge.inactive {
            background: #ffffff;
            color: #f51e06;
        }

        .status-badge.inactive::before {
            content: '';
            display: inline-block;
            width: 6px;
            height: 6px;
            background: #b34033;
            border-radius: 50%;
            margin-right: 0.25rem;
        }

        .status-badge.pending {
            background: #fff3d6;
            color: #b57c1a;
        }

        .status-badge.pending::before {
            content: '';
            display: inline-block;
            width: 6px;
            height: 6px;
            background: #b57c1a;
            border-radius: 50%;
            margin-right: 0.25rem;
        }

        /* fallback for any other status */
        .status-badge.other {
            background: #eef2f7;
            color: #4d5f7a;
        }

        /* ===== ACTION BUTTONS ===== */
        .action-group {
            display: flex;
            align-items: center;
            gap: 0.3rem;
            flex-wrap: wrap;
        }

        .btn-action {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.3rem;
            padding: 0.3rem 0.7rem;
            border-radius: 30px;
            font-size: 0.7rem;
            font-weight: 500;
            border: 1px solid transparent;
            background: #f1f4f9;
            color: #2f405c;
            transition: 0.15s ease;
            cursor: pointer;
            text-decoration: none;
            line-height: 1.4;
            white-space: nowrap;
        }

        .btn-action i {
            font-size: 0.85rem;
        }

        .btn-action:hover {
            background: #e6ebf3;
            color: #0b1a33;
            transform: translateY(-1px);
        }

        .btn-action.email {
            background: #e8f0fe;
            color: #1a5fb4;
        }

        .btn-action.email:hover {
            background: #d4e2fa;
            color: #0f4a8a;
        }

        .btn-action.receipt {
            background: #e6f7ed;
            color: #0d7a45;
        }

        .btn-action.receipt:hover {
            background: #cff0df;
            color: #0a5f34;
        }

        /* ===== SEARCH ===== */
        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
            margin-bottom: 1rem;
        }

        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #dce2ec;
            border-radius: 40px;
            padding: 0.4rem 1rem 0.4rem 2.2rem;
            font-size: 0.8rem;
            font-family: 'Inter', sans-serif;
            background: #fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%238b9bb5' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Ccircle cx='11' cy='11' r='8'/%3E%3Cline x1='21' y1='21' x2='16.65' y2='16.65'/%3E%3C/svg%3E") no-repeat 0.8rem center;
            background-size: 1rem;
            width: 220px;
            transition: 0.2s;
            outline: none;
            height: 38px;
            color: #1a2332;
        }

        .dataTables_wrapper .dataTables_filter input:focus {
            border-color: #2a7de1;
            box-shadow: 0 0 0 3px rgba(42, 125, 225, 0.10);
            width: 260px;
        }

        .dataTables_wrapper .dataTables_filter label {
            font-weight: 400;
            color: #5e6f8d;
            font-size: 0.8rem;
        }

        /* ===== PAGINATION / INFO ===== */
        .dataTables_wrapper .dataTables_info {
            font-size: 0.75rem;
            color: #5e6f8d;
            padding-top: 0.8rem;
        }

        .dataTables_wrapper .dataTables_paginate {
            padding-top: 0.8rem;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0.2rem 0.7rem;
            margin: 0 0.15rem;
            border-radius: 8px;
            border: 1px solid #e4eaf2;
            font-size: 0.75rem;
            font-weight: 500;
            color: #2f405c;
            background: #fff;
            transition: 0.15s;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: #2a7de1;
            border-color: #2a7de1;
            color: #fff;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: #eef4ff;
            border-color: #c7d8f0;
            color: #1a2332;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled {
            opacity: 0.4;
            pointer-events: none;
        }

        /* ===== LENGTH MENU ===== */
        .dataTables_wrapper .dataTables_length {
            font-size: 0.75rem;
            color: #5e6f8d;
        }

        .dataTables_wrapper .dataTables_length select {
            border: 1px solid #dce2ec;
            border-radius: 8px;
            padding: 0.2rem 1.5rem 0.2rem 0.6rem;
            font-size: 0.75rem;
            background-color: #fff;
            color: #1a2332;
            cursor: pointer;
            height: 30px;
            margin: 0 0.3rem;
            appearance: auto;
        }

        /* ===== HIDE ORIGINAL DATATABLE ELEMENTS (we keep search visible) ===== */
        .dataTable-info {
            visibility: visible !important;
        }
        .dataTable-input {
            visibility: visible !important;
        }
        .dataTable-selector {
            visibility: visible !important;
        }
        .dataTable-dropdown {
            visibility: visible !important;
        }

        /* ===== RESPONSIVE TWEAKS ===== */
        @media (max-width: 768px) {
            .card-body {
                padding: 1rem;
            }
            .filter-bar {
                flex-direction: column;
                align-items: stretch;
                padding: 0.75rem 1rem;
            }
            .filter-bar .form-select {
                width: 100% !important;
                min-width: unset;
            }
            .dataTables_wrapper .dataTables_filter input {
                width: 100%;
            }
            .dataTables_wrapper .dataTables_filter input:focus {
                width: 100%;
            }
            .card-header-custom {
                flex-direction: column;
                align-items: flex-start;
            }
            .action-group {
                flex-wrap: wrap;
            }
            #mytable thead th,
            #mytable tbody td {
                padding: 0.5rem 0.6rem;
                font-size: 0.7rem;
            }
        }

        @media (max-width: 480px) {
            .btn-action {
                padding: 0.2rem 0.5rem;
                font-size: 0.65rem;
            }
            .btn-action i {
                font-size: 0.7rem;
            }
            .status-badge {
                font-size: 0.6rem;
                padding: 0.15rem 0.5rem;
            }
        }

        /* ===== SCROLLBAR ===== */
        .table-responsive-custom::-webkit-scrollbar {
            height: 6px;
            width: 6px;
        }
        .table-responsive-custom::-webkit-scrollbar-track {
            background: #f1f4f9;
            border-radius: 10px;
        }
        .table-responsive-custom::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
        .table-responsive-custom::-webkit-scrollbar-thumb:hover {
            background: #a0b3cc;
        }

        /* ===== EMAIL COLUMN ===== */
        #mytable td:nth-child(5) {
            white-space: normal !important;
            word-wrap: break-word !important;
            line-height: 1.4 !important;
            max-width: 140px;
        }

        /* ===== DAYS COLUMN ===== */
        .days-cell {
            font-weight: 600;
            color: #1a2332;
        }
        .days-cell.high {
            color: #b34033;
        }
        .days-cell.medium {
            color: #b57c1a;
        }
        .days-cell.low {
            color: #0d894f;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <?php $this->load->view('doctor/header'); ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php $this->load->view('doctor/sidebar'); ?>
    <!-- End Sidebar -->

    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <!-- Card Header -->
                            <div class="card-header-custom">
                                <div class="card-title-custom">
                                    <i class="bi bi-people-fill"></i>
                                    Medical Representatives
                                    <span class="badge-count" id="rowCountBadge">0</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.5rem;">
                                    <span style="font-size:0.7rem; color:#5e6f8d; background:#f1f4f9; padding:0.2rem 0.8rem; border-radius:40px;">
                                        <i class="bi bi-calendar3" style="margin-right:0.3rem;"></i>Today
                                    </span>
                                </div>
                            </div>

                            <!-- Filter Bar -->
                            <div class="filter-bar">
                                <label><i class="bi bi-funnel"></i> Filter</label>
                                <select id="statusFilter" class="form-select" style="width:150px;">
                                    <option value="">All Status</option>
                                </select>
                                <select id="hospitalFilter" class="form-select" style="width:200px;">
                                    <option value="">All Hospitals</option>
                                </select>
                                <span style="flex:1;"></span>
                                <span style="font-size:0.7rem; color:#5e6f8d;">
                                    <i class="bi bi-arrow-repeat" style="margin-right:0.2rem;"></i> Live
                                </span>
                            </div>

                            <!-- Table -->
                            <div class="table-responsive-custom">
                                <table id="mytable" class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Mobile</th>
                                            <th scope="col">Company</th>
                                            <th scope="col" style="width:12%;">Email</th>
                                            <th scope="col">Hospital</th>
                                            <th scope="col">Reg. Date</th>
                                            <th scope="col">Payment Date</th>
                                            <th scope="col">Days</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" style="min-width:130px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data populated via DataTables AJAX -->
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ======= Footer ======= -->
    <?php $this->load->view('doctor/footer'); ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- DataTable JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            var hospitalDropdownPopulated = false;

            var table = $('#mytable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '<?php echo base_url("Admin/get_mr_visitors_ajax"); ?>',
                    type: 'POST',
                    data: function(d) {
                        d.statusFilter = $('#statusFilter').val();
                        d.hospitalFilter = $('#hospitalFilter').val();
                    }
                },
                lengthMenu: [
                    [50, 100, 200],
                    [50, 100, 200]
                ],
                pageLength: 50,
                language: {
                    search: "Search (min 3 characters):",
                    info: "Showing _START_ to _END_ of _TOTAL_ MRs",
                    infoEmpty: "No MRs found",
                    infoFiltered: "(filtered from _MAX_ total)"
                },
                drawCallback: function() {
                    var api = this.api();
                    var count = api.rows({
                        filter: 'applied'
                    }).count();
                    $('#rowCountBadge').text(count);
                },
                initComplete: function() {
                    var api = this.api();

                    // --- Search minimum 3 characters ---
                    $('#mytable_filter input')
                        .off('.DT')
                        .on('keyup.DT', function(e) {
                            if (this.value.length >= 3 || this.value.length == 0) {
                                api.search(this.value).draw();
                            }
                        });

                    // --- Populate hospitalFilter (only once) ---
                    if (!hospitalDropdownPopulated) {
                        var hospitalNames = [];
                        api.column(5).data().each(function(d) {
                            var div = document.createElement("div");
                            div.innerHTML = d;
                            var text = div.textContent || div.innerText || "";
                            if (hospitalNames.indexOf(text) === -1 && text.trim() !== "") {
                                hospitalNames.push(text);
                            }
                        });
                        hospitalNames.sort();
                        $('#hospitalFilter').find('option:not(:first)').remove();
                        $.each(hospitalNames, function(i, name) {
                            $('#hospitalFilter').append('<option value="' + name + '">' + name +
                                '</option>');
                        });
                        hospitalDropdownPopulated = true;
                    }

                    // --- Populate status filter ---
                    var statusNames = [];
                    api.column(9).data().each(function(d) {
                        var div = document.createElement("div");
                        div.innerHTML = d;
                        var text = div.textContent || div.innerText || "";
                        if (statusNames.indexOf(text) === -1 && text.trim() !== "") {
                            statusNames.push(text);
                        }
                    });
                    statusNames.sort();
                    $('#statusFilter').find('option:not(:first)').remove();
                    $.each(statusNames, function(i, name) {
                        $('#statusFilter').append('<option value="' + name + '">' + name + '</option>');
                    });

                    // initial count
                    var count = api.rows({
                        filter: 'applied'
                    }).count();
                    $('#rowCountBadge').text(count);
                },
                columns: [
                    { data: 'mr_id' },
                    { data: 'name' },
                    { data: 'mobile' },
                    { data: 'company_name' },
                    { data: 'email' },
                    { data: 'hospital_name' },
                    { data: 'registration_date' },
                    { data: 'payment_date' },
                    { data: 'days_since_payment', type: 'num' },
                    { data: 'status' },
                    { data: 'action', orderable: false, searchable: false }
                ],
                columnDefs: [{
                    targets: 9,
                    render: function(data) {
                        if (!data) return '<span class="status-badge other">Unknown</span>';
                        var statusText = data.toString().toLowerCase().trim();
                        var badgeClass = 'other';
                        if (statusText === 'active') badgeClass = 'active';
                        else if (statusText === 'inactive') badgeClass = 'inactive';
                        else if (statusText === 'pending') badgeClass = 'pending';
                        return '<span class="status-badge ' + badgeClass + '">' + data + '</span>';
                    }
                }, {
                    targets: 8,
                    render: function(data) {
                        var num = parseInt(data);
                        if (isNaN(num)) return '<span class="days-cell">—</span>';
                        var cls = 'low';
                        if (num > 30) cls = 'high';
                        else if (num > 15) cls = 'medium';
                        return '<span class="days-cell ' + cls + '">' + num + 'd</span>';
                    }
                }, {
                    targets: 10,
                    render: function(data) {
                        return data || '<span style="color:#8b9bb5;font-size:0.7rem;">—</span>';
                    }
                }],
                // Make sure search box stays visible and styled
                dom: '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>rt<"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
                // custom styling for wrapper
                responsive: true
            });

            // Redraw on filter change
            $('#statusFilter, #hospitalFilter').on('change', function() {
                table.draw();
            });

        });

        // ===== EXISTING FUNCTIONS (unchanged) =====
        function send_email(element) {
            var mr_id = $(element).data('mr_id');
            var company_name = $(element).data('company_name');
            var whenpaid = $(element).data('whenpaid');
            var first_name = $(element).data('first_name');
            var last_name = $(element).data('last_name');
            var email = $(element).data('email');

            Swal.fire({
                title: 'Send Email?',
                html: 'To <b>' + first_name + ' ' + last_name + '</b><br>Company: ' + company_name + '<br>Payment Date: ' +
                    whenpaid,
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Yes, send it!',
                cancelButtonText: 'Cancel',
                confirmButtonColor: '#2a7de1',
                cancelButtonColor: '#8b9bb5',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '<?php echo base_url("Admin/send_mr_email"); ?>',
                        type: 'POST',
                        data: {
                            mr_id: mr_id,
                            company_name: company_name,
                            whenpaid: whenpaid,
                            first_name: first_name,
                            last_name: last_name,
                            email: email
                        },
                        dataType: 'json',
                        success: function(response) {
                            if (response.status === 'success') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Email sent!',
                                    text: response.message,
                                    confirmButtonColor: '#2a7de1'
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: response.message,
                                    confirmButtonColor: '#b34033'
                                });
                            }
                        },
                        error: function() {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'An unexpected error occurred.',
                                confirmButtonColor: '#b34033'
                            });
                        }
                    });
                }
            });
        }

        function send_receipt(element) {
            var mr_id = $(element).data('mr_id');
            var company_name = $(element).data('company_name');
            var whenpaid = $(element).data('whenpaid');
            var first_name = $(element).data('first_name');
            var last_name = $(element).data('last_name');
            var email = $(element).data('email');

            Swal.fire({
                title: 'Send Receipt?',
                html: 'Inline receipt to <b>' + first_name + ' ' + last_name + '</b><br>Company: ' + company_name +
                    '<br>Payment Date: ' + whenpaid,
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Yes, send it!',
                cancelButtonText: 'Cancel',
                confirmButtonColor: '#0d7a45',
                cancelButtonColor: '#8b9bb5',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '<?php echo base_url("Admin/send_mr_receipt"); ?>',
                        type: 'POST',
                        data: {
                            mr_id: mr_id,
                            company_name: company_name,
                            whenpaid: whenpaid,
                            first_name: first_name,
                            last_name: last_name,
                            email: email
                        },
                        dataType: 'json',
                        success: function(response) {
                            if (response.status === 'success') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Receipt sent!',
                                    text: response.message,
                                    confirmButtonColor: '#0d7a45'
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: response.message,
                                    confirmButtonColor: '#b34033'
                                });
                            }
                        },
                        error: function() {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'An unexpected error occurred.',
                                confirmButtonColor: '#b34033'
                            });
                        }
                    });
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.querySelector('.toggle-sidebar-btn');
            if (toggleBtn) {
                toggleBtn.addEventListener('click', function() {
                    document.body.classList.toggle('toggle-sidebar');
                });
            }
        });
    </script>

</body>

</html>