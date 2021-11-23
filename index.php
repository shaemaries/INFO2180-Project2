<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Forms and PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="styles.css" media="screen">
  </head>
  <body>
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
          <button type="submit" name="submitBtn" class="btn btn-primary">Submit</button>

        </form>
        </main>
 </body>
</html>
