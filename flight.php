<?php
	include "connection.php";
	include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>FLIGHTS</title>
</head>
<body>
	<h2>List Of Flight Details</h2><br>
	<?php
		$res=mysqli_query($db, "CALL `getflight`();");
		echo "<table class='table table-bordered table-hover'>";
			echo"<tr style='background-color: white;'>";
				echo "<th>"; echo "ID"; echo "</th>";
				echo "<th>"; echo "FLIGHT_NAME"; echo "</th>";
				echo "<th>"; echo "SOURCE"; echo "</th>";
				echo "<th>"; echo "DESTINATION"; echo "</th>";
				echo "<th>"; echo "DEPARTURE_TIME"; echo "</th>";
				echo "<th>"; echo "ARRIVAL_TIME"; echo "</th>";
				echo "<th>"; echo "FARE"; echo "</th>";
			echo "</tr>";

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['fcode']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['src']; echo "</td>";
				echo "<td>"; echo $row['desti']; echo "</td>";
				echo "<td>"; echo $row['depar_time']; echo "</td>";
				echo "<td>"; echo $row['arri_time']; echo "</td>";
				echo "<td>"; echo $row['fare']; echo "</td>";

				echo "</tr>";
			}
			echo "</table>";
	?>

</body>
</html>
