<?php
   include("common.php");


   if($_POST['submit']) {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']);
       $secure = mysqli_real_escape_string($con,$_POST['secure']);


      // If result matched $myusername and $mypassword, table row must be 1 row
      $sql = "SELECT * FROM doctor WHERE username = '$myusername'and secure = '$secure' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

     $count = mysqli_num_rows($result);
      if($count==1) {

         $_SESSION['login_user'] = $myusername;

         header("location: ../admin.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "$error";
      }
   }
 ?>
