<?php
	include "connection.php";
	include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>FLIGHTS</title>
	<style >
		body{
			background-color: grey;
		}
	</style>
</head>
<body>
	
	<h2>List Of Users:</h2><br>
	<?php
		$res=mysqli_query($db, "SELECT * FROM `backup`;");
		echo "<table class='table table-bordered table-hover'>";
			echo"<tr style='background-color: white;'>";
				echo "<th>"; echo "ID"; echo "</th>";
				echo "<th>"; echo "USERNAME"; echo "</th>";
				echo "<th>"; echo "ACTION"; echo "</th>";
				echo "<th>"; echo "DATE_TIME"; echo "</th>";
			echo "</tr>";

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['id']; echo "</td>";
				echo "<td>"; echo $row['username']; echo "</td>";
				echo "<td>"; echo $row['action']; echo "</td>";
				echo "<td>"; echo $row['cdate']; echo "</td>";

				echo "</tr>";
			}
			echo "</table>";
	?>

</body>
</html>
