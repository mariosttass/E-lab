<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require 'Database.php';
$departmentid = $_POST["txt_deparid"];

$a = new Database;
$a->delete_department($departmentid);
header('Location: http://localhost/Form_delete_department.php');
?>
