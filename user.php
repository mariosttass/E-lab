<?php
require 'Database.php';
$aem = $_POST["txt_aem"];
$sername = $_POST["txt_sername"];
$lastname = $_POST["txt_lastname"];
$email = $_POST["txt_email"];
$password=$_POST['txt_password'];
$salt = "Hello world";
$encryptedpass =hash("sha512",$password.$salt);
$a = new Database;
$a->set_user($aem, $sername, $lastname, $encryptedpass,$email);

?> 
