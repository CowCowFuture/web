<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <link rel=icon" type="image/x-icon" href="favicon.ico">
    <title>file</title>
  </head>
  <body>
<?php
$time = date("Y-m-dTH:i:s");
$ext = strtolower(pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION));
$name = base64_encode($time) . "." . $ext;
$location = "upload/" . $name;

if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
  echo "<a>https://ccf.guadamuz.org/upload/" . $name . "</a>";
}
    ?>
  </body>
</html>
