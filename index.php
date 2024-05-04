<?php
session_start();

if ($_SESSION["authenticated"] != 1) {
  header ("location: /login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Arbaaz</title>
</head>
<body>

  <h1>Assignment 1</h1>

  <p>Welcome, <?=$_SESSION["username"] ?></p>
  
</body>
</html>