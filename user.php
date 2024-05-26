<?php

require_once('database.php');

Class User {

  public function get_all_users() {
    $db = db_connect();
    $statement = $db->prepare("SELECT * FROM users;");
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }
  
  public function create_user($username, $password) {
    $db = db_connect();
    $statement = $db->prepare("INSERT INTO users (username, password) VALUES ('$username', '$password');");
    $statement->execute(); 
  }

  public function find_user($username) {
    $db = db_connect();
    $statement = $db->prepare("SELECT username FROM users WHERE username = '$username';");
    $statement->execute();
    $user = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $user;
  }

  public function validate($username) {
    $db = db_connect();
    $statement = $db->prepare("SELECT * FROM users WHERE username = '$username';");
    $statement->execute();
    $user = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $user;
  }
  
}

?>