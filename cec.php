<?php

include_once("cec-utilities.php");

$host = "85.10.205.173";
$dbname = "dubhacks2018";
$db = dbInit("mysql:host={$host};dbname={$dbname};charset=utf8", "dubhacks", "poopwerty1");

$error_msg = "";

if (!isset($_GET['search'])) {

  if (!isset($_GET['filter'])) {

  }
}

/*
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
     <title>dubhacks2018 Course Evaluation Catalog</title>
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" rel="stylesheet">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" type="text/javascript"></script>
     <link href="cec.css" type="text/css" rel="stylesheet">
   </head>
   <body>

       <header>
         <div id="top" class="banner">
           <div id="uw-logo-wrapper">
             <img id="uw-logo" src="https://s3-us-west-2.amazonaws.com/uw-s3-cdn/wp-content/uploads/sites/98/2014/09/07214356/Signature_Left_White.png">
           </div>
         </div>
         <div id="bottom" class="banner">
         </div>
         <?php echo $error_msg; ?>
       </header>
       <main class="banner">
         <form action="cec.php">
           <div id="search">
             <input name="search" type="search" placeholder="search here">
             <div id="submit">
               <input type="submit">
             </div>
           </div>
           <select name="filter" class="form-control">
             <option>1</option>
             <option>2</option>
             <option>3</option>
           </select>
         </form>
       </main>
   </body>
 </html>
