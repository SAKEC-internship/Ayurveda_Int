<?php
require "common.php";

if (isset($_POST['submit']))
	{

	$new_pass = $_POST['password'];
	$re_pass = $_POST['password1'];
  $sql = "SELECT * FROM doctor WHERE id='1'";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		if ($new_pass == $re_pass)
			{
			$update_pwd = mysqli_query($con,"update doctor set password='$new_pass' where id='1'");
			echo "<script>alert('Update Sucessfully'); window.location='doctor-log.php'</script>";
			}
		  else
			{
			echo "<script>alert('Your new and Retype Password does not match'); window.location='pass.php'</script>";
			}
		}


  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Change Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="" method="POST">
				<span class="login100-form-title p-b-37">
					Change Password
				</span>


        <p style="font-family:SourceSansPro-Regular; font-color:black; font-size:16px;margin-left: 7px">New Password:</p>
        <div class="wrap-input100 validate-input m-b-20" data-validate="Enter new password">
          <input class="input100" type="password" name="password" placeholder="Enter new password">
          <span class="focus-input100"></span>
        </div>

        <p style="font-family:SourceSansPro-Regular; font-color:black; font-size:16px;margin-left: 7px">Confirm Password:</p>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Confirm Password">
					<input class="input100" type="password" name="password1" placeholder="Confirm password">
					<span class="focus-input100"></span>
				</div>



				<div class="container-login100-form-btn">
				<button class="login100-form-btn" value="submit" name="submit">
					Change


				</button>
				</div>
				<a href="pass.php"><p style="font-family:SourceSansPro-Regular; font-color:black; font-size:16px;margin-left: 7px">Forgot Password?</p></a>

			</form>


		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>
