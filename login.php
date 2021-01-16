<?php
	include "connection.php";
	include "navbar.php";
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		LOGIN PAGE
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
		<div class="log_img">
			<br><br><br>
			<div class="box1">
				<h1 style="text-align: center;font-size: 30px;color: orange;padding-top: 15px;">USER LOGIN FORM</h1>
				<form name="login" action="" method="post">
					<br>
					<div class="login">
						<input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
						<input class="form-control" type="password" name="password" placeholder="Password" required=""> <br><br>
						<input class=" btn btn-default" type="submit" name="submit" value="LOGIN" style="color: black; width: 70px; height: 30px">
					</div>
				
				<p style="color: white;padding-left: 15px;">
					<br><br>
					&ensp;<a style="color: white" href="">FORGOT PASSWORD?</a> &ensp; &ensp; &ensp; &ensp;  &ensp;  &ensp;
					<a style="color: white" href="registration.php">REGISTER</a>
				</p>
				</form>
			</div>
			
		</div>
	</section>

	<?php

	 if(isset($_POST['submit']))
	 {
	 	$count=0;
	 	$res=mysqli_query($db,"SELECT * FROM `register` WHERE username='$_POST[username]' and password='$_POST[password]';");
	 	$count=mysqli_num_rows($res);

	 	if($count!=0)
	 	{
	 		
	 		mysqli_query($db,"INSERT INTO `login` VALUES ('$_POST[username]','$_POST[password]');");
	 		?>
	 		<script type="text/javascript">
	 			window.location="booking.php"
	 		</script>
	 		
	 		<?php
	 	}
	 	else
	 	{
	 		?>
	 		<script type="text/javascript">
	 			alert("THE USERNAME AND PASSWORD DOES NOT MATCH. ");
	 		</script>
	 		
	 		<?php
	 	}
	 }
	 ?>
	
</body>

</html>
