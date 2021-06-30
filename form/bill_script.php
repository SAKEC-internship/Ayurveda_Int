<?php
require("common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $party_name = $_POST['party_name'];
  $party_name = mysqli_real_escape_string($con, $party_name);

  $bill_date = $_POST['bill_date'];
  $bill_date = mysqli_real_escape_string($con, $bill_date);

  $bill_no = $_POST['bill_no'];
  $bill_no = mysqli_real_escape_string($con, $bill_no);

  $total = $_POST['total'];
  $total = mysqli_real_escape_string($con,$total);

  $paid = $_POST['paid'];
  $paid = mysqli_real_escape_string($con,$paid);

  $bal = $_POST['bal'];
  $bal = mysqli_real_escape_string($con,$bal);

  $pay_date = $_POST['pay_date'];
  $pay_date = mysqli_real_escape_string($con, $pay_date);

  $pay_mode = $_POST['pay_mode'];
  $pay_mode = mysqli_real_escape_string($con, $pay_mode);
  
  $pay_details = $_POST['pay_details'];
  $pay_details = mysqli_real_escape_string($con, $pay_details);
  
  
    
    $query = "INSERT INTO purchase_bill_rec(party_name,bill_date,bill_no,total,paid,bal,pay_date,pay_mode,pay_details)VALUES('" . $party_name . "','" . $bill_date . "','" . $bill_no . "','" . $total . "','" . $paid . "','" . $bal . "','" . $pay_date . "','" . $pay_mode . "','" . $pay_details . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
  
   header('location: bill_view.php');
  
?>