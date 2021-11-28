<?php

$host = "localhost";  
$user = "project2admin";  
$password = "admi123";  
$db_name = "BugMe";  


try{
    $con = new PDO("mysql:host=$host;db_name=$db_name;", $user, $password);
    // Set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());

}  
?>  