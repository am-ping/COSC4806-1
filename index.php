<?php
session_start();

// Check if user is authenticated
// if NOT< send them to login.php... header()...
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