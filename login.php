<?php
session_start();

if ($_SESSION["authenticated"] == 1) {
  header ("location: /index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
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

</body>
</html>