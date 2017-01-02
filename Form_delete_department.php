<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
    </head>
    <body>
        <form action="Delete_department.php" method="post"/>
		<table>
		
		<tr><td><label> Department id : </label></td></tr>
		<tr><td><input type="int" name="txt_deparid" /></td></tr>
		<tr><td><input type="submit" value="Delete" /></td></tr>
		</table>
           
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
		<th> deparment ID </th>
		<th> Simester </th>
		<th> lesson </th>
		<th> day </th>
		<th> start time </th>
		<th> end time </th>
		</tr>";

		while($row = mysqli_fetch_array($result))
		  {
		  echo "<tr>";
		  echo "<td>" . $row['departmentid'] . "</td>";
		  echo "<td>" . $row['simester'] . "</td>";
		    echo "<td>" . $row['lessonid'] . "</td>";
		  echo "<td>" . $row['day'] . "</td>";
		  echo "<td>" . $row['starttime'] . "</td>";
		    echo "<td>" . $row['endtime'] . "</td>";
		  echo "</tr>";
		  }
		echo "</table>";

		mysqli_close($con);
		?> 
               
                
    </body>
</html>
