<html">
<?php
   include('header.php');
   ?>
   <head>
      <title>الوصفات </title>
	   <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
   </head>
   <body>
 <?php
// session_start();
if(isset($_SESSION['user_name'])) {
echo $_SESSION['user_name'];

}


?></font></h1> 
    
   </body>
   </head>
<body>

<br><br>
<div align="centere">
<?php
echo "<h1>".$_GET['Recipes']."</h1>";

$conn = new mysqli("localhost","root","","food");
$sql = "SELECT  * FROM recipe WHERE category='" . $_GET['Recipes']."' LIMIT 20";
              
$result = $conn->query($sql);
// $row = mysql_fetch_assoc($result);

while($row = $result->fetch_assoc()) {
        
		//echo " <a href='http://localhost/try/RecpDetails.php?usn='".$row['title'] ."' >" . $row['title'] . "<a/> <br>";
		echo " <a href=RecpDetails.php?recpid=".$row['id']." >" . $row['title'] . "<a/> <br>";
		//  echo "<a href='RecpDetails.php?recpid='.$row['id'].'">.$row['title'].</a>"; 
    }

?>
</div>

<footer>
<hr>
<div align="center">
&copy;healthy site 2018 <div>
</footer>
</body>
</html>