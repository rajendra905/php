<?php
session_start();
include "config.php";
if(isset($_POST["btn"]))
{
$id=$_POST["t1"];
$psd=$_POST["t2"];
$s="SELECT* from admin where a_name='$id' and a_pass='$psd'";
$rs=mysqli_query($con,$s);
$b=0;
while($r=mysqli_fetch_array($rs))
{	
	$b=1;
	$admin_id=$r[0];
	

	
	$dii=$r[4];

}

if($b==1)
{   		
	
   
    $_SESSION["a2"]=$admin_id;
   
     $_SESSION["b2"]=$dii;
    
	header("location:page_home.php");
}
else
echo "<script>alert('invalid id passord')</script>";
}

?>










<html>
	<head>
		<title></title>
		<style type="text/css">
		a{
			text-decoration: none;
			font-size:17px;
		}
	table{
		margin-top: 150px;
		border:1px solid;
		background-color: #eee;
	}

	
	
	td
	{
		border:0px;
		padding: 10px;
	}
	th
	{
		border-bottom: 1px solid;
		background-color: #ddd;
	}	
	</style>
		
	</head>
	<body    >
				<center>
		

	<form method="post" action="login.php">
	
		<table>
		<tr><td colspan="2" align="center"><h2>Login admin</h2> 	
			<tr>
				<td>user id:
			<tr>
				<td><input type="text" placeholder="user id" name="t1" >
			<tr>
				<td>password:
			<tr>
				<td><input type="password"  name="t2">
				<tr>
				
			<tr>
				<td align="center" colspan="2">
				<input type="submit" value="login" name="btn">
				<tr><td colspan="2" align="center"><a href="page_user.php">user</a>
			<tr>
				<td> 	Create a new account?<a href="page_signup.php">sign up </a>

				
		</table >
	
		
		
		</form>
		 
	
	</body>
</html>