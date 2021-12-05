<?php
require_once "connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$firstname = sanitizeData($_POST['firstname']);
	$lastname = sanitizeData($_POST['lastname']);
	$password = sanitizeData($_POST['password']);
	$email = sanitizeData($_POST['email']);
	$doe = date('Y-m-d',time());
	$phash= password_hash($password,PASSWORD_BCRYPT);

  if (isValid($firstname) && isValid($lastname) && isValid($password)) {
          $sql = "INSERT INTO Users( firstname, lastname, password_h, email, date_joined) VALUES 
                  ('$firstname', '$lastname', '$hash', '$email', '$date')";
          $stmt = $pdo->prepare($sql);
          $stmt->execute();
          echo 'User added successfully';
        } else {
          echo 'Something went wrong or user already exist';
        }
      
  
      function isValid($value) {
        if ($value == "" or $value == null) {
          return false;
        } 
        return true;
      }
}


?>

<h1>New User</h1>

<form id="f1" action="" method="post" onsubmit="return validation(event);">
  <div class="field">
    <label for="firstname">First Name</label>
    <input type="text" id="firstname" name="firstname" required>
  </div>
  <div class="field">
    <label for="lastname">Last Name</label>
    <input type="text" id="lastname" name="lastname" required>
  </div>
  <div class="field">
    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>
  </div>
  <div class="field">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder=" e.g: JohnDoe@bugme.com" required>
  </div>
  <input type="submit" name="submitButton" class="btn btn-primary"/>
</form>

<main>
	<div class="container" id="content">
    <link rel="stylesheet" href="index.css" media="screen">
	</div>
</main>