<?php
session_start();

if (!isset($_SESSION["authenticated"])) {
  header ("location: /login.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Arbaaz</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
  <body>
  
    <h1>Assignment 1</h1>
  
    <p>Welcome, <?=$_SESSION["username"] . " [" . date("F jS\, Y") . "]."?></p>
    
  </body>
  <footer>
    <p><a href="/logout.php">Click here to logout</a></p>
  </footer>
</html>