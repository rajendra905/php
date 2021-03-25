<?php
session_start();
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

		<td><a href="page_user_home.php">HOME</a>
			<td><a href="page_user_credit.php">credit</a>
				<!--<td><a href="page_user_debit.php">debit</a>-->
					<td><a href="page_user_trasnfer.php">Transfer</a>
						<td><a href="page_user_detail.php">Details</a>
					<td><a href="page_logout.php">logout</a>


						
	</table>
