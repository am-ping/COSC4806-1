<?php

session_start();

$signup_username = $_REQUEST['signup_username'];
$signup_pwd = $_REQUEST['signup_pwd'];
$confirm_pwd = $_REQUEST['confirm_pwd'];

require_once('user.php');
$user = new User();
$account = $user->validate( $signup_username, $signup_pwd );

if ($signup_username == "" || $signup_pwd == "" || $confirm_pwd == "") {
  $_SESSION["empty_field"] = "Field(s) empty";
} else if (!($signup_pwd === $confirm_pwd)) {
  $_SESSION["pwds_unmatch"] = "Passwords do not match";
} else if ($account && count($account)) {
  $_SESSION["failed_signup"] = "Username already exists";
} else if (!($account && count($account))) {
  $user->create_user( $signup_username, $signup_pwd );
  $_SESSION["acct_created"] = "Account created successfully";
}

header("location: /signup.php");

?>