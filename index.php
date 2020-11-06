<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="swiper.min.css">
</head>
<style>
    /* body{
        margin: 0%;
        padding: 0%;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #383838;
        font-family: 'Poppin',sans-serif;
    } */
    .card{
        position: relative;
        background: #e21919;
        width: 400px;
        height: 500px;
        margin: 0 auto;

    }
    .card .content 
    {
        width: 400px;
        padding: 30px;
        box-sizing: border-box;
    }
    .card .content a
{
display: inline-block;
margin: 10px 0 0;
padding: 10px 20px;
text-decoration: none;
border: 2px solid #262626;
color: #262626;
font-weight: 600;
}
    .card .sliderText 
    {
        position: relative;
        width: 100%;
        height: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #fff;
    }
    .card .sliderText h3
    {
    color: #fff;
    font-size: 3em;
    }
.swiper-slide{
    width: 400px;
}
</style>
<?php 
include("components/header.php"); 
?>

<body>
<?php 
include("components/navbar.php"); 
?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-left">
        <div class="col-xl-8">
          <!-- <img src="assets/img/logo.png" class="logo-width-hero"> -->
          <h1 class="logo">Are You<br>Ready For <b style="color: #d6b161"><br>TAKE OFF</b> </h1>
          <h2>Simplified Training Solutions</h2>
          <div style="display: inline-block;">
            <button class="btn" style="background-color: #222; color: white; border: 2px solid #d6b161; border-radius: 50px"><b>About Us</b></button>
            <button class="btn" style="background-color: #d6b161; color: #222; border: 2px solid #d6b161; border-radius: 50px"><b>E-Registration</b></button>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="contain">
              <img src="assets/img/cessna172.png" style="width: 100%" class="productimg">
              <div class="overlay">
                <div class="text">CESSNA 172 <br>
                  <button class="btn" style="background-color: #222; color: white; border: 2px solid #d6b161; border-radius: 50px"><b>View Series</b></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="contain">
              <img src="assets/img/legacy917.png" style="width: 100%" class="productimg">
              <div class="overlay">
                <div class="text">LEGACY 971 <br>
                  <button class="btn" style="background-color: #222; color: white; border: 2px solid #d6b161; border-radius: 50px"><b>View Series</b></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <center>
            <h4 style="color: #222; margin-top: 50px; font-weight: lighter; font-size: 24px">- Our Mission -</h4>
            
            <br>
            <h5 style="margin-top: 50px; font-weight: lighter; font-size: 18px">Manufacture and deliver affordable, highly productive simulators across the industry.</h5>
            </center>
          </div>
          <div class="col-md-6">
            <img src="assets/img/logo.png" class="logoimg" style="float: right">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <hr class="new4">
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="about">
      <div class="container">
        <center>
          <div class="row">
            <div class="col-md-4">
              <img src="assets/img/truck.png" class="simulator-box-home">
              <br>
              <br>
              <h3 style="color: #222">Truck Simulators</h3>
              <p style="color: grey; width: 80%">We all have an idea that road training is an essential element of any skillful driving course, especially for the newcomers, in this case utilizing truck simulator training can bring many benefits.</p>
            </div>
            <div class="col-md-4">
              <img src="assets/img/airplane.png" class="simulator-box-home">
              <br>
              <br>
              <h3 style="color: #222">Flight Simulators</h3>
              <p style="color: grey; width: 80%">The fun begins when you receive a complete preflight briefing prior to entering the simulator. This exciting flight offers you the adventure of flying as the Captain in the left seat for the duration of the flight time.</p>
            </div>
            <div class="col-md-4">
              <img src="assets/img/car.png" class="simulator-box-home">
              <br>
              <br>
              <h3 style="color: #222">Car Simulators</h3>
              <p style="color: grey; width: 80%">Ocean simulators bring another amazing technically modern car simulator for public as well as private driving institutes, individual or business employee training courses, and other initiatives for the safety of traffic.</p>
            </div>
          </div>
        </center>
      </div>
    </section>
    <div class="row">
      <div class="col-md-12">
        <hr class="new4">
      </div>
    </div>
    
    <section>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card">
    <div class="sliderText">
        <!-- <h3>Slide One</h3> -->
        <img src="./plane_PNG5231.png" alt="plane" style="width: 300px;">
    </div>
    <div class="content">
        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. </p>
   <a href="#">Read More</a>
    </div>
</div>
            </div>
            <div class="swiper-slide">
                <div class="card">
    <div class="sliderText">
        <img src="./plane_PNG5231.png" alt="plane" style="width: 300px;">
    </div>
    <div class="content">
        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. </p>
   <a href="#">Read More</a>
    </div>
</div>
            </div>  
            <div class="swiper-slide">
                <div class="card">
    <div class="sliderText">
        <img src="./plane_PNG5231.png" alt="plane" style="width: 300px;">
    </div>
    <div class="content">
        <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. </p>
   <a href="#">Read More</a>
    </div>
</div>
            </div>
        </div>
    </div>
<script src="swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 40,
        stretch: 0,
        depth: 400,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
    </section>

    <!-- ======= About Us Section ======= -->
 
   </section>

    <section id="about" class="about">
      <div class="container">
        <center>
          <h1 style="color: #22273F"><b>Want to become a pilot?</b></h1>
          <br>
          <div style="width: 75%">
          <p style="color: grey">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using b</p>
          <br>
          <div style="display: inline-block;">
            <button class="btn" style="background-color: #222; color: white; border: 2px solid #d6b161; border-radius: 50px"><b>About Us</b></button>
            <button class="btn" style="background-color: #d6b161; color: #222; border: 2px solid #d6b161; border-radius: 50px"><b>E-Registration</b></button>
          </div>
          </div>
        </center>
      </div>
    </section><!-- End About Us Section -->

    
  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-color: #d6b161; color: black">
    <div class="container">
      <div class="row" style="text-align: left">
        <div class="col-md-3">
         
          <b style="border-bottom: 2px solid #222; border-bottom-right-radius:10px;  margin-bottom: 20px">About Us</b>
          <p style="width: 70%; margin-top: 20px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scramble</p>
        </div>
        <div class="col-md-3">
          <b style="border-bottom: 2px solid #222; border-bottom-right-radius:10px; margin-bottom: 20px ">Simulators</b>
          <br>
          <ul style="margin-top: 20px">
            <li>Simulator 1</li>
            <li>Simulator 2</li>
          </ul>
        </div>
        <div class="col-md-3">
          <b style="border-bottom: 2px solid #222; border-bottom-right-radius:10px; margin-bottom: 20px ">Trainings</b>
          <br>
          <ul style="margin-top: 20px">
            <li>Training 1</li>
            <li>Training 2</li>
          </ul>
        </div>
        <div class="col-md-3">
          <b style="border-bottom: 2px solid #222; border-bottom-right-radius:10px; margin-bottom: 20px ">Contact Us</b>
          <br>
          <ul style="margin-top: 20px">
           +92 666 888 9999 <br>
           ABC St, XYZ lane FSD
          </ul>

        </div>
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Ocean Simulators</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/ -->
        Designed by OceanSimulators Team
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>