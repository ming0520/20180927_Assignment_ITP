<?php


	include_once 'dbh_dbh.inc.php';

	$fname = mysqli_real_escape_string($conn,$_POST["fname"]);
	$lname = mysqli_real_escape_string($conn,$_POST["lname"]);
	$email = mysqli_real_escape_string($conn,$_POST["email"]);
	$uid = mysqli_real_escape_string($conn,$_POST["username"]);
	$pwd = mysqli_real_escape_string($conn,$_POST["password"]);
	$phone = mysqli_real_escape_string($conn,$_POST["phone"]);
	$ic = mysqli_real_escape_string($conn,$_POST["icnumber"]);


	$sql = "SELECT * FROM users WHERE user_uid = '$uid';";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck > 0)
	{
		header("Location: ../Admission Form.php?signup=usertaken");
		exit();
	}
	else
	{
		$hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
		$insertSql = "INSERT INTO users (user_fname,user_lname,user_email,user_uid,user_pwd,phone_number,ic_number) VALUES ('$fname','$lname','$email','$uid','$pwd','$phone','$ic');";
		mysqli_query($conn,$insertSql);
		header("Location: ../login.php?signup=success");
		exit();
	}
header("Location: ../Admission Form.php?signup=error");
		exit();

	