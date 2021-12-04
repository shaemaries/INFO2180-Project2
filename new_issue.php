<?php 
  include "connection.php";
?>

<h1>New Issue</h1>

<form id="f1" action="" method="post">
  <div class="field">
    <label for= "title">Title</label>
    <input type="text" id="title" name="title" required>
  </div>
  <div class="field">
    <label for="description">Description</label>
    <textarea name="description" rows="5" cols="" id="description"></textarea>
  </div>
  <div class="field">
    <label for="assigned">Assigned To</label>
    <select id="assigned" name="assigned"> 
      <?php 
        $sql = "SELECT Users.firstname, Users.lastname, Users.id FROM Users";
        $stmt = $pdo->query($sql);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
      ?>
      <?php foreach ($users as $user): ?>
        <option value="<?= $user['id'] ?>"><?= combine_name($user) ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="field">
    <label for="type">Type</label>
    <select id="type" name="type" required>
        <option value="bug">Bug</option>
        <option value="proposal">Proposal</option>
        <option value="task">Task</option>
    </select>
  </div>
  <div class="field">
    <label for="priority">Priority</label>
    <select id="priority" name="priority" required>
        <option value="minor">Minor</option>
        <option value="major">Major</option>
        <option value="critical">Critical</option>
    </select>
  </div>
  <div class="form-group">
    <input type="submit" class="btn" value="Submit">
  </div>
</form>

<main>
	<div class="container" id="content">
	<link rel="stylesheet" href="index.css" media="screen">
	<script src="main.js"></script>
	</div><!--/.container-->
</main>