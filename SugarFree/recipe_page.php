<html><head><meta charset="utf-8">
<title> Eat Right</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
// <link rel="stylesheet" type="text/css" href="style.css">
  //  include("new1.php");
  include("config.php");
//var_dump(' WE ARE HERE ');
// var_dump($db);
global $db ;


 $sql = "SELECT title FROM recipes WHERE category = 'appetizers' ";

 $result = mysqli_query($db, $sql);

 if (mysqli_num_rows($result) > 0) {
  // output data of each row
   echo "<table>";
   while($row = mysqli_fetch_assoc($result)) {
 echo"<tr>";
      echo "<h1>TITLE: " . $row["title"]."</h1> <br>";
       // var_dump('عووووو');
   echo"</tr>";

 }
 echo"</table>";
 }


//if($_POST['like']) {
  //$sql = "UPDATE table set `likes` = `likes`+1 where `product_id` = '1'";
  //$result=mysql_query($sql);
  //}
 //?>

//<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
//<input type = "submit" value = "like" name='like'/>
//</form>