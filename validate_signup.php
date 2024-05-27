<?php

session_start();

$signup_username = $_REQUEST['signup_username'];
$signup_pwd = $_REQUEST['signup_pwd'];
$confirm_pwd = $_REQUEST['confirm_pwd'];

$hash = password_hash($signup_pwd, PASSWORD_DEFAULT);

require_once('user.php');
$user = new User();
$account = $user->validate( $signup_username );

$pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{10,}$/';

if ($signup_username == "" || $signup_pwd == "" || $confirm_pwd == "") {
  $_SESSION["empty_field"] = "Field(s) empty";
} else if ($signup_pwd != $confirm_pwd) {
  $_SESSION["pwds_unmatch"] = "Passwords do not match";
} else if (!preg_match($pattern, $signup_pwd)) {
  $_SESSION["pwd_strength"] = "Password should contain at least 10 characters, 1 uppercase, 1 number and 1 special character (!@#$%^&*-)";
} else if ($account && count($account)) {
  $_SESSION["failed_signup"] = "Username already exists";
} else {
  $user->create_user( $signup_username, $hash );
  $_SESSION["acct_created"] = "Account created successfully";
}

header("location: /signup.php");

?>