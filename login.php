<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<div w3-include-html="navbar.php"></div>

<body>
    <form id="regForm" action="includes/login.inc.php" method="POST">
        <div class="tab">Login Info:
            <p>
                <input placeholder="Username..." oninput="this.className = ''" name="username">
            </p>
            <p>
                <input placeholder="Password..." oninput="this.className = ''" name="password" type="password">
            </p>
        </div>
        <p style="text-align: right;" id="tips"></p>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="signUp" onclick="window.location.href='Admission Form.php'">Sign Up</button>
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px; display: none;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>
    <!-- ******************* External CSS*************************-->
    <!-- General CSS-->
    <link rel="stylesheet" type="text/css" href="vendor/css/main.css">
    <!-- Custom css only for this page -->
    <link rel="stylesheet" type="text/css" href="vendor/css/form.css">
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
    <script type="text/javascript">
        document.getElementById("nextBtn").innerHTML = "Login";
    </script>
</body>

</html>