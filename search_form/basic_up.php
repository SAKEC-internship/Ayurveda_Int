<?php
$con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error($con));
session_start();
if(mysqli_connect_error())
{
  echo "error";
}

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
 if(isset($_POST['update_1']))
 {

  $name = $_POST['patient_name'];
  $name = mysqli_real_escape_string($con, $name);

  $patient_id = $_POST['patient_id'];
  $patient_id = mysqli_real_escape_string($con, $patient_id);

  $phone = $_POST['mobile'];
  $phone = mysqli_real_escape_string($con, $phone);

  $status = $_POST['status'];
  $status = mysqli_real_escape_string($con, $status);

  $age = $_POST['age'];
  $age = mysqli_real_escape_string($con, $age);

  $sex = $_POST['sex'];
  $sex = mysqli_real_escape_string($con, $sex);

  $job = $_POST['job'];
  $job = mysqli_real_escape_string($con, $job);

  $weight = $_POST['weight'];
  $weight = mysqli_real_escape_string($con, $weight);

  $bloodpres = $_POST['blood_pressure'];
  $bloodpres = mysqli_real_escape_string($con, $bloodpres);

  $randomsug = $_POST['random_sugar'];
  $randomsug = mysqli_real_escape_string($con, $randomsug);

  $diet = $_POST['diet'];
  $diet = mysqli_real_escape_string($con, $diet);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);

  $reference = $_POST['reference'];
  $reference = mysqli_real_escape_string($con, $reference);



    $query = "UPDATE patient set patient_name='".$name."',patient_id='".$patient_id."',mobile='".$phone."', status='".$status."', age='".$age."', sex='".$sex."', job='".$job."', weight='".$weight."' , blood_pressure='".$bloodpres."', random_sugar='".$randomsug."', diet='".$diet."', address='".$address."', reference='".$reference."' WHERE patient_name='$name'";
    mysqli_query($con, $query) or die(mysqli_error($con));

    header('location: serind.php');
 }
else{
echo "Press Update first";
}
?>
