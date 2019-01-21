<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home Page</title>
</head>
<div w3-include-html="navbar.php"></div>
<br><br>
<section class="bg-purple-ad"><br></section>

<body>
    <!-- Page Content -->
    <div class="news-pannel col-lg-3" style="background-image: url(img/homepage/science_bg.jpg);">
        <div class="overlay-red">
            <div class="news-wrapper">
                <div class="news-icon">
                    <i style='font-size: 12rem; color:#007bff;' class="fa fa-flask" aria-hidden="true"></i>
                </div>
                <div class="news-heading">
                    <h3>Science</h3>
                </div>
                <div class="news-caption">
                    <p>Science the intellectual and practical activity encompassing the systematic study of the structure and behaviour of the physical and natural world through observation and experiment..</p>
                </div>
                <button data-btnNews="Challenge Science" type="button" onclick="window.location.href='quiz_science.php'" class="btn-news btn-outline-red btn-outline-hover"><span>Challenge Science</span></button>
            </div>
        </div>
    </div>
    <div class="news-pannel col-lg-3" style="background-image: url(img/homepage/technology_Quiz_Background_Chip.jpg);">
        <div class="overlay-blue">
            <div class="news-wrapper">
                <div class="news-icon">
                    <!-- <img src="JPG/EagleIcon.png" width="100px" height="100px">-->
                    <i style='font-size: 12rem; color:#dc3545;' class="fa fa-laptop" aria-hidden="true"></i>
                </div>
                <div class="news-heading">
                    <h3>Technology</h3>
                </div>
                <div class="news-caption">
                    <p>Technology is the application of scientific knowledge for practical purposes, especially in industry.</p>
                </div>
                <button data-btnNews="Challenge Technology" type="button" onclick="window.location.href='quiz_tech.php'" class="btn-news btn-outline-blue btn-outline-hover"><span>Challenge Technology</span></button>
            </div>
        </div>
    </div>
    <div class="news-pannel col-lg-3" style="background-image: url(img/homepage/engineering_bg.jpg);">
        <div class="overlay-green">
            <div class="news-wrapper">
                <div class="news-icon">
                    <i style='font-size: 12rem; color:orange;' class="fa fa-wpexplorer" aria-hidden="true"></i>
                </div>
                <div class="news-heading">
                    <h3>Engineering</h3>
                </div>
                <div class="news-caption">
                    <p>Engineering is the branch of science and technology concerned with the design, building, and use of engines, machines, and structures.</p>
                </div>
                <button data-btnNews="Challenge Engineering" type="button" onclick="window.location.href='quiz_engineering.php'" class="btn-news btn-outline-green btn-outline-hover"><span>Challenge Engineering</span></button>
            </div>
        </div>
    </div>
    <div class="news-pannel col-lg-3" style="background-image: url(JPG/Campus/QuestMainCampus.jpg);">
        <div class="overlay-orange">
            <div class="news-wrapper">
                <div class="news-icon">
                    <i style='font-size: 12rem; color:blue;' class="fa fa-calculator" aria-hidden="true"></i>
                </div>
                <div class="news-heading">
                    <h3>Mathematic</h3>
                </div>
                <div class="news-caption">
                    <p>Mathematicians seek and use patterns to formulate new conjectures; they resolve the truth or falsity of conjectures by mathematical proof.</p>
                </div>
                <button data-btnNews="Challenge Mathematic" type="button" onclick="window.location.href='quiz_math.php'" class="btn-news btn-outline-orange btn-outline-hover"><span>Challenge Mathematic</span></button>
            </div>
        </div>
    </div>
    </section>
</body>
<section class="bg-purple-ad"><br></section>
<!-- ******************* External CSS*************************-->
<!-- Custom css only for this page -->
<link rel="stylesheet" type="text/css" href="vendor/css/newsbar.css">
<link rel="stylesheet" type="text/css" href="vendor/css/main.css">
<!-- css for Bootstrap -->
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.css">
<!-- ******************* END of External CSS******************-->
<!-- ********************* External Script********************-->
<!-- General script -->
<script type="text/javascript" src="vendor/js/main.js"></script>
<!-- Custom script only for this page -->
<script src="vendor/js/question.js"></script>
<script src="vendor/js/quiz-script.js"></script>
<!-- Custom script only for this page -->
<!-- Script from bootstrap-->
<script src="vendor/navbar/jquery-1.11.1.min.js"></script>
<script src="vendor/jquery/jquery-3.3.1.js"></script>
<!-- ********************* END of External Script***************-->
<script>
    $(function() {
        $("#navbar").load("navbar.html");
    });
</script>

</html>