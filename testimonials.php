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

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="section-bg wow fadeInUp">
    <div class="container">

        <header class="section-header">
            <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

            <div class="testimonial-item">
                <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Niroj</h3>
                <h4>Student Visa</h4>
                <p>
                    <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                    Thanks to Visa Assist I can study in Australia.
                    <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
            </div>

            <div class="testimonial-item">
                <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Hiral</h3>
                <h4>Family Visa</h4>
                <p>
                    <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                    Thanks to Visa Assist My family can visit me in Australia
                    <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
            </div>

            <div class="testimonial-item">
                <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Santosh</h3>
                <h4>Tourist Visa</h4>
                <p>
                    <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                    Thanks to Visa Assist, I can travel to Australia.
                    <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
            </div>

            <div class="testimonial-item">
                <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Avi</h3>
                <h4>Skilled Visa</h4>
                <p>
                    <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                    Thanks to Visa Assist, I can migrate to Australia
                    <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
            </div>

        </div>

    </div>
</section><!-- End Testimonials Section -->

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