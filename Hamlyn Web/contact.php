<?php
session_start();
error_reporting(0);
// require_once("wp_admin_panel/db.php");
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <!-- ========== SEO ========== -->
  <title>Hamlyn Bungalow | Nuwara Eliya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta content="" name="author">
  <!-- ========== FAVICON ========== -->
  <link rel="apple-touch-icon-precomposed" href="images/favicon-apple.png"/>
  <link rel="icon" href="images/favicon.png">
  <!-- ========== STYLESHEETS ========== -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-select.min.css">
  <link rel="stylesheet" href="css/jquery.mmenu.css">
  <link rel="stylesheet" href="revolution/css/layers.css">
  <link rel="stylesheet" href="revolution/css/settings.css">
  <link rel="stylesheet" href="revolution/css/navigation.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/daterangepicker.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <!-- ========== ICON FONTS ========== -->
  <link href="fonts/font-awesome.min.css" rel="stylesheet">
  <link href="fonts/flaticon.css" rel="stylesheet">
  <!-- ========== GOOGLE FONTS ========== -->
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700" rel="stylesheet">
</head>
<body>
<!-- ========== PRELOADER ========== -->
<div class="loader loader3">
  <div class="loader-inner">
    <div class="spin">
      <span></span>
      <img src="images/logo.svg" alt="Hotel Hamlyn">
    </div>
  </div>
