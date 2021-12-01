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
