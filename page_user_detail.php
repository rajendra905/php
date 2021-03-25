
<?php
include "config.php";
include  "header1.php";
$admin=$_SESSION['a2'];


$s= "SELECT* from bankblance where admin_id='$admin'"; 
$rs=mysqli_query($con,$s);
	echo "<br><br><br><br>";
	echo"<table align='center' border='2' cellpadding='5'>";
	echo "<tr><td>user id<td>Old balance<td>Payment<td>Status<td>New Balance<td>Date<td>Time";
while($r=mysqli_fetch_array($rs))
{

	
		echo "<tr><td>" .$r[2];
			echo "<td>" .$r[3];
				echo "<td>" .$r[4];
				echo "<td>" .$r[5];
					
						echo "<td>" .$r[6];	
						echo "<td>" .$r[7];
						echo "<td>" .$r[8];	
								echo "<br>";


	
}


	
mysqli_close($con);




?>
