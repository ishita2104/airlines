<?php
	include "connection.php";
	include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		VIEW PAGE
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
				<br>
				
					<h1 style="text-align: center;font-size: 30px;color: black;padding-top: 15px;">ENTER THE USERNAME FOR CONFIRMATION</h1>
					<form name="view" action="" method="post">
						<br>
						<div class="view" style="text-align: center;">
							<center><input class="form-control" type="text" name="username" style="color: black; width: 200px; height: 30px;text-align: center;"placeholder="USERNAME" ></center> <br>
							<input class=" btn btn-default" type="submit" name="submit" value="VIEW" style="color: black; width: 80px; height: 30px">
						</div>
					</form>
			</div>
	<br><br>
	<?php
	if(isset($_POST['submit']))
	{
		$res=mysqli_query($db, "SELECT * FROM `booking` where username='$_POST[username]';");

		echo "<table class='table table-bordered table-hover'>";
				echo"<tr style='background-color: white;'>"; 
				echo "<th>"; echo "USERNAME"; echo "</th>";
				echo "<th>"; echo "SOURCE"; echo "</th>";
				echo "<th>"; echo "DESTINATION"; echo "</th>";
				echo "<th>"; echo "DATE"; echo "</th>";
				echo "<th>"; echo "NO. OF PASSENGERS"; echo "</th>";
				echo "<th>"; echo "CLASS"; echo "</th>";
				echo "<th>"; echo "FARE"; echo "</th>";
			echo "</tr>";

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['src']; echo "</td>";
				echo "<td>"; echo $row['desti']; echo "</td>";
				echo "<td>"; echo $row['date']; echo "</td>";
				echo "<td>"; echo $row['no_pass']; echo "</td>";
				echo "<td>"; echo $row['class']; echo "</td>";
				echo "<td>"; echo $row['fare']; echo "</td>";
				echo "</tr>";
			}
			echo "</table>";
	}
		
	?>
<form action="payment.php">
					<p style="text-align: center;"><input class=" btn btn-default" type="submit" name="submit" value="PROCEED FOR PAYMENT" style="color: black; width: 200px; height: 30px"></p>
				</form>
	
	</section>
	

</body>
</html>
