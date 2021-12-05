<?php
function sanitizeData($data_to_sanitize) {
  return trim(htmlspecialchars(strip_tags($data_to_sanitize)));
}
?>


<?php

$host = "localhost";
$dbusername = "finalprojectadmin";
$dbpassword = "admin123";
$database = "BugMe";

try {
  $con= new PDO("mysql:host=$host;dbname=$database", $dbusername, $dbpassword);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
  }
?>  