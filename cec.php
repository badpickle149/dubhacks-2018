<?php

include_once("cec-utilities.php");

$host = "85.10.205.173";
$dbname = "dubhacks2018";
$db = dbInit("mysql:host={$host};dbname={$dbname};charset=utf8", "dubhacks", "poopwerty1");

/*
if (!isset($_POST['query'])) {
  header("Location:cec.php");
}


$query = $_POST['query'];
$search_sql="select * from courses where ";
$search_query = mysql_query($search_sql);
$search_rs = mysql_fetch_assoc($search_query);
*/

 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dubhacks2018 Course Evaluation Catalog</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="cec.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="banner">

      </div>
      <div class="banner">

      </div>
    </header>
    <!--
    <form method="post" action="cec.php">
      <div>
        <img src="">
      </div>
      <input name="query" type="text">
      <input type="submit">
    </form>
    -->
    <
  </body>
</html>
