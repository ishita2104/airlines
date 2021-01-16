<?php
	include "connection.php";
	include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		HISTORY PAGE
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
			 height:580px;
    		width: 1370px; 
		}
	</style>
</head>

<body>

	<section>
		<div class="his_img">
			<br><br><br>
			<div class="box3">
				<h1 style="text-align: center;font-size: 30px;color: black;padding-top: 15px;">BOOKING SUCCESSFUL !!</h1>
				<form action="view.php">
					<p style="text-align: center;"><input class=" btn btn-default" type="submit" name="view" value="VIEW BOOKING HISTORY" style="color: black; width: 200px; height: 30px"></p>
				</form>
				 <!--<form action="cancle.php">
				 	<p style="text-align: center;"><input class=" btn btn-default" type="submit" name="cancle" value="CANCEL BOOKING" style="color: black; width: 200px; height: 30px"></p>
				 </form>-->
				 <br>
				 
			</div>
			
		</div>
	</section>
</body>
</html>
