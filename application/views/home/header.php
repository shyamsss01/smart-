<!-- ============================================================
     HEADER - Premium Redesign
     ============================================================ -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<header class="header" id="navbar-spy">
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-inner">
                <!-- Left -->
                <div class="top-bar-left">
                    <div class="contact-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00b894" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" />
                        </svg>
                        <a href="tel:9975172266">9975172266 / 9172107425</a>
                    </div>
                    <div class="contact-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00b894" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <polyline points="22,6 12,13 2,6" />
                        </svg>
                        <a href="mailto:prasad@esmartsolution.in">prasad@esmartsolution.in</a>
                    </div>
                </div>
                <!-- Right -->
                <div class="top-bar-right">
                    <span class="status-badge">
                        <span class="status-dot"></span>
                        Available 24/7
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navbar -->
  <nav class="navbar navbar-expand-lg" id="primary-menu">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                <img class="logo logo-dark" src="<?php echo base_url(); ?>assets/img/SmartMR_Logo.png"
                    alt="Smart MR Logo" />
                <img class="logo logo-mobile" src="<?php echo base_url(); ?>assets/img/SmartMR_Logo.png"
                    alt="Smart MR Logo Mobile" />
                <span class="brand-text">Smart<span>MR</span></span>
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- Navigation -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>" class="nav-link">
                            <span>🏠</span> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>doctor/dr_login" class="nav-link">
                            <span>👨‍⚕️</span> Doctor Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>MR/index" class="nav-link">
                            <span>💼</span> MR Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- ============================================================
     STYLES - Premium UI
     ============================================================ -->
