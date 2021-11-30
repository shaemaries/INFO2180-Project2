<?php
function sanitizeData($data_to_sanitize) {
  return trim(htmlspecialchars(strip_tags($data_to_sanitize)));
}
?>

<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'finalprojectadmin');
define('DB_PASSWORD', 'admin123');
define('DB_DATABASE', 'BugMe');
      
    $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  