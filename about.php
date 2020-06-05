<?php
require_once "classes/Database.php";
require_once "classes/Category.php";
require_once "classes/Question.php";
require_once "classes/AnswerOption.php";

$categoryObj = new Category();
$categories = $categoryObj->getActiveCategories();

$totalWeight = 0;

if(isset($_POST['btnSubmit']))
{
    $totalWeight =  array_sum($_POST['answer_weight']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Visa Assist</title>
    <meta content="" name="description">
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

<?php require_once 'includes/header.php'?>

<!-- ======= About Us Section ======= -->
<section id="about">
    <div class="container">

        <header class="section-header">
            <h3>About Us</h3>
            <p>We are one of the reputed migration agent in Australia with over decade experience in helping people to migrate to Australia</p>
        </header>

        <div class="row about-cols">

            <div class="col-md-4 wow fadeInUp">
                <div class="about-col">
                    <div class="img">
                        <img src="assets/img/about-mission.jpg" alt="" class="img-fluid">
                        <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                    </div>
                    <h2 class="title"><a href="">Our Mission</a></h2>
                    <p>The Australia migration system can be pretty daunting and complex in finding the right visa solution for you. At Visa Assist, we handle all those hassles for you and manage the entire visa process.
                    </p>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="about-col">
                    <div class="img">
                        <img src="assets/img/about-plan.jpg" alt="" class="img-fluid">
                        <div class="icon"><i class="ion-ios-list-outline"></i></div>
                    </div>
                    <h2 class="title"><a href="">Our Plan</a></h2>
                    <p>
                        We communicate with you in whichever form that suits you best and then provide you personalized service from day one.
                    </p>
                </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-col">
                    <div class="img">
                        <img src="assets/img/about-vision.jpg" alt="" class="img-fluid">
                        <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                    </div>
                    <h2 class="title"><a href="">Our Vision</a></h2>
                    <p>
                        Our vision is to make your dream to migrate in Australia pleasant and positive one.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section><!-- End About Us Section -->

<?php require_once 'includes/footer.php'?>


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