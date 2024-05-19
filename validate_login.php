<?php

session_start();

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$_SESSION["username"] = $username;

require_once('user.php');
$user = new User();
$account = $user->validate( $username, $password );

if ($account && count($account)) {
    $valid_username = $account[0]['username'];
    $valid_password = $account[0]['password'];

    if ($valid_username === $username && $valid_password === $password) {
        $_SESSION["authenticated"] = 1;
        header("location: /");
    }
} else {
  if (!isset($_SESSION["failed_login"])) {
    $_SESSION["failed_login"] = 1;
  } else {
    $_SESSION["failed_login"] += 1;
  }
}

header("location: /login.php");

?>