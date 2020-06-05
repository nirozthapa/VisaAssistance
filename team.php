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

<!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Team</h3>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="assets/img/team-1.jpeg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Abhijit Chatterjee</h4>
                  <span>Managing Director</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Kisan</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Jyotheendra Pothuru</h4>
                  <span>Assistant Director</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

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