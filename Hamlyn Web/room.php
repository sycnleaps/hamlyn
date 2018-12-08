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
      <div class="page-title gradient-overlay op5" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>SINGLE ROOM</h1>
            <div class="room-details-price">
              Rs. 5,000 / NIGHT
            </div>
            <ol class="breadcrumb">
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>Single Room</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="room">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-12">
              <!-- ROOM SLIDER -->
              <div class="room-slider">
                <div id="room-main-image" class="owl-carousel image-gallery">
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="images/rooms/single/single1.jpg">
                        <img class="img-fluid" src="images/rooms/single/single1.jpg" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="images/rooms/single/single2.jpg">
                        <img class="img-fluid" src="images/rooms/single/single2.jpg" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="images/rooms/single/single3.jpg">
                        <img class="img-fluid" src="images/rooms/single/single3.jpg" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="images/rooms/single/single4.jpg">
                        <img class="img-fluid" src="images/rooms/single/single4.jpg" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="images/rooms/single/single5.jpg">
                        <img class="img-fluid" src="images/rooms/single/single5.jpg" alt="Image">
                      </a>
                    </figure>
                  </div>
                </div>
                <div id="room-thumbs" class="room-thumbs owl-carousel">
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src="images/rooms/single/single1.jpg" alt="Image"></div>
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src="images/rooms/single/single2.jpg" alt="Image"></div>
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src="images/rooms/single/single3.jpg" alt="Image"></div>
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src="images/rooms/single/single4.jpg" alt="Image"></div>
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src="images/rooms/single/single5.jpg" alt="Image"></div>
                </div>
              </div>
              <p class="dropcap">Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                nisl ut aliquip ex ea
                <u>commodo consequat.</u>
                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...</p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati
                blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum
                molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat
                placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni
                necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil
                at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima
                illum. Repellendus cumque veniam quae odit enim.
              </p>
              <div class="section-title sm">
                <h4>ROOM SERVICES</h4>
                <p class="section-subtitle">Single Room Includes</p>
              </div>
              <div class="room-services-list">
                <div class="row">
                  <div class="col-sm-4">
                    <ul class="list-unstyled">
                      <li>
                        <i class="fa fa-check"></i>Double Bed</li>
                      <li>
                        <i class="fa fa-check"></i>80 Sq mt</li>
                      <li>
                        <i class="fa fa-check"></i>3 Persons</li>
                      <li>
                        <i class="fa fa-check"></i>Free Internet</li>
                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <ul class="list-unstyled">
                      <li>
                        <i class="fa fa-check"></i>Free Wi-Fi</li>
                      <li>
                        <i class="fa fa-check"></i>Breakfast Include</li>
                      <li>
                        <i class="fa fa-check"></i>Private Balcony</li>
                      <li class="no">
                        <i class="fa fa-times"></i>Free Newspaper</li>
                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <ul class="list-unstyled">
                      <li class="no">
                        <i class="fa fa-times"></i>Flat Screen Tv</li>
                      <li>
                        <i class="fa fa-check"></i>Full Ac</li>
                      <li class="no">
                        <i class="fa fa-times"></i>Beach View</li>
                      <li>
                        <i class="fa fa-check"></i>Room Service</li>
                    </ul>
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
    <div class="notification"></div>
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
