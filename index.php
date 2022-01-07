<?php
//include ./auth/auth_session.php file on all user panel pages
include("./auth/auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ChatMe</title>
  </head>
  <body>
    <h1>
      <?php
    echo "today is ".date('y/m/d')."and it is a".date('l')." today"
     ?></h1>
    <section class="first-sect"></section>
  </body>
</html>
