<?php 
include_once 'accesscontrol.php';
include_once 'common.php';
 ?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Title -->
        <title>Transilvanian Airlines</title>
        <!-- Icon -->
		<link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>
    <!------------------------------------------------------------------------------------------------------->
   <body>
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparent">
            <div class="main-header">
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo UP LEFT-->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                  <a href="index.php"><img src="assets/img/logo/logoTransilvanian.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-8">
                                <!-- Main-menu --><!-- -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="index.php">Home</a></li>
                                            <li class="add-list"><a href="listing.php"><i class="ti-plus"></i> Book a Flight</a></li>
<?php print_login(); ?>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <!------------------------------------------------------------------------------------------------------->
    <main>

        <!-- Hero Area Start-->
        <div class="slider-area hero-overly">
            <div class="single-slider hero-overly  slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9">
                            <!-- Hero Caption -->
                            <div class="hero__caption">
                                <span>Explore the world</span>
                                <h1>Discover Great Places</h1>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero Area End-->
        <!-- Popular Locations Start -->
        <div class="popular-location section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>Most visited places</span>
                            <h2>Popular Locations</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="assets/img/gallery/location2.png" alt="">
                            </div>
                            <div class="location-details">
                                <p>Paris</p>
                                <a href="listing.php" class="location-btn"> <i class="ti-plus"></i> Location</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="assets/img/gallery/location3.png" alt="">
                            </div>
                            <div class="location-details">
                                <p>Rome</p>
                                <a href="listing.php" class="location-btn"> <i class="ti-plus"></i> Location</a>
                            </div>
                        </div>
                    </div>
 
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="assets/img/gallery/location5.png" alt="">
                            </div>
                            <div class="location-details">
                                <p>Nepal</p>
                                <a href="listing.php" class="location-btn"> <i class="ti-plus"></i> Location</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- More Btn -->
                <div class="row justify-content-center">
                    <div class="room-btn pt-20">
                        <a href="listing.php" class="btn view-btn1">View All Places</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Locations End -->
        <!------------------------------------------------------------------------------------------------------->
        <!-- Services Area Start -->
        <div class="services-area pt-150 pb-150 section-bg" data-background="assets/img/gallery/section_bg02.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-80">
                            <span>Easy to explore</span>
                            <h2>How It Works</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services text-center mb-50">
                            <div class="services-icon">
                                <span class="flaticon-problem"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">1. Choose a Location</a></h5>
                                <p>Pick one of our unique new listed loctions.</p>
                            </div>
                            <!-- Shpape -->
                            <img class="shape1 d-none d-lg-block" src="assets/img/icon/serices1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services text-center mb-50">
                            <div class="services-icon">
                                <span class="flaticon-list"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">2. Pick a date</a></h5>
                                <p>Although for the moment our dates are fixed.</p>
                            </div>
                            <img class="shape2 d-none d-lg-block" src="assets/img/icon/serices2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services text-center mb-50">
                            <div class="services-icon">
                                <span class="flaticon-respect"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">3.Create account to book the flight</a></h5>
                                <p>Create a new account to enjoy all the benefits.</p>
                                <p>You can be sure that you are safe with us.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->
    <!-- JS here -->
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/slick.min.js"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>