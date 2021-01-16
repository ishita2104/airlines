<?php
	include "connection.php";
	include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		USER REGISTRATION
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
			<div class="box2">
				<h1 style="text-align: center;font-size: 30px;color: orange;padding-top: 15px;">REGISTRATION FORM</h1><br>
				<form name="Registration" action="" method="post">
					<br>
					<div class="login">
						<input class="form-control" type="text" name="first" placeholder="First Name" required=""><br>
						<input class="form-control" type="text" name="last" placeholder="Last Name" required=""><br>
						<input class="form-control" type="text" name="username" placeholder="Username" required=""><br>
						<input class="form-control" type="password" name="password" placeholder="Password" required=""><br>
						<input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
						<input class="form-control" type="text" name="phone" placeholder="Contact NO" required=""><br><br>
						<input class=" btn btn-default" type="submit" name="submit" value="SIGN UP" style="color: black; width: 80px; height: 30px">
					</div>
				</form>
				
			</div>
			
		</div>
	</section>

	<?php 
		if (isset($_POST['submit'])) 
		{
			$count=0;
			$sql="SELECT username from register";
			$res=mysqli_query($db,$sql);
			while ($row=mysqli_fetch_assoc($res)) 
			{
				if($row['username']==$_POST['username'])
				{
					$count=$count+1;
				}
			}
			if($count==0)
			{
				mysqli_query($db,"INSERT INTO `register` VALUES ('$_POST[first]','$_POST[last]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[phone]');");	

				?>
					<script	type="text/javascript">
						alert("REGISTRATION SUCCESSFUL");
					</script>

				<?php
			}
			else
			{
				?>
					<script	type="text/javascript">
						alert("USER NAME ALREADY EXIST");
					</script>

				<?php
			}
		}

	?>

</body>
