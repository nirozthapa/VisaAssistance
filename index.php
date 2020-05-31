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
  <?php require_once 'includes/header.php'?>
  <!-- ======= Intro Section ======= -->
      <!--Intro Banner-->
    <section id="intro">
    <div class="intro-container">
      <div id="introcarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
        <?php
        $i=0;
            foreach($categories as $category)
            {
                $active =  ($i==0)?'active':null;
            ?>
          <div class="carousel-item <?php echo $active;?>">
            <div class="carousel-background"><img src="assets/img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2><?php echo $category["name"]; ?></h2>
                <p><?php echo $category["shortDescription"]; ?></p>
                  <form action="form.php">
                      <input type="hidden" name="category_id" value="<?php echo $category['id'];?>" />
                      <button type="submit" class="btn-get-started carouselto">Get Started</button>
                  </form>
              </div>
            </div>
          </div>
            <?php
            $i++;
            } ?>
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