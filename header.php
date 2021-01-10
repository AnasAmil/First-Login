<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <header>
      <nav>
        <a  href="#" class="header-logo">TA3KHTEK</a>
        <ul class="navBar">
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">About me</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <div class="login-container">
          <?php
          if (isset($_SESSION['userId'])) {
            echo '<form  class="logout-text" action="includes/logout.inc.php" method="post">
              <button type="submit" name="Logout-sumit">Logout</button>
            </form>';

          }
          else {
            echo '<form class="LoginForm" action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/E-mail...">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="Login-submit">Login</button>
            </form>
            <a href="signup.php" class="signup-text">Signup</a>';
          }
           ?>


        </div>
      </nav>
    </header>
