<!-- <?php 
  //   session_start();
  // $name = trim(stripslashes($_POST['fullname']));
  // $ep = trim(stripslashes($_POST['emailPhone']));
  // echo "sss";
  // //check phone number for 10 digits
  // if (is_numeric($ep)) {
  //   if (!preg_match('/~\d{10}$/',$ep)) {
  //     $error = "invalid phone number.";
  //   }
  //   $eptype = "phone";
  // }
  // #check valid email format
  // else {
  //   if (!filter_var($ep, FILTER_VALIDATE_EMAIL)) {
  //     $error = "invalid email address.";
  //   }
  //   $eptype = "email";
  // }
?> -->
<?php 
session_start();
if (isset($_POST['enter'])) {
if ($_POST['name']!="") {
$_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
}
}
else {
  echo '<span class="error">Please type in a name <h1>&#34251;</h1></span>';
  loginForm();
}



function loginForm(){
echo '
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="./css/style.css" />
      <title>ChatMe - Login</title>
    </head>
    <body>
      <main class="">
        <section class="first-sect cont inline">
          <div class="solid-border-grey first-sect-box">
            <div class="solid-border-grey first-sect-box-child">
              <form action="./index.php" method="post" id="form">
                Enter your: 
                <input type="text" id="first-inputbox" placeholder="&mdash; Enter your first name" name="name" />
                 <!-- <input type="text" name="emailPhone" placeholder="Enter your Phone number or email address" id="email-phone" /> -->
                <input type="submit" value="enter" name="enter" id="enter">
              </form>
            </div>
          </div>
        </section>
        <section class="second-sect cont inline">
          <a href="../reg"><h1>Or Register</h1></a>
          <h1>You Have to login :-)</h1>
        </section>
      </main>
    </body>
  </html>
';
}
?>