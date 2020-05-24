<?php
include 'common.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST" || true):
      if(!isset($_SESSION['user']) || !isset($_SESSION['id_location']))
        header("Location: index.php");
   

    if(isset($_POST['upd_price'])):
    $price=filter_var($_POST['upd_price'], FILTER_VALIDATE_INT);
    if(!filter_var($_POST['upd_price'], FILTER_VALIDATE_INT)){
        session_unset(); 
        session_destroy();
        error("Internal server error.");
        header("Location: index.php");
    }


    $query="INSERT INTO Tickets (id_user, id_location, paid) VALUES(?,?,?)"; 


    if ($stmt = $conn->prepare($query)) {
      $stmt->bind_param("sss",$_SESSION['id_user'] ,$_SESSION['id_location'],$price);
      $stmt->execute();
      $stmt->close();
    } else error("Internal server error.");

    unset($_SESSION['id_location']);

    
    
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
                            <h2>Buy it</h2>
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
                        <h2 class="contact-title">Buy ticket(s) for the price: <?php echo $price; ?></h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="buyform.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="cd" id="cd" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Card details'" placeholder="Card details">
                                    </div>
                                </div><div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="expd" id="expd" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'EXP date'" placeholder="EXP date">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="ccv" id="ccv" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CCV'" placeholder="CCV">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="owner" id="owner" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Owner name'" placeholder="Owner name">
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

    </main>
</body>
    
</html>


<?php 
    elseif(isset($_POST['cd']) && isset($_POST['ccv']) && isset($_POST['owner']) && isset($_POST['expd'])):
?>

      <script language="JavaScript">alert("Transaction complete");</script> 

<?php
        header("Location: index.php");
    else:
        header("Location: listing.php");
    endif;




endif; ?>