<?php
include "header1.php";
include "config.php";
$id=$_SESSION["a2"];

$s= "SELECT* from account where accountno='$id'"; 
 
$rs=mysqli_query($con,$s);
$b=0;
while($r=mysqli_fetch_array($rs))
{
	$b=1;
	$id=$r[0];
	$name=$r[1];
	$father=$r[3];
	$mother=$r[4];
	$dob=$r[5];
	$contact=$r[6];
	$adhar=$r[7];
	$address=$r[8];
	$pic=$r[9];
}

if($b==1)
{
	echo "<br><br><br><br>";
	echo"<table  align=center cellpadding=10 cellspacing=10>";
    echo "<tr><td align=center colspan=2 > <img src='$pic'></a>" ;
	echo "<tr><th>Account no<td>" .$id;
		echo "<tr><th>Name<td>" .$name;
			echo "<tr><th>Father<td>" .$father;
				echo "<tr><th>Mother<td>" .$mother;
				echo "<tr><th>Dob<td>" .$dob;
					
						echo "<tr><th>Contact<td>" .$contact;	
						echo "<tr><th>Adhar<td>" .$adhar;
						echo "<tr><th>Address<td>" .$address;	
								echo "</table>";
}
mysqli_close($con);





?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		

		h1{
			color: red;
			transform: translate(0px,400px);
		}
	</style>
</head>
<body>

	<center>
		<form action="page_user_home.php" method="post">
			
		</form>
	
</body>
</html>