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
    <title>Patients registerations</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php
$query = "SELECT * FROM regist order by patient_id";
$result=mysqli_query($con, $query) or die(mysqli_error($con));



if(mysqli_num_rows($result) >= 1) { 
?>
    <table class="table">
        <thead class="thead-dark">
          <tr style="background-color: aquamarine;">
            <th scope="col">Patient id</th>
            <th scope="col">Patient name</th>
            <th scope="col">Patient image</th>
            <th scope="col">status</th>
            <th scope="col">age</th>
            <th scope="col">job</th>
            <th scope="col">sex</th>
            <th scope="col"> weight</th>
            <th scope="col">Address </th>
            <th scope="col">Mobile</th>
            <th scope="col">Reference</th>
           
          </tr>
        </thead>
        
        <tbody>
        <?php while($row=mysqli_fetch_array($result)) { ?>
          <tr>
            <td><?php echo $row['patient_id']; ?></td>
            <td><?php echo $row['patient_name']; ?></td>
            <td><?php echo $row['image']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['job']; ?></td>
            <td><?php echo $row['sex']; ?></td>
            <td><?php echo $row['weight']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['reference']; ?></td>
            
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
    echo "No registerations yet";

}


?>



</body>
</html>



