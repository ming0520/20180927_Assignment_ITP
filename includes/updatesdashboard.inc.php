<?php

session_start();

	include_once 'dbh_dbh.inc.php';

	$uid = $_SESSION['u_id'];

	$sql = "SELECT * FROM users WHERE user_uid ='$uid' OR user_email = '$uid' ";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck < 1)
	{
		header("Location: ../login.php?login=error");
		exit();
	}
	elseif($row = mysqli_fetch_assoc($result))
	{
		$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_fname'] = $row['user_fname'];
					$_SESSION['u_lname'] = $row['user_lname'];

					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];

					$_SESSION['u_pwd'] = $row['user_pwd'];
					$_SESSION['u_phone'] = $row['phone_number'];
					$_SESSION['u_ic'] = $row['ic_number'];

					$_SESSION['u_high'] = $row['high_score'];
					header("Location: ../dashboard.php?update=success");
					exit();
	}

header("Location: ../dashboard.php?status=newhighscore");
		exit();