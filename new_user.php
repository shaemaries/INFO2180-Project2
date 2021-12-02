<?php
require_once "connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$firstname = sanitizeData($_POST['firstname']);
	$lastname = sanitizeData($_POST['lastname']);
	$password = sanitizeData($_POST['password']);
	$email = sanitizeData($_POST['email']);
	$doe = date('Y-m-d',time());
	$phash= password_hash($password,PASSWORD_BCRYPT);
}

if (isValid($firstname) && isValid($lastname) && isValid($password)) {
  // Save data newt_open_window(left, top, width, height)
        $sql = "INSERT INTO Users( firstname, lastname, password_h, email, date_joined) VALUES 
                ('$firstname', '$lastname', '$hash', '$email', '$date')";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        echo 'User added successfully';
      } else {
        echo 'Something went wrong or user already exist';
      }
    }

    function isValid($value) {
      if ($value == "" or $value == null) {
        return false;
      } 
      return true;
    }
?>

<h2>New User</h2>
<form action="letter.php" method="post">
  <div class="form-group">
    <label for="firstname">First name</label>
    <input type="text" name="firstname" id="firstname" class="form-control" />
  </div>
  <div class="form-group">
    <label for="lastname">Last name</label>
    <input type="text" name="lastname" id="lastname" class="form-control" />
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="text" name="password" id="password" class="form-control" />
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" class="form-control" />
  </div>
</form>
