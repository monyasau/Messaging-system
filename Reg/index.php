<?php
    require('../auth/db.php');
    session_start();
    
  // if ($_SESSION['username'] != null) {
      // echo "You are already registered, you will be redirected to the home page";
      // Redirect to user dashboard page
      // header("Location: dashboard.php");
    // };
    // if (isset($_REQUEST['username'])) {}
//     if($_POST['submitBtn'] == "Submit") 
// {


?> 
<!DOCTYPE html>
<html lang="en">
  <head>
      <link rel="stylesheet" href="./css/style.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create a ChatMe account</title>
  </head>
  <body>
        <main class="">
      <section class="first-sect cont inline">
        <div class="solid-border-grey first-sect-box">
          <div class="solid-border-grey first-sect-box-child">
            <form action="" method="post" id="form" accept-charset='UTF-8'>
              Enter your: 
              <input type="text" name="username" placeholder="Choose a username" maxlength="50"  />
              <input type="password" name="password" placeholder="enter your password" maxlength="50" />
              <input type="submit" value="send" name="submitBtn">
            </form>
            <a href="../login"><h4>Or Login</h4></a>
          </div>
        </div>
      </section>
  </body>
</html>
