<?php
	include "connection.php";
	include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
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
			margin: -20px;
		}
	</style>
</head>
<body>
	
	<section>
		<div class="reg_img">
			<br>
			<div class="box4" style="height: 550px;width: 400px;background-color: #013220;margin: 0px auto;
    color: black;">
				<h1 style="text-align: center;font-size: 30px;color: orange;padding-top: 15px;">FLIGHT DATA</h1><br>
				<form name="Registration" action="" method="post">
				
					<div class="login">
						<input class="form-control" type="text" name="fcode" placeholder="ID" required=""><br>
						<input class="form-control" type="text" name="name" placeholder="FLIGHT_NAME" required=""><br>
						<input class="form-control" type="text" name="src" placeholder="SOURCE" required=""><br>
						<input class="form-control" type="text" name="desti" placeholder="DESTINATION" required=""><br>
						<input class="form-control" type="text" name="depar_time" placeholder="DEPARTURE_TIME" required=""><br>
						<input class="form-control" type="text" name="arri_time" placeholder="ARRIVAL_TIME" required=""><br>
						<input class="form-control" type="text" name="fare" placeholder="FARE" required=""><br><br>
						<input class=" btn btn-default" type="submit" name="submit" value="INSERT" style="color: black; width: 80px; height: 30px">
					</div>
				</form>
				
			</div>
			
		</div>
	</section>

	<?php 
		if (isset($_POST['submit'])) 
		{
			
				mysqli_query($db,"INSERT INTO `flight` VALUES ('$_POST[fcode]','$_POST[name]','$_POST[src]','$_POST[desti]','$_POST[depar_time]','$_POST[arri_time]','$_POST[fare]');");	

				?>
					<script	type="text/javascript">
						alert("ADDED SUCCESSFULLY");
					</script>

				<?php
			
			
			}

	?>

</body>
