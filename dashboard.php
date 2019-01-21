<?php session_start();

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<div w3-include-html="navbar.php"></div>
<?php
				/*include 'dashboard.inc.php';*/
	?>

    <body>
        <div class="side-panel">
            <h1></h1>
            <div class="information">
                <?php
                //Determine user birthday and gender from ic here
                $dd = substr($_SESSION['u_ic'],4,2);
                $mm = substr($_SESSION['u_ic'],2,2);
                $yyyy = substr($_SESSION['u_ic'],0,2);
                $genCode = substr($_SESSION['u_ic'],13,1);
                
                if($genCode % 2 == 0)
                {
                    $gender = 'Female';
                }elseif($genCode % 2 == 1)
                {
                    $gender = 'Male';
                }
            //Display iuserinformation here
				if(isset($_SESSION['u_id']))
				{
					echo '<p> ID Number : '. $_SESSION['u_id'] . ' '  . '<br> </p>';
					echo '<p> Name      : '. $_SESSION['u_fname'] . ' '  .$_SESSION['u_lname'] . '<br> </p>';
					echo '<p> Username  : '. $_SESSION['u_uid'] . ' '  . '<br> </p>';
					echo '<p> Birthday  : '. ' ' . $dd . '/' . $mm . '/' . $yyyy . '<br> </p>';
					echo '<p> E-mail    : '. $_SESSION['u_email'] . ' '  . '<br> </p>';
					echo '<p> High Score    : '. $_SESSION['u_high'] . ' '  . '<br> </p>';
                    echo '<p> Gender    : '. $gender . ' '  . '<br> </p>';
                    echo '<p> Ic Number : '. $_SESSION['u_ic'] . ' '  . '<br> </p>';
					/*$information = new dashboardClass;*/
				}
				else
				{
					echo 'Please login or signup to continue';
				}
				?>
            </div>
        </div>
        <?php /*
			$users = new ViewUser();
			$users->showAllUsers();*/
		 ?>
    </body>
    <!-- ******************* External CSS*************************-->
    <style type="text/css">
        * {
            box-sizing: border-box;
        }

        .side-panel {
            margin: 2.5rem 2.5rem 2.5rem 0rem;
            width: 22rem;
            background-color: #ffffff;
            font-family: Raleway;
            padding: 20px;
            min-width: 300px;
            max-width: 800px;
        }

        .information {
            padding: 40px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }
    </style>
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

</html>