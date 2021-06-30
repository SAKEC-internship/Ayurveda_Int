<?php
$con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error($con));
session_start();
if(mysqli_connect_error())
{
  echo "error";
}

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
 if(isset($_POST['update_6']))
 {

   $patient_id= $_POST['patient_id'];
   $patient_id= mysqli_real_escape_string($con,$patient_id);

   $diet_advise = $_POST['diet_advise'];
 $diet_advise = mysqli_real_escape_string($con, $diet_advise);

 $to_eat_list = $_POST['to_eat_list'];
 $to_eat_list = mysqli_real_escape_string($con, $to_eat_list);

 $not_to_eat_list = $_POST['not_to_eat_list'];
 $not_to_eat_list = mysqli_real_escape_string($con, $not_to_eat_list);

 $home_remedies = $_POST['home_remedies'];
 $home_remedies = mysqli_real_escape_string($con, $home_remedies);

 $next_appoint = $_POST['next_appoint'];
 $next_appoint = mysqli_real_escape_string($con, $next_appoint);

 $consult_charge = $_POST['consult_charge'];
 $consult_charge = mysqli_real_escape_string($con, $consult_charge);

 $medicine_charge = $_POST['medicine_charge'];
 $medicine_charge = mysqli_real_escape_string($con, $medicine_charge);

 $panchkarma_charge = $_POST['panchkarma_charge'];
 $panchkarma_charge = mysqli_real_escape_string($con, $panchkarma_charge);

 $med_certi_format = $_POST['med_certi_format'];
 $med_certi_format = mysqli_real_escape_string($con, $med_certi_format);

 $invest_ref_format = $_POST['invest_ref_format'];
 $invest_ref_format = mysqli_real_escape_string($con, $invest_ref_format);


   $query = "UPDATE panchkarma_advise set diet_advise='".$diet_advise."',to_eat_list='".$to_eat_list."',not_to_eat_list='".$not_to_eat_list."',home_remedies='".$home_remedies."',next_appoint='".$next_appoint."',consult_charge='".$consult_charge."',medicine_charge='".$medicine_charge."',panchkarma_charge='".$panchkarma_charge."',med_certi_format='".$med_certi_format."',invest_ref_format='".$invest_ref_format."',patient_id='".$patient_id."' WHERE patient_id='".$patient_id."'";  
    mysqli_query($con, $query) or die(mysqli_error($con));


   header('location: serind.php');
}
else{
echo "Press Update first";
}
?>
