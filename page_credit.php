<?php
include "config.php";
include "header.php";



if(isset($_POST['submit']))
{
	$a=$_POST['t1'];
	$bla=$_POST['t2'];
	$q5="select* from bankblance" ;
$rs5=mysqli_query($con,$q5);
$b5=0;
while($r5=mysqli_fetch_array($rs5))
{
	$b5=1;
	$newid=$r5[0];
	
	
}
if($b5==0)
{
	$newid=1001;
	
}
else
{
	$newid=$newid+1;
	
}
$_SESSION['trid']=$newid;

$s="SELECT* from account where accountno=$a";
$rs=mysqli_query($con,$s);
$b=0;
while($r=mysqli_fetch_array($rs))
{
	$b=1;
	$blance=$r[10];
}


	if($b==0)
	{
		echo "<script>alert('invalid Account number')</script>";
	}
	else
	{
		$new_blance=$blance+$bla;
		$user_id=$_POST['t1'];
		$paymentt=$_POST['t2'];
		$ddate=date('d/m/y');
		$ttime=date('h:m:s');
		$admin= $_SESSION["a2"];
	   $q2 = "update account set blance =$new_blance where accountno=$a";
	  	mysqli_query($con,$q2);
	  	$q3="INSERT INTO `bankblance`(`trid`,`admin_id`, `user_id`, `old_blance`, `Payment`,`bstatus`, `new_blance`, `bdate`, `btime`) VALUES ($newid,'$admin','$user_id','$blance','$paymentt','credit','$new_blance','$ddate','$ttime')";
	  		mysqli_query($con,$q3);
	  		echo  "<script>alert('success full credit ammount')</script>";

	}

mysqli_close($con);

}




?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center><br><br><br><form method="post" action="page_credit.php">
		<table cellpadding="10" bgcolor="#3cb">
			<tr><th  colspan="2" align="center">CREDIT
			<tr>
				<td>Account no.
				<td>	<input type="text" name="t1">
			<tr><td>Payment
				<td  ><input type="text" name="t2">
			<tr>		<td colspan="2" align="center"> <input type="submit" name="submit" value="submit">

		</table>
	</form>

</body>
</html>