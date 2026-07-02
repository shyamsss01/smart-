<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6136027815494124"
     crossorigin="anonymous"></script>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="Ayman Fikry"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Saving Energy! Saving The Planet!"/>
    <title>Smart MR</title>
    <link href="<?php echo base_url()?>home_page/assets/images/favicon/favicon.png" rel="icon"/>
    <!--  Fonts ==
    -->
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet"/>
    <!--  Stylesheets==
    -->
    <link href="<?php echo base_url()?>home_page/assets/css/vendor.min.css" rel="stylesheet"/>
    <link href="<?php echo base_url()?>home_page/assets/css/style.css" rel="stylesheet"/>
    <style type="text/css">
      #myVideo {
        height: 50vh;
        width: 100%;
        object-fit: fill; // use "cover" to avoid distortion
        position: absolute;
}
   /* Popup Open button */ 
        .open-button{
            color:#FFF;
            background:#0066CC;
            padding:10px;
            text-decoration:none;
            border:1px solid #0157ad;
            border-radius:3px;
        }
         
        .open-button:hover{
            background:#01478e;
        }
         
        .popup {
            position:fixed;
            top:0px;
            left:0px;
            background:rgba(0,0,0,0.75);
            width:100%;
            height:100%;
            display:none;
            z-index: 1001;
            overflow-y:auto;
        }
         
        /* Popup inner div */
        .popup-content {
            width: 70%;
            margin: 0 auto;
            box-sizing: border-box;
            padding: 40px;
            margin-top: 9%;
            box-shadow: 0px 2px 6px rgba(0,0,0,1);
            border-radius: 3px;
            background: #56a8be;
            position: relative;
            text-align: justify;
        }
        .popup-content p,h6{
            color: #fff!important;
        }
         
        /* Popup close button */
        .close-button {
            width: 25px;
            height: 25px;
            position: absolute;
            top: -3px;
            right: -4px;
            border-radius: 20px;
            background: rgba(0,0,0,0.8);
            font-size: 20px;
            text-align: center;
            color: #fff;
            text-decoration:none;
        }
         
        .close-button:hover {
            background: rgba(0,0,0,1);
        }
         .popup-content h4{
          background: #f5cd39;
          padding: 3px;
          border-radius: 5px;
          width: fit-content;
          color: white;
         }
        @media screen and (max-width: 720px) {
        .popup-content {
            width:90%;
            } 
        }
  </style>
  </head>
  <body>
    <div class="preloader">
      <div class="dual-ring"></div>
    </div>
    <!-- Document Wrapper-->
    <div class="wrapper clearfix" id="wrapperParallax">
      <!-- 
      ============================
      Header #4
      ============================
      -->

      <?php $this->load->view('home/header.php');?>
      <!-- End .header-->
 
      <!-- 
      ============================
      Slider #3 Section
      ============================
      -->
      <section class="slider slider-3" id="slider-3">
        <div class="container-fluid pe-0 ps-0">
          <div class="embed-responsive embed-responsive-16by9">
          <video autoplay muted loop id="myVideo" >
  <source src="<?php echo base_url()?>assets/video/main.mp4" type="video/mp4">
  </video>
          <!-- End .slider-carousel-->
        </div>
        <!--  End .container-fluid-->
      </section>
      <!--
      ============================
      Company Data Section
      ============================
      -->
      <section class="company-data" id="company-data-1">
        <div class="container"> 
          <div class="row no-gutters">
            <div class="col-12 col-lg-3"> 
              <div class="data"> 
                <div class="data-icon"><i class="icons-energiaphone-call"></i></div>
                <div class="data-body"> 
                  <h6>quick contact </h6>
                  <p>Email: <a href="prasad@esmartsolution.in"></a>prasad@esmartsolution.in</p>
                  <p>Phone: <a href="tel:9975172266">9975172266/9172107425</a></p>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-3"> 
              <div class="data"> 
                <div class="data-icon"><i class="icons-energialocation"></i></div>
                <div class="data-body"> 
                  <h6>our location</h6>
                  <p>eSmart Solutions<br>
                     6, Sai Krupa Appt,Gulmohar Vihar,Nashik<br>
                     Maharashtra 422007.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-5 offset-lg-1" style="margin-top:5%">
              <div class="panels-container" > 
                <div class="panel-action">
                  <div class="panel-icon"><i class="flaticon-040-green-energy"></i></div>
                  <div class="panel-content">
                    <h6  class="panel-heading">SMART MR, is a trusted platform by Doctors to grant appointments to MR.</h6>
                        <p class="panel-desc">Now, MR can prepare their own schedule across India!! with just few clicks.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--
      ============================
      About #3 Section
      ============================
      -->
      <section class="about about-3" id="about-3">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="heading heading-12">
                <p class="heading-subtitle">An overview about Smart MR</p>
                <h2 class="heading-title">About Smart MR</h2>
              </div>
              <div class="about-block"> 
                <div class="block-left"> 
                  <p class="paragraph">It is an Initiative from <a href = "http://esmartsolution.in">eSmart Solutions</a>, A veteran solution provider in Health Care Industry. eSmart since year 2012, enabled its customers with numerous utilities to manage their OPD/Hospitals. Now, having a vision to organize Doctor and MR's schedule,  eSmart has launched SMART MR solution to bridge the gap between the peers of this industry across India.
				        </p>
				  <p style="color: #45aacc!important;">
				  	<b>- Doctor knows which MR set is going to visit today!! <br>
				   	   - MR knows which hospitals he is supposed to meet today<br>
				       - Either party can view monthly calendar along with NO-Show Days for the meet  
				    </b>
                  </p>   
                  <p>Smart MR will help a MR to get justified  &quot;Attention and Time&quot;.
                  	<br>
					Organized scheduling of meetings enables Doctors and MRs to optimize their meet and accordingly handle daily routine </p>
                 
                </div>
              </div>
            </div>
            <!-- End .col-lg-6-->
            <div class="col-12 col-lg-5 offset-lg-1">
              <div class="about-img">
                <div class="about-img-holder bg-overlay">
                <iframe width="600" height="345" src="https://www.youtube.com/embed/SAwTpFdXN7s">
                 </iframe> 

                </div>
                <!-- Start .counter-->
                
                <!-- End .counter-->
              </div>
            </div>
          </div>
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>
      
     <section class="services services-2 bg-grey" id="services-2">
        <div class="container">
          <div class="heading heading-2">
            <div class="row">
              <div class="col-12 col-lg-6">
                <h2 class="heading-title">We devote ourself to get Smarter Solutions in Health Care Industry</h2>
              </div>
              <div class="col-12 col-lg-6">
                <p class="heading-desc">Medical Representative is a respectful profession. Having said that, we aim to prevent MR to work in dormant or unorganized atmosphere. We vision to connect all Hospitals and OPD and thereby connect all MRs. We empower both to leverage the appointment scheduling and linking to their calendar management and thereby work efficiently.</p>
              </div>
            </div>
            <!-- End .row-->
          </div>
          <!-- End .heading-->
         
            </div>
          </div>
          <!-- End .carousel-->
        </div>
        <!-- End .container-->
      </section>

    
      <!--
      ============================
      Faqs #1 Section
      ============================
      -->
      <section class="faqs faqs-1 bg-overlay bg-overlay-theme" id="faqs-1">
        <div class="bg-section"> <img src="<?php echo base_url()?>home_page/assets/images/bg.jpg" alt="background"/></div>
        <div class="container">
          <div class="heading heading-15 heading-light">
            <div class="row">
              <div class="col-12 col-lg-5">
                <p class="heading-subtitle"></p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-5">
                
              </div>
              <div class="col-12 col-lg-5 offset-lg-1"> 
                  <div style="background: #fff;padding: 3%;border-radius: 5px;">

                    <ul class="list-unstyled advantages-list">
                    <h2 class="heading-title" style="color:black">We are bridging Doctor - MR gaps</h2>
                      <li>Set Doctor Holiday Calendarrr</li>
                      <li>Allow MR to book defined slots only</li>
                      <li>Limit daily bookings</li>
                      <li>Set monthly limits</li>
                      <li>Notification of Reschedule or Appointment cancellation</li>
                      <li>Personal calendar management</li>
                    </ul>
                  </div>
                </div>
            </div>
            <!-- End .row-->
          </div>
          
        </div>
        <!-- End .container-->
      </section>

      <section class="project-single" id="project-single" style="padding-top: 2%;padding-bottom: 2%!important;">
        <div class="row"> 
            <div class="col-12 col-lg-6 offset-lg-3">
              <div class="heading heading-11 text-center">
                
                <h2 class="heading-title">Our Clients</h2>
              </div>
            </div>
          </div>
        <div class="project-image-carousel projects projects-gallery">
          <div class="carousel owl-carousel carousel-dots carousel-navs" data-slide="4" data-slide-rs="3" data-center="data-center" data-autoplay="true" data-nav="true" data-dots="true" data-space="30" data-loop="true" data-speed="800">
            <div class=" " style="height:95px;width:187px">
              <div class="project-panel">
                <div class="project-panel-holder">
              
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/aadhar.png" alt=" item"/>
                    
                    <!-- End .project-hover-->
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
            <div class=" " style="height:100px;width:150px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/cardiomet.png" alt=" item"/>
                    
                    <!-- End .project-hover-->
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
            <div class=" " style="height:100px;width:150px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/bestdermatologistkolhapur.png" alt=" item"/>
                    
                    <!-- End .project-hover-->
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
            <div class=" " style="height:100px;width:150px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/cardiomet.png" alt=" item"/>
                    
                    <!-- End .project-hover-->
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
            <div class=" " style="height:100px;width:150px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/rushiraj.png" alt=" item"/>
                    
                    <!-- End .project-hover-->
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
            <div class=" " style="height:100px;width:150px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/sancheti.png" alt=" item"/>
                    
                    <!-- End .project-hover-->
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
            <div class=" " style="height:100px;width:150px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/sattur.jpg" alt=" item"/>
                    
                    <!-- End .project-hover-->
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
            <div class=" " style="height:100px;width:150px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/shree_multispeciality.png" alt=" item"/>
                    
                    <!-- End .project-hover-->
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
            <div class=" " style="height:65px;width:65px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/shree_swami_samarth_multispeciality.png" alt=" item"/>
                    
                    <!-- End .project-hover-->
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
            <div class=" " style="height:100px;width:150px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/smiling_sugar.png" alt=" item"/>
                    
                    <!-- End .project-hover-->
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
            <div class=" " style="height:100px;width:150px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/spandan.jpg" alt=" item"/>
                    
                    <!-- End .project-hover-->
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
            <div class=" " style="height:100px;width:150px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/star_logo.png" alt=" item"/>
                    
                    <!-- End .project-hover-->
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
            <div class=" " style="height:100px;width:150px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/vakratund.png" alt=" item"/>
                    
                    <!-- End .project-hover-->
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
          
            
            <div class=" " style="height:100px;width:150px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/omkar.png" alt=" item"/>
                    
                    <!-- End .project-hover-->
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>

           

            <div class=" " style="height:65px;width:100px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/lifecare.png" alt=" item"/>
                    
                    <!-- End .project-hover-->
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
            <div class=" " style="height:65px;width:100px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/kelkar_hospital.jpg" alt=" item"/>
                    
                    <!-- End .project-hover-->
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
            <div class=" " style="height:65px;width:100px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/gangurde_logo.png" alt=" item"/>
                    
                    <!-- End .project-hover-->
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
            <div class=" " style="height:65px;width:100px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/dombe.png" alt=" item"/>
                    
                    <!-- End .project-hover-->
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
            <div class=" " style="height:65px;width:100px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/dakshata.png" alt=" item"/>
                    
                    <!-- End .project-hover-->
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
            <div class=" " style="height:100px;width:150px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/bestcardiologistkolhapur.png" alt=" item"/>
                    
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
            <div class=" " style="height:100px;width:150px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/arpanpvtltd.png" alt=" item"/>
                    
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
            <div class=" " style="height:100px;width:150px">
              <div class="project-panel">
                <div class="project-panel-holder">
                  <div class="project-img"><img src="<?php echo base_url() ?>home_page/assets/images/projects/single/gallery/aloha.jpg" alt=" item"/>
                    
                  </div>
                  <!-- End .project-img-->
                </div>
                <!-- End .project-panel-holder-->
              </div>
              <!-- End .project-panel-->
            </div>
          </div>
          <!-- End .carousel-->
        </div>
      </section>


      
      <div class="popup" popup-name="domestic_solar_system">
            <div class="popup-content">
              <center>
                <h4>Domestic Solar System</h4>
                <h5 style="color: red;">NOW HAVE UNLIMITED POWER IN YOUR HAND WITH EMI FACILITY AT 0% INTEREST</h5>
              </center>
              <p>Rayon Solar Systems Pvt Ltd allows customers to pay for Domestic Solar System in easy Installments.</p>
              <p>
                In Domestic Solar System, Solar PV (photovoltaic) panels convert sunlight into electricity. The free power generated from your solar panel array can then be used to power your home or business or sent back to the grid for others to use!. Solar panels work by absorbing sunlight with photovoltaic (PV) cells, usually after being placed on the roof of a house. DC electricity from your solar panels is converted to AC electricity by inverter technology (AC electricity is used by most home appliances).
              </p>
              <center><a href="#" download onclick="window.open('domestic_solar.pdf');"><button class="btn btn--white btn-sm" style="width: auto;">Download Brochure</button></a></center>
              <a class="close-button" popup-close="domestic_solar_system" href="javascript:void(0)">x</a>
            </div>
        </div>
     
      <?php $this->load->view('home/footer.php');?>
      <!--
      ============================
      BackToTop #1
      ============================
      -->
      <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
    </div>
    <!--  Footer Scripts==
    -->
    <script src="<?php echo base_url()?>home_page/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url()?>home_page/assets/js/vendor.js"></script>
    <script src="<?php echo base_url()?>home_page/assets/js/functions.js"></script>
    <script type="text/javascript">
    $(window).on('load', function() {
        $('#exampleModal').modal('show');
    });
    </script>

     <script type="text/javascript">
      $(function() {
          // Open Popup
          $('[popup-open]').on('click', function() {
              var popup_name = $(this).attr('popup-open');
       $('[popup-name="' + popup_name + '"]').fadeIn(300);
          });
       
          // Close Popup
          $('[popup-close]').on('click', function() {
       var popup_name = $(this).attr('popup-close');
       $('[popup-name="' + popup_name + '"]').fadeOut(300);
          });
       
          // Close Popup When Click Outside
          $('.popup').on('click', function() {
       var popup_name = $(this).find('[popup-close]').attr('popup-close');
       $('[popup-name="' + popup_name + '"]').fadeOut(300);
          }).children().click(function() {
       return false;
          });
       
      });
    </script> 
  </body>
</html>