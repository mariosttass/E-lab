<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Description of Database
 *
 * @author Marios T Tass
 */

class Database {
    //put your code here
   
    function set_user($name1,$last_name1,$aem1,$password1,$email1 ){
        $con=mysqli_connect("localhost","root","12345","e-labdb");
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
        $sql="INSERT INTO users (aem,name,lastname,password,role,email)
        VALUES
        ('$aem1','$name1','$last_name1','$password1','1','$email1')";

        if (!mysqli_query($con,$sql))
        {
            die('Error: ' . mysqli_error());
        }
        echo "1 record added";
        
        mysqli_close($con);
    } 
    
    
    function set_department($simester,$lessonid,$day,$startime,$endtime){
        $con=mysqli_connect("localhost","root","12345","e-labdb");
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
        $sql="INSERT INTO department(simester,lessonid,day,starttime,endtime)
        VALUES
        ('$simester','$lessonid','$day','$startime','$endtime')";

        if (!mysqli_query($con,$sql))
        {
            die('Error: ' . mysqli_error());
           
        }
        else{
            return 1;
            //echo "1 record added succesfully";
                

        }
        
        
        
        mysqli_close($con);
    } 
    
    
    function update_department($departmentid , $simester , $lessonid, $day, $starttime, $endtime ){
        $con=mysqli_connect("localhost","root","12345","e-labdb");
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $sql="UPDATE department SET simester='$simester', lessonid='$lessonid', day='$day', starttime='$starttime', endtime='$endtime'
                                WHERE departmentid='$departmentid' ";


        if (!mysqli_query($con,$sql))
        {
            die('Error: ' . mysqli_error());
        }
        
        mysqli_close($con);
    } 
    
    
    function delete_department($departmentid ){
        $con=mysqli_connect("localhost","root","12345","e-labdb");
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
		
        $sql="DELETE FROM department WHERE departmentid='$departmentid'";

        if (!mysqli_query($con,$sql))
        {
            die('Error: ' . mysqli_error());
        }
        echo "1 record deleted";
        
        mysqli_close($con);
    } 
    
    
    
    function set_lesson($name,$simester ){
        $con=mysqli_connect("localhost","root","12345","e-labdb");
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
        $sql="INSERT INTO lesson (name,simester)
        VALUES
        ('$name','$simester')";

        if (!mysqli_query($con,$sql))
        {
            die('Error: The lesson is already exist ' . mysqli_error());
        }
        echo "1 record added";
        
        mysqli_close($con);
    } 
    
    
    function update_lesson($lessonid ){
        $con=mysqli_connect("example.com","peter","abc123","my_db");
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $sql=mysqli_query($con,"UPDATE * FROM lesson 
                                WHERE lessonid=$lessonid");


        if (!mysqli_query($con,$sql))
        {
            die('Error: ' . mysqli_error());
        }
        echo "1 record updated";
        
        mysqli_close($con);
    } 
    
    
    
    function delete_lesson($name,$simester ){
        $con=mysqli_connect("example.com","peter","abc123","my_db");
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
        $sql="DELETE FROM department(name,simester)
        VALUES
        ('$_POST[$name]','$_POST[$simester]')";

        if (!mysqli_query($con,$sql))
        {
            die('Error: ' . mysqli_error());
        }
        echo "1 record deleted";
        
        mysqli_close($con);
    } 
    
    
    
   
}

?>