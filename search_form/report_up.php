<?php
$con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error($con));
session_start();
if(mysqli_connect_error())
{
  echo "error";
}

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
 if(isset($_POST['update_7']))
 {

   $patient_id= $_POST['patient_id'];
   $patient_id= mysqli_real_escape_string($con,$patient_id);

   $mon_rep = $_POST['mon_rep'];
 $mon_rep = mysqli_real_escape_string($con, $mon_rep);

 $no_visits = $_POST['no_of_visits'];
 $no_visits = mysqli_real_escape_string($con, $no_visits);

 $char_coll = $_POST['charge_collect'];
 $char_coll = mysqli_real_escape_string($con, $char_coll);

 $medic = $_POST['medication'];
 $medic = mysqli_real_escape_string($con, $medic);

 $rel_perc = $_POST['relief_percent'];
 $rel_perc = mysqli_real_escape_string($con, $rel_perc);

 $case_no = $_POST['new_follow_case_no'];
 $case_no = mysqli_real_escape_string($con, $case_no);

 $pur_rep = $_POST['purchase_report'];
 $pur_rep = mysqli_real_escape_string($con, $pur_rep);

 $no_appoint = $_POST['no_of_appoint'];
 $no_appoint = mysqli_real_escape_string($con, $no_appoint);


   $query = "UPDATE reports set mon_rep='".$mon_rep."',no_of_visits='".$no_visits."',charge_collect='".$char_coll."',medication='".$medic."',relief_percent='".$rel_perc."',new_follow_case_no='".$case_no."',purchase_report='".$pur_rep."',no_of_appoint='".$no_appoint."',patient_id='".$patient_id."' WHERE patient_id='".$patient_id."'";
   mysqli_query($con, $query) or die(mysqli_error($con));


   header('location: serind.php');
}
else{
echo "Press Update first";
}
?>
