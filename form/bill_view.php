<?php
require("common.php");
/*
$query = "SELECT * FROM appointment WHERE app_date=CURRENT_DATE";
$result=mysqli_query($con, $query) or die(mysqli_error($con));



if(mysqli_num_rows($result) >= 1) {

    while($row=mysqli_fetch_array($result)) {
        echo $row['patient_name']."<br>";
        echo $row['email']."<br>";
        echo $row['mobile']."<br>";
        echo $row['app_id']."<br>";
    
    }
}else{
    echo "No appointments scheduled yet";

}
*/

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Purchase bill details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php
$query = "SELECT * FROM purchase_bill_rec";;
$result=mysqli_query($con, $query) or die(mysqli_error($con));



if(mysqli_num_rows($result) >= 1) { 
?>
    <table class="table">
        <thead class="thead-dark">
          <tr style="background-color: aquamarine;">
            <th scope="col">Party name</th>
            <th scope="col">Bill date</th>
            <th scope="col">Bill no</th>
            <th scope="col">Total</th>
            <th scope="col">Paid</th>
            <th scope="col">Balance</th>
            <th scope="col">Payment date</th>
            <th scope="col">Payment mode</th>
            <th scope="col">Payment details</th>

          </tr>
        </thead>
        
        <tbody>
        <?php while($row=mysqli_fetch_array($result)) { ?>
          <tr>
            <td><?php echo $row['party_name']; ?></td>
            <td><?php echo $row['bill_date']; ?></td>
            <td><?php echo $row['bill_no']; ?></td>
            <td><?php echo $row['total']; ?></td>
            <td><?php echo $row['paid']; ?></td>
            <td><?php echo $row['bal']; ?></td>
            <td><?php echo $row['pay_date']; ?></td>
            <td><?php echo $row['pay_mode']; ?></td>
            <td><?php echo $row['pay_details']; ?></td>

          </tr>
          
           <?php } ?>
        </tbody>
      </table>

 <?php } 
else{
    echo "No records found";

}

?>



</body>
</html>



