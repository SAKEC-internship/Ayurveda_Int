<?php
require "common.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bill Details</title>
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
			<form class="login100-form validate-form" action="bill_script.php" method="POST">
				<span class="login100-form-title p-b-37">
					Bill Details 
				</span>

				<p style="font-family:SourceSansPro-Regular; font-color:black; font-size:16px;margin-left: 7px">Party Name:</p>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Party Name">
					<input class="input100" type="text" name="party_name" placeholder="Party Name">
					<span class="focus-input100"></span>
				</div>
				<p style="font-family:SourceSansPro-Regular; font-color:black; font-size:16px;margin-left: 7px">Add Bill date:</p>
				<div class="wrap-input100 validate-input m-b-25" data-validate = " Bill Date">
					<input class="input100" type="date" name="bill_date" placeholder="Bill Date">
					<span class="focus-input100"></span>
				</div>

				<p style="font-family:SourceSansPro-Regular; font-color:black; font-size:16px;margin-left: 7px">Add bill no.:</p>
				<div class="wrap-input100 validate-input m-b-25" data-validate = "Bill Number">
					<input class="input100" type="int" name="bill_no" placeholder="Bill Number">
					<span class="focus-input100"></span>
				</div>

				<p style="font-family:SourceSansPro-Regular; font-color:black; font-size:16px;margin-left: 7px">Total Amount.:</p>
				<div class="wrap-input100 validate-input m-b-25" data-validate = "eg.500">
					<input class="input100" type="int" name="total" placeholder="eg.500">
					<span class="focus-input100"></span>
				</div>

				<p style="font-family:SourceSansPro-Regular; font-color:black; font-size:16px;margin-left: 7px">Amount Paid.:</p>
				<div class="wrap-input100 validate-input m-b-25" data-validate = "eg.400">
					<input class="input100" type="int" name="paid" placeholder="eg.400">
					<span class="focus-input100"></span>
				</div>

				<p style="font-family:SourceSansPro-Regular; font-color:black; font-size:16px;margin-left: 7px">Pending Amount.:</p>
				<div class="wrap-input100 validate-input m-b-25" data-validate = "eg.100">
					<input class="input100" type="int" name="bal" placeholder="eg.100">
					<span class="focus-input100"></span>
				</div>

				<p style="font-family:SourceSansPro-Regular; font-color:black; font-size:16px;margin-left: 7px">Payment date:</p>
				<div class="wrap-input100 validate-input m-b-25" data-validate = "Pay Date">
					<input class="input100" type="date" name="pay_date" placeholder="Pay Date">
					<span class="focus-input100"></span>
				</div>

				<p style="font-family:SourceSansPro-Regular; font-color:black; font-size:16px;margin-left: 7px">Payment mode:</p>
				<div class="wrap-input100 validate-input m-b-25" data-validate = "Pay mode">
					<input class="input100" type="text" name="pay_mode" placeholder="Pay Mode">
					<span class="focus-input100"></span>
                </div>
				
				<p style="font-family:SourceSansPro-Regular; font-color:black; font-size:16px;margin-left: 7px">Payment details:</p>
                <div class="wrap-input100 validate-input m-b-25" data-validate = "Pay Details">
					<input class="input100" type="text" name="pay_details" placeholder="Pay Details">
					<span class="focus-input100"></span>
                </div>
                
               


				<div class="container-login100-form-btn">
					<a href="bill_view.php"><button class="login100-form-btn">
					Add Bill Details

						
					</button></a>
				</div>

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