<style>
    /* ===== RESET & BASE ===== */
    /* Desktop Fix */
    @media (min-width: 992px) {

    .navbar-collapse{
        display:flex !important;
        justify-content:flex-end;
        flex-grow:1;
    }

    .navbar-nav{
        display:flex !important;
        flex-direction:row !important;
        margin-left:auto;
    }
}
    @media (min-width: 993px) {

        .navbar-collapse {
            display: flex !important;
            flex-basis: auto !important;
            justify-content: flex-end;
        }

        .navbar-nav {
            display: flex !important;
            flex-direction: row !important;
            margin-left: auto;
        }

        .collapse {
            display: flex !important;
            visibility: visible !important;
        }
    }

    .header {
        background: #ffffff;
        position: relative;
        z-index: 1030;
        box-shadow: 0 2px 40px rgba(0, 0, 0, 0.05);
    }

    /* ===== TOP BAR ===== */
    .top-bar {
        background: linear-gradient(135deg, #0a1628 0%, #1a2a4a 100%);
        padding: 6px 0;
        border-bottom: 2px solid rgba(0, 184, 148, 0.3);
        position: relative;
        overflow: hidden;
    }

    .top-bar::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%2300b894' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        pointer-events: none;
    }

    .top-bar-inner {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 6px 16px;
        position: relative;
        z-index: 1;
    }

    .top-bar-left {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 8px 24px;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.8rem;
        color: rgba(255, 255, 255, 0.7);
        transition: all 0.3s ease;
    }

    .contact-item:hover {
        color: #ffffff;
    }

    .contact-item svg {
        flex-shrink: 0;
        opacity: 0.8;
        transition: all 0.3s ease;
    }

    .contact-item:hover svg {
        opacity: 1;
        transform: scale(1.1);
    }

    .contact-item a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        font-weight: 400;
        transition: all 0.3s ease;
        letter-spacing: 0.3px;
    }

    .contact-item a:hover {
        color: #00b894;
    }

    .top-bar-right {
        display: flex;
        align-items: center;
    }

    .status-badge {
        display: flex;
        align-items: center;
        gap: 8px;
        background: rgba(0, 184, 148, 0.15);
        padding: 4px 14px;
        border-radius: 50px;
        font-size: 0.7rem;
        font-weight: 500;
        color: #00b894;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        border: 1px solid rgba(0, 184, 148, 0.2);
    }

    .status-dot {
        width: 7px;
        height: 7px;
        background: #00b894;
        border-radius: 50%;
        display: inline-block;
        animation: pulse-dot 1.5s ease-in-out infinite;
    }

    @keyframes pulse-dot {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: 0.4;
            transform: scale(0.7);
        }
    }

    /* ===== NAVBAR ===== */
    .navbar {
        padding: 10px 0;
        background: #ffffff;
        transition: all 0.3s ease;
        border-bottom: 1px solid rgba(0, 0, 0, 0.04);
    }

    .navbar .container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    /* ===== LOGO ===== */
    .navbar-brand {
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        padding: 0;
        transition: all 0.3s ease;
    }

    .navbar-brand:hover {
        transform: translateY(-1px);
    }

    .navbar-brand img {
        height: 45px;
        width: auto;
        object-fit: contain;
    }

    .brand-text {
        font-size: 1.5rem;
        font-weight: 800;
        color: #0a1628;
        letter-spacing: -0.5px;
        line-height: 1;
    }

    .brand-text span {
        color: #00b894;
        position: relative;
    }

    .brand-text span::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: #00b894;
        border-radius: 10px;
    }

    .logo-mobile {
        display: none;
    }

    /* ===== NAVIGATION ===== */
    .navbar-nav {
        display: flex;
        align-items: center;
        gap: 4px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .nav-item {
        position: relative;
    }

    .nav-link {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 8px 20px;
        color: #2d3748;
        font-weight: 600;
        font-size: 0.9rem;
        text-decoration: none;
        border-radius: 10px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        background: transparent;
    }

    .nav-link span {
        font-size: 1.1rem;
        line-height: 1;
    }

    .nav-link::before {
        content: '';
        position: absolute;
        bottom: 4px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 3px;
        background: linear-gradient(90deg, #00b894, #00cec9);
        border-radius: 10px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .nav-link:hover {
        color: #00b894;
        background: rgba(0, 184, 148, 0.06);
        transform: translateY(-1px);
    }

    .nav-link:hover::before {
        width: 50%;
    }

    .nav-link.active {
        color: #00b894;
        background: rgba(0, 184, 148, 0.08);
    }

    .nav-link.active::before {
        width: 50%;
    }

    /* ===== TOGGLE BUTTON ===== */
    .navbar-toggler {
        display: none;
        flex-direction: column;
        gap: 5px;
        background: transparent;
        border: none;
        padding: 8px;
        cursor: pointer;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .navbar-toggler:hover {
        background: rgba(0, 184, 148, 0.06);
    }

    .navbar-toggler span {
        display: block;
        width: 28px;
        height: 2.5px;
        background: #2d3748;
        border-radius: 10px;
        transition: all 0.3s ease;
        transform-origin: center;
    }

    .navbar-toggler[aria-expanded="true"] span:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }

    .navbar-toggler[aria-expanded="true"] span:nth-child(2) {
        opacity: 0;
        transform: scaleX(0);
    }

    .navbar-toggler[aria-expanded="true"] span:nth-child(3) {
        transform: rotate(-45deg) translate(5px, -5px);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
        .top-bar-inner {
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 4px;
        }

        .top-bar-left {
            justify-content: center;
            gap: 6px 16px;
        }

        .contact-item {
            font-size: 0.7rem;
        }

        .contact-item svg {
            width: 14px;
            height: 14px;
        }

        .status-badge {
            font-size: 0.6rem;
            padding: 3px 12px;
        }

        .navbar-toggler {
            display: flex;
        }

        .collapse:not(.show) {
            display: none !important;
        }

        .collapse.show {
            display: block !important;
        }

        .navbar-nav {
            flex-direction: column;
            padding: 16px 0 8px;
            width: 100%;
            gap: 2px;
        }

        .nav-link {
            padding: 10px 16px;
            width: 100%;
            justify-content: center;
            border-radius: 8px;
        }

        .nav-link::before {
            display: none;
        }

        .nav-link:hover {
            transform: none;
            background: rgba(0, 184, 148, 0.06);
        }

        .logo-dark {
            display: none;
        }

        .logo-mobile {
            display: block !important;
        }

        .brand-text {
            font-size: 1.2rem;
        }

        .navbar-brand img {
            height: 35px;
        }
    }

    @media (max-width: 576px) {
        .top-bar {
            padding: 4px 0;
        }

        .contact-item {
            font-size: 0.6rem;
            gap: 4px;
        }

        .contact-item svg {
            width: 12px;
            height: 12px;
        }

        .brand-text {
            font-size: 1rem;
        }

        .navbar-brand img {
            height: 28px;
        }

        .nav-link {
            font-size: 0.8rem;
            padding: 8px 14px;
        }

        .nav-link span {
            font-size: 0.9rem;
        }

        .status-badge {
            font-size: 0.55rem;
            padding: 2px 10px;
        }
    }

    /* ===== SCROLL EFFECT ===== */
    .navbar.scrolled {
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.08);
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(12px);
        border-bottom: none;
    }

    /* ===== ACCESSIBILITY ===== */
    .nav-link:focus-visible,
    .navbar-toggler:focus-visible,
    .contact-item a:focus-visible {
        outline: 2px solid #00b894;
        outline-offset: 2px;
        border-radius: 4px;
    }

    /* ===== REDUCED MOTION ===== */
    @media (prefers-reduced-motion: reduce) {

        *,
        *::before,
        *::after {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
        }
    }
    .navbar .container{
    display:flex;
    align-items:center;
    justify-content:space-between;
    flex-wrap:nowrap;
}

.navbar-brand{
    flex-shrink:0;
}

.navbar-collapse{
    display:flex !important;
    justify-content:flex-end;
    flex-grow:1;
}

.navbar-nav{
    display:flex !important;
    flex-direction:row !important;
    margin-left:auto;
    gap:15px;
}

.nav-link{
    white-space:nowrap;
}.nav-link{
    display:flex;
    align-items:center;
    gap:8px;
    color:#2d3748 !important;
    font-size:16px !important;
    font-weight:600 !important;
    opacity:1 !important;
    visibility:visible !important;
    white-space:nowrap;
}

.nav-link span{
    display:inline-flex;
    align-items:center;
    font-size:20px;
}

.navbar-nav{
    display:flex !important;
    flex-direction:row !important;
    gap:20px;
}
</style>

<!-- ============================================================
     SCRIPT - Scroll Effect
     ============================================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar');

        if (navbar) {
            window.addEventListener('scroll', function() {
                navbar.classList.toggle('scrolled', window.scrollY > 50);
            }, {
                passive: true
            });
        }

        // Mobile toggle icon animation
        const toggler = document.querySelector('.navbar-toggler');
        if (toggler) {
            toggler.addEventListener('click', function() {
                const expanded = this.getAttribute('aria-expanded') === 'true';
                this.setAttribute('aria-expanded', !expanded);
            });
        }
    });
</script>