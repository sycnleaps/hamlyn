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
            <a href="index.php">HOME</a>
            </li>
            <li class="menu-item dropdown">
            <a href="rooms-list.php">ROOMS</a>
            </li>
            <li class="menu-item dropdown">
            <a href="about-us.php">ABOUT US</a>
            </li>
            <li class="menu-item dropdown">
            <a href="contact.php">CONTACT US</a>
            </li>
        </ul>
        </nav>
    </div>
    <div class="horizontal-booking-form booking-full-width">
        <div class="container">
          <div class="inner box-shadow-007">
            <!-- ========== BOOKING NOTIFICATION ========== -->
            <div id="booking-notification" class="notification"></div>
            <form id="booking-form">
              <!-- NAME -->
              <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                    <input class="form-control" name="booking-name" type="text" data-trigger="hover" placeholder="Name">
                  </div>
                </div>
                <!-- EMAIL -->
                <div class="col-md-2">
                  <div class="form-group">
                    <input class="form-control" name="booking-email" type="email" placeholder="Email">
                  </div>
                </div>
                <!-- ROOM TYPE -->
                <div class="col-md-2">
                  <div class="form-group">
                    <select class="form-control" name="booking-roomtype" title="Select Room Type" data-header="Room Type">
                      <option value="Single">Single Room</option>
                      <option value="Double">Double Room</option>
                      <option value="Deluxe">Deluxe Room</option>
                    </select>
                  </div>
                </div>
                <!-- DATE -->
                <div class="col-md-2">
                  <div class="form-group">
                    <input type="text" class="datepicker form-control" name="booking-date" placeholder="Arrival & Departure" readonly="readonly">
                  </div>
                </div>
                <!-- GUESTS -->
                <div class="col-md-2">
                  <div class="form-group">
                    <div class="panel-dropdown">
                      <div class="form-control guestspicker">Guests
                        <span class="gueststotal"></span></div>
                      <div class="panel-dropdown-content">
                        <div class="guests-buttons">
                          <label>Adults
                            <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="18+ years" data-original-title="Adults">
                              <i class="fa fa-info-circle"></i>
                            </a>
                          </label>
                          <div class="guests-button">
                            <div class="minus"></div>
                            <input type="text" name="booking-adults" class="booking-guests" value="0">
                            <div class="plus"></div>
                          </div>
                        </div>
                        <div class="guests-buttons">
                          <label>Cildren
                            <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Under 18 years" data-original-title="Children">
                              <i class="fa fa-info-circle"></i>
                            </a>
                          </label>
                          <div class="guests-button">
                            <div class="minus"></div>
                            <input type="text" name="booking-children" class="booking-guests" value="0">
                            <div class="plus"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- BOOKING BUTTON -->
                <div class="col-md-2">
                  <button type="submit" class="btn btn-book">BOOK A ROOM</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
</header>