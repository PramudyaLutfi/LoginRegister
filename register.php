<?php
require_once "controller.php";
if(isset($_SESSION["success_login"])){
  header('location:home.php');
  exit();
}
// $is_page_refreshed = (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] == 'max-age=0');
  
// if($is_page_refreshed ) {
//   header('Location: '.$_SERVER['PHP_SELF']);
//   exit();
// }
?>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   </head>
<body style="background-color: #ffff">
  <div class="wrapper">
    <h2>Registration</h2>
    <?php
      if(count($errors) == 1){
          ?>
          <p style="color:red">
              <?php
              foreach($errors as $showerror){
                  echo $showerror;
              }
              ?>
          </p>
          <?php
      }elseif(count($errors) > 1){
          ?>
              <?php
              foreach($errors as $showerror){
                  ?>
                  <li style="color:red"><?php echo $showerror; ?></li>
                  <?php
              }
              ?>
          <?php
      }
    ?>
    <form action="register.php" method="post">
      <div class="input-box">
        <input type="text" placeholder="Enter your username" name="username" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name="password" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" name="cpassword" required>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now" name="signup">
      </div>
      <div class="text">
        <h3>Sudah ada akun? <a href="index.php">Login disini</a></h3>
      </div>
    </form>
  </div>
</body>
</html>
