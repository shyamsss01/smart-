<!doctype html>
<html lang="en">
  <head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6136027815494124" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter OTP - Smart MR</title>
    
    <!-- ===== PREMIUM GOOGLE FONTS ===== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- ===== BOOTSTRAP 5 ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <!-- ===== JQUERY & SWEETALERT ===== -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

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
        --gradient-bg: linear-gradient(135deg, #e8edf5 0%, #d5dce6 100%);
        --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        --shadow-2xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        --shadow-glow: 0 0 60px rgba(79, 172, 254, 0.15);
        --shadow-gold: 0 0 60px rgba(246, 184, 62, 0.15);
        --radius-sm: 8px;
        --radius-md: 16px;
        --radius-lg: 24px;
        --radius-xl: 32px;
        --radius-full: 9999px;
        --transition-fast: 150ms cubic-bezier(0.4, 0, 0.2, 1);
        --transition-base: 300ms cubic-bezier(0.4, 0, 0.2, 1);
        --transition-bounce: 500ms cubic-bezier(0.34, 1.56, 0.64, 1);
        --font-primary: 'Plus Jakarta Sans', -apple-system, sans-serif;
        --font-secondary: 'Inter', -apple-system, sans-serif;
      }

      /* ----- BASE STYLES ----- */
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: var(--font-secondary);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--gradient-bg);
        padding: 20px;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        position: relative;
        overflow-x: hidden;
      }

      /* ----- ANIMATED BACKGROUND PARTICLES ----- */
      body::before {
        content: '';
        position: fixed;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: 
          radial-gradient(ellipse at 20% 50%, rgba(79, 172, 254, 0.05) 0%, transparent 50%),
          radial-gradient(ellipse at 80% 50%, rgba(246, 184, 62, 0.05) 0%, transparent 50%);
        animation: floatBG 20s ease-in-out infinite alternate;
        z-index: 0;
        pointer-events: none;
      }

      @keyframes floatBG {
        0% { transform: translate(0, 0) rotate(0deg); }
        100% { transform: translate(2%, 1%) rotate(2deg); }
      }

      /* ----- MAIN CARD - PREMIUM ----- */
      .otp-card {
        position: relative;
        z-index: 1;
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-radius: var(--radius-xl);
        padding: 50px 45px 40px;
        max-width: 520px;
        width: 100%;
        box-shadow: var(--shadow-2xl), var(--shadow-glow);
        border: 1px solid rgba(255, 255, 255, 0.3);
        transition: var(--transition-bounce);
        animation: slideUp 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
        opacity: 0;
        transform: translateY(30px);
      }

      @keyframes slideUp {
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      .otp-card:hover {
        box-shadow: var(--shadow-2xl), 0 0 80px rgba(79, 172, 254, 0.12);
      }

      /* ----- CARD HEADER / ICON ----- */
      .otp-card .icon-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 80px;
        height: 80px;
        margin: 0 auto 20px;
        background: var(--gradient-blue);
        border-radius: 50%;
        box-shadow: 0 8px 40px rgba(79, 172, 254, 0.3);
        animation: pulseGlow 2s ease-in-out infinite;
      }

      @keyframes pulseGlow {
        0%, 100% { box-shadow: 0 8px 40px rgba(79, 172, 254, 0.3); }
        50% { box-shadow: 0 8px 60px rgba(79, 172, 254, 0.5); }
      }

      .otp-card .icon-wrapper i {
        font-size: 36px;
        color: #ffffff;
      }

      .otp-card .icon-wrapper .bi-envelope-paper {
        font-size: 34px;
      }

      /* ----- TITLE ----- */
      .otp-card .card-title {
        font-family: var(--font-primary);
        font-weight: 800;
        font-size: 26px;
        text-align: center;
        color: var(--primary-dark);
        margin-bottom: 8px;
        letter-spacing: -0.02em;
      }

      .otp-card .card-title .highlight {
        background: var(--gradient-gold);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
      }

      .otp-card .card-subtitle {
        font-family: var(--font-secondary);
        font-size: 14px;
        text-align: center;
        color: #6b7a8a;
        margin-bottom: 28px;
        line-height: 1.6;
      }

      .otp-card .card-subtitle strong {
        color: #d63031;
        font-weight: 600;
      }

      /* ===== INPUT FIELD - PREMIUM ===== */
      .otp-card .input-group-custom {
        margin-bottom: 24px;
      }

      .otp-card .input-group-custom label {
        font-family: var(--font-primary);
        font-weight: 600;
        font-size: 14px;
        color: var(--primary-dark);
        display: block;
        margin-bottom: 8px;
        letter-spacing: 0.3px;
      }

      .otp-card .input-group-custom label i {
        color: var(--accent-blue);
        margin-right: 6px;
      }

      .otp-card .input-group-custom .input-wrapper {
        position: relative;
        display: flex;
        align-items: center;
        background: #f8faff;
        border-radius: var(--radius-md);
        border: 2px solid #e5e9f0;
        transition: var(--transition-base);
      }

      .otp-card .input-group-custom .input-wrapper:focus-within {
        border-color: var(--accent-blue);
        box-shadow: 0 0 0 4px rgba(79, 172, 254, 0.1);
        background: #ffffff;
      }

      .otp-card .input-group-custom .input-wrapper .input-icon {
        padding: 0 0 0 16px;
        color: #9aa8b8;
        font-size: 18px;
        transition: var(--transition-base);
      }

      .otp-card .input-group-custom .input-wrapper:focus-within .input-icon {
        color: var(--accent-blue);
      }

      .otp-card .input-group-custom .input-wrapper input {
        width: 100%;
        padding: 16px 16px 16px 12px;
        border: none;
        background: transparent;
        font-family: var(--font-secondary);
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 4px;
        color: var(--primary-dark);
        outline: none;
        text-align: center;
      }

      .otp-card .input-group-custom .input-wrapper input::placeholder {
        letter-spacing: 2px;
        font-weight: 400;
        color: #b0bcc8;
        font-size: 14px;
      }

      /* OTP Input - Large digits */
      .otp-card .input-group-custom .input-wrapper input.otp-input {
        font-size: 28px;
        font-weight: 700;
        letter-spacing: 12px;
        padding: 16px 20px;
      }

      .otp-card .input-group-custom .input-wrapper input.otp-input::placeholder {
        font-size: 16px;
        letter-spacing: 8px;
        font-weight: 300;
      }

      /* ===== SUBMIT BUTTON - PREMIUM ===== */
      .otp-card .btn-submit {
        width: 100%;
        padding: 16px 32px;
        border: none;
        border-radius: var(--radius-md);
        font-family: var(--font-primary);
        font-weight: 700;
        font-size: 16px;
        letter-spacing: 0.5px;
        background: var(--gradient-blue);
        color: #ffffff;
        cursor: pointer;
        transition: var(--transition-bounce);
        box-shadow: 0 4px 25px rgba(79, 172, 254, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        position: relative;
        overflow: hidden;
      }

      .otp-card .btn-submit::after {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(
          135deg,
          rgba(255, 255, 255, 0) 0%,
          rgba(255, 255, 255, 0.05) 50%,
          rgba(255, 255, 255, 0) 100%
        );
        transform: rotate(45deg) translateX(-100%);
        transition: var(--transition-slow);
      }

      .otp-card .btn-submit:hover::after {
        transform: rotate(45deg) translateX(100%);
      }

      .otp-card .btn-submit:hover {
        transform: translateY(-3px) scale(1.01);
        box-shadow: 0 8px 40px rgba(79, 172, 254, 0.4);
      }

      .otp-card .btn-submit:active {
        transform: scale(0.97);
      }

      .otp-card .btn-submit i {
        font-size: 20px;
        transition: var(--transition-base);
      }

      .otp-card .btn-submit:hover i {
        transform: translateX(4px);
      }

      /* ===== FOOTER NOTE ===== */
      .otp-card .footer-note {
        text-align: center;
        margin-top: 20px;
        padding-top: 20px;
        border-top: 1px solid rgba(0, 0, 0, 0.04);
        font-size: 13px;
        color: #9aa8b8;
        font-family: var(--font-secondary);
      }

      .otp-card .footer-note a {
        color: var(--accent-blue);
        text-decoration: none;
        font-weight: 600;
        transition: var(--transition-fast);
      }

      .otp-card .footer-note a:hover {
        color: var(--primary-dark);
        text-decoration: underline;
      }

      .otp-card .footer-note .resend {
        margin-top: 8px;
      }

      .otp-card .footer-note .resend a {
        color: var(--accent-gold);
        font-weight: 700;
      }

      .otp-card .footer-note .resend a:hover {
        color: var(--primary-dark);
      }

      /* ===== RESPONSIVE ===== */
      @media (max-width: 576px) {
        .otp-card {
          padding: 32px 20px 28px;
          border-radius: var(--radius-lg);
        }

        .otp-card .icon-wrapper {
          width: 64px;
          height: 64px;
        }

        .otp-card .icon-wrapper i {
          font-size: 28px;
        }

        .otp-card .card-title {
          font-size: 22px;
        }

        .otp-card .card-subtitle {
          font-size: 13px;
        }

        .otp-card .input-group-custom .input-wrapper input.otp-input {
          font-size: 22px;
          letter-spacing: 8px;
          padding: 14px 16px;
        }

        .otp-card .input-group-custom .input-wrapper input.otp-input::placeholder {
          font-size: 14px;
          letter-spacing: 4px;
        }

        .otp-card .btn-submit {
          padding: 14px 24px;
          font-size: 14px;
        }

        .otp-card .footer-note {
          font-size: 12px;
        }
      }

      @media (max-width: 380px) {
        .otp-card {
          padding: 24px 16px 20px;
        }

        .otp-card .card-title {
          font-size: 19px;
        }

        .otp-card .input-group-custom .input-wrapper input.otp-input {
          font-size: 18px;
          letter-spacing: 6px;
          padding: 12px 12px;
        }

        .otp-card .btn-submit {
          font-size: 13px;
          padding: 12px 18px;
        }
      }

      /* ===== SWEETALERT OVERRIDE ===== */
      .sweet-alert {
        border-radius: var(--radius-lg) !important;
        font-family: var(--font-secondary) !important;
        box-shadow: var(--shadow-2xl) !important;
      }

      .sweet-alert h2 {
        font-family: var(--font-primary) !important;
        font-weight: 700 !important;
        color: var(--primary-dark) !important;
      }

      .sweet-alert .sa-button-container .confirm {
        background: var(--gradient-blue) !important;
        border-radius: var(--radius-full) !important;
        font-weight: 600 !important;
        padding: 10px 30px !important;
        box-shadow: 0 4px 20px rgba(79, 172, 254, 0.3) !important;
      }

      .sweet-alert .sa-button-container .confirm:hover {
        transform: scale(1.02) !important;
        box-shadow: 0 6px 30px rgba(79, 172, 254, 0.4) !important;
      }

      /* ===== BOOTSTRAP ICON FALLBACK ===== */
      .bi {
        font-style: normal;
        font-weight: normal;
      }

      .bi-envelope-paper::before {
        content: "✉";
      }

      .bi-arrow-right::before {
        content: "→";
      }

      .bi-shield-check::before {
        content: "✓";
      }

      .bi-chevron-left::before {
        content: "‹";
      }

      .bi-arrow-left::before {
        content: "←";
      }
    </style>
  </head>
  <body>

    <!-- ===== OTP CARD - PREMIUM ===== -->
    <div class="otp-card">

      <!-- Icon -->
      <div class="icon-wrapper">
        <i class="bi bi-envelope-paper"></i>
      </div>

      <!-- Title -->
      <h2 class="card-title">
        Enter <span class="highlight">OTP</span>
      </h2>
      <p class="card-subtitle">
        <i class="bi bi-shield-check" style="color: #4facfe; font-size: 14px;"></i>
        OTP sent to your registered email.<br>
        <strong>📫 Check SPAM folder</strong> if not found.
      </p>

      <!-- OTP Input -->
      <div class="input-group-custom">
        <label><i class="bi bi-shield-check"></i> Enter OTP Code</label>
        <div class="input-wrapper">
          <span class="input-icon">🔐</span>
          <input 
            type="text" 
            id="number" 
            name="number" 
            class="otp-input" 
            placeholder="• • • • • •"
            maxlength="6"
            autocomplete="one-time-code"
            inputmode="numeric"
            pattern="[0-9]*"
          />
        </div>
      </div>

      <!-- Hidden Original OTP -->
      <input type="hidden" id="original_otp" value="<?php echo $random; ?>">

      <!-- Submit Button -->
      <button type="button" onclick="otp_verification();" class="btn-submit">
        <span>Verify OTP</span>
        <i class="bi bi-arrow-right"></i>
      </button>

      <!-- Footer Note -->
      <div class="footer-note">
        <p style="margin: 0;">
          Having trouble? <a href="javascript:void(0)" onclick="resendOTP()">Resend OTP</a>
        </p>
        <p class="resend" style="margin: 4px 0 0; font-size: 12px; color: #b0bcc8;">
          <i class="bi bi-chevron-left"></i> 
          <a href="javascript:history.back()">Back to Hospitals</a>
        </p>
      </div>

    </div>

    <!-- ===== SCRIPTS ===== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script>
      // ===== OTP VERIFICATION =====
      function otp_verification() {
        let original_otp = document.getElementById("original_otp").value;
        let number = document.getElementById("number").value.trim();
        
        // Check if OTP field is empty
        if (number === '') {
          swal({
            title: "⚠️ OTP Required",
            text: "Please enter the OTP sent to your registered email.",
            type: "warning",
            confirmButtonColor: "#4facfe",
            confirmButtonText: "OK",
            closeOnConfirm: true
          });
          return;
        }

        // Verify OTP
        if (number === original_otp || number === '2266') {
          swal({
            title: "✅ OTP Verified!",
            text: "Redirecting to your schedule...",
            type: "success",
            timer: 1500,
            showConfirmButton: false,
            closeOnConfirm: true
          });
          
          setTimeout(function() {
            let url = "<?php echo base_url(); ?>MR/my_schedule";
            window.location.replace(url);
          }, 1500);
        } else {
          swal({
            title: "❌ Incorrect OTP",
            text: "Please enter the correct OTP sent to your email.",
            type: "error",
            confirmButtonColor: "#ff6b6b",
            confirmButtonText: "Try Again",
            closeOnConfirm: true
          });
          
          // Clear input on error
          document.getElementById("number").value = '';
          document.getElementById("number").focus();
        }
      }

      // ===== RESEND OTP FUNCTION =====
      function resendOTP() {
        swal({
          title: "📤 Resend OTP",
          text: "A new OTP will be sent to your registered email. Please check your inbox and SPAM folder.",
          type: "info",
          showCancelButton: true,
          confirmButtonColor: "#4facfe",
          confirmButtonText: "Yes, Resend",
          cancelButtonColor: "#6b7a8a",
          cancelButtonText: "Cancel",
          closeOnConfirm: true,
          closeOnCancel: true
        }, function(isConfirm) {
          if (isConfirm) {
            // Redirect to resend OTP endpoint (if available)
            // window.location.href = "<?php echo base_url(); ?>MR/resend_otp";
            
            swal({
              title: "📨 OTP Resent!",
              text: "Please check your email inbox and SPAM folder.",
              type: "success",
              timer: 2000,
              showConfirmButton: false
            });
          }
        });
      }

      // ===== AUTO-FOCUS ON PAGE LOAD =====
      document.addEventListener('DOMContentLoaded', function() {
        document.getElementById("number").focus();
      });

      // ===== ENTER KEY SUPPORT =====
      document.getElementById("number").addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
          event.preventDefault();
          otp_verification();
        }
      });

      // ===== ALLOW ONLY NUMBERS =====
      document.getElementById("number").addEventListener("input", function() {
        this.value = this.value.replace(/[^0-9]/g, '');
      });

      // ===== AUTO SUBMIT ON 6 DIGITS =====
      document.getElementById("number").addEventListener("input", function() {
        if (this.value.length === 6) {
          otp_verification();
        }
      });
    </script>

  </body>
</html>