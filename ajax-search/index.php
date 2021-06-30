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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />

<title>Patient Search</title>

<style type="text/css">
    /*body{
        font-family: Arail, sans-serif;
    }
     Formatting search box */
    .search-box{
      position: relative;
      /*  width: 300px;

        display: inline-block;
        font-size: 14px;  */
    }
    .search-box input[type="text"]{
   /* border: 1px solid #CCCCCC;
      height: 32px;
        padding: 5px 10px;

        font-size: 14px;       */
    }
    .result{
      position: absolute;
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
       margin: 0;
       height: 35px;
        padding: 7px 10px;
        border: 1.7px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });

    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>


  </head>
  <body>
    <div class="s006">
      <form action="../search_form/serind.php" method="POST">
        <fieldset>
          <legend>Who are you looking for?</legend>
          <div class="inner-form">
            <div class="input-field">
              <div class="search-box">
               <button class="btn-search" type="submit" name="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                </svg>
              </button>

           <!--   <div class="search-box"> -->
            <input id="search" class="form-control" type="text" autocomplete="off" name="patient_name" placeholder="Search Patient.." />
              <div class="result"></div>

    </div>
            </div>
            </div>

          <div class="suggestion-wrap">

          </div>
        </fieldset>
      </form>
    </div>
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
