<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require 'Database.php';
$simester= $_POST["simesters"];
$lessonid = $_POST["lesson_name"];
$day = $_POST["day_lesson"];
$startime = $_POST["start_time"];
$endtime = $_POST["end_time"];




$a = new Database;
$a->set_department($simester,$lessonid,$day,$startime,$endtime)
 
 ?>
