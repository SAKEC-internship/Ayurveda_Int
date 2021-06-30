<?php
$con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error($con));
session_start();
if(mysqli_connect_error())
{
	echo "error";
}

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
        <title>Registeration form</title>
    </head>
    <body>

        <div class="container-fluid decor_bg" id="content">
                <div class="container">

                        <form  action="" method="POST">
                          <h2>Patient Registeration form</h2>
                          
                          <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                              <label for="first_name">Name</label>
                                <input type="text" class="form-control" name="patient_name"  required = "true"/>
                            </div>
                          </div>
                          
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="first_name">Insert your image(Max size:64 KB)</span></label>
                              
          <input class="form-control" type="file" name="image" id="image">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                      <div class="col-lg-4">
                            <div class="form-group">
                              <label for="first_name">Status</label>
                                <input type="text" class="form-control"  name="status" required = "true" >
                            </div>
                          </div>

                          <div class="col-lg-4">
                            <div class="form-group">
                              <label for="first_name">Age</label>
                                <input type="text" class="form-control" name="age" required = "true">
                            </div>
                          </div>

                          <div class="col-lg-4">
                            <div class="form-group">
                              <label for="first_name">Gender</label>
                                <input type="text" class="form-control" name="sex" required = "true">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label for="first_name">Job</label>
                                <input  type="text" class="form-control" name="job" required = "true" >
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="first_name">Weight</label>
                                <input  type="text" class="form-control" name="weight" required = "true" >
                            </div>
                          </div>
                          
                        </div>

                

                        <div class="form-group">
                        <label for="phone_number">Address</label>
                        <input type="text" class="form-control" name="address"/>
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                        <div class="form-group">
                            <label for="last_name">Contact</label>
                            <input type="text" class="form-control" name="mobile" maxlength="10" size="10" />
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                            <label for="first_name">Reference</label>
                            <input type="text" class="form-control" name="reference" />
                        </div>
                      </div>
                      </div><br><br><br>

                            <button type="submit" name="register" class="btn btn-primary" formaction="reg_script.php">Register</button>

                           </form>
                        </div>
                     </div>
                    </body>
           </html>

<script>
 $(document).ready(function(){
      $('#submit').click(function(){
           var image_name = $('#image').val();
           if(image_name == '')
           {
                alert("Please Select Image");
                return false;
           }
           else
           {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                     alert('Invalid Image File');
                     $('#image').val('');
                     return false;
                }
           }
      });
 });
 </script>