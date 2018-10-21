<?php

include("cec-utilities.php");

$host = "85.10.205.173";
$dbname = "dubhacks2018";
$db = dbInit("mysql:host={$host};dbname={$dbname};charset=utf8", "dubhacks", "poopwerty1");

$input = "";
$filter = "";

if (!isset($_GET['search'])) {
  header("Location: cec.php");
} else {
  $input = $_GET['search'];
}

//$rows = "";
$results = array();

try {
  $stmt = "select * from course_data where UPPER(class_name) LIKE UPPER('%$input%') or prof_name LIKE UPPER('%$input%') ORDER BY average_score_per_class DESC";
  $rows = $db->query($stmt);
  $rows = $rows->fetchAll();
  //$rows = $db->exec($stmt);
} catch (PDOException $ex) {
  //header("Location: cec.php");
  echo $ex;
}

print(json_encode($rows));


 ?>
