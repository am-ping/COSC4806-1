<?php

  session_start();

  $valid_username = "arbaaz";
  $valid_password = "password";

  $username = $_REQUEST['username'];
  $_SESSION["username"] = $username;
  $password = $_REQUEST['password'];

  if ($valid_username == $username && $valid_password == $password) {
    $_SESSION["authenticated"] = 1;
    header ("location: /");
  } else {
    if (!isset($_SESSION["failed_attempts"])) {
      $_SESSION["failed_attempts"] = 1;
    } else {
      $_SESSION["failed_attempts"] = $_SESSION["failed_attempts"] + 1;
    }
    header ("location: /login.php");
  }

?>