<?php
include "header.php";
include "config.php";
if(isset($_POST['submit']))
{
	$a=$_POST['t1'];
	$aa=$_POST['t11'];
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
$unic=$newid;
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
		$new_blance=$blance-$bla;
		$ddate=date('d/m/y');
		$ttime=date('h:m:s');
		$admin= $_SESSION["a2"];

	   $q2 = "update account set blance =$new_blance where accountno=$a";
	   
	   mysqli_query($con,$q2);
	   	$q3="INSERT INTO `bankblance`(`trid`,`admin_id`, `user_id`, `old_blance`, `Payment`,`bstatus`, `new_blance`, `bdate`, `btime`) VALUES ($unic,'$admin','$a','$blance','$bla','debit','$new_blance','$ddate','$ttime')";
	  		mysqli_query($con,$q3);
	  		


	}
	$q55="select* from bankblance" ;
$rs55=mysqli_query($con,$q55);
$b55=0;
while($r55=mysqli_fetch_array($rs55))
{
	$b55=1;
	$newid_=$r55[0];
	
	
}
if($b55==0)
{
	$newid_=1001;
	
}
else
{
	$newid_=$newid_+1;
	
}
	$ss="SELECT* from account where accountno=$aa";
$rss=mysqli_query($con,$ss);
$bb=0;
while($rr=mysqli_fetch_array($rss))
{
	$bb=1;
	$bblance=$rr[10];
}


	if($bb==0)
	{
		echo "<script>alert('invalid Account number')</script>";
	}
	else
	{
		$nnew_blance=$bblance+$bla;
		$ddate=date('d/m/y');
		$ttime=date('h:m:s');
		$admin= $_SESSION["a2"];

	   $qq2 = "update account set blance =$nnew_blance where accountno=$aa";
	   
	   mysqli_query($con,$qq2);
	    	$q33="INSERT INTO `bankblance`(`trid`,`admin_id`, `user_id`, `old_blance`, `Payment`,`bstatus`, `new_blance`, `bdate`, `btime`) VALUES ($newid_,'$admin','$aa','$bblance','$bla','credit','$nnew_blance','$ddate','$ttime')";
	  		mysqli_query($con,$q33);
	  		
	  	

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
<center><br><br><br><form method="post" action="page_transfer.php">
		<table cellpadding="10" bgcolor="#3cb">
			<tr><th  colspan="2" align="center">DEBIT
			<tr>
				<td>Account no.
				<td>	<input type="text" name="t1">
					<tr>
				<td>Tr A/C
				<td>	<input type="text" name="t11">
			<tr><td>Payment
				<td  ><input type="text" name="t2">
			<tr>		<td colspan="2" align="center"> <input type="submit" name="submit" value="submit">

		</table>
	</form>

</body>
</html>