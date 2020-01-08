<?php
   include("config.php");
   session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {

   global $db ;
   $message="";
   $myusername = mysqli_real_escape_string($db,$_POST['username']);
   $mypassword = mysqli_real_escape_string($db,md5($_POST['password'])); 
   $email = mysqli_real_escape_string($db, $_REQUEST['email']);

   $sql = "INSERT INTO user (username, passcode , email) VALUES ('$myusername', '$mypassword' , '$email')";
 

if(mysqli_query($db, $sql)){
   $_SESSION['login_user'] = $myusername;
    $message= "لقد تم تسجيل المستخدم بنجاح";
    header("refresh:2;url=checklist.php");
} else{
    $message = "اسم المستخدم موجود ، الرجاء اختيار اسم مستخدم آخر";

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
                        <h3 style="text-align: center;">تسجيل  مستخدم جديد</h3>
               <form class = "form-group" action = "" method = "post">
			   
                  <label>اسم المستخدم :</label> <input class = " form-control" type = "text" name = "username" placeholder="اسم المستخدم" pattern="^\S{3,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'يجب ألا يقل اسم المستخدم عن 3 حروف أو أرقام' : ''); " required /><br/> 
                  <label>كلمة المرور  :</label>  <input id="password" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'يجب ألا تقل كلمة المرور عن 6 أرقام أو أحرف' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="******" class=" form-control" required><br/>
                  <label>تأكيد كلمة المرور  :</label>  <input id="password_two" name="password_two" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'يرجى إدخال كلمة مرور مطابقة' : '');" placeholder="******" class = " form-control "required><br/>
                  <label>البريد الالكتروني :</label> <input type = "text" name = "email" placeholder="Example@domain.com" pattern="[^@\s]+@[^@\s]+\.[^@\s]+"  onchange="this.setCustomValidity(this.validity.patternMismatch ? 'يرجى إدخال بريد الكتروني صحيح' : '');" class = " form-control" /><br/><br/>
                 
                  <input type = "submit" class="btnSubmit" value = "حفظ "/><br/>

               </form>
               <div class="error-message"><h6 style="text-align: center;"><font color="red"><?php if(isset($message)) { echo  $message ;} ?></font></h6></div>	        
		</div>	
				</div>	

						</div>	
   </body>
</html>