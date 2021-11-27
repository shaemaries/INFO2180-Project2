<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Forms and PHP</title>
    <link rel="stylesheet" href="index.css" media="screen">
  </head>
  <body>
    <header>
      <div class="container">
          <img src="bug.png" alt="Bug Logo">
          <h6>BugMe Issue Tracker</h>
    </header>
      <main>
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
        </main>
 </body>
</html>