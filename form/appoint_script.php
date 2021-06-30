                                                                                                                                                                                                                                                                                                                                                                         
 <?php
require("common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.

  $name = $_POST['patient_name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $mobile = $_POST['mobile'];
  $mobile = mysqli_real_escape_string($con, $mobile);

  $app_date = $_POST['app_date'];
  $app_date = mysqli_real_escape_string($con, $app_date);

  $timeslot = $_POST['timeslot'];
	$timeslot = mysqli_real_escape_string($con, $timeslot);  


    $query = "INSERT INTO appointment(patient_name,email,mobile,app_date,timeslot)VALUES('" . $name . "','" . $email . "','" . $mobile . "','" . $app_date . "','".$timeslot."')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $app_id = mysqli_insert_id($con);

   header('location: ../index.php');
