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
  <div id="login">
  
    <h1>Login</h1>
  
    <form action="/validate.php" method="post">
      <label for="username">Username:</label>
      <br>
      <input type="text" id="username" name="username" placeholder="arbaaz">
      <br>
      <label for="password">Password:</label>
      <br>
      <input type="password" id="password" name="password" placeholder="password">
      <br>
      <input type="submit" value="Submit" id="submit">
    </form>
    <p>Don't have an account? <a href='/signup.php'>Sign up</a></p>
  </div>
  <?php
  if (isset($_SESSION["failed_attempts"])) {
    echo '<p id="attempts">';
    echo "This is unsuccessful attempt number: " . $_SESSION["failed_attempts"];
    echo '</p>';
  }
  ?>
</body>
</html>