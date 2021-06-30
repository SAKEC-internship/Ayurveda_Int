<?php
$con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error($con));
session_start();
if(mysqli_connect_error())
{
  echo "error";
}

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
 if(isset($_POST['update_4']))
 {
   $treatment = $_POST['treatment'];
   $treatment = mysqli_real_escape_string($con, $treatment);

   $medicine_list = $_POST['medicine_list'];
   $medicine_list = mysqli_real_escape_string($con, $medicine_list);

   $dosage = $_POST['dosage'];
   $dosage = mysqli_real_escape_string($con, $dosage);

   $instructions = $_POST['instructions'];
   $instructions = mysqli_real_escape_string($con, $instructions);

   $treatment_days = $_POST['treatment_days'];
   $treatment_days = mysqli_real_escape_string($con, $treatment_days);

   $patient_id= $_POST['patient_id'];
   $patient_id= mysqli_real_escape_string($con,$patient_id);

     $query = "UPDATE after_treatment set treatment='".$treatment."',medicine_list='".$medicine_list."',dosage='".$dosage."',instructions='".$instructions."',treatment_days='".$treatment_days."' where patient_id='".$patient_id."'";
     mysqli_query($con, $query) or die(mysqli_error($con));


   header('location: serind.php');
}
else{
echo "Press Update first";
}
?>