</div>
<!-- ========== MOBILE MENU ========== -->
<nav id="mobile-menu"></nav>
<!-- ========== WRAPPER ========== -->
<div class="wrapper">
  <!-- ========== TOP MENU ========== -->
  <div class="topbar">
    <div class="container">
      <div class="welcome-mssg">
        Welcome to Hamlyn Hotel.
      </div>
      <div class="top-right-menu">
        <ul class="top-menu">
          <li class="d-none d-md-inline">
            <a href="tel:+18881234567">
              <i class="fa fa-phone"></i>+94 772224568
            </a>
          </li>
          <li class="d-none d-md-inline">
            <a href="mailto:contact@hotelhimara.com">
              <i class="fa fa-envelope-o "></i>info@hamlyn.lk</a>
          </li>

        </ul>
      </div>
    </div>
  </div>
  <!-- ========== HEADER ========== -->
  <header class="horizontal-header sticky-header" data-menutoggle="991">
    <div class="container">
      <!-- BRAND -->
      <div class="brand">
        <div class="logo">
          <a href="index.php">
            <img src="images/logo.svg" alt="Hotel Hamlyn">
          </a>
        </div>
      </div>
      <!-- MOBILE MENU BUTTON -->
      <div id="toggle-menu-button" class="toggle-menu-button">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </div>
      <!-- MAIN MENU -->
      <nav id="main-menu" class="main-menu">
        <ul class="menu">
          <li class="menu-item dropdown active">
            <a href="#">HOME</a>
          </li>
          <li class="menu-item dropdown">
            <a href="rooms-list.php">ROOMS</a>
          </li>
          <li class="menu-item dropdown">
            <a href="restaurant.php">Our Restaurant</a>
          </li>
          <li class="menu-item dropdown">
            <a href="location.php">EXCURSIONS</a>
          </li>
          <li class="menu-item dropdown">
            <a href="gallery.php">GALLERY</a>
          </li>
          <li class="menu-item dropdown">
            <a href="about-us.php">ABOUT US</a>
          </li>
          <li class="menu-item dropdown">
            <a href="contact.php">CONTACT US</a>
          </li>

          <li class="menu-item menu-btn">
            <a href="booking-form.php" class="btn">
              <i class="fa fa-calendar"></i>
              BOOK ONLINE</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>CONTACT</h1>
            <ol class="breadcrumb">
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>Contact</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="contact-page">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="section-title">
                <h4>CONTACT US</h4>
                <p class="section-subtitle">Let’s Talk</p>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus sit, fugiat at in assumenda corrupti autem iste eveniet eaque vitae beatae tenetur, voluptatem eius. Numquam.</p>
              <!-- CONTACT FORM -->
              <form id="contact-form" class="contact-form">
                <div class="form-group">
                  <input class="form-control" name="name" placeholder="Name" type="text">
                </div>
                <div class="form-group">
                  <input class="form-control" name="email" placeholder="Email" type="email">
                </div>
                <div class="form-group">
                  <input class="form-control" name="phone" placeholder="Phone" type="text">
                </div>
                <div class="form-group">
                  <input class="form-control" name="subject" placeholder="Subject" type="text">
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <button class="btn mt30">SEND YOUR MESSAGE</button>
                </div>
              </form>
            </div>
            <div class="col-md-4">
              <div class="sidebar">
                <div class="google-map">
                  <div class="toggle-streetview" id="openStreetView">
                    <i class="fa fa-street-view" aria-hidden="true"></i>
                  </div>
                  <div id="map-canvas"></div>
                </div>
                <div class="contact-details mt75">
                  <div class="contact-info">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fa fa-map-marker"></i>Lorem ipsum dolor, 25, Himara</a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-envelope"></i>contact@hotelhimara.com</a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-phone"></i>+1 888 123 4567</a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-fax"></i>+1 888 123 4567</a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-globe"></i>www.hotelhimara.com</a>
                      </li>
                    </ul>
                  </div>
                  <div class="social-media mt50">
                    <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="#">
                      <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip" href="#">
                      <i class="fa fa-pinterest"></i>
                    </a>
                    <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="#">
                      <i class="fa fa-linkedin"></i>
                    </a>
                    <a class="youtube" data-original-title="Youtube" data-toggle="tooltip" href="#">
                      <i class="fa fa-youtube"></i>
                    </a>
                    <a class="tripadvisor" data-original-title="Tripadvisor" data-toggle="tooltip" href="#">
                      <i class="fa fa-tripadvisor"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <!-- ========== FOOTER ========== -->
  <footer>
    <div class="footer-widgets">
      <div class="container">
        <div class="row">
          <!-- WIDGET -->
          <div class="col-md-3">
            <div class="footer-widget">
              <img src="images/logo.svg" class="footer-logo" alt="Hotel Himara">
              <div class="inner">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, velit placeat assumenda incidunt dolorem aliquam!</p>
                <a href="https://www.tripadvisor.com/" target="_blank">
                  <div class="tripadvisor-banner">
                    <span class="review">Recommended</span>
                    <img src="images/icons/tripadvisor.png" alt="Image">
                  </div>
                </a>
              </div>
            </div>
          </div>
          <!-- WIDGET -->
          <div class="col-md-3">
            <div class="footer-widget">
              <h3>FACEBOOK</h3>
              <div class="inner">

              </div>
            </div>
          </div>
          <!-- WIDGET -->
          <div class="col-md-3">
            <div class="footer-widget">
              <h3>USEFUL LINKS</h3>
              <div class="inner">
                <ul class="useful-links">
                  <li>
                    <a href="about-us.php">About Us</a>
                  </li>
                  <li>
                    <a href="contact.php">Rooms</a>
                  </li>
                  <li>
                    <a href="shop.php">Attractions</a>
                  </li>
                  <li>
                    <a href="gallery.php">Gallery</a>
                  </li>
                  <li>
                    <a href="location.php">Our Location</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- WIDGET -->
          <div class="col-md-3">
            <div class="footer-widget">
              <h3>Contact Info</h3>
              <div class="inner">
                <ul class="contact-details">
                  <li>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    Lorem ipsum dolor, 25, Hamlyn</li>
                  <li>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    Phone: +94 7722555662
                  </li>
                  <li>
                    <i class="fa fa-fax"></i>
                    Fax: +94 12356895</li>
                  <li>
                    <i class="fa fa-globe"></i>
                    Web: www.hamlyn.lk</li>
                  <li>
                    <i class="fa fa-envelope"></i>
                    Email:
                    <a href="mailto:info@hamlyn.lk">info@hamlyn.lk</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SUBFOOTER -->
    <div class="subfooter">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="copyrights">&copy; 2018 Hamlyn Bungalow. Designed by
              <a href="https://syncleaps.com/" target="_blank">SyncLeaps</a>.</div>
          </div>
          <div class="col-md-6">
            <div class="social-media">
              <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#">
                <i class="fa fa-facebook"></i>
              </a>
              <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#">
                <i class="fa fa-twitter"></i>
              </a>
              <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="#">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
    </div>
    <!-- ========== CONTACT NOTIFICATION ========== -->
    <div id="contact-notification" class="notification fixed"></div>
    <!-- ========== BACK TO TOP ========== -->
    <div class="back-to-top">
      <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    <!-- ========== JAVASCRIPT ========== -->
    <script src="js/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/jquery.mmenu.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/owl.carousel.thumbs.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/countup.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/daterangepicker.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/smoothscroll.min.js"></script>
    <script src="js/instafeed.min.js"></script>
    <script src="js/main.js"></script>
    <!-- ========== REVOLUTION SLIDER ========== -->
    <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
  </body>
</html>
