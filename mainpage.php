// Check if session is not registered , redirect back to main page.
<?php
session_start();
 
if(!session_is_registered(myusername)){
  header("location:main_login.php");
}
?>
 
<html>
<body>
Login Successful
</body>
</html>