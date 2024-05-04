<?php
session_start();

if (isset($_SESSION["authenticated"])) {
  header ("location: /index.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
<body>

  <h1>Login Form</h1>

  <form action="/validate.php" method="post">
    <label for="username">Username:</label>
    <br>
    <input type="text" id="username" name="username">
    <br>
    <label for="password">Password:</label>
    <br>
    <input type="password" id="password" name="password">
    <br>
    <input type="submit" value="Submit">
  </form>
  <p>
    <?php 
    if (isset($_SESSION["failed_attempts"])) {
      echo "This is unsuccessful attempt number " . $_SESSION["failed_attempts"];
    }
    ?>
  </p>

</body>
</html>