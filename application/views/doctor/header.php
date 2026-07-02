<header id="header" class="header fixed-top d-flex align-items-center">
<!-- <div id="pageLoader">
    <div class="loader-content">
        <img src="<?php echo base_url(); ?>assets/img/SmartMR_Logo.png" alt="Smart MR">
        <h2>Smart MR</h2>
        <div class="loader-bar">
            <div class="loader-progress"></div>
        </div>
        <p>Loading your page please Wait 😀...</p>
    </div>
</div>> -->
    <!-- Logo Section -->
    <div class="d-flex align-items-center justify-content-between">
        <a href="<?php echo base_url(); ?>" class="logo-link d-flex align-items-center" aria-label="Smart MR Home">
            <img style="height: 60px; width: auto;" src="<?php echo base_url(); ?>assets/img/SmartMR_Logo.png" alt="Smart MR Logo">
        </a>
        <i class="bi bi-list toggle-sidebar-btn" role="button" aria-label="Toggle Sidebar" tabindex="0"></i>
    </div>

    <!-- Navigation -->
    <nav class="header-nav ms-auto" aria-label="Main Navigation">
        <ul class="d-flex align-items-center mb-0">

            <!-- Search Icon (Mobile) -->
            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle" href="#" aria-label="Search">
                    <i class="bi bi-search"></i>
                </a>
            </li>

            <!-- User Profile Dropdown -->
            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" 
                   aria-expanded="false" aria-label="User Profile Menu">
                    <span class="d-none d-md-block dropdown-toggle ps-2 user-name">
                        <?php echo $this->session->userdata('username'); ?>
                    </span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <!-- Dropdown Header -->
                    <li class="dropdown-header">
                        <h6 class="mb-0 user-name-full">
                            <?php echo $this->session->userdata('username'); ?>
                        </h6>
                        <span class="user-role">Doctor</span>
                    </li>
                    <li><hr class="dropdown-divider"></li>

                    <!-- Logout Option -->
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url(); ?>doctor/logout">
                            <i class="bi bi-box-arrow-right me-2"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>

</header>

<!-- ============================================================
     STYLES - Directly in Header (No Separate CSS File Needed)
     ============================================================ -->
<style>
   #pageLoader{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:linear-gradient(135deg,#f8fbff,#eef5ff);
    z-index:99999;
    display:flex;
    justify-content:center;
    align-items:center;
}

.loader-content{
    text-align:center;
}

.loader-content img{
    width:90px;
    margin-bottom:15px;
    animation:float 2s ease-in-out infinite;
}

.loader-content h2{
    color:#0d3b82;
    font-weight:700;
    margin-bottom:20px;
    letter-spacing:1px;
}

.loader-content p{
    color:#666;
    margin-top:12px;
    font-size:14px;
}

.loader-bar{
    width:260px;
    height:8px;
    background:#dce8ff;
    border-radius:20px;
    overflow:hidden;
    margin:auto;
}

