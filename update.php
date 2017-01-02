<html> 

<head>
	<?php
$con=mysqli_connect("localhost","root","12345","e-labdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM department");

echo "<table border='1'>
<tr>
<th>deparment ID</th>
<th>Simester</th>
<th>day</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['departmentid'] . "</td>";
  echo "<td>" . $row['simester'] . "</td>";
    echo "<td>" . $row['day'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?> 


</body>


</html>