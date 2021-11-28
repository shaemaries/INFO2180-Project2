<?php

$host = "localhost";  
$user = "project2admin";  
$password = "admin123";  
$db_name = "BugMe";  

$con = new PDO("mysql:host=$host;db_name=$db_name;", $user, $password);
//mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  