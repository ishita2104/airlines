<?php
	include "connection.php";
	include "navbar.php";

?>


<!DOCTYPE html>
<html>
	<head>
		<title>
			BOOKING PAGE
		</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<style type="text/css">
			section
			{
				background-color: grey;
				height: 600px;
   				 width: 1390px;
				margin: -20px;
			}
		</style>
	</head>
	<body>
	<section>
			<h1 style="font-size: 30px;color: orange;padding-top: 15px;">&ensp;  USER PAYMENT FORM</h1>
					<form name="payment.php" action="" method="post">
						
	<table style="width:40%">
		<tr>
			<td>
			&ensp; &ensp; &ensp; &ensp;  &ensp;  &ensp;PAYMENT TYPE:
							<select name="type">
								<option selected hidden>SELECT OPTION</option>
								<option value="credit">Credit</option>
								<option value="debit">Debit</option>
							</select>
						</td>
		
			<br>
			<tr>
				<td>
					<br>&ensp; &ensp; &ensp; &ensp;  &ensp;  &ensp; PAYMENT AMOUNT:
				<input type="text"  name="amt" required="">
			</td>
		</tr>
		<tr>
			<td>
				<br>&ensp; &ensp; &ensp; &ensp;  &ensp; &ensp;  CARD NUMBER:
				<input type="text"  name="card_no" required="">
			</td>
		</tr>
		<tr>
			<td>
				<br>&ensp; &ensp; &ensp; &ensp;  &ensp;  &ensp;EXPIRY DATE:
					<input type="date" name="exp_date" required="" >
			</td>
		</tr>
	</tr>
				
	</table>		
					
	<br><br><br>
	&ensp; &ensp; &ensp; &ensp;  &ensp;  &ensp;<input class=" btn btn-default" type="submit" name="submit" value="DONE" style="color: black; width: 70px; height: 30px">
</form>
		</section>
		<?php 
		if (isset($_POST['submit'])) 
		{
			$count=0;
			$sql="SELECT card_no from payment";
			$res=mysqli_query($db,$sql);
			while ($row=mysqli_fetch_assoc($res)) 
			{
				if($row['card_no']==$_POST['card_no'])
				{
					$count=$count+1;
				}
			}
			if($count==0)
			{
				mysqli_query($db,"INSERT INTO `payment` VALUES ('$_POST[type]','$_POST[amt]','$_POST[card_no]','$_POST[exp_date]');");	

				?>
					<script	type="text/javascript">
						alert("PAYMENT SUCCESSFUL");
						window.location="successful.php"
					</script>

				<?php
			}
			else
			{
				?>
					<script	type="text/javascript">
						alert("INCORRECT CARD NUMBER");
					</script>

				<?php
			}
		}

	?>

</body>
