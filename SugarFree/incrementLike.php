<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome </title>
	   <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
   </head>
   



<br><br>
<div align="centere">
<?php
$id=$_GET['recpid'];
$cate=$_GET['cate'];

$conn = mysqli_connect("localhost","root","","food");
//$result = mysqli_query($conn,"SELECT  * FROM recipe WHERE id='$id'");
$sql ="UPDATE recipelike rk join user u ON rk.userid = u.id SET  ".$cate."=".$cate."+1 , rk.likesum = rk.likesum + 1
WHERE u.username = '".$login_session."'";


if(mysqli_query($conn, $sql)){
    echo "Records were updated successfully.";

	header( "refresh:2;url=welcome.php" );

} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
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