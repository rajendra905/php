<?php

include "config.php";
if (isset($_POST['submit'])) {
$name=$_POST['t1'];
$password=$_POST['t2'];
$Contact=$_POST['t4'];


$s="select* from admin " ;
$rs=mysqli_query($con,$s);
$b=0;
while($r=mysqli_fetch_array($rs))
{
	$b=1;
	$newid=$r[0];
	
	
}
if($b==0)
{
	$newid=61100;
	
}
else
{
	$newid=$newid+1;
	
}
$f=$_FILES['file']['name'];

$t= move_uploaded_file($_FILES['file']['tmp_name'],$f);
$ss="INSERT into  admin values($newid,'$name','$password','$Contact','$f')";
$rss=mysqli_query($con,$ss);

header("location:header.php");
mysqli_close($con);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>

	<style type="text/css">
	table{
		
		border:1px solid;

		background-color: #eee;

	}

	
	
	td
	{
		border:0px;
		padding: 10px;
	}
	tr
	{
		border-bottom: 1px solid;
		background-color: #ccc;
	}
	img
	{
		margin-top: 50px;
		width: 50px;
		height: 50px;
		transform: translate(0px,30px);
		border-radius: 50%;

	}	
	</style>
</head>
<body>

	<center>
	<form method="post" action="page_signup.php" enctype="multipart/form-data">
		<img src="var.png">
		<table >
			<tr><td colspan="2" align="center"><h2>Sign up</h2>
				<tr>
						<td>Name
				<tr>	<td>	
							<input type="text" name="t1" required>
				<tr>	
						<td>Password
				<tr>	
						<td><input type="password" name="t2">

				<tr>
					<td>Contact no.
					<tr><td><input type="text" name="t4">
				<tr>
						<td>
							<input type="file" name="file">	
						
				<tr>
						<td colspan="2" align="center">
							<input type="submit" name="submit" value="submit">
				<tr>	<td>
							<a href="login.php">login</a>
		</table>

	</form>
</fieldset>
</body>
</html>
