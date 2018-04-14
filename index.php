<?php
require_once("config/DataImplement.php");
$OOP = new DataCRUD();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Belajar CRUD Dengan OOP</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/bootstrap-theme.min.css">

  </head>
  <body>
    <div class="container">
      <?php require_once("konten.php"); ?>
    </div>

    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="asset/js/jquery-3.3.1.min.js"></script>
  </body>
</html>
