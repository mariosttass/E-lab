<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require 'Database.php';
$departmentid = $_POST["txt_deparid"];
$simester = $_POST["txt_simester"];
$lessonid = $_POST["txt_lessonid"];
$day = $_POST["txt_day"];
$starttime = $_POST["txt_starttime"];
$endtime = $_POST["txt_endtime"];


$a = new Database;
$a->update_department($departmentid, $simester, $lessonid, $day, $starttime, $endtime);
header('Location: http://localhost/Form_update_department.php');
?>