.loader-progress{
    width:40%;
    height:100%;
    background:linear-gradient(90deg,#0d6efd,#4da3ff);
    border-radius:20px;
    animation:loading 1.5s infinite;
}

@keyframes loading{
    0%{
        transform:translateX(-100%);
    }
    100%{
        transform:translateX(300%);
    }
}

@keyframes float{
    0%,100%{
        transform:translateY(0px);
    }
    50%{
        transform:translateY(-8px);
    }
}
    /* ===== HEADER STYLES ===== */
    .header {
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.06);
        padding: 12px 24px;
        transition: all 0.3s ease;
        border-bottom: 1px solid rgba(0, 0, 0, 0.04);
        height: 72px;
        z-index: 1030;
    }

    /* Logo Link */
    .logo-link {
        text-decoration: none;
        transition: transform 0.2s ease;
    }

    .logo-link:hover {
        transform: scale(1.02);
    }

    .logo-link img {
        height: 40px;
        width: auto;
        object-fit: contain;
    }

    /* Toggle Sidebar Button */
    .toggle-sidebar-btn {
        font-size: 1.5rem;
        color: #2c3e50;
        cursor: pointer;
        transition: all 0.3s ease;
        padding: 4px 8px;
        border-radius: 8px;
        margin-left: 12px;
    }

    .toggle-sidebar-btn:hover {
        color: #28a745;
        background: rgba(40, 167, 69, 0.08);
    }

    /* Navigation Items */
    .header-nav .nav-item {
        list-style: none;
    }

    .header-nav .nav-link {
        color: #6c757d;
        font-weight: 500;
        padding: 8px 12px;
        border-radius: 8px;
        transition: all 0.3s ease;
        position: relative;
    }

    .header-nav .nav-link:hover {
        color: #28a745;
        background: rgba(40, 167, 69, 0.06);
    }

    .header-nav .nav-link i {
        font-size: 1.2rem;
    }

    /* Search Icon */
    .search-bar-toggle {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* User Profile */
    .nav-profile {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 6px 12px 6px 16px;
        border-radius: 50px;
        transition: all 0.3s ease;
        background: rgba(40, 167, 69, 0.04);
    }

    .nav-profile:hover {
        background: rgba(40, 167, 69, 0.10);
        transform: translateY(-1px);
    }

    .user-name {
        font-weight: 600;
        color: #2c3e50;
        font-size: 0.95rem;
    }

    .dropdown-toggle::after {
        display: inline-block;
        margin-left: 6px;
        vertical-align: middle;
        content: "";
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-left: 0.3em solid transparent;
        color: #6c757d;
    }

    /* Dropdown Menu */
    .profile {
        min-width: 220px;
        padding: 8px 0;
        border: none;
        border-radius: 12px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.10);
        margin-top: 12px;
        background: #ffffff;
        animation: dropdownFade 0.25s ease;
    }

    @keyframes dropdownFade {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .dropdown-header {
        padding: 12px 20px 8px;
        background: transparent;
    }

    .dropdown-header h6 {
        font-weight: 700;
        color: #2c3e50;
        font-size: 1rem;
    }

    .dropdown-header .user-role {
        font-size: 0.75rem;
        color: #28a745;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        background: rgba(40, 167, 69, 0.08);
        padding: 2px 12px;
        border-radius: 50px;
        display: inline-block;
        margin-top: 2px;
    }

    .profile .dropdown-item {
        padding: 10px 20px;
        color: #2c3e50;
        font-weight: 500;
        transition: all 0.2s ease;
        font-size: 0.9rem;
    }

    .profile .dropdown-item i {
        color: #6c757d;
        font-size: 1.1rem;
        transition: color 0.2s ease;
    }

    .profile .dropdown-item:hover {
        background: rgba(40, 167, 69, 0.06);
        color: #28a745;
    }

    .profile .dropdown-item:hover i {
        color: #28a745;
    }

    .profile .dropdown-divider {
        margin: 4px 0;
        border-color: rgba(0, 0, 0, 0.04);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
        .header {
            padding: 10px 16px;
            height: 64px;
        }

        .logo-link img {
            height: 34px;
        }

        .toggle-sidebar-btn {
            font-size: 1.3rem;
            margin-left: 8px;
        }

        .user-name {
            font-size: 0.85rem;
        }

        .nav-profile {
            padding: 4px 10px 4px 12px;
        }

        .profile {
            min-width: 190px;
        }
    }

    @media (max-width: 576px) {
        .header {
            padding: 8px 12px;
            height: 58px;
        }

        .logo-link img {
            height: 30px;
        }

        .toggle-sidebar-btn {
            font-size: 1.1rem;
            margin-left: 6px;
        }

        .nav-profile .dropdown-toggle {
            font-size: 0.8rem;
        }

        .profile {
            min-width: 170px;
            margin-top: 8px;
        }

        .dropdown-header h6 {
            font-size: 0.85rem;
        }
    }

    /* ===== ACCESSIBILITY ===== */
    .toggle-sidebar-btn:focus-visible,
    .nav-link:focus-visible,
    .dropdown-item:focus-visible {
        outline: 2px solid #28a745;
        outline-offset: 2px;
    }

    /* ===== REDUCED MOTION ===== */
    @media (prefers-reduced-motion: reduce) {
        .header,
        .logo-link,
        .nav-profile,
        .profile {
            transition: none;
        }

        .profile {
            animation: none;
        }
    }
</style>
<!-- <script>
window.addEventListener('load', function () {
    setTimeout(function () {
        document.getElementById('pageLoader').style.opacity = '0';
        setTimeout(function(){
            document.getElementById('pageLoader').style.display = 'none';
        },500);
    }, 2000);
});
</script> -->