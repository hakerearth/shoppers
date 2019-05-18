<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>shoppers.com..</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <style>
        <?php include 'css/style.css'; ?>
        /* <link rel="stylesheet" href="css/foundation.css" /> */
    </style>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a class="shop" href="index.php">Shoppers.com...</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>



<br><br><br><br><br><br><br><br><br><br><br>
    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p> <strong style="font-size:1.3rem;"> Shoppers.com Shop is a project on E-Commerce Website. All products listed are fake. This project just gives a preview to what a real world implementation of E-Commerce Website will look like. Well if you do like the website then visit</strong>
        <a href="index.php" target="_blank" title=""> <strong style="font-size:1.5rem;" >Shoppers.com</strong>  </a>.</p>
        <br><br><br><br><br><br><br><br><br><br><br><br>

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; <strong>Shoppers.com</strong>   All Rights Reserved.</p>
        </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
