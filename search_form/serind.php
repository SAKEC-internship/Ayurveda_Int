<?php
$con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error($con));
session_start();
if(mysqli_connect_error())
{
	echo "error";
}
if(isset($_POST['submit'])){
$name = $_POST['patient_name'];
$name = mysqli_real_escape_string($con, $name);

?>
<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index1.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css" type="text/css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search Patient</title>
    </head>
    <body>

        <div class="container-fluid decor_bg" id="content">
                <div class="container">

                        <form  action="" method="POST">
                          <h2>BASIC DETAILS</h2>
                          <?php
                         $query = "SELECT * FROM patient WHERE patient_name='$name' and patient_id IN (SELECT MAX(patient_id) FROM patient WHERE patient_name='$name')";

                          $result=mysqli_query($con, $query) or die(mysqli_error($con));

                          if(mysqli_num_rows($result) >= 1)
                           {
                              while($row=mysqli_fetch_array($result))
                            {


                          ?>
                          <div class="row">
                            <div class="col-lg-4">
                            <div class="form-group">
                              <label for="first_name">Name</label>
                                <input type="text" class="form-control" name="patient_name"  required = "true" value="<?php echo $row['patient_name'] ?>">
                            </div>
                          </div>
                          <div class="col-lg-4">
                          <div class="form-group">
                            <label for="first_name">Patient Id</label>
                              <input type="text" class="form-control" name="patient_id"  required = "true" value="<?php echo $row['patient_id'] ?>" readonly/>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label for="first_name">Timestamp</label>
                              <input type="Timestamp" class="form-control"  name="curr_time" required = "true" readonly value="<?php echo $row['curr_time'] ?>" />
                          </div>
                        </div>
                      </div>

                      <div class="row">
                      <div class="col-lg-4">
                            <div class="form-group">
                              <label for="first_name">Status</label>
                                <input type="text" class="form-control"  name="status" required = "true" value="<?php echo $row['status'] ?>">
                            </div>
                          </div>

                          <div class="col-lg-4">
                            <div class="form-group">
                              <label for="first_name">Age</label>
                                <input type="text" class="form-control" name="age" required = "true" value="<?php echo $row['age'] ?>">
                            </div>
                          </div>

                          <div class="col-lg-4">
                            <div class="form-group">
                              <label for="first_name">Gender</label>
                                <input type="text" class="form-control" name="sex" required = "true" value="<?php echo $row['sex'] ?>">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                              <label for="first_name">Job</label>
                                <input  type="text" class="form-control" name="job" required = "true" value="<?php echo $row['job'] ?>">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label for="first_name">Weight</label>
                                <input  type="text" class="form-control" name="weight" required = "true" value="<?php echo $row['weight'] ?>">
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label for="first_name">Diet</label>
                                <input  type="text" class="form-control" name="diet" required = "true" value="<?php echo $row['diet'] ?>">
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                            <label for="first_name">Blood Pressure</label><br>
                            <textarea class="form-control" rows="5" cols="130" name="blood_pressure" ><?php echo $row['blood_pressure'] ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="last_name">Blood Sugar</label><br>
                            <textarea class="form-control" rows="5" cols="130" name="random_sugar" id="last_name" ><?php echo $row['random_sugar'] ?></textarea>
                        </div>


                        <div class="form-group">
                        <label for="phone_number">Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $row['address'] ?>"/>
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                        <div class="form-group">
                            <label for="last_name">Contact</label>
                            <input type="text" class="form-control" name="mobile" maxlength="10" size="10" value="<?php echo $row['mobile'] ?>"/>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                            <label for="first_name">Reference</label>
                            <input type="text" class="form-control" name="reference" value="<?php echo $row['reference'] ?>" />
                        </div>
                      </div>
                      </div><br><br><br>

                            <button type="submit" name="update_1" class="btn btn-success" formaction="basic_up.php">Update</button><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

							 <?php }
														                    } ?>

														<h2>PREVIOUS HISTORY</h2>
														<?php
													 $query1 = "SELECT * FROM patient p INNER JOIN patient_history h ON p.patient_id=h.patient_id  WHERE p.patient_name='$name' and p.patient_id IN (SELECT MAX(p.patient_id) FROM patient p WHERE p.patient_name='$name')";
														$result=mysqli_query($con, $query1) or die(mysqli_error($con));

														if(mysqli_num_rows($result) >= 1) {
														 while($row=mysqli_fetch_array($result)) { ?>

														 		<div class="row">
														 			<div class="col-lg-6">
															 <div class="form-group">
																 <label for="first_name">Patient Id</label>
																	 <input type="text" class="form-control" name="patient_id"  required = "true" value="<?php echo $row['patient_id'] ?>" readonly/>
															 </div>
															</div>
															 <div class="col-lg-6">
                          <div class="form-group">
                            <label for="first_name">Timestamp</label>
                              <input type="Timestamp" class="form-control"  name="curr_time" required = "true" readonly value="<?php echo $row['curr_time'] ?>" />
                          </div>
                        </div>
                      </div>

															 <div class="form-group">
																		<label for="first_name">Brief Previous Reports</label>
																		<textarea class="form-control" rows="5" cols="120" name="report_noting" ><?php echo $row['report_noting'] ?></textarea>
																</div>


														<div class="row">
															<div class="col-lg-6">
																<div class="form-group">
																		<label for="last_name">Treatment</label>
																		<input type="text" class="form-control" name="curr_medication" value="<?php echo $row['curr_medication'] ?>"/>
																</div>
															</div>
															<div class="col-lg-6">
																<div class="form-group">
																		<label for="first_name">Current Complain</label>
																		<input type="text" class="form-control" name="curr_complain" value="<?php echo $row['curr_complain'] ?>"/>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-6">
																<div class="form-group">
																		<label for="last_name">Chief Complain</label>
																		<input type="text" class="form-control" name="chief_complain" value="<?php echo $row['chief_complain'] ?>"/>
																</div>
															</div>
																<div class="col-lg-6">
																<div class="form-group">
																		<label for="last_name">Percentage Relief</label>
																		<input type="text" class="form-control" name="recovery" value="<?php echo $row['recovery'] ?>"/>
																</div>
															</div>
														</div><br><br><br>

	                          <button type="submit" name="update_2" class="btn btn-success" formaction="phist_up.php">Update</button><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
														<?php }
														} ?>


															<h2>CURRENT ROUTINE</h2>
															<?php
											                       $query2 = "SELECT * FROM patient p INNER JOIN present_routine r on p.patient_id=r.patient_id WHERE p.patient_name='$name' and p.patient_id IN (SELECT MAX(p.patient_id) FROM patient p WHERE patient_name='$name')";
											                        $result=mysqli_query($con, $query2) or die(mysqli_error($con));

											                        if(mysqli_num_rows($result) >= 1) {
											                         while($row=mysqli_fetch_array($result)) { ?>

																								 <div class="row">
														 			<div class="col-lg-6">
															 <div class="form-group">
																 <label for="first_name">Patient Id</label>
																	 <input type="text" class="form-control" name="patient_id"  required = "true" value="<?php echo $row['patient_id'] ?>" readonly/>
															 </div>
															</div>
															 <div class="col-lg-6">
                          <div class="form-group">
                            <label for="first_name">Timestamp</label>
                              <input type="Timestamp" class="form-control"  name="curr_time" required = "true" readonly value="<?php echo $row['curr_time'] ?>" />
                          </div>
                        </div>
                      </div>
											                        <div class="row">
																								<div class="col-lg-6">
											                            <div class="form-group">
											                                 <label for="first_name">BreakFast</label>
											                                 <input type="text" class="form-control" name="breakfast"  value="<?php echo $row['breakfast'] ?>" />
											                             </div>
																								 </div>
																								 <div class="col-lg-6">
											                             <div class="form-group">
											                                 <label for="last_name">Lunch</label>
											                                 <input type="text" class="form-control" name="lunch"  value="<?php echo $row['lunch'] ?>" />
											                             </div>
																								 </div>
																								 </div>
																								 <div class="row">
																									 <div class="col-lg-6">
											                             <div class="form-group">
											                                <label for="first_name">Evening Snacks</label>
											                                <input type="text" class="form-control" name="even_snacks"  value="<?php echo $row['even_snacks'] ?>"/>
											                            </div>
																								</div>
																								<div class="col-lg-6">
											                            <div class="form-group">
											                                <label for="last_name">Dinner</label>
											                                <input type="text" class="form-control" name="dinner"  value="<?php echo $row['dinner'] ?>"/>
											                            </div>
																								</div>
											                         </div>
											                         <div class="row">
																								 <div class="col-lg-6">
											                            <div class="form-group">
											                                 <label for="first_name">Early Morning Diet</label>
											                                 <input type="text" class="form-control" name="early_morn_diet"  value="<?php echo $row['early_morn_diet'] ?>" />
											                             </div>
																								 </div>
																								 <div class="col-lg-6">
											                             <div class="form-group">
											                                 <label for="last_name">Habits</label>
											                                 <input type="text" class="form-control" name="habits"  value="<?php echo $row['habits'] ?>"/>
											                             </div>
																								 </div>
											                         </div>
											                         <div class="row">
																								 <div class="col-lg-6">
											                            <div class="form-group">
											                                 <label for="first_name">Activities/Exercise</label>
											                                 <input type="text" class="form-control" name="phy_act"  value="<?php echo $row['phy_act'] ?>" />
											                             </div>
																								 </div>
																								 <div class="col-lg-6">
											                             <div class="form-group">
											                                 <label for="last_name">Stress</label>
											                                 <input type="text" class="form-control" name="Stress" value="<?php echo $row['Stress'] ?>"/>
											                             </div>
																								 </div>
											                         </div>
											          		<?php }
															} ?>

																<button type="submit" name="update_3" class="btn btn-success" formaction="routine_up.php">Update</button><br><br><br><br><br><br><br>

																<h2>AFTER REPORT DETAILS</h2>
																<?php
						                        $query3 = "SELECT * FROM patient p INNER JOIN after_treatment a on p.patient_id=a.patient_id WHERE p.patient_name='$name' and p.patient_id IN (SELECT MAX(p.patient_id) FROM patient p WHERE patient_name='$name')";
						                         $result=mysqli_query($con, $query3) or die(mysqli_error($con));

						                         if(mysqli_num_rows($result) >= 1) {
						                          while($row=mysqli_fetch_array($result)) { ?>

						                          <!--<div class="form-row">-->
																			<div class="row">
														 			<div class="col-lg-6">
															 <div class="form-group">
																 <label for="first_name">Patient Id</label>
																	 <input type="text" class="form-control" name="patient_id"  required = "true" value="<?php echo $row['patient_id'] ?>" readonly/>
															 </div>
															</div>
															 <div class="col-lg-6">
                          <div class="form-group">
                            <label for="first_name">Timestamp</label>
                              <input type="Timestamp" class="form-control"  name="curr_time" required = "true" readonly value="<?php echo $row['curr_time'] ?>" />
                          </div>
                        </div>
                      </div>
						                             <div class="form-group">
						                                 <label for="first_name">Treatment</label>
						                                 <textarea rows="5" cols="120" class="form-control" name="treatment" ><?php echo $row['treatment'] ?></textarea>
						                             </div>
						                             <div class="form-group">
						                                 <label for="last_name">Medicine List</label>
						                                 <textarea rows="5" cols="120" class="form-control" name="medicine_list" ><?php echo $row['medicine_list'] ?></textarea>
						                             </div>
						                             <div class="form-group">
						                                 <label for="last_name">Dosage</label>
						                                 <textarea rows="5" cols="120" class="form-control" name="dosage" ><?php echo $row['dosage'] ?></textarea>
						                             </div>
						                       <!--  </div>
						                         <div class="form-row"> -->
						                             <div class="form-group">
						                                  <label for="first_name">Instructions</label>
						                                  <textarea rows="5" cols="120" class="form-control" name="instructions" ><?php echo $row['instructions'] ?></textarea>
						                              </div>
						                              <div class="form-group">
						                                  <label for="last_name">Treatment Days</label>
						                                  <textarea rows="5" cols="120" class="form-control" name="treatment_days" ><?php echo $row['treatment_days'] ?></textarea>
						                              </div><br><br><br>
						                       	<?php }
																} ?>

																	<button type="submit" name="update_4" class="btn btn-success" formaction="after_up.php">Update</button><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

																	<h2>EXAMINATION DETAILS</h2>
																	<?php
				                       $query6 = "SELECT * FROM patient p INNER JOIN examin_noting e on p.patient_id=e.patient_id WHERE p.patient_name='$name' and p.patient_id IN (SELECT MAX(p.patient_id) FROM patient p WHERE patient_name='$name')";
				                        $result=mysqli_query($con, $query6) or die(mysqli_error($con));

				                        if(mysqli_num_rows($result) >= 1) {
				                         while($row=mysqli_fetch_array($result)) { ?>


																	 <div class="row">
														 			<div class="col-lg-6">
															 <div class="form-group">
																 <label for="first_name">Patient Id</label>
																	 <input type="text" class="form-control" name="patient_id"  required = "true" value="<?php echo $row['patient_id'] ?>" readonly/>
															 </div>
															</div>
															 <div class="col-lg-6">
                          <div class="form-group">
                            <label for="first_name">Timestamp</label>
                              <input type="Timestamp" class="form-control"  name="curr_time" required = "true" readonly value="<?php echo $row['curr_time'] ?>" />
                          </div>
                        </div>
                      </div>
				                            <div class="form-group">
				                                 <label for="first_name">Bowels</label>
				                                 <textarea rows="5" cols="120" class="form-control" name="bowels" ><?php echo $row['bowels'] ?></textarea>
				                             </div>
				                             <div class="form-group">
				                                 <label for="last_name">Urine</label>
				                                 <textarea class="form-control" rows="5" cols="120" name="urine" ><?php echo $row['urine'] ?></textarea>
				                             </div>
				                             <div class="form-group">
				                                <label for="last_name">Tongue</label>
				                                <textarea class="form-control" rows="5" cols="120" name="tongue" ><?php echo $row['tongue'] ?></textarea>
				                            </div>


				                            <div class="form-group">
				                                 <label for="first_name">Appetite</label>
				                                 <textarea class="form-control" name="appetite" rows="5" cols="120"><?php echo $row['appetite'] ?></textarea>
				                             </div>
				                             <div class="form-group">
				                                 <label for="last_name">Skin</label>
				                                 <textarea class="form-control" name="skin" rows="5" cols="120"><?php echo $row['skin'] ?></textarea>
				                             </div>


				                            <div class="form-group">
				                                 <label for="first_name">Other</label>
				                                 <textarea class="form-control" name="other" rows="5" cols="120"><?php echo $row['other'] ?></textarea>
				                             </div>
				                             <div class="form-group">
				                                 <label for="last_name">Pulse Rating</label>
				                                 <textarea class="form-control" name="pulse" rows="5" cols="120" ><?php echo $row['pulse'] ?></textarea>
				                             </div><br><br><br>

																			<?php }
																	} ?>

																		<button type="submit" name="update_5" class="btn btn-success" formaction="exam_up.php">Update</button><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

																		<h2>PANCHKARMA ADVISE</h2>
																		<?php
							                        $query4 = "SELECT * FROM patient p INNER JOIN panchkarma_advise x on p.patient_id=x.patient_id WHERE p.patient_name='$name' and p.patient_id IN (SELECT MAX(p.patient_id) FROM patient p WHERE patient_name='$name')";
							                         $result=mysqli_query($con, $query4) or die(mysqli_error($con));

							                         if(mysqli_num_rows($result) >= 1) {
							                          while($row=mysqli_fetch_array($result)) { ?>

																					<div class="row">
														 			<div class="col-lg-6">
															 <div class="form-group">
																 <label for="first_name">Patient Id</label>
																	 <input type="text" class="form-control" name="patient_id"  required = "true" value="<?php echo $row['patient_id'] ?>" readonly/>
															 </div>
															</div>
															 <div class="col-lg-6">
                          <div class="form-group">
                            <label for="first_name">Timestamp</label>
                              <input type="Timestamp" class="form-control"  name="curr_time" required = "true" readonly value="<?php echo $row['curr_time'] ?>" />
                          </div>
                        </div>
                      </div>
																					<div class="form-group">
													 										<label for="first_name">Diet Advise</label>
													 										<textarea rows="5" cols="120" class="form-control" name="diet_advise"><?php echo $row['diet_advise'] ?></textarea>
													 								</div>

																					 <div class="form-group">
																							<label for="last_name">To Eat List</label>
																							<textarea rows="5" cols="120" class="form-control" name="to_eat_list"><?php echo $row['to_eat_list'] ?></textarea>
																					</div>
																					<div class="form-group">
																						 <label for="last_name">Not To Eat List</label>
																						 <textarea rows="5" cols="120" class="form-control" name="not_to_eat_list" ><?php echo $row['not_to_eat_list'] ?></textarea>
																				 </div>
																				 <div class="form-group">
																							<label for="first_name">Home Remedies</label>
																							<textarea rows="5" cols="120" class="form-control" name="home_remedies" ><?php echo $row['home_remedies'] ?></textarea>
																					</div>
							                          <div class="row">
																					<div class="col-lg-6">
							                              <div class="form-group">
							                                 <label for="last_name">Next Appoint</label>
							                                 <input type="date" class="form-control" name="next_appoint" value="<?php echo $row['next_appoint'] ?>" />
							                             </div>
																				 </div>
																				 <div class="col-lg-6">
																					 <div class="form-group">
							                                  <label for="first_name">Consultance Charge</label>
							                                  <input type="text" class="form-control" name="consult_charge" id="first_name" value="<?php echo $row['consult_charge'] ?>" />
							                              </div>
																					</div>
							                          </div>

							                          <div class="row">
																					<div class="col-lg-6">
							                              <div class="form-group">
							                                 <label for="last_name">Medicine Charge</label>
							                                 <input type="text" class="form-control" name="medicine_charge" value="<?php echo $row['medicine_charge'] ?>" />
							                             </div>
																				 </div>
																				 <div class="col-lg-6">
							                             <div class="form-group">
							                                <label for="last_name">Panchkarma Charge</label>
							                                <input type="text" class="form-control" name="panchkarma_charge" value="<?php echo $row['panchkarma_charge'] ?>"/>
							                            </div>
																				</div>
							                          </div>

							                             <div class="form-group">
							                                  <label for="first_name">Medicine Certificate Format</label>
							                                  <textarea rows="5" cols="120" class="form-control" name="med_certi_format" ><?php echo $row['med_certi_format'] ?></textarea>
							                              </div>

							                              <div class="form-group">
							                                 <label for="last_name">Investigation Report Format</label>
							                                 <textarea rows="5" cols="120" class="form-control" name="invest_ref_format" ><?php echo $row['invest_ref_format'] ?></textarea>
							                             </div>

																				<?php }
																		} ?>

																			<button type="submit" name="update_6" class="btn btn-success" formaction="panchka_up.php">Update</button><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

																			<h2>REPORT DETAILS</h2>
																			<?php
						                        $query5 = "SELECT * FROM patient p INNER JOIN reports d on p.patient_id=d.patient_id WHERE p.patient_name='$name' and p.patient_id IN (SELECT MAX(p.patient_id) FROM patient p WHERE patient_name='$name')";
						                         $result=mysqli_query($con, $query5) or die(mysqli_error($con));

						                         if(mysqli_num_rows($result) >= 1) {
						                          while($row=mysqli_fetch_array($result)) { ?>

																				<div class="row">
														 			<div class="col-lg-6">
															 <div class="form-group">
																 <label for="first_name">Patient Id</label>
																	 <input type="text" class="form-control" name="patient_id"  required = "true" value="<?php echo $row['patient_id'] ?>" readonly/>
															 </div>
															</div>
															 <div class="col-lg-6">
                          <div class="form-group">
                            <label for="first_name">Timestamp</label>
                              <input type="Timestamp" class="form-control"  name="curr_time" required = "true" readonly value="<?php echo $row['curr_time'] ?>" />
                          </div>
                        </div>
                      </div>
						                             <div class="form-group">
						                                  <label for="first_name">Monthly Reports</label>
						                                  <textarea rows="5" cols="120" class="form-control" name="mon_rep" ><?php echo $row['mon_rep'] ?></textarea>
						                              </div>
																			 <div class="row">
																				 <div class="col-lg-6">
						                              <div class="form-group">
						                                 <label for="last_name">Number Of Visits</label>
						                                 <input type="text" class="form-control" name="no_of_visits" value="<?php echo $row['no_of_visits'] ?>" />
						                             </div>
																			 </div>
																			 <div class="col-lg-6">
						                             <div class="form-group">
						                                 <label for="first_name">Charge Collected</label>
						                                 <input type="text" class="form-control" name="charge_collect" value="<?php echo $row['charge_collect'] ?>"/>
						                             </div>
																			 </div>
																		 </div>
						                             <div class="form-group">
						                                <label for="last_name">Medication</label>
						                                <textarea rows="5" cols="120" class="form-control" name="medication"><?php echo $row['medication'] ?></textarea>
						                            </div>

						                          <div class="row">
																				<div class="col-lg-6">
						                             <div class="form-group">
						                                  <label for="first_name">Relief Percentage</label>
						                                  <input type="text" class="form-control" name="relief_percent" value="<?php echo $row['relief_percent'] ?>"/>
						                              </div>
																				</div>
																					<div class="col-lg-6">
						                              <div class="form-group">
						                                 <label for="last_name">New/Existing Case Number</label>
						                                 <input type="text" class="form-control" name="new_follow_case_no" value="<?php echo $row['new_follow_case_no'] ?>"/>
						                             </div>
																			 </div>
																			 </div>
						                             <div class="form-group">
						                                 <label for="first_name">Purchase Report</label>
						                                 <textarea rows="5" cols="120" class="form-control" name="purchase_report"><?php echo $row['purchase_report'] ?></textarea>
						                             </div>

						                             <div class="form-group">
						                                <label for="last_name">No. Of Appointment</label>
						                                <input type="text" class="form-control" name="no_of_appoint" value="<?php echo $row['no_of_appoint'] ?>" >
						                            </div>

													<div class="form-group">
																	<label for="last_name">Image:</label><br><br>
																	<?php
                				$query = "SELECT name FROM tbl_images t inner join patient p on p.patient_id=t.id where patient_name='$name'";
                	$result = mysqli_query($con, $query);
                while($row = mysqli_fetch_array($result))
                {
                     echo '

                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" class="img-thumnail" />

                     ';
                }
                ?>
							</div>
																					<?php }
																			} ?>
																			<br><br>
																				<button type="submit" name="update_7" class="btn btn-success" formaction="report_up.php">Update</button><br><br>


                        </form>

            </div>
        </div>
    </body>
</html>
<?php
} ?>
							                   