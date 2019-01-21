<?php

session_start();
	include_once 'dbh_dbh.inc.php';

	$u_id = $_SESSION['u_id'];
	$score = $_POST['score'];
	$u_highscore = $_SESSION['u_high'];
	

	if($score > $u_highscore)
	{
		$sql = "UPDATE users SET high_score = '$score' WHERE user_id = '$u_id';";
		$result = mysqli_query($conn,$sql);
		header("Location: updatesdashboard.inc.php");
	}
	else
	{
		header("Location: ../dashboard.php");
		exit();
	}