<?php
include "config.php";
session_start();
$id=$_SESSION['trid'];
$s="SELECT*   from bankblance  where trid=$id";
$rs=mysqli_query($con,$s);
$b=0;
while($r=mysqli_fetch_array($rs))
{
	$b=1;
	$bc=$r[8];
}
echo "rajendra".$bc;
?>