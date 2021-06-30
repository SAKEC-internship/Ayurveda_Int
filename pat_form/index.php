<?php
$con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error($con));
session_start();
if(mysqli_connect_error())
{
  echo "error";
}
if(isset($_POST["submit"]))
 {
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
      $query = "INSERT INTO tbl_images(name) VALUES ('$file')";
      if(mysqli_query($con, $query))
      {
           echo '<script>alert("Image Inserted into Database")</script>';
      }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Patient's details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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


	<div class="container-contact100">


		<button class="contact100-btn-show">
			<i class="fa fa-pencil" aria-hidden="true"></i>
		</button>



		<div class="wrap-contact100">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>

			<form class="contact100-form validate-form" action="script.php" method="POST" enctype="multipart/form-data">
				<span class="contact100-form-title">
					Basic Details
				</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Patient's Name</span>
					<input class="input100" type="text" name="patient_name" placeholder="Enter Patient's Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Mobile Number</span>
					<input class="input100" type="int" name="mobile" placeholder="Enter Patients Contact Number">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid Status is required">
					<span class="label-input100">Status</span>
					<input class="input100" type="text" name="status" placeholder="New / Follow up">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid age is required">
					<span class="label-input100">Age</span>
					<input class="input100" type="int" name="age" placeholder="eg: 40">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid sex is required">
					<span class="label-input100">Sex</span>
					<input class="input100" type="text" name="sex" placeholder="eg: Male / Female / Other">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" >
					<span class="label-input100">Patient's Job</span>
					<input class="input100" type="text" name="job" placeholder="eg: Service / Business / Student">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" >
					<span class="label-input100">Patient's Weight</span>
					<input class="input100" type="int" name="weight" placeholder="eg: 70">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" >
					<span class="label-input100">Patient's Diet</span>
					<input class="input100" type="text" name="diet" placeholder="eg.Veg/Non-veg/Mix/Jain">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Blood Pressure</span>
					<textarea class="input100" name="blood_pressure" placeholder="Details Here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Sugar Levels</span>
					<textarea class="input100" name="random_sugar" placeholder="Details Here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Address is required">
					<span class="label-input100">Patient's Address</span>
					<textarea class="input100" name="address" placeholder=" Here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Reference is required">
					<span class="label-input100">Reference</span>
					<textarea class="input100" name="reference" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>

		<!--		<div class="container-contact100-form-btn">
					<a href="#"><button class="contact100-form-btn" formAction="p_basic_script.php" name="submit" type="submit">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button></a>
				</div>
			</form>


		</div>

		<div class="wrap-contact100">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>

			<form class="contact100-form validate-form" method="POST">  -->
				<span class="contact100-form-title">
					Patient's History
				</span>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Report noting</span>
					<textarea class="input100" name="report_noting" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" >
					<span class="label-input100">Current medication</span>
					<input class="input100" type="text" name="curr_medication" placeholder="Enter current medication">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<span class="label-input100">Current complain</span>
					<input class="input100" type="text" name="curr_complain" placeholder="Enter current complain">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<span class="label-input100">Chief complain</span>
					<input class="input100" type="text" name="chief_complain" placeholder="Enter chief complain">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<span class="label-input100">Recovery</span>
					<input class="input100" type="text" name="recovery" placeholder="Recovery details.....">
					<span class="focus-input100"></span>
				</div>

	<!--			<div class="container-contact100-form-btn">
					<a href="#"><button class="contact100-form-btn" type="submit" name="sub1" formAction="p_history_script.php">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button></a>
				</div>
			</form>


		</div>

		<div class="wrap-contact100">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>

			<form class="contact100-form validate-form" action="routine_script.php" method="POST"> -->
				<span class="contact100-form-title">
					Patient's Current Routine
				</span>

			<div class="wrap-input100 rs1-wrap-input100 validate-input" >
					<span class="label-input100">Breakfast</span>
					<input class="input100" type="text" name="breakfast" placeholder="Breakfast....">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 rs1-wrap-input100 validate-input" >
					<span class="label-input100">Lunch</span>
					<input class="input100" type="text" name="lunch" placeholder="lunch....">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" >
					<span class="label-input100">Evening Snacks</span>
					<input class="input100" type="text" name="even_snacks" placeholder="Evening Snacks....">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" >
					<span class="label-input100">Dinner</span>
					<input class="input100" type="text" name="dinner" placeholder="Dinner....">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" >
					<span class="label-input100">Early morning diet</span>
					<input class="input100" type="text" name="early_morn_diet" placeholder="eg.Yes/No">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<span class="label-input100">Patient's habits</span>
					<input class="input100" type="text" name="habits" placeholder="eg.Smoking">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<span class="label-input100">Physical Act</span>
					<input class="input100" type="text" name="phy_act" placeholder="Physical act/exercise">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<span class="label-input100">Stress</span>
					<input class="input100" type="text" name="Stress" placeholder="eg.Yes/No/Often">
					<span class="focus-input100"></span>
				</div>

	<!--			<div class="container-contact100-form-btn">
					<a href="#"><button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button></a>
				</div>
			</form>


		</div> -->


	<!--	<div class="wrap-contact100">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>

			<form class="contact100-form validate-form" action="after_treat_script.php" method="POST"> -->
				<span class="contact100-form-title">
					After Treatment Details
				</span>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Treatment given</span>
					<textarea class="input100" name="treatment" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Medicine list</span>
					<textarea class="input100" name="medicine_list" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Dosage</span>
					<textarea class="input100" name="dosage" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Instructions</span>
					<textarea class="input100" name="instructions" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<span class="label-input100">No of days treatment was given</span>
					<input class="input100" type="text" name="treatment_days" placeholder="eg.30">
					<span class="focus-input100"></span>
				</div>
<!--
				<div class="container-contact100-form-btn">
					<a href="#"><button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button></a>
				</div>
			</form>


		</div>

		<div class="wrap-contact100">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>

			<form class="contact100-form validate-form" action="Examine_script.php" method="POST">   -->
				<span class="contact100-form-title">
					Examination details
				</span>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Bowels</span>
					<textarea class="input100" name="bowels" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Urine</span>
					<textarea class="input100" name="urine" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Tongue</span>
					<textarea class="input100" name="tongue" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Appetite</span>
					<textarea class="input100" name="appetite" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Patient's skin</span>
					<textarea class="input100" name="skin" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Other details</span>
					<textarea class="input100" name="other" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Patient's pulse</span>
					<textarea class="input100" name="pulse" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>

<!--
				<div class="container-contact100-form-btn">
					<a href="#"><button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button></a>
				</div>
			</form>


		</div>


		<div class="wrap-contact100">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>

			<form class="contact100-form validate-form" action="Panchkarma_script.php" method="POST"> -->
				<span class="contact100-form-title">
					Panchkarma Advise
				</span>

			<div class="wrap-input100 validate-input">
					<span class="label-input100">Diet Advise</span>
					<textarea class="input100" name="diet_advise" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input">
					<span class="label-input100">To eat list</span>
					<textarea class="input100" name="to_eat_list" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Not to eat list</span>
					<textarea class="input100" name="not_to_eat_list" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Home remedies</span>
					<textarea class="input100" name="home_remedies" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" >
					<span class="label-input100">Next appointment date</span>
					<input class="input100" type="date" name="next_appoint">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<span class="label-input100">Consulting charge</span>
					<input class="input100" type="text" name="consult_charge" placeholder="Here.....">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<span class="label-input100">Medicine charge</span>
					<input class="input100" type="text" name="medicine_charge" placeholder="Here.....">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<span class="label-input100">Panchkarma charge</span>
					<input class="input100" type="text" name="panchkarma_charge" placeholder="Here.....">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input">
					<span class="label-input100">Medicine certificate format</span>
					<textarea class="input100" name="med_certi_format" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input">
					<span class="label-input100">Investigation report format</span>
					<textarea class="input100" name="invest_ref_format" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>
<!--
				<div class="container-contact100-form-btn">
					<a href="#"><button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button></a>
				</div>
			</form>

		</div>


	<div class="wrap-contact100">
			<button class="contact100-btn-hide">
				<i class="fa fa-close" aria-hidden="true"></i>
			</button>

			<form class="contact100-form validate-form" action="report_script.php" method="POST"> -->
				<span class="contact100-form-title">
					Report Details
				</span>

			<div class="wrap-input100 validate-input">
					<span class="label-input100">Monthly reports</span>
					<textarea class="input100" name="mon_rep" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 rs1-wrap-input100 validate-input" >
					<span class="label-input100">No of visits</span>
					<input class="input100" type="text" name="no_of_visits" placeholder="Here.....">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" >
					<span class="label-input100">Charge collected</span>
					<input class="input100" type="text" name="charge_collect" placeholder="Here.....">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Medication</span>
					<textarea class="input100" name="medication" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" >
					<span class="label-input100">Relief Percent</span>
					<input class="input100" type="text" name="relief_percent" placeholder="eg.80%">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<span class="label-input100">New or follow up case no.</span>
					<input class="input100" type="text" name="new_follow_case_no" placeholder="Here.....">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Purchase report</span>
					<textarea class="input100" name="purchase_report" placeholder="Here..."></textarea>
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<span class="label-input100">No of appointments</span>
					<input class="input100" type="text" name="no_of_appoint" placeholder="Here.....">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Insert an image(Max size:64 KB)</span>
					<input class="input100" type="file" name="image" id="image">
					<span class="focus-input100"></span>
				</div>


				<div class="container-contact100-form-btn">
					<a href="../index.php"><button class="contact100-form-btn" type="submit" name="submit">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
<script>
 $(document).ready(function(){
      $('#submit').click(function(){
           var image_name = $('#image').val();
           if(image_name == '')
           {
                alert("Please Select Image");
                return false;
           }
           else
           {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                     alert('Invalid Image File');
                     $('#image').val('');
                     return false;
                }
           }
      });
 });
 </script>
