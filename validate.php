<?php

  $valid_username = "arbaaz";
  $valid_password = "password";

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  if ($valid_username == $username && $valid_password == $password) {
    echo "Login successful";
  } else {
    echo "Login failed";
  }

?>