<?php

session_start();
	include_once 'dbh_dbh.inc.php';

	$uid = mysqli_real_escape_string($conn,$_POST["username"]);
	$pwd = mysqli_real_escape_string($conn,$_POST["password"]);

	if(empty($uid) || empty($pwd))
	{
		header("Location: ../login.php?login=empty");
		exit();
	}
	else
	{
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
			//De-hashing the password
			$hashedPwdCheck = password_verify($pwd,$row['user_pwd']);

			switch ($pwd == $row['user_pwd']) {
				case false:
					header("Location: ../login.php?login=pwd");
					exit();
					break;
				case true:
							//Log in the user here
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_fname'] = $row['user_fname'];
					$_SESSION['u_lname'] = $row['user_lname'];

					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];

					$_SESSION['u_pwd'] = $row['user_pwd'];
					$_SESSION['u_phone'] = $row['phone_number'];
					$_SESSION['u_ic'] = $row['ic_number'];

					$_SESSION['u_high'] = $row['high_score'];
					header("Location: ../dashboard.php?login=success");
					exit();
					break;
				default:
					header("Location: ../login.php?login=error");
					exit();
					break;
			}
		}
	}