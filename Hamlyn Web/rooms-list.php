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
      <img src="images/logo.png" alt="Hotel Hamlyn">
    </div>
  </div>
</div>
<!-- ========== MOBILE MENU ========== -->
<nav id="mobile-menu"></nav>
<!-- ========== WRAPPER ========== -->
<div class="wrapper">

  <?php include 'header.php';?>

      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>ROOMS</h1>
            <ol class="breadcrumb">
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>Rooms</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="rooms-list-view">
        <div class="container">
          <!-- ITEM -->
          <div class="room-list-item">
            <div class="row">
              <div class="col-lg-4">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="room.php"><img src="images/rooms/double.jpg" class="img-fluid" alt="Image"></a>
                </figure>
              </div>
              <div class="col-lg-6">
                <div class="room-info">
                  <h3 class="room-title">
                    <a href="room.php">SINGLE ROOM</a>
                  </h3>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus animi quod adipisci quia? Laudantium quibusdam, mollitia nisi quasi perspiciatis omnis...</p>
                  <div class="room-services">
                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                    <span>Beds: 1 King</span>
                    <span>Max Guests: 2</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="room-price">
                  <span class="price">Rs. 5,000 / night</span>
                  <a href="room.php" class="btn btn-sm">VIEW DETAILS</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ITEM -->
          <div class="room-list-item">
            <div class="favorite-item">
              <i class="fa fa-star-o"></i>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="room.php"><img src="images/rooms/deluxe.jpg" class="img-fluid" alt="Image"></a>
                </figure>
              </div>
              <div class="col-lg-6">
                <div class="room-info">
                  <h3 class="room-title">
                    <a href="room.php">DOUBLE ROOM</a>
                  </h3>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus animi quod adipisci quia? Laudantium quibusdam, mollitia nisi quasi perspiciatis omnis...</p>
                  <div class="room-services">
                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                    <span>Beds: 2 King</span>
                    <span>Max Guests: 4</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="room-price">
                  <span class="price">Rs. 5,000 / night</span>
                  <a href="room.php" class="btn btn-sm">VIEW DETAILS</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ITEM -->
          <div class="room-list-item">
            <div class="row">
              <div class="col-lg-4">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="room.php"><img src="images/rooms/luxury.jpg" class="img-fluid" alt="Image"></a>
                </figure>
              </div>
              <div class="col-lg-6">
                <div class="room-info">
                  <h3 class="room-title">
                    <a href="room.php">DELUXE ROOM</a>
                  </h3>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus animi quod adipisci quia? Laudantium quibusdam, mollitia nisi quasi perspiciatis omnis...</p>
                  <div class="room-services">
                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                    <span>Beds: 1 King</span>
                    <span>Max Guests: 2</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="room-price">
                  <span class="price">Rs. 5,000 / night</span>
                  <a href="room.php" class="btn btn-sm">VIEW DETAILS</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ITEM -->
          <div class="room-list-item">
            <div class="row">
              <div class="col-lg-4">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="room.php"><img src="images/rooms/family.jpg" class="img-fluid" alt="Image"></a>
                </figure>
              </div>
              <div class="col-lg-6">
                <div class="room-info">
                  <h3 class="room-title">
                    <a href="room.php">FAMILY ROOM</a>
                  </h3>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus animi quod adipisci quia? Laudantium quibusdam, mollitia nisi quasi perspiciatis omnis...</p>
                  <div class="room-services">
                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                    <span>Beds: 2 King and 1 Sofabed</span>
                    <span>Max Guests: 4</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="room-price">
                  <span class="price">Rs. 5,000 / night</span>
                  <a href="room.php" class="btn btn-sm">VIEW DETAILS</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ITEM -->
          <div class="room-list-item">
            <div class="favorite-item">
              <i class="fa fa-star-o"></i>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="room.php"><img src="images/rooms/luxury.jpg" class="img-fluid" alt="Image"></a>
                </figure>
              </div>
              <div class="col-lg-6">
                <div class="room-info">
                  <h3 class="room-title">
                    <a href="room.php">HONEYMOON ROOM</a>
                  </h3>
                  <span class="room-rates">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <a href="room.php#room-reviews">5.00 Based on 3 Ratings</a>
                  </span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus animi quod adipisci quia? Laudantium quibusdam, mollitia nisi quasi perspiciatis omnis...</p>
                  <div class="room-services">
                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                    <span>Beds: 1 King</span>
                    <span>Max Guests: 2</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="room-price">
                  <span class="price">Rs. 5,000 / night</span>
                  <a href="room.php" class="btn btn-sm">VIEW DETAILS</a>
                </div>
              </div>
            </div>
          </div>
          <!-- ITEM -->
          <div class="room-list-item">
            <div class="row">
              <div class="col-lg-4">
                <figure class="gradient-overlay-hover link-icon">
                  <a href="room.php"><img src="images/rooms/deluxe.jpg" class="img-fluid" alt="Image"></a>
                </figure>
              </div>
              <div class="col-lg-6">
                <div class="room-info">
                  <h3 class="room-title">
                    <a href="room.php">ROOM WITH VIEW</a>
                  </h3>
                  <span class="room-rates">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <a href="room.php#room-reviews">5.00 Based on 3 Ratings</a>
                  </span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus animi quod adipisci quia? Laudantium quibusdam, mollitia nisi quasi perspiciatis omnis...</p>
                  <div class="room-services">
                    <i class="fa fa-coffee" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                    <i class="fa fa-wifi" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                    <i class="fa fa-television" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                    <span>Beds: 1 King and 1 Sofabed</span>
                    <span>Max Guests: 4</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="room-price">
                  <span class="price">Rs. 5,000 / night</span>
                  <a href="room.php" class="btn btn-sm">VIEW DETAILS</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </main>
      
      <?php include 'footer.php';?>
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
