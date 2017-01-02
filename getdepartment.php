<?php
$q=$_POST["txt_lessonid"];

$con=mysqli_connect("localhost","root","12345","e-labdb");
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

$sql="SELECT * FROM department WHERE lessonid='$q' ";

$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>day</th>
<th>start time</th>
<th>end time</th>
<th>Choise</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['day'] . "</td>";
  echo "<td>" . $row['starttime'] . "</td>";
  echo "<td>" . $row['endtime'] . "</td>";
  echo "<td><input type='int' name='txt_deparid'/></td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?> 