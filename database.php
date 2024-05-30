<?php

require_once('config.php');

$GLOBALS['db_down'] = false;

function db_connect() {
  try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_DATABASE , DB_USER, DB_PASS);
    return $dbh;
  } catch (PDOException $e) {
    $GLOBALS['db_down'] = true;
    error_log("Failed to connect to the database: " . $e->getMessage());
    return null;
  }
}

?>