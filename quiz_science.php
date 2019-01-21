<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Quiz</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="vendor/css/quiz.css" rel="stylesheet">
</head>
<div w3-include-html="navbar.php"></div>

<body>
    <div id="quizContainer" class="container">
        <?php if(isset($_SESSION['u_id'])){ ?>
        <div class="title" id="containerTitle"> Quiz</div>
        <div id="question" class="question"></div>
        <label class="option"><input type="radio" name="option" value="1" /> <span id="opt1"></span></label>
        <label class="option"><input type="radio" name="option" value="2" /> <span id="optBtn2"></span></label>
        <label class="option"><input type="radio" name="option" value="3" /> <span id="optBtn3"></span></label>
        <label class="option"><input type="radio" name="option" value="4" /> <span id="optBtn4"></span></label>
        <br>
        <button id="nextButton" class="next-btn" onclick="loadNextQuestion();">Next Question</button>
        <?php }
            else{
            ?>
        <div class="title"> Please login or signup to continue</div>
        <?php
            }
            ?>
    </div>
    <div id="result" class="container result" style="display: none;">
        <form action="includes/highscore.inc.php" method="POST">
            <label>Your Score:
                    <input type='number' value="70" id = 'resultTxt' name = "score"></input>
                </label>
            <button id="submitBtn" class="next-btn">Submit</button>
        </form>
        <?php
            ?>
    </div>
    <script src="vendor/js/question.js"></script>
    <script src="vendor/js/quiz_science.js"></script>
</body>
<!-- ******************* External CSS*************************-->
<!-- General CSS-->
<link rel="stylesheet" type="text/css" href="vendor/css/main.css">
<!-- Custom css only for this page -->
<!-- css for Bootstrap -->
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.css">
<!-- ******************* END of External CSS******************-->
<!-- ********************* External Script********************-->
<!-- General script -->
<script type="text/javascript" src="vendor/js/main.js"></script>
<!-- Custom script only for this page -->
<script type="text/javascript" src="vendor/js/form.js"></script>
<!-- Script from bootstrap-->
<script src="vendor/navbar/jquery-1.11.1.min.js"></script>
<script src="vendor/jquery/jquery-3.3.1.js"></script>
<!-- ********************* END of External Script***************-->
<script>
</script>

</html>