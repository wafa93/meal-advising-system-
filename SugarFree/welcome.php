<html>
   
   <head> 
   <?php
   include('header.php');
   ?>
      <title>الصفحة الرئيسية </title>
	   <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
   </head>
   
<body>

<?php


global $db ;
$cat1;$cat2;$cat3;$cat4;$sum;$fav;
$sql = mysqli_query($db,"SELECT  * FROM recipelike rk join user u ON rk.userid = u.id WHERE u.username = '".$login_session."'");
$row  = mysqli_fetch_array($sql);

if(is_array($row)){
      $cat1=$row['sugarfree'];
		$cat2=$row['apple'];
		$cat3=$row['fluids'];
		$cat4=$row['fewcarb'];
		$sum=$row['likesum'];
		
    }
   ?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  margin-left: auto;
   margin-right: auto;

}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<br>
<h1> :خالي من السكر يقترح عليك هذه الوصفات </h1>
<br>
<br>
<br>
<ul>
<li>
<table>
  <tr>
     <th>عدد المرات التي أعجبت بها</th>
    <th>نوع الطعام</th>
  </tr>
  <tr>
    <td> <?php echo ($cat1) ;?></td>
    <td>خالي من السكر</td>
  </tr>
  <tr>
  <td> <?php echo ($cat2) ;?></td>
    <td>التفاح</td>
    </tr>
    <tr>
    <td> <?php echo ($cat3) ;?></td>
      <td>القليل الكاربوهدرات</td>
    </tr>
    <tr>
    <td> <?php echo ($cat4) ;?></td>
      <td>السوائل</td>
  </tr>
  <tr>
    <td colspan="2"><?php
$cat1= exp($cat1)/ exp($sum);
$cat2= exp($cat2)/ exp($sum);
$cat3= exp($cat3)/ exp($sum);
$cat4= exp($cat4)/ exp($sum);

if(max($cat1,$cat2,$cat3,$cat4)==$cat1){
   echo "<a href='categoryRecp.php?Recipes=sugarfree'>الخالي من السكر</a>نوع الطعام المفضل لك هو <br>";
   $fav =  'sugarfree' ;}
   if(max($cat1,$cat2,$cat3,$cat4)==$cat2){
      echo "<a href='categoryRecp.php?Recipes=apple'>التفاح</a>نوع الطعام المفضل لك هو <br>";
      $fav =  'apple' ;}
      if(max($cat1,$cat2,$cat3,$cat4)==$cat3){
         echo " <a href='categoryRecp.php?Recipes=fewcarb'>القليل الكاربوهدرات</a>نوع الطعام المفضل لك هو <br>";
         $fav =  'fewcarb' ;}
         if(max($cat1,$cat2,$cat3,$cat4)==$cat4){
            echo "<a href='categoryRecp.php?Recipes=fluids'>السوائل</a>نوع الطعام المفضل لك هو <br>";
            $fav =  'fluids' ;}
            // $link1 = ("./categoryRecp.php?Recipes=".$fav); 

?></td>

  </tr>

</table>

<?php


$sql2 = "SELECT  * FROM recipe WHERE category= '$fav'ORDER BY id DESC";
$resultt = $db->query($sql2);
$row2 = mysqli_fetch_array($resultt,MYSQLI_ASSOC); 
$link1 = ( "./RecpDetails.php?recpid=".$row2['id']);


   $sql3 = "SELECT  * FROM recipe WHERE category= '$fav'LIMIT 8 ,18";
   $result3 = $db->query($sql3);
   $row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC); 
   $link3 = ( "./RecpDetails.php?recpid=".$row3['id']);


?>
      <a href='<?php echo $link1 ?>'>
               <img src="breakfast l.jpg" width="300px" hieght="50px" alt="breakfast menu"> </a>
            </li>
            
            <li>
               <a href='<?php echo $link3 ?>'>
                        <img src="lunshlogo.jpg" width="300px" hieght="50px" alt="lunch menu"> </a>
                     </li>
                     
                     <li>
                           <a href='<?php echo $link1 ?>'>
            <img src="dinner l.jpg" width="300px" hieght="50px" alt="dinner menu"></a>
</li>

<?php
include('compare.php');
?>

</ul>

<br><br><br><br><br>

<?php
   include('footer.php');
   ?>
</body>
</html>