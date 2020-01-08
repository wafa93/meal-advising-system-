<?php
//    include("config.php");
   include('session.php');
// var_dump($login_id);

global $db ;

if($_SERVER["REQUEST_METHOD"] == "POST" ) {

    if (empty($_POST["sugarfree"])) {
        $sugarfree = '0';
      } else {
        $sugarfree = mysqli_real_escape_string($db,$_POST['sugarfree']);
      }

    if (empty($_POST["apple"])) {
        $apple = '0';
      } else {
        $apple = mysqli_real_escape_string($db,$_POST['apple']);
      }

    if (empty($_POST["fewcarb"])) {
        $fewcarb = '0';
      } else {
        $fewcarb = mysqli_real_escape_string($db,$_POST['fewcarb']);
      }
      
    if (empty($_POST["fluids"])) {
        $fluids = '0';
      } else {
        $fluids = mysqli_real_escape_string($db,$_POST['fluids']);
      }
      

    $likesum =$sugarfree + $apple + $fewcarb + $fluids;

   $sql = "INSERT INTO recipelike (userid ,sugarfree,apple,fluids,fewcarb ,likesum) VALUES('$login_id','$sugarfree','$apple','$fluids','$fewcarb','$likesum')";

   $result = mysqli_query($db,$sql);
   if($result){

    header("location: welcome.php");

   }
}

?>
<html>
<html dir="rtl">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="style.css">

   <title>اختيار الأطعمة</title>
    
    <style type="text/css">


 .login-form-1{
    padding: 9%;
    text-align: right;
    font-weight: bold;
    box-shadow: 0px 1px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgb(0, 0, 0);
    background: #ffffffb8;
    margin-left: auto;
    margin-right: auto;
    margin-top: 70px;
    /* margin-bottom: auto; */
}



.btnSubmit{
    font-weight: 600;
    width: 100%;
    color: #282726;
    background-color: #6ba981;
    border: none;
    border-radius: 1.5rem;
    padding: 3%;
}


      </style>
	   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      
   </head>
   
   <body bgcolor = "">
	<div class="container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                <h3 style="text-align: center;">اختر الأطعمة التي تناسب ذوقك</h3>
               <form class = "form-group" style="text-align: center;" action = "" method = "post">


               <input type="checkbox" name="sugarfree" value="1" >        <label><img src="dinner l.jpg" width="100" hight="90"></label> <br>
               <input type="checkbox" name="apple" value="1">        <label><img src="apple22.jpg" width="100" hight="90"></label> 
               <input type="checkbox" name="fluids" value="1">        <label><img src="fluids.jpg" width="100" hight="90"></label> <br>
               <input type="checkbox" name="fewcarb" value="1">        <label><img src="few carb.png" width="100" hight="90"></label> 

                  <input type = "submit" class="btnSubmit" value = " حفظ "/><br/>

               </form>
               <div class="error-message"><h6 style="text-align: center;"><font color="red"><?php if(isset($message)) { echo  $message ;} ?></font></h6></div>	

               
		</div>	
				</div>	

						</div>	


   </body>
</html>

