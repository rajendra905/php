
<?php
include "config.php";
include  "header.php";
$b='';
if(isset($_POST['submit']))
{
	$accountno=$_POST['t1'];


$s= "SELECT* from account where accountno='$accountno'"; 
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
if($b==0)
{
	echo "<script>alert('invalid account')</script>";
}
else
{
	echo "<br><br><br><br>";
	echo"<table border=1 align=center>";
	echo "<tr><td>account no<td>" .$id;
		echo "<tr><td>name<td>" .$name;
			echo "<tr><td>father<td>" .$father;
				echo "<tr><td>mother<td>" .$mother;
				echo "<tr><td>dob<td>" .$dob;
					
						echo "<tr><td>contact<td>" .$contact;	
						echo "<tr><td>adhar<td>" .$adhar;
						echo "<tr><td>address<td>" .$address;	
								echo "</table>";
}
mysqli_close($con);

}
if($b==true)
{

}

else
{
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	

	</style>
</head>
<body>

<center><br><br><br><br>
	<form method="post" action="page_search_account.php">
		<table class="search">
			<tr >
				<td>A/C No.
					<input type="text" name="t1">
					<td><input type="submit" name="submit" value="submit">
		</table>
	</form>

</body>
</html>
<?php
}


?>