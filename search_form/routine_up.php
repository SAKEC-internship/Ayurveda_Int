<?php
$con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error($con));
session_start();
if(mysqli_connect_error())
{
  echo "error";
}

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
 if(isset($_POST['update_3']))
 {


   $patient_id= $_POST['patient_id'];
   $patient_id= mysqli_real_escape_string($con,$patient_id);

   $breakfast = $_POST['breakfast'];
$breakfast = mysqli_real_escape_string($con, $breakfast);

$lunch = $_POST['lunch'];
$lunch = mysqli_real_escape_string($con, $lunch);

$even_snacks = $_POST['even_snacks'];
$even_snacks = mysqli_real_escape_string($con, $even_snacks);

$dinner = $_POST['dinner'];
$dinner = mysqli_real_escape_string($con, $dinner);

$early_morn_diet = $_POST['early_morn_diet'];
$early_morn_diet = mysqli_real_escape_string($con, $early_morn_diet);

$habits = $_POST['habits'];
$habits = mysqli_real_escape_string($con, $habits);

$phy_act = $_POST['phy_act'];
$phy_act = mysqli_real_escape_string($con, $phy_act);

$stress = $_POST['Stress'];
$stress = mysqli_real_escape_string($con, $stress);


  $query = "UPDATE present_routine set breakfast='".$breakfast."', lunch='".$lunch."', even_snacks='".$even_snacks."', dinner='".$dinner."', early_morn_diet='".$early_morn_diet."', habits='".$habits."' , phy_act='".$phy_act."', Stress='".$stress."',patient_id='".$patient_id."' where patient_id='".$patient_id."'";
  mysqli_query($con, $query) or die(mysqli_error($con));

   header('location: serind.php');
}
else{
echo "Press Update first";
}
?>
