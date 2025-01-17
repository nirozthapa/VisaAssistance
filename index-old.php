<?php
require_once "classes/Database.php";
require_once "classes/Category.php";

$category = new Category();
$categories = $category->getActiveCategories();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Visa Assist</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">



    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- script CSS Files -->
    <link href="assets/script/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/script/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/script/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/script/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/script/venobox/venobox.css" rel="stylesheet">
    <link href="assets/script/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

<!-- ======= Header ======= -->
<header id="header">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <h1><a href="index.html" class="scrollto">Visa Assist</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#intro"><img src="assets/img/logo.png" alt=""></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="index.html">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li class="menu-has-children"><a href="">Drop Down</a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                        <li><a href="#">Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- End Header -->

<!-- ======= Intro Section ======= -->
<!--Intro Banner-->
<section id="intro">
    <div class="intro-container">
        <div id="introcarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="carousel-background"><img src="assets/img/intro-carousel/1.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>Student Visa</h2>
                            <p>Check your eligibility to study in Australia</p>
                            <form method="get" action="form.php">
                                <select name="category_id">
                                    <option>--Select One --</option>
                                    <?php
                                    foreach($categories as $category)
                                    {
                                        ?>
                                        <option value="<?php echo $category['id']?>"><?php echo $category['name']?></option>
                                    <?php }?>
                                </select>
                                <button type="submit"> Next </button>
                            </form>
                            <a href="#featured-services" class="btn-get-started carouselto">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="assets/img/intro-carousel/2.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>Skilled visa</h2>
                            <p>Check your eligibility to migrate in Australia</p>
                            <a class="btn-get-started carouselto" action="form.php">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="assets/img/intro-carousel/3.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>Work Visa</h2>
                            <p>Check your eligibility to work in Australia</p>
                            <a href="#featured-services" class="btn-get-started carouselto">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="assets/img/intro-carousel/4.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>Tourist Visa</h2>
                            <p>Check your eligibility to travel in Australia</p>
                            <a href="#featured-services" class="btn-get-started carouselto">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="assets/img/intro-carousel/5.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>Partner and parent visa</h2>
                            <p>Check your eligibility to apply for partner and parent</p>
                            <a href="form.html" class="btn-get-started carouselto">Get Started</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#introcarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introcarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section><!-- End Intro Section -->

<main id="main">


    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <!--div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Visa Assist</h3>
            <p>We are one of the reputed migration agent with over 10 years of experience in migration and consultation in Australia.<br><br>Remember us for your dream in Australia</p>
          </div-->

    <!--div class="col-lg-3 col-md-6 footer-links">
      <h4>Useful Links</h4>
      <ul>
        <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
        <li><i class="ion-ios-arrow-right"></i> <a href="about.html">About us</a></li>
        <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
        <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
        <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
      </ul>
    </div-->

    <!--div class="col-lg-3 col-md-6 footer-contact">
      <h4>Contact Us</h4>
      <p>
        St George Street<br>
        Sydney, SYD 2000<br>
        Australia <br>
        <strong>Phone:</strong> 1234567<br>
        <strong>Email:</strong> info@example.com<br>
      </p>

      <div class="social-links">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>

    </div>

    <div class="col-lg-3 col-md-6 footer-newsletter">
      <h4>Our Newsletter</h4>
      <p></p>
      <form action="" method="post">
        <input type="email" name="email"><input type="submit" value="Subscribe">
      </form>
    </div>

  </div>
</div>
</div-->
    <?php include 'index-old.php';?>

    <div class="container">
        <div class="copyright">
            &copy; Copyright. All Rights Reserved
        </div>
        <div class="credits">
            Designed by Team 181
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- <div id="preloader"></div> -->

<!-- script JS Files -->
<script src="assets/script/jquery/jquery.min.js"></script>
<script src="assets/script/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/script/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/script/php-email-form/validate.js"></script>
<script src="assets/script/wow/wow.min.js"></script>
<script src="assets/script/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/script/counterup/counterup.min.js"></script>
<script src="assets/script/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/script/venobox/venobox.min.js"></script>
<script src="assets/script/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/script/superfish/superfish.min.js"></script>
<script src="assets/script/hoverIntent/hoverIntent.js"></script>
<script src="assets/script/jquery-touchswipe/jquery.touchSwipe.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
