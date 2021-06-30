<?php
$con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error($con));
session_start();
if(mysqli_connect_error())
{
    echo "error";
}

  $name = $_POST['patient_name'];
  $name = mysqli_real_escape_string($con, $name);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient's details</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">


</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">

                <div class="signup-content">
                  <a href="#" onclick="window.print()" style="margin-left:445px;">Print this page</a>
                    <form method="POST" id="signup-form" class="signup-form" action="">

                        <h1 style="font-size: xx-large;">Basic Details</h1>

                        <?php
                       $query = "SELECT * FROM patient WHERE patient_name='$name' and patient_id IN (SELECT MAX(patient_id) FROM patient WHERE patient_name='$name')";

                        $result=mysqli_query($con, $query) or die(mysqli_error($con));

                        if(mysqli_num_rows($result) >= 1)
                         {
                            while($row=mysqli_fetch_array($result))
                          {


                        ?>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">Name</label>
                                <input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['patient_name'] ?>" readonly/>
                            </div>
                            <div class="form-group">
                                <label for="last_name">New Or Existing</label>
                                <input type="text" class="form-input" name="last_name" id="last_name" value="<?php echo $row['status'] ?>" readonly />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">Age</label>
                                <input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['age'] ?>" readonly/>
                            </div>



                                <div class="form-group">
                                    <label for="first_name">Gender</label>
                                    <input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['sex'] ?>" readonly/>
                                </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">Job</label>
                                <input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['job'] ?>" readonly/>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Weight</label>
                                <input type="text" class="form-input" name="last_name" id="last_name" value="<?php echo $row['weight'] ?>" readonly />
                            </div>
                            <div class="form-group">
                                <label for="first_name">Diet</label>
                                <input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['diet'] ?>" readonly />
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="first_name">Blood Pressure</label>
                                <textarea class="form-input" rows="5" cols="120" name="first_name" id="first_name" value="<?php echo $row['blood_pressure'] ?>"><?php echo $row['blood_pressure'] ?></textarea>

                                <!--<input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['blood_pressure'] ?>" readonly/> -->
                            </div>

                            <div class="form-group">
                                <label for="last_name">Blood Sugar</label>
                                <textarea class="form-input" rows="5" cols="120" name="last_name" id="last_name" value="<?php echo $row['random_sugar'] ?>"><?php echo $row['random_sugar'] ?></textarea>
                            </div>


                        <div class="form-group">
                            <label for="phone_number">Address</label>
                            <input type="text" class="form-input" name="phone_number" id="phone_number" value="<?php echo $row['address'] ?>" readonly/>
                        </div>
                        <div class="form-row">

                            <div class="form-group">
                                <label for="last_name">Contact</label>
                                <input type="text" class="form-input" name="last_name" id="last_name" value="<?php echo $row['mobile'] ?>" readonly/>
                            </div>
                            <div class="form-group">
                                <label for="first_name">Reference</label>
                                <input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['reference'] ?>" readonly/>
                            </div>

                        </div>
                        <button>Update</button>
                        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                        <?php }
                        } ?>

                        <h1 style="font-size: xx-large;">Previous History</h1>
                        <?php
                       $query1 = "SELECT * FROM patient p INNER JOIN patient_history h ON p.patient_id=h.patient_id  WHERE p.patient_name='$name' and p.patient_id IN (SELECT MAX(p.patient_id) FROM patient p WHERE p.patient_name='$name')";
                        $result=mysqli_query($con, $query1) or die(mysqli_error($con));

                        if(mysqli_num_rows($result) >= 1) {
                         while($row=mysqli_fetch_array($result)) { ?>


                        <div class="form-row">
                           <div class="form-group">
                                <label for="first_name">Brief Previous Reports</label>
                                <textarea class="form-input" rows="5" cols="120" name="first_name" id="first_name" value="<?php echo $row['report_noting'] ?>"><?php echo $row['report_noting'] ?></textarea>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="last_name">Treatment</label>
                                <input type="text" class="form-input" name="last_name" id="last_name" value="<?php echo $row['curr_medication'] ?>" readonly/>
                            </div>
                            <div class="form-group">
                                <label for="first_name">Current Complain</label>
                                <input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['curr_complain'] ?>" readonly/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="last_name">Chief Complain</label>
                                <input type="text" class="form-input" name="last_name" id="last_name" value="<?php echo $row['chief_complain'] ?>" readonly/>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Percentage Relief</label>
                                <input type="text" class="form-input" name="last_name" id="last_name" value="<?php echo $row['recovery'] ?>" readonly/>
                            </div>
                        </div>
                        <input type="button" name="submit" value="Update"/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                     <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

                    <?php }
                    } ?>

                        <h1 style="font-size: xx-large;">Current Routine</h1>
        <?php
                       $query2 = "SELECT * FROM patient p INNER JOIN present_routine r on p.patient_id=r.patient_id WHERE p.patient_name='$name' and p.patient_id IN (SELECT MAX(p.patient_id) FROM patient p WHERE patient_name='$name')";
                        $result=mysqli_query($con, $query2) or die(mysqli_error($con));

                        if(mysqli_num_rows($result) >= 1) {
                         while($row=mysqli_fetch_array($result)) { ?>

                        <div class="form-row">
                            <div class="form-group">
                                 <label for="first_name">BreakFast</label>
                                 <input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['breakfast'] ?>" readonly/>
                             </div>
                             <div class="form-group">
                                 <label for="last_name">Lunch</label>
                                 <input type="text" class="form-input" name="last_name" id="last_name" value="<?php echo $row['lunch'] ?>" readonly/>
                             </div>
                             <div class="form-group">
                                <label for="first_name">Evening Snacks</label>
                                <input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['even_snacks'] ?>" readonly/>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Dinner</label>
                                <input type="text" class="form-input" name="last_name" id="last_name" value="<?php echo $row['dinner'] ?>" readonly/>
                            </div>
                         </div>
                         <div class="form-row">
                            <div class="form-group">
                                 <label for="first_name">Early Morning Diet</label>
                                 <input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['early_morn_diet'] ?>" readonly/>
                             </div>
                             <div class="form-group">
                                 <label for="last_name">Habits</label>
                                 <input type="text" class="form-input" name="last_name" id="last_name" value="<?php echo $row['habits'] ?>" readonly/>
                             </div>
                         </div>
                         <div class="form-row">
                            <div class="form-group">
                                 <label for="first_name">Activities/Exercise</label>
                                 <input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['phy_act'] ?>" readonly/>
                             </div>
                             <div class="form-group">
                                 <label for="last_name">Stress</label>
                                 <input type="text" class="form-input" name="last_name" id="last_name" value="<?php echo $row['Stress'] ?>" readonly/>
                             </div>
                         </div>
                         <input type="button" name="submit" value="Update"/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                     <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                        <?php   }
                    }  ?>



                         <h1 style="font-size: xx-large;">After Report Details</h1>

                   <?php
                       $query3 = "SELECT * FROM patient p INNER JOIN after_treatment a on p.patient_id=a.patient_id WHERE p.patient_name='$name' and p.patient_id IN (SELECT MAX(p.patient_id) FROM patient p WHERE patient_name='$name')";
                        $result=mysqli_query($con, $query3) or die(mysqli_error($con));

                        if(mysqli_num_rows($result) >= 1) {
                         while($row=mysqli_fetch_array($result)) { ?>

                         <!--<div class="form-row">-->
                            <div class="form-group">
                                <label for="first_name">Treatment</label>
                                <textarea rows="5" cols="120" class="form-input" name="first_name" id="first_name" value="<?php echo $row['treatment'] ?>"><?php echo $row['treatment'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Medicine List</label>
                                <textarea rows="5" cols="120" class="form-input" name="last_name" id="last_name" value="<?php echo $row['medicine_list'] ?>"><?php echo $row['medicine_list'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Dosage</label>
                                <textarea rows="5" cols="120" class="form-input" name="last_name" id="last_name" value="<?php echo $row['dosage'] ?>"><?php echo $row['dosage'] ?></textarea>
                            </div>
                      <!--  </div>
                        <div class="form-row"> -->
                            <div class="form-group">
                                 <label for="first_name">Instructions</label>
                                 <textarea rows="5" cols="120" class="form-input" name="first_name" id="first_name" value="<?php echo $row['instructions'] ?>"><?php echo $row['instructions'] ?></textarea>
                             </div>
                             <div class="form-group">
                                 <label for="last_name">Treatment Days</label>
                                 <textarea rows="5" cols="120" class="form-input" name="last_name" id="last_name" value="<?php echo $row['treatment_days'] ?>"><?php echo $row['treatment_days'] ?></textarea>
                             </div>
                       <!--      </div>  -->
                             <input type="button" name="submit" value="Update"/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                     <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                        <?php }
                        } ?>


                         <h1 style="font-size: xx-large;">Examination Details</h1>

                          <?php
                       $query6 = "SELECT * FROM patient p INNER JOIN examin_noting e on p.patient_id=e.patient_id WHERE p.patient_name='$name' and p.patient_id IN (SELECT MAX(p.patient_id) FROM patient p WHERE patient_name='$name')";
                        $result=mysqli_query($con, $query6) or die(mysqli_error($con));

                        if(mysqli_num_rows($result) >= 1) {
                         while($row=mysqli_fetch_array($result)) { ?>

                            <div class="form-group">
                                 <label for="first_name">Bowels</label>
                                 <textarea rows="5" cols="120" class="form-input" name="first_name" id="first_name" value="<?php echo $row['bowels'] ?>"><?php echo $row['bowels'] ?></textarea>
                             </div>
                             <div class="form-group">
                                 <label for="last_name">Urine</label>
                                 <textarea class="form-input" name="last_name" id="last_name" value="<?php echo $row['urine'] ?>"><?php echo $row['urine'] ?></textarea>
                             </div>
                             <div class="form-group">
                                <label for="last_name">Tongue</label>
                                <textarea class="form-input" name="last_name" id="last_name" value="<?php echo $row['tongue'] ?>"><?php echo $row['tongue'] ?></textarea>
                            </div>


                            <div class="form-group">
                                 <label for="first_name">Appetite</label>
                                 <textarea class="form-input" name="first_name" id="first_name" value="<?php echo $row['appetite'] ?>"><?php echo $row['appetite'] ?></textarea>
                             </div>
                             <div class="form-group">
                                 <label for="last_name">Skin</label>
                                 <textarea class="form-input" name="last_name" id="last_name" value="<?php echo $row['skin'] ?>"><?php echo $row['skin'] ?></textarea>
                             </div>


                            <div class="form-group">
                                 <label for="first_name">Other</label>
                                 <textarea class="form-input" name="first_name" id="first_name" value="<?php echo $row['other'] ?>"><?php echo $row['other'] ?></textarea>
                             </div>
                             <div class="form-group">
                                 <label for="last_name">Pulse Rating</label>
                                 <textarea class="form-input" name="last_name" id="last_name" value="<?php echo $row['pulse'] ?>" ><?php echo $row['pulse'] ?></textarea>
                             </div>

                         <input type="button" name="submit" value="Update"/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                     <br/><br/><br/><br/><br/><br/><br/>
                        <?php }
                        } ?>



                         <h1 style="font-size: xx-large;">Panchkarma Advise</h1>
                     <?php
                       $query4 = "SELECT * FROM patient p INNER JOIN panchkarma_advise x on p.patient_id=x.patient_id WHERE p.patient_name='$name' and p.patient_id IN (SELECT MAX(p.patient_id) FROM patient p WHERE patient_name='$name')";
                        $result=mysqli_query($con, $query4) or die(mysqli_error($con));

                        if(mysqli_num_rows($result) >= 1) {
                         while($row=mysqli_fetch_array($result)) { ?>

                         <div class="form-row">
                            <div class="form-group">
                                 <label for="first_name">Diet Advise</label>
                                 <input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['diet_advise'] ?>" readonly/>
                             </div>
                             <div class="form-group">
                                <label for="last_name">Next Appoint</label>
                                <input type="date" class="form-input" name="last_name" id="last_name" value="<?php echo $row['next_appoint'] ?>" readonly/>
                            </div>

                         </div>
                         <div class="form-row">
                            <div class="form-group">
                                 <label for="first_name">Home Remedies</label>
                                 <input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['home_remedies'] ?>" readonly/>
                             </div>

                             <div class="form-group">
                                <label for="last_name">To Eat List</label>
                                <input type="text" class="form-input" name="last_name" id="last_name" value="<?php echo $row['to_eat_list'] ?>" readonly/>
                            </div>
                            <div class="form-group">
                               <label for="last_name">Not To Eat</label>
                               <input type="text" class="form-input" name="last_name" id="last_name" value="<?php echo $row['not_to_eat_list'] ?>" readonly/>
                           </div>

                         </div>
                         <div class="form-row">
                            <div class="form-group">
                                 <label for="first_name">Consultance Charge</label>
                                 <input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['consult_charge'] ?>" readonly/>
                             </div>

                             <div class="form-group">
                                <label for="last_name">Medicine Charge</label>
                                <input type="text" class="form-input" name="last_name" id="last_name" value="<?php echo $row['medicine_charge'] ?>" readonly/>
                            </div>
                            <div class="form-group">
                               <label for="last_name">Panchkarma Charge</label>
                               <input type="text" class="form-input" name="last_name" id="last_name" value="<?php echo $row['panchkarma_charge'] ?>" readonly/>
                           </div>

                         </div>
                         <div class="form-row">
                            <div class="form-group">
                                 <label for="first_name">Medicine Certificate Format</label>
                                 <input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['med_certi_format'] ?>" readonly/>
                             </div>

                             <div class="form-group">
                                <label for="last_name">Investigation Report Format</label>
                                <input type="text" class="form-input" name="last_name" id="last_name" value="<?php echo $row['invest_ref_format'] ?>" readonly/>
                            </div>
                         </div>
                         <input type="button" name="submit" value="Update"/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                     <br/><br/><br/><br/><br/><br/><br/><br/>
                    <?php }
                    } ?>



                         <h1 style="font-size: xx-large;">Reports Details</h1>
                         <?php
                       $query5 = "SELECT * FROM patient p INNER JOIN reports d on p.patient_id=d.patient_id WHERE p.patient_name='$name' and p.patient_id IN (SELECT MAX(p.patient_id) FROM patient p WHERE patient_name='$name')";
                        $result=mysqli_query($con, $query5) or die(mysqli_error($con));

                        if(mysqli_num_rows($result) >= 1) {
                         while($row=mysqli_fetch_array($result)) { ?>
                         <div class="form-row">
                            <div class="form-group">
                                 <label for="first_name">Monthly Reports</label>
                                 <input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['mon_rep'] ?>" readonly/>
                             </div>

                             <div class="form-group">
                                <label for="last_name">Number Of Visits</label>
                                <input type="text" class="form-input" name="last_name" id="last_name" value="<?php echo $row['no_of_visits'] ?>" readonly/>
                            </div>
                            <div class="form-group">
                                <label for="first_name">Charge Collected</label>
                                <input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['charge_collect'] ?>" readonly/>
                            </div>

                            <div class="form-group">
                               <label for="last_name">Medication</label>
                               <input type="text" class="form-input" name="last_name" id="last_name" value="<?php echo $row['medication'] ?>" readonly/>
                           </div>
                         </div>
                         <div class="form-row">
                            <div class="form-group">
                                 <label for="first_name">Relief Percentage</label>
                                 <input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['relief_percent'] ?>" readonly/>
                             </div>

                             <div class="form-group">
                                <label for="last_name">New/Exisit Case Number</label>
                                <input type="text" class="form-input" name="last_name" id="last_name" value="<?php echo $row['new_follow_case_no'] ?>" readonly/>
                            </div>
                            <div class="form-group">
                                <label for="first_name">Purchase Report</label>
                                <input type="text" class="form-input" name="first_name" id="first_name" value="<?php echo $row['purchase_report'] ?>" readonly/>
                            </div>

                            <div class="form-group">
                               <label for="last_name">No. Of Appointment</label>
                               <input type="text" class="form-input" name="last_name" id="last_name" value="<?php echo $row['no_of_appoint'] ?>" readonly/>
                           </div>
                         </div>
                         <input type="button" name="submit" value="Update"/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                     <br/><br/><br/><br/><br/><br/><br/>
                        <?php }
                        }  ?>


                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
