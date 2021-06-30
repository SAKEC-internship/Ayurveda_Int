<?php
$con=mysqli_connect("localhost","root","","clinic") or die(mysqli_error($con));
session_start();
if(mysqli_connect_error())
{
  echo "error";
}

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
 if($_POST['patient_name']!=null)
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

  $bloodpres = $_POST['blood_pressure'];
  $bloodpres = mysqli_real_escape_string($con, $bloodpres);
  
  $randomsug = $_POST['random_sugar'];
  $randomsug = mysqli_real_escape_string($con, $randomsug);
  
  $diet = $_POST['diet'];
  $diet = mysqli_real_escape_string($con, $diet);
  
  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);
  
  $reference = $_POST['reference'];
  $reference = mysqli_real_escape_string($con, $reference);
  
    
    $query = "INSERT INTO patient(patient_name, mobile, status, age, sex, job, weight , blood_pressure, random_sugar, diet, address, reference)VALUES('" . $name . "','" . $phone . "','" . $status . "','" . $age . "','" . $sex . "','" . $job . "','" . $weight . "','" . $bloodpres . "','" . $randomsug . "','" . $diet . "','" . $address . "','" . $reference . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $patient_id = mysqli_insert_id($con);
    $_SESSION['patient_id'] = $patient_id;

   
   $report_noting = $_POST['report_noting'];
  $report_noting = mysqli_real_escape_string($con, $report_noting);

  $curr_medication = $_POST['curr_medication'];
  $curr_medication = mysqli_real_escape_string($con, $curr_medication);

  $curr_complain = $_POST['curr_complain'];
  $curr_complain = mysqli_real_escape_string($con, $curr_complain);

  $chief_complain = $_POST['chief_complain'];
  $chief_complain = mysqli_real_escape_string($con, $chief_complain);

  $recovery = $_POST['recovery'];
  $recovery = mysqli_real_escape_string($con, $recovery);
  
   
    $patient_id=$_SESSION['patient_id'];

    $query = "INSERT INTO patient_history(report_noting,curr_medication,curr_complain,chief_complain,recovery,patient_id)VALUES('" . $report_noting . "','" . $curr_medication . "','" . $curr_complain . "','" . $chief_complain . "','" . $recovery . "','" . $patient_id . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    

     $breakfast = $_POST['breakfast'];
  $breakfast = mysqli_real_escape_string($con, $breakfast);

  $lunch = $_POST['lunch'];
  $lunch = mysqli_real_escape_string($con, $lunch);

  $even_snacks = $_POST['even_snacks'];
  $even_snacks = mysqli_real_escape_string($con, $even_snacks);

  $dinner = $_POST['dinner'];
  $dinner = mysqli_real_escape_string($con, $dinner);

  $early_morn_diet = $_POST['early_morn_diet'];
  $early_morn_diet = mysqli_real_escape_string($con, $early_morn_diet);
  
  $habits = $_POST['habits'];
  $habits = mysqli_real_escape_string($con, $habits);
  
  $phy_act = $_POST['phy_act'];
  $phy_act = mysqli_real_escape_string($con, $phy_act);

  $stress = $_POST['Stress'];
  $stress = mysqli_real_escape_string($con, $stress);
  
    $patient_id=$_SESSION['patient_id'];
    $query = "INSERT INTO present_routine(breakfast, lunch, even_snacks, dinner, early_morn_diet, habits , phy_act, Stress,patient_id)VALUES('" . $breakfast . "','" . $lunch . "','" . $even_snacks . "','" . $dinner . "','" . $early_morn_diet . "','" . $habits . "','" . $phy_act . "','" . $stress . "','" . $patient_id . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
  

  $treatment = $_POST['treatment'];
  $treatment = mysqli_real_escape_string($con, $treatment);

  $medicine_list = $_POST['medicine_list'];
  $medicine_list = mysqli_real_escape_string($con, $medicine_list);

  $dosage = $_POST['dosage'];
  $dosage = mysqli_real_escape_string($con, $dosage);

  $instructions = $_POST['instructions'];
  $instructions = mysqli_real_escape_string($con, $instructions);

  $treatment_days = $_POST['treatment_days'];
  $treatment_days = mysqli_real_escape_string($con, $treatment_days);
  
  $patient_id=$_SESSION['patient_id'];
    
    $query = "INSERT INTO after_treatment(treatment,medicine_list,dosage,instructions,treatment_days,patient_id)VALUES('" . $treatment . "','" . $medicine_list . "','" . $dosage . "','" . $instructions . "','" . $treatment_days . "','" . $patient_id . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    


  $bowels = $_POST['bowels'];
  $bowels = mysqli_real_escape_string($con, $bowels);

  $urine = $_POST['urine'];
  $urine = mysqli_real_escape_string($con, $urine);

  $tongue = $_POST['tongue'];
  $tongue = mysqli_real_escape_string($con, $tongue);

  $appetite = $_POST['appetite'];
  $appetite = mysqli_real_escape_string($con, $appetite);

  $skin = $_POST['skin'];
  $skin = mysqli_real_escape_string($con, $skin);
  
  $other = $_POST['other'];
  $other = mysqli_real_escape_string($con, $other);
  
  $pulse = $_POST['pulse'];
  $pulse = mysqli_real_escape_string($con, $pulse);
    
    $patient_id=$_SESSION['patient_id'];
    $query = "INSERT INTO examin_noting(bowels,urine,tongue,appetite,skin,other,pulse,patient_id)VALUES('" . $bowels . "','" . $urine . "','" . $tongue . "','" . $appetite . "','" . $skin . "','" . $other . "','" . $pulse . "','" . $patient_id . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
   
    $diet_advise = $_POST['diet_advise'];
  $diet_advise = mysqli_real_escape_string($con, $diet_advise);

  $to_eat_list = $_POST['to_eat_list'];
  $to_eat_list = mysqli_real_escape_string($con, $to_eat_list);

  $not_to_eat_list = $_POST['not_to_eat_list'];
  $not_to_eat_list = mysqli_real_escape_string($con, $not_to_eat_list);

  $home_remedies = $_POST['home_remedies'];
  $home_remedies = mysqli_real_escape_string($con, $home_remedies);

  $next_appoint = $_POST['next_appoint'];
  $next_appoint = mysqli_real_escape_string($con, $next_appoint);
  
  $consult_charge = $_POST['consult_charge'];
  $consult_charge = mysqli_real_escape_string($con, $consult_charge);
  
  $medicine_charge = $_POST['medicine_charge'];
  $medicine_charge = mysqli_real_escape_string($con, $medicine_charge);

  $panchkarma_charge = $_POST['panchkarma_charge'];
  $panchkarma_charge = mysqli_real_escape_string($con, $panchkarma_charge);
  
  $med_certi_format = $_POST['med_certi_format'];
  $med_certi_format = mysqli_real_escape_string($con, $med_certi_format);
  
  $invest_ref_format = $_POST['invest_ref_format'];
  $invest_ref_format = mysqli_real_escape_string($con, $invest_ref_format);
  
    $patient_id=$_SESSION['patient_id'];
    $query = "INSERT INTO panchkarma_advise(diet_advise,to_eat_list,not_to_eat_list,home_remedies,next_appoint,consult_charge,medicine_charge,panchkarma_charge,med_certi_format,invest_ref_format,patient_id)VALUES('" . $diet_advise . "','" . $to_eat_list . "','" . $not_to_eat_list . "','" . $home_remedies . "','" . $next_appoint . "','" . $consult_charge . "','" . $medicine_charge . "','" . $panchkarma_charge . "','" . $med_certi_format . "','" . $invest_ref_format . "','" . $patient_id. "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    

    $mon_rep = $_POST['mon_rep'];
  $mon_rep = mysqli_real_escape_string($con, $mon_rep);

  $no_visits = $_POST['no_of_visits'];
  $no_visits = mysqli_real_escape_string($con, $no_visits);

  $char_coll = $_POST['charge_collect'];
  $char_coll = mysqli_real_escape_string($con, $char_coll);

  $medic = $_POST['medication'];
  $medic = mysqli_real_escape_string($con, $medic);

  $rel_perc = $_POST['relief_percent'];
  $rel_perc = mysqli_real_escape_string($con, $rel_perc);
  
  $case_no = $_POST['new_follow_case_no'];
  $case_no = mysqli_real_escape_string($con, $case_no);
  
  $pur_rep = $_POST['purchase_report'];
  $pur_rep = mysqli_real_escape_string($con, $pur_rep);

  $no_appoint = $_POST['no_of_appoint'];
  $no_appoint = mysqli_real_escape_string($con, $no_appoint);
  

    $patient_id=$_SESSION['patient_id'];
    $query = "INSERT INTO reports(mon_rep,no_of_visits,charge_collect,medication,relief_percent,new_follow_case_no,purchase_report,no_of_appoint,patient_id)VALUES('" . $mon_rep. "','" . $no_visits . "','" . $char_coll . "','" . $medic . "','" . $rel_perc . "','" . $case_no . "','" . $pur_rep . "','" . $no_appoint . "','" . $patient_id. "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    

 
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name,patient_id) VALUES ('$file','" . $patient_id. "')";  
      if(mysqli_query($con, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  

    header('location: ../admin.php');
  }
?>