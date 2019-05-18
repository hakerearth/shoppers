<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shoppers.com</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <style>
        <?php include 'css/form-validation.css'; ?>
        /* <link rel="stylesheet" href="css/foundation.css" /> */
    </style>
    <script src="js/vendor/modernizr.js"></script>
    <style>
        <?php include 'css/style.css'; ?>
        /* <link rel="stylesheet" href="css/foundation.css" /> */
    </style>
    <link rel="stylesheet" href="/css/style.css">

    <style >
    <?php include 'css/thankyou.css'; ?>
    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--  BOOTSTRAP  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- script for log in sin up button -->


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
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li class="active"><a href="cart.php">View Cart</a></li>
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





    <?php

    $total=$_SESSION['total_cost'];

    $temp_address=$_SESSION['temp_address'];

    echo "<br >";
    echo "<br >";
    echo "<br >";
    echo "<br >";

    echo '<h1 style="text-align:center;  color:red;  " > <strong>Thankyou for Shopping with us   </strong> </h1> ';
    echo "<br >";
    echo "<br >";
    echo "<br >";
    echo "<br >";
    echo '<h1 style="text-align:center;  color:red;  " > <strong>Congrats your Order is successfully placed   </strong> </h1> ';

    echo "<br >";
    echo "<br >";
    echo "<br >";



    echo' <h2 style="margin-left:800px ;" > <strong>Billing address - > </strong> </h2> '."$temp_address"   ;

    echo "<br >";
    echo "<br >";

    echo' <h2  style="margin-left:890px ;"> <strong>Grand Total - > </strong> </h2>  '."$currency$total" ;

    echo "<br >";
    echo "<br >";
    echo "<br >";
    echo "<br >";



    echo ' <h4 style="text-align:center;" >Check out your Orders <a href="orders.php"> <strong>here</strong> </a></h4> ';
    echo ' <h4 style="text-align:center;" >Continue to Shopping <a href="products.php"> <strong>Continue shopping...</strong>  </a></h4> ';


    echo '<hr >';



   ?>




   <!-- <div class="row">

     <div class="col-md-12 ">
       <h4 style="margin-left:800px ;" > <strong>Billing address - > </strong> </h4>
     </div>

   </div>
   <div class="row">

     <div class="col-md-12 ">
       <h4  style="margin-left:800px ;"> <strong>Grand Total - > </strong> </h4>
     </div>

   </div> -->

   <br>
   <br>
   <br>
   <br>
   <br>


            <div class="row" style="margin-top:10px;">
              <div class="small-12">




                <footer style="margin-top:10px;">
                   <p style="text-align:center; font-size:0.8em;clear:both;">&copy; Shoppers.com Shop. All Rights Reserved.</p>
                </footer>

              </div>
            </div>





            <script src="js/vendor/jquery.js"></script>
            <script src="js/foundation.min.js"></script>
            <script>
              $(document).foundation();
            </script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script>
              // Example starter JavaScript for disabling form submissions if there are invalid fields
              (function() {
                'use strict';

                window.addEventListener('load', function() {
                  // Fetch all the forms we want to apply custom Bootstrap validation styles to
                  var forms = document.getElementsByClassName('needs-validation');

                  // Loop over them and prevent submission
                  var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                      if (form.checkValidity() === false) {
                        event.preventDefault();
                      //  event.stopPropagation();
                      }
                      form.classList.add('was-validated');
                    }, false);
                  });
                }, false);
              })();
            </script>



          </body>
        </html>
