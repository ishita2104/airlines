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
			<h1 style="font-size: 30px;color: orange;padding-top: 15px;">&ensp;  USER BOOKING FORM</h1>
					<form name="booking" action="" method="post">
						&ensp; &ensp; &ensp; &ensp;  &ensp;  &ensp;USERNAME:<input type="text" name="username" value="" ><br>
	<table style="width:60%">
		<tr>
			<td>
			&ensp; &ensp; &ensp; &ensp;  &ensp;  &ensp;FROM:
							<select name="src">
								<option selected hidden>SELECT option</option>
								<option value="Allahabad">Allahabad</option>
								<option value="Bangalore">Bangalore</option>
								<option value="Chennai">Chennai</option>
								<option value="Delhi">Delhi</option>
								<option value="Goa">Goa</option>
								<option value="Pune">Pune</option>
								<option value="Mumbai">Mumbai</option>

							</select>
						</td>
			<td>
		TO:
							<select name="desti">
								<option selected hidden>SELECT option</option>
								<option value="Allahabad">Allahabad</option>
								<option value="Bangalore">Bangalore</option>
								<option value="Chennai">Chennai</option>
								<option value="Delhi">Delhi</option>
								<option value="Goa">Goa</option>
								<option value="Pune">Pune</option>
								<option value="Mumbai">Mumbai</option>

							</select>
						</td>
			</tr>
			<br>
			<tr>
				<td>
					<br>&ensp; &ensp; &ensp; &ensp;  &ensp;  &ensp; DATE:
				<input type="date"  name="date">
			</td>
		</tr>
		<tr>
			<td>
				<br>&ensp; &ensp; &ensp; &ensp;  &ensp; &ensp;  NO. OF PASSENGERS
				<input type="text"  name="no_pass">
			</td>
		</tr>
					
	</table>
	<br>&ensp; &ensp; &ensp; &ensp;  &ensp;  &ensp;CLASS:
					<input type="radio" name="class" value="Business" >
					BUSINESS	<br>			
					&ensp; &ensp; &ensp;&ensp; &ensp; &ensp;&ensp;&ensp;&ensp; &ensp;  &ensp;  &ensp;<input type="radio" name="class" value="Economy">
					ECONOMY

					<br><br>&ensp; &ensp; &ensp; &ensp;  &ensp;  &ensp;FARE:
					<input type="text" name="fare" value="" >
						<br>			
	
					
	<br><br><br>
	&ensp; &ensp; &ensp; &ensp;  &ensp;  &ensp;<input class=" btn btn-default" type="submit" name="submit" value="BOOK" style="color: black; width: 70px; height: 30px">
</form>
		</section>
			<?php

		 if(isset($_POST['submit']))
		 {
		 	$count=0;
		 	$res=mysqli_query($db,"SELECT * FROM `flight` WHERE src='$_POST[src]' and desti='$_POST[desti]';");
		 	$count=mysqli_num_rows($res);

		 	if($count!=0)
		 	{
		 		mysqli_query($db,"INSERT INTO `booking` VALUES ('$_POST[username]','$_POST[src]','$_POST[desti]','$_POST[date]','$_POST[no_pass]','$_POST[class]','$_POST[fare]');");
		 		?>
		 		<script type="text/javascript">
		 			alert("BOOKING SUCCESSFUL");
		 			window.location="history.php"
		 		</script>
		 		
		 		<?php
		 	}
		 	else
		 	{
		 		?>
		 		<script type="text/javascript">
		 			alert("0 RESULTS MATCHED PLEASE TRY AGAIN LATER");
		 		</script>
		 		
		 		<?php
		 	}
		 }
		 
	 ?>

	</body>
</html>
