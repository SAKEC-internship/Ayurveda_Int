<?php
require("common.php");

$query = "SELECT * FROM appointment WHERE app_date=CURRENT_DATE";
$result=mysqli_query($con, $query) or die(mysqli_error($con));



if(mysqli_num_rows($result) >= 1) {

    while($row=mysqli_fetch_array($result)) {
        echo $row['app_id']."<br>";
        echo $row['patient_name']."<br>";
        echo $row['email']."<br>";
        echo $row['mobile']."<br>";
    
    }
}else{
    echo "No appointments scheduled yet";

}


?>

