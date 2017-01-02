<html> 

<head>
	<style type="text/css">
	#t {
			position:fixed;
			top:250px;
			left:500px;}
	</style>
</head>

<body>
<?php require 'checkpass.js'; ?>
<form action="user.php" method="post" onsubmit="return checkpass(this);" >
	<p id="t">
		<table>
		<tr><td><label><strong>Registration:</strong></label></td></tr>
		<tr><td><label>Sername:</label></td>
		<td><input type="varchar(25)" name="txt_sername" /></td></tr>
		<tr><td><label>Lastname:</label></td>
		<td><input type="varchar(25)" name="txt_lastname" /></td></tr>
		<tr><td><label>Aem:</label></td>
		<td><input type="varchar(25)" name="txt_aem" /></tr></td>
		<tr><td><label> Password:</label></td>
		<td><input type= "password" name="txt_password" /></tr></td>
		<tr><td><label> Retype Password:</label></td>
		<td><input type= "password" name="txt_password_2" /></tr></td>
		<tr><td><label>Email:</label></td>
		<td><input type="varchar(25)" name="txt_email" /></tr></td>
		<tr><td><input type="submit" value="Register" /></td></tr>
		<td><a href="file:///C:/Users/Marios%20T%20Tass/Desktop/Form_login.html">Cancel</a></tr></td>
		</table>
	</p>
</form>


</body>


</html>