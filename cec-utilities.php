<?php

function dbInit($ds, $user, $password) {
  try {
    global $db;
    $db = new PDO($ds, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
  } catch (PDOexception $ex) {
    header("Content-Type: text/plain");
    print ("Can not connect to the database. Please try again later.\n");
    print ("Error details: $ex \n");
    die();
  }

}

 ?>
