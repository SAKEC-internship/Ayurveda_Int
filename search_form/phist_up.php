<?php
$con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error($con));
session_start();
if(mysqli_connect_error())
{
  echo "error";
}

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
 if(isset($_POST['update_2']))
 {
   $patient_id= $_POST['patient_id'];
   $patient_id= mysqli_real_escape_string($con,$patient_id);

   $report_noting = $_POST['report_noting'];
   $report_noting = mysqli_real_escape_string($con, $report_noting);

   $curr_medication = $_POST['curr_medication'];
   $curr_medication = mysqli_real_escape_string($con, $curr_medication);

   $curr_complain = $_POST['curr_complain'];
   $curr_complain = mysqli_real_escape_string($con, $curr_complain);

   $chief_complain = $_POST['chief_complain'];
   $chief_complain = mysqli_real_escape_string($con, $chief_complain);

   $recovery = $_POST['recovery'];
   $recovery = mysqli_real_escape_string($con, $recovery);



    $query = "UPDATE patient_history set report_noting='".$report_noting."',curr_medication='".$curr_medication."',curr_complain='".$curr_complain."',chief_complain='".$chief_complain."',recovery='".$recovery."' WHERE patient_id='".$patient_id."'";
    mysqli_query($con, $query) or die(mysqli_error($con));

 header('location: serind.php');
   }
   else{
   echo "Press Update first";
   }
