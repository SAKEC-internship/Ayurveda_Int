<?php
require "common.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Doctor Login</title>
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
			<form class="login100-form validate-form" action="login_script.php" method="POST">
				<span class="login100-form-title p-b-37">
					Doctor Login
				</span>

        <p style="font-family:SourceSansPro-Regular; font-color:black; font-size:16px;margin-left: 7px">Username:</p>
        <div class="wrap-input100 validate-input m-b-20" data-validate="Enter user name">
          <input class="input100" type="text" name="username" placeholder="Enter user name">
          <span class="focus-input100"></span>
        </div>

        <p style="font-family:SourceSansPro-Regular; font-color:black; font-size:16px;margin-left: 7px">Password:</p>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter password">
					<input class="input100" type="password" name="password" placeholder="Enter password">
					<span class="focus-input100"></span>
				</div>

			<p style="font-family:SourceSansPro-Regular; font-color:black; font-size:16px;margin-left: 7px">Security Question:</p>
        <div class="wrap-input100 validate-input m-b-20" data-validate="Your favourite book/dish?">
          <input class="input100" type="text" name="secure" placeholder="Your favourite book/dish">
          <span class="focus-input100"></span>
        </div>	



				<div class="container-login100-form-btn">
				<button class="login100-form-btn" value="submit" name="submit">
					Login


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
