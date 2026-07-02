<footer id="footer" class="footer">
    <div class="container-fluid">
        <div class="footer-content">
            <!-- Copyright Section -->
            <div class="copyright">
                <i class="bi bi-c-circle me-1"></i>
                <span id="currentYear"></span> Copyright <strong><span>Smart MR</span></strong>. All Rights Reserved
            </div>

            <!-- Credits Section -->
            <div class="credits">
                <span class="designed-text">Designed by</span>
                <a href="http://esmartsolution.in/" target="_blank" rel="noopener noreferrer" class="credit-link">
                    <i class="bi bi-building me-1"></i>eSmart Solutions
                </a>
                <a href="https://bootstrapmade.com/" style="visibility: hidden;">BootstrapMade</a>
            </div>
        </div>
    </div>
</footer>

<!-- ============================================================
     STYLES - Directly in Footer
     ============================================================ -->
<style>
    /* ===== FOOTER STYLES ===== */
    .footer {
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        padding: 20px 0;
        margin-top: auto;
        box-shadow: 0 -2px 15px rgba(0, 0, 0, 0.03);
        transition: all 0.3s ease;
    }

    .footer .container-fluid {
        max-width: 1400px;
        padding: 0 24px;
    }

    .footer-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 12px 20px;
    }

    /* Copyright Section */
    .copyright {
        color: #6c757d;
        font-size: 0.9rem;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .copyright i {
        color: #28a745;
        font-size: 0.8rem;
    }

    .copyright strong {
        color: #2c3e50;
        font-weight: 700;
    }

    .copyright strong span {
        color: #28a745;
    }

    /* Credits Section */
    .credits {
        color: #6c757d;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 6px;
        flex-wrap: wrap;
    }

    .designed-text {
        color: #6c757d;
        font-weight: 400;
    }

    .credit-link {
        color: #28a745;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        padding: 4px 12px;
        border-radius: 50px;
        background: rgba(40, 167, 69, 0.06);
    }

    .credit-link:hover {
        color: #1e7e34;
        background: rgba(40, 167, 69, 0.12);
        transform: translateY(-1px);
        box-shadow: 0 2px 10px rgba(40, 167, 69, 0.15);
    }

    .credit-link i {
        font-size: 0.9rem;
        transition: transform 0.3s ease;
    }

    .credit-link:hover i {
        transform: scale(1.1);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
        .footer {
            padding: 16px 0;
        }

        .footer .container-fluid {
            padding: 0 16px;
        }

        .footer-content {
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 8px;
        }

        .copyright {
            font-size: 0.8rem;
        }

        .credits {
            font-size: 0.8rem;
            justify-content: center;
        }

        .credit-link {
            padding: 3px 10px;
        }
    }

    @media (max-width: 576px) {
        .footer {
            padding: 12px 0;
        }

        .footer .container-fluid {
            padding: 0 12px;
        }

        .copyright {
            font-size: 0.75rem;
        }

        .credits {
            font-size: 0.75rem;
        }

        .credit-link {
            padding: 2px 8px;
            font-size: 0.75rem;
        }
    }

    /* ===== ACCESSIBILITY ===== */
    .credit-link:focus-visible {
        outline: 2px solid #28a745;
        outline-offset: 2px;
        border-radius: 50px;
    }

    /* ===== REDUCED MOTION ===== */
    @media (prefers-reduced-motion: reduce) {
        .footer {
            transition: none;
        }

        .credit-link {
            transition: none;
        }

        .credit-link:hover {
            transform: none;
        }

        .credit-link:hover i {
            transform: none;
        }
    }
</style>

<!-- ============================================================
     SCRIPT - Auto Update Year
     ============================================================ -->
<script>
    // Auto update copyright year
    document.addEventListener('DOMContentLoaded', function() {
        const yearElement = document.getElementById('currentYear');
        if (yearElement) {
            yearElement.textContent = new Date().getFullYear();
        }
    });
</script>




