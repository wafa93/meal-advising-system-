<?php
//  include("session.php");
//  session_start();
 
    //   $id = $_SESSION['id_user'];
      $cat1; $cat2; $cat2; $cat4;$sum;  
 
      $c1;$c2;$c3;$c4;$sum2; 
      $u1="";$u2="";$u3="";$u4="";      
      $r1=0;$r2=0;$r3=0;$r4=0; 

	  $sql = "SELECT * FROM recipelike rk join user u ON rk.userid = u.id WHERE u.id = '$login_id'";
      $result = mysqli_query($db,$sql);
	   while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		   



		$cat1=$row['sugarfree'];
		$cat2=$row['apple'];
		$cat3=$row['fluids'];
		$cat4=$row['fewcarb'];
		$sum=$row['likesum'];
		   
		}
		
		$sql2 = "SELECT * FROM recipelike rk join user u ON rk.userid = u.id WHERE u.id != '$login_id'";
		$result2 = mysqli_query($db,$sql2);
		
      while ($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
	    $sum2=$row["likesum"];
		
	    $a=$cat1+$row["sugarfree"];
		$c1=($a)/($sum+$sum2-$a);
		if($c1>=$r1)
		{
			$r1=$c1; 
			$u1=$row["userid"];  
		}
		
		$b=$cat2+$row["apple"];
		$c2=($b)/($sum+$sum2-$b);
		if($c2>=$r2)
		{
			$r2=$c2; 
	        $u2=$row["userid"];  
		}
		
		$c=$cat2+$row["fluids"];
		$c3=($c)/($sum+$sum2-$c);
		if($c3>=$r3)
		{
			$r3=$c3; 
			$u3=$row["userid"];  
		}
		
		$d=$cat4+$row["fewcarb"];
		$c4= $d/($sum+$sum2-$d);
		if($c4>=$r4)
		{
			$r4=$c4; 
			$u4=$row["userid"]; 

	    }
	 }
	
	 $cateSelect="";
	 $maxValue=max($r1,$r2,$r3,$r4);
	 if($maxValue>=0.5)
	 {
	 if($maxValue==$r1)
	 { 
	//   echo " sugarfree category<h2><br>";
	   $cateSelect="sugarfree";
	 }
 
     if($maxValue==$r2)
	 { 
	//   echo " apple category<h2><br>";
	  $cateSelect="apple";
     }
 
     if($maxValue==$r3)
	 { 
	//   echo " fluids category<h2><br>";
	  $cateSelect="fluids";
	 }
 
     if($maxValue==$r4)
	 { 
	//   echo " fewcarb category<h2><br>";
	  $cateSelect="fewcarb";
	 }
	 
	 }
	else
		echo "<h2>No Recommendation <br>";
   
    if($cateSelect!="")


	   $sql_ = "SELECT  * FROM recipe WHERE category= '$cateSelect' ";
	   $result_ = $db->query($sql_);
	   $row_ = mysqli_fetch_array($result_,MYSQLI_ASSOC); 

		  $link2 = ( "./RecpDetails.php?recpid=".$row_['id']);

   
?>


<li>
<a href='<?php echo $link2 ?>'>
<img src="img1.jpg" width="300px" hieght="50px" alt="snack menu"></a>
</li>
<!-- <html>

   
   <head>
   <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="style.css">




   </body>
</html> -->