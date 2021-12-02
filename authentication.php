<?php

include("connection.php");
?>

<?php
     $error="";

   if($_SERVER["REQUEST_METHOD"] == 'POST') {
      // username and password sent from form 
      
      $email = sanitizeData($_POST["email"]);
      $password = sanitizeData($_POST["password"]);

    
      $sql = "SELECT id, email, password_h FROM Users WHERE email = '$email'";

      if ($stmp = $con->prepare($sql)) {			
        if ($stmp->execute()) {
         // lets see if the user exists now
            $row = $stmp->fetchAll();
            $user=$row[0];
            $password_hash = $user["password_h"];
            $email=$user["email"];

            if (password_verify($password, $password_hash)) {
                session_start();
                $_SESSION['loggedin'] = $id;
            
            header("location: sidebar.php");
            }else {
                 $error= "Your Email or Password is invalid";
             }
            }
        }
    }

?>