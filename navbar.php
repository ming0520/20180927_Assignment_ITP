<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/css/navbar.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="vendor/navbar/boostrap/4.0.0-alpha.2/bootstrap.min.css">
    <!-- font awesome -->
    <link href="vendor/font-awesome/css/font-awesome.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar" id="navbar">
        <div class="custom-navbar">
            <a href="javascript:void(0);" class="icon" onclick="toggleNavbar()">
                    <i class="fa fa-bars navbar-toggler-icon" id="navbar-toggler-icon"></i>
                </a>
            <button type="button" class="navbar-toggler hidden-sm-up" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand" href="home.php"><img src="img/logo.png"></a>
            <nav class="nav navbar-nav pull-xs-left">
                <!--   <a class="nav-item nav-link active" href="dashboard.php"><i class="fa fa-bar-chart"></i>&emsp;Dashboard</a>-->
                <?php if(isset($_SESSION['u_id'])) {?>
                <a class="nav-item nav-link nav-user" href="dashboard.php"><i class="fa fa-user"></i> <?php echo $_SESSION['u_uid'] ?></a>
                <?php }?>
                <a class="nav-item nav-link" href="home.php"><i class="fa fa-gamepad"></i>&emsp;Games</a>
                <?php if(isset($_SESSION['u_id'])){ ?>
                <a class="nav-item nav-link" href="includes/logout.inc.php"><i class="fa fa-sign-out"></i>&emsp;Logout</a>
                <?php } else { ?>
                <a class="nav-item nav-link" href="login.php"><i class="fa fa-sign-in"></i>&emsp;Login</a>
                <?php } ?>
                <a class="nav-item nav-link" href="#"><i class="fa fa-info"></i>&emsp;About</a>
            </nav>
            <?php
                if(isset($_SESSION['u_id']))
                {
                ?>
                <form action="includes/logout.inc.php" class="form-inline pull-xs-right" style="margin-top:1rem;" method="POST" id="logoutF">
                    <a id="loginBtn" class="btn btn-success" href="#" onclick="document.getElementById('logoutF').submit();"><i class="fa fa-sign-out fa-lg fa-fw"></i>Logout</a>
                </form>
                <?php
                }
                else
                {
                ?>
                    <form action="includes/login.inc.php" class="form-inline pull-xs-right" style="margin-top:1rem;" method="POST" id="myForm">
                        <input id="email" type="username" class="form-control" name="username" value="" placeholder="Email Address / Username">
                        <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">
                        <a id="loginBtn" class="btn btn-success" href="#" onclick="document.getElementById('myForm').submit();"><i class="fa fa-sign-in fa-lg fa-fw"></i>Login</a>
                        <?php
                    }
                    ?>

                    </form>
        </div>
    </nav>
    <!-- Script from bootstrap-->
    <script src="vendor/navbar/jquery-1.11.1.min.js"></script>
    <script src="vendor/jquery/jquery-3.3.1.js"></script>
</body>

</html>