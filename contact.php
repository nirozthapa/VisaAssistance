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

<!-- ======= Contact Section ======= -->
<section id="contact" class="section-bg wow fadeInUp">
    <div class="container">

        <div class="section-header">
            <h3>Contact Us</h3>
            <p>Fill your details to book an appointment today</p>
        </div>

        <div class="row contact-info">

            <div class="col-md-4">
                <div class="contact-address">
                    <i class="ion-ios-location-outline"></i>
                    <h3>Address</h3>
                    <address>Clarence Street, Sydney</address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-phone">
                    <i class="ion-ios-telephone-outline"></i>
                    <h3>Phone Number</h3>
                    <p><a href="tel:++6123567890">+61 23 567 890</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-email">
                    <i class="ion-ios-email-outline"></i>
                    <h3>Email</h3>
                    <p><a href="mailto:info@example.com">info@example.com</a></p>
                </div>
            </div>

        </div>

        <div class="form">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" id="sendEmail">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center">
                    <input type="submit" name="btnContact" id="btnContact" value="Send Message" />
                </div>
            </form>
        </div>

    </div>
</section><!-- End Contact Section -->

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