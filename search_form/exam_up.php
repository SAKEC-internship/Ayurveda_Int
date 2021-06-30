<?php
$con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error($con));
session_start();
if(mysqli_connect_error())
{
  echo "error";
}

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
 if(isset($_POST['update_5']))
 {

   $patient_id= $_POST['patient_id'];
   $patient_id= mysqli_real_escape_string($con,$patient_id);

   $bowels = $_POST['bowels'];
   $bowels = mysqli_real_escape_string($con, $bowels);

   $urine = $_POST['urine'];
   $urine = mysqli_real_escape_string($con, $urine);

   $tongue = $_POST['tongue'];
   $tongue = mysqli_real_escape_string($con, $tongue);

   $appetite = $_POST['appetite'];
   $appetite = mysqli_real_escape_string($con, $appetite);

   $skin = $_POST['skin'];
   $skin = mysqli_real_escape_string($con, $skin);

   $other = $_POST['other'];
   $other = mysqli_real_escape_string($con, $other);

   $pulse = $_POST['pulse'];
   $pulse = mysqli_real_escape_string($con, $pulse);


     $query = "UPDATE examin_noting set bowels='".$bowels."',urine='".$urine."',tongue='".$tongue."',appetite='".$appetite."',skin='".$skin."',other='"$other"',pulse='".$pulse."',patient_id='".$patient_id."' where patient_id='".$patient_id."'";"



   header('location: serind.php');
}
else{
echo "Press Update first";
}
?>
