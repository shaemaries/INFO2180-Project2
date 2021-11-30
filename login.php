<?php

include("connection.php");
session_start();
?>

<?php

    $error="";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
    $email = sanitizeData($_POST["email"]);
    $password = sanitizeData($_POST["password"]);
   
    $sql = "SELECT id, email, password_h FROM Users WHERE email = '$email'";

    if ($stmp = $con->prepare($sql)) {			
        if ($stmp->execute()) {
         // lets see if the user exists now
            $row = $stmp->fetch();
            $id = $row["id"];
            $password_hash = $row["password_h"];

            if (password_verify($password, $password_hash)) {
                session_start();
                session_register("id");
                $_SESSION['loggedin'] = $id;
            
            header("location: new_user.php");
            }else {
                 $error= "Your Email or Password is invalid";
             }
            }
        }
    }

?>

<div class="container">
    <div class="error-box">
            <span id="error-text" class="text-danger">
                <?= $error; ?>
            </span>
        </div>

    <form action="" method="post" id="form" >
    <div class="form-group">
    <label for="email">Email Address</label>
    <input type="text" name="email" id="email" class="form-control" />
    </div>
    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control" />
    </div>
    <div class="form-group">
        <input type="submit" class="btn" id="login">
    </div>
    </form>
</div>