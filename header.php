<?php
 session_start();
 if(!isset($_SESSION['a2']))
 {
 	header("location:page_logout.php");
 }

$id=$_SESSION["a2"];
  $pic= $_SESSION["b2"];
  echo $id;
    
?>



<style type="text/css">
	
	a{
		text-decoration: none;
		font-size: 20px;
		font-family: sans-serif;
		display: block;
		color: green;

	}
	img{
		width: 60px;
		height: 60px;
		border-radius: 50%;

	}	
</style>


<table width="100%" bgcolor="grey" height="10%" class="icon">


	<tr><td><?php echo "<img src=$pic  >"?>

		<td><a href="page_home.php">HOME</a>
		<td><a href="page_open.php">OPEN a/c.</a>
		<td><a href="page_search_account.php">Search a/c.</a>
		<td><a href="page_credit.php">Credit</a>
			<td><a href="page_debit.php">Debit</a>
				<td><a href="page_transfer.php">Transfer</a>
					<td><a href="page_logout.php">logout</a>
						
	</table>
