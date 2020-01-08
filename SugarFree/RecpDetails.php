<html">

<?php
   include('header.php');
   ?>
   <head>
      <title>Recipe </title>
	   <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
   </head>
   <body>
   <?php
// session_start();
// if(isset($_SESSION['user_name'])) {
// echo $_SESSION['user_name'];

// }


?></font></h1> 
   </body>
   </head>
<body>

<div align="centere">
<?php
$id=$_GET['recpid'];
$conn = mysqli_connect("localhost","root","","food");
$result = mysqli_query($conn,"SELECT  * FROM recipe WHERE id='$id'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
	 
//<tr><td>    <h1><a href=RecpDetails.php?recpid=".$id." >like<h1><a/>
print(" <table>

<tr><td>    <h1><a href=incrementLike.php?recpid=".$id."&cate=".$row['category']." >like<h1><a/>

</tr>
           
</tr>
<td>".$row['recipe']."</td>
</tr>
<td><h1>".$row['category']."</h1></td>
</tr>

</table>");
    
} else {
    echo "0 results";
}

?>

</div>

<footer>
<hr>
<div align="center">
&copy;sugar free 2019 <div>
</footer>
</body>
</html>