<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
    </head>
    <body>
        <form action="Update_department.php" method="post"/>
		<table>
		
		<tr><td><label> Department id : </label></td></tr>
		<tr><td><input type="int" name="txt_deparid" /></td></tr>
		<tr><td><label>Simester:</label></td></tr>
		<tr><td>
		<select type="varchar(25)" name="txt_simester" size=multiple>
		<option>1o</option>
		  <option>2o</option>
		  <option>3o</option>
		  <option>4o</option>
		  <option>5o</option>
		  <option>6o</option>
		  <option>7o</option>
		  </select>
		  
		</td></tr>
		<tr><td></td></tr>
		<tr><td><label>Choose lesson:</label></td></tr>
		<tr><td>
			<select  type="varchar(25)" name="txt_lessonid" size=multiple>
			<option>logismos 1</option>
			<option>Programmatismos</option>
			<option>Fusiki</option>
			<option>Texnologia logismikou</option>
			<option>Dyktia  3</option>
			<option>Programatistikes efarmoges</option>
			<option>Didaktikh</option>
			</select>
		</td></tr>

<tr><td><label>Choose the day of Department:</label></td></tr>
		<tr><td>
			<select type="varchar(25)" name="txt_day" size=multiple>
			<option>Monday</option>
			<option>Tuesday</option>
			<option>Thuersday</option>
			<option>Wendesday</option>
			<option>Friday</option>
			</select>
		</td></tr>
		
		<tr><td><label>Choose start time of lesson:</label></td></tr>
		<tr><td>
			<select type="varchar(25)" name="txt_starttime" size=multiple>
			<option>8:00</option>
			<option>9:00</option>
			<option>10:00</option>
			<option>11:00</option>
			<option>12:00</option>
			<option>13:00</option>
			<option>14:00</option>
			<option>15:00</option>
			<option>16:00</option>
			<option>17:00</option>
			<option>18:00</option>
			<option>19:00</option>
			<option>20:00</option>
			<option>21:00</option>
			</select>
		</td></tr>
		
		<tr><td><label>Choose end time of lesson:</label></td></tr>
		<tr><td>
			<select type="varchar(25)" name="txt_endtime" size=multiple>
			<option>8:00</option>
			<option>9:00</option>
			<option>10:00</option>
			<option>11:00</option>
			<option>12:00</option>
			<option>13:00</option>
			<option>14:00</option>
			<option>15:00</option>
			<option>16:00</option>
			<option>17:00</option>
			<option>18:00</option>
			<option>19:00</option>
			<option>20:00</option>
			<option>21:00</option>
			</select>
		</td></tr>
		<br> </br>
		<tr><td><input type="submit" value="update" /></td></tr>
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
