<?php
session_start();

if (isset($_SESSION["authenticated"])) {
  header ("location: /index.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
  <body>
    <div id="signup" class="form">

      <h1>Sign up</h1>

      <form action="/validate_signup.php" method="post">
        <label for="signup_username">Username:</label>
        <br>
        <input type="text" id="signup_username" name="signup_username">
        <br>
        <label for="signup_pwd">Password:</label>
        <br>
        <input type="password" id="signup_pwd" name="signup_pwd">
        <br>
        <label for="confirm_pwd">Confirm Password:</label>
        <br>
        <input type="password" id="confirm_pwd" name="confirm_pwd">
        <br>
        <input type="submit" value="Create Account" id="submit">
      </form>
      <p>Already have an account? <a href='/login.php'>Login</a></p>
    </div>
    
    <?php
    if (isset($_SESSION["acct_created"])) {
      echo '<p class="attempts success">' . $_SESSION["acct_created"] . '</p>';
      unset($_SESSION["acct_created"]);
    } else if (isset($_SESSION["empty_field"])) {
      echo '<p class="attempts">' . $_SESSION["empty_field"] . '</p>';
      unset($_SESSION["empty_field"]);
    } else if (isset($_SESSION["failed_signup"])) {
      echo '<p class="attempts">' . $_SESSION["failed_signup"] . '</p>';
      unset($_SESSION["failed_signup"]);
    } else if (isset($_SESSION["pwds_unmatch"])) {
      echo '<p class="attempts">' . $_SESSION["pwds_unmatch"] . '</p>';
      unset($_SESSION["pwds_unmatch"]);
    }
    ?>

  </body>
</html>