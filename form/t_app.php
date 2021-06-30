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
    <title>Today's Appointment details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php
$query = "SELECT * FROM appointment WHERE app_date=CURRENT_DATE";
$result=mysqli_query($con, $query) or die(mysqli_error($con));



if(mysqli_num_rows($result) >= 1) { 
?>
    <table class="table">
        <thead class="thead-dark">
          <tr style="background-color: aquamarine;">
            <th scope="col">Patient name</th>
            <th scope="col">Patient email</th>
            <th scope="col">Patient mobile</th>
            <th scope="col">Timeslot</th>
            <th scope="col">Appointment Id</th>
          </tr>
        </thead>
        
        <tbody>
        <?php while($row=mysqli_fetch_array($result)) { ?>
          <tr>
            <td><?php echo $row['patient_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['timeslot']; ?></td>
            <td><?php echo $row['app_id']; ?></td>
          </tr>
          <!--<tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>jkfnjda@gmg.com</td>
            <td>38954</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>jkfnjda@gmg.com</td>
            <td>238594</td>
          </tr>-->
           <?php } ?>
        </tbody>
      </table>

 <?php } 
else{
    echo "No appointments scheduled yet";

}


?>



</body>
</html>



