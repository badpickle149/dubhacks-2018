<?php

include("cec-utilities.php");
$db = dbInit("mysql:host={$host};dbname={$dbname};charset=utf8", "dubhacks", "poopwerty1");

$input = "";
$filter = "";

if (!isset($_GET['search'])) {
  header("Location: cec.php");
} else {
  $input = $_GET['search'];
}

$rows = "";
$results = array();

try {
  $rows = $db->query("select * FROM course_data WHERE UPPER(class_name) LIKE UPPER('%$input%') or prof_name LIKE '%$input%' ORDER BY average_score_per_class DESC");
} catch (PDOException $ex) {
  header("Location: cec.php");
}

print(json_encode($rows));


 ?>
