<?php
$con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error($con));
session_start();
if(mysqli_connect_error())
{
  echo "error";
}

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
 if(isset($_POST['register']))
 {

  $name = $_POST['patient_name'];
  $name = mysqli_real_escape_string($con, $name);


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
  
  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);
  
  $reference = $_POST['reference'];
  $reference = mysqli_real_escape_string($con, $reference);
  
     $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
    $query = "INSERT INTO regist (patient_name, image, mobile, status, age, sex, job, weight , address, reference)VALUES('" . $name . "','$file','" . $phone . "','" . $status . "','" . $age . "','" . $sex . "','" . $job . "','" . $weight . "','" . $address . "','" . $reference . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $patient_id = mysqli_insert_id($con);
    $_SESSION['patient_id'] = $patient_id;

    
     // if(mysqli_query($con, $query))  
      //{  
        //   echo '<script>alert("Image Inserted into Database")</script>';  
      //}  

    header('location: ../index.php');
}
