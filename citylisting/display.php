<?php
include 'common.php';
session_start();


?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title>Contact - Transilvanian Airlines</title>
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/style.css">
</head>

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
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li class="add-list"><a href="listing.php"><i class="ti-plus"></i> Book a Flight</a></li>
<?php print_login(); ?>
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
    <main>

        <!-- Hero Start-->
        <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Tickets</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- ================ contact section start ================= -->
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Ticket to:</h2>
                        <h2 class="contact-title">DATE:</h2>
                        <h2 class="contact-title">PRICE:</h2>
                    </div>
<?php 
if(isset($_SESSION['user'])):?>         
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">BUY</button>
<?php else: ?>
                    <h5> Login to buy this ticket. </h5>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </section>


<?php 
if(isset($_SESSION['user'])):?>

        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="#" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ contact section end ================= -->
<?php
else:?>
<center> Please login in order to post a comment. </center> </br>
<?php endif ?>
    </main>
</body>
    
</html>