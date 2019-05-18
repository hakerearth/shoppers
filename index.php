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
    <title >Shoppers.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/foundation.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <script src="js/vendor/modernizr.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style>
        <?php include 'css/style.css'; ?>
        /* <link rel="stylesheet" href="css/foundation.css" /> */
    </style>
    <link rel="stylesheet" href="/css/style.css">

    <!--  BOOTSTRAP  -->

    <script src="js/vendor/modernizr.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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



<br>


      <div id="title-carousel" class="carousel slide" data-ride="false">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="title-image" src="images/newimg.png" alt="lady-profile">
          </div>
          <div class="carousel-item">
            <img class="title-image" src="images/my.png" alt="dining-image">
          </div>
        </div>
        <a class="title-carousel1 carousel-control-prev" href="#title-carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="title-carousel2 carousel-control-next" href="#title-carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>

      <section class="feature-area section_gap_bottom_custom">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="single-feature">
              <!-- <a href="#" class="title">
                <i class="flaticon-money"></i> -->
                <i class="fas fa-hand-holding-usd fa-4x "></i>
                <h3>Money back gurantee</h3>
              <!-- </a> -->
              <p>Shall open divide a one</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="single-feature">
              <!-- <a href="#" class="title"> -->
                <i class="fas fa-truck fa-4x"></i>
                <h3>Free Delivery</h3>
              <!-- </a> -->
              <p>Shall open divide a one</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="single-feature">
              <!-- <a href="#" class="title">
                <i class="flaticon-support"></i> -->
                <i class="fas fa-headset fa-4x"></i>
                <h3>Alway support</h3>
              <!-- </a> -->
              <p>Shall open divide a one</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="single-feature">
              <!-- <a href="#" class="title">
                <i class="flaticon-blockchain"></i> -->
                <i class="fas fa-shield-alt fa-4x"></i>
                <h3>Secure payment</h3>
              <!-- </a> -->
              <p>Shall open divide a one</p>
            </div>
          </div>
        </div>
      </div>
    </section>



      <section id="features">
        <div class="row">
          <div class="feature-box col-lg-4">
            <i class="icon fas fa-check-circle fa-4x"></i>
            <h3>Easy to use.</h3>
            <p>Order online, we delivered at your door step.</p>
          </div>

          <div class="feature-box col-lg-4">
            <i class="icon fas fa-bullseye fa-4x"></i>
            <h3>Large variety</h3>
            <p>We have all the products, the greatest varieties.</p>
          </div>
          <div class="feature-box col-lg-4">
            <i class=" icon fas fa-heart fa-4x"></i>
            <h3>Guarantee.</h3>
            <p>10 days Replacement or Return Guarantee</p>
          </div>
      </section>

      <br><br><br><br><br><br>


      <section id="Category">
        <div class="category-text">
          <p></p>
          <h2>We have Large Categories</h2>
        </div>

        <div class="row category-row">
          <div class="col-lg-4 category-col">
            <img class="category-img1" src="https://images-eu.ssl-images-amazon.com/images/G/31/img19/Cameras/Shutterbug/Fest/March19/CE-elec_520x520._CB453990316_SY260_.jpg" alt="Electronics">

            <p class="category-name"><a href="category.php?cid=1"> Electronics </a></p>

            <!-- "update-cart.php?action=add&id='.$obj->id.'" -->
          </div>
          <div class="col-lg-4 category-col">
            <img class="category-img2" src="https://images-na.ssl-images-amazon.com/images/I/61JO7x8gk%2BL._SX422_BO1,204,203,200_.jpg" alt="">
            <p class="category-name"> <a href="category.php?cid=3">Books</a> </p>
          </div>
          <div class="col-lg-4 category-col">
            <img class="category-img3" src="https://i5.walmartimages.com/dfw/4ff9c6c9-dbef/k2-_214b22d8-b365-4459-8add-74ac98daea42.v1.jpg?odnWidth=282&odnHeight=282&odnBg=ffffff" alt="">
               <p class="category-name"> <a href="category.php?cid=2">Clothing</a> </p>
          </div>
          </div>
          <div class="row category-row2">
          <div class="col-lg-12 category-col">
            <img class="category-img4" src="https://i5.walmartimages.com/dfw/4ff9c6c9-9056/k2-_d0a667b0-c3d2-4120-a005-9f2cc905c729.v1.jpg?odnWidth=282&odnHeight=282&odnBg=ffffff" alt="">
            <p class="category-name"> <a href="category.php?cid=4">Shoes</a> </p>

          </div>
        </div>

      </section>




      <br><br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><br>


<!--
    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; Shoppers.com Shop. All Rights Reserved.</p>
        </footer>

      </div>
    </div> -->


    <div class="newrow" style="margin-top:10px;">


        <footer class="footer-area section_gap myfooter">
          <div class="container">
            <div class="row">
              <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Top Products</h4>
                <ul>
                  <li><a href="#">Managed Website</a></li>
                  <li><a href="#">Manage Reputation</a></li>
                  <li><a href="#">Power Tools</a></li>
                  <li><a href="#">Marketing Service</a></li>
                </ul>
              </div>
              <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Quick Links</h4>
                <ul>
                  <li><a href="#">Jobs</a></li>
                  <li><a href="#">Brand Assets</a></li>
                  <li><a href="#">Investor Relations</a></li>
                  <li><a href="#">Terms of Service</a></li>
                </ul>
              </div>
              <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Features</h4>
                <ul>
                  <li><a href="#">Jobs</a></li>
                  <li><a href="#">Brand Assets</a></li>
                  <li><a href="#">Investor Relations</a></li>
                  <li><a href="#">Terms of Service</a></li>
                </ul>
              </div>
              <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Resources</h4>
                <ul>
                  <li><a href="#">Guides</a></li>
                  <li><a href="#">Research</a></li>
                  <li><a href="#">Experts</a></li>
                  <li><a href="#">Agencies</a></li>
                </ul>
              </div>
              <div class="col-lg-4 col-md-6 single-footer-widget">
                <h4>Newsletter</h4>
                <p>You can trust us. we only send promo offers,</p>
                <div class="form-wrap" id="mc_embed_signup">
                  <form target="_blank" action="index.php"
                    method="get" class="form-inline">
                    <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Your Email Address '" required="" type="email">
                    <button class="click-btn btn btn-default">Subscribe</button>
                    <div style="position: absolute; left: -5000px;">
                      <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                    </div>

                    <div class="info"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="footer-bottom row align-items-center">
              <p class="footer-text m-0 col-lg-8 col-md-12">
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="fa fa-heart-o" aria-hidden="true"></i> Shoppers.com
      </p>
              <div class="col-lg-4 col-md-12 footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
              </div>
            </div>
          </div>
        </footer>


    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
