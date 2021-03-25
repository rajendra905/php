
<?php

include "config.php";
if (isset($_POST['submit'])) {
$name=$_POST['t1'];
$password=$_POST['t2'];
$Father=$_POST['t3'];
$Mother=$_POST['t4'];
$DOB=$_POST['t5'];
$Contact=$_POST['t6'];
$Adhar=$_POST['t7'];
$Adress=$_POST['t8'];
$blance=$_POST['t9'];



$s="select* from account " ;
$rs=mysqli_query($con,$s);
$b=0;
while($r=mysqli_fetch_array($rs))
{
	$b=1;
	$newid=$r[0];
	
	
}
if($b==0)
{
	$newid=61185500;
	
}
else
{
	$newid=$newid+1;
	
}
$f=$_FILES['file']['name'];

$t= move_uploaded_file($_FILES['file']['tmp_name'],$f);
$ss="INSERT into  `account`(`accountno`, `a_name`, `a_password`, `father`, `mother`, `dob`, `contact`, `adhar`, `address`, `pic`,`blance`)  values('$newid','$name','$password','$Father','$Mother','$DOB','$Contact','$Adhar','$Adress','$f','$blance')";
$rss=mysqli_query($con,$ss);

header("location:page_open.php");
mysqli_close($con);
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.gr{
			transform: translate(20px,200px);

		}
		.gr tr {

		}
	</style>
</head>
<body>
	<?php
	include "header.php"
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
<center>
		<form method="post" action="page_open.php" enctype="multipart/form-data">
			<table border="1"  class="gr" cellpadding="10px">
				<tr><th align="center" colspan="2">NEW A/C
				<tr>
					<td>NAME
						<td><input type="text" name="t1">
				<tr>
					<td>PASSWORD
						<td><input type="password" name="t2">
				<tr>
					<td>Father' Name
						<td><input type="text" name="t3">
				<tr>
					<td>Mother' Name
						<td><input type="text" name="t4">
				<tr>
					<td>DOB
						<td><input type="date" name="t5">
				<tr>
					<td>Contact no
						<td><input type="text" name="t6">
				<tr>
					<td>Adhar no
						<td><input type="text" name="t7">
				<tr>
					<td>Adress
						<td><input type="text" name="t8">
							<tr>
					<td>Opening blance
						<td><input type="text" name="t9">
				<tr>
					
						<td align="center" colspan="2"><input type="file" name="file">
							<tr><td colspan="2" align="center"><input type="submit" name="submit" value="submit">
			</table>
		</form>
	
	</body>
	</html>
	

</body>
</html>