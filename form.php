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
<!-- ======= Intro Section ======= -->
      <!--Intro Banner-->
    <section id="intro">
    <div class="intro-container">
        <div class="container-fluid">
<?php

if(isset($_GET['category_id']) && $_GET['category_id'] > 0)
{
    $categoryId =   (int) $_GET['category_id'];
    $category = $categoryObj->getCategoryById($categoryId);

    ?>
    <br ><br ><br ><br >
            <h1>  <?php echo $category['name']?></h1>
            <?php echo $category['descriptions']?>
    <br ><br ><br ><br >
            <?php
    $questionObj =  new Question();
    $questions = $questionObj->getActiveQuestionsByCategoryId($categoryId);

    $answerOptionObj =  new AnswerOption();
    ?>

    <div style="font-size: 20px; color: #1b1e21">
    Total Score : <?php echo $totalWeight; ?>
    </div>

    <form method="post" action="">
    <?php
    $i = 1;
    foreach($questions as $question)
    {
        echo $i++." ".$question['question'];
        $options = $answerOptionObj->getActiveQuestionOptionsByQuestionId($question['id']);
        echo "<br />";
        $j =1 ;
        foreach($options as $option)
        {?>
            <input type="<?php echo  $question['html_form_option']; ?>"
                   name="answer_id_<?php echo $question['id'];?>"
                   data-answer_weight="<?php echo $option['answer_weight']?>"
                   data-question_id="<?php echo  $question['id'];?>"
                   class="options" />
            <?php
            echo " &nbsp;&nbsp;&nbsp;&nbsp;". $j++.".  ". $option['answer_option']." <br/>";

        }
        ?>
       <label for="fname">Score:</label><br>
        <input type="text" readonly id="<?php echo $question['id'];?>"  name="answer_weight[]" value=""><br>
        <?php
        ?>
        <?
    }
    ?>
        <input type="submit" name="btnSubmit" value="Submit" />
    </form>
    <?php
}
?>
    </div>

    </section>

<?php require_once 'includes/footer.php'?>
<script type="application/javascript">
    $( document ).ready(function() {

        //
        $('.options').on('click',function(){
            var weight = $(this).attr('data-answer_weight');
            var question_id =  $(this).attr('data-question_id');
            $('#'+question_id).val(weight);
        });

    });
</script>


</body>
</html>