<?php
    session_start();
    include "config.php";
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="shortcut icon" href="img/plushie-medium.png" />
      <title><?php echo $lang['title'] ?></title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- latest compiled and minified CSS -->
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
      <!-- jquery library -->
      <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
      <!-- Latest compiled and minified javascript -->
      <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
      <!-- External CSS -->
      <link rel="stylesheet" href="css/style.css" type="text/css">
   </head>
   <body>
      <div>
         <?php
            require 'header.php';
            ?>
         <div class="container">
            <div class="jumbotron">
               <h1><?php echo $lang['heading2'] ?></h1>
               <p><?php echo $lang['subheading'] ?></p>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                     <a href="cart.php">
                     <img src="img/wedding-set.jpg" alt="Wedding-Set">
                     </a>
                     <center>
                        <div class="caption">
                           <h3><?php echo $lang['item1'] ?></h3>
                           <p><?php echo $lang['price1'] ?></p>
                           <?php if(!isset($_SESSION['email'])){  ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block"><?php echo $lang['button1'] ?></a></p>
                           <?php
                              }
                              else{
                                  if(check_if_added_to_cart(1)){
                                      echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                  }else{
                                      ?>
                           <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary"><?php echo $lang['button2'] ?></a>
                           <?php
                              }
                              }
                              ?>
                        </div>
                     </center>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                     <a href="cart.php">
                     <img src="img/bakery-playset.jpg" alt="Hello Kitty Bakery Playset">
                     </a>
                     <center>
                        <div class="caption">
                           <h3><?php echo $lang['item2'] ?></h3>
                           <p><?php echo $lang['price2'] ?></p>
                           <?php if(!isset($_SESSION['email'])){  ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block"><?php echo $lang['button1'] ?></a></p>
                           <?php
                              }
                              else{
                                  if(check_if_added_to_cart(2)){
                                      echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                  }else{
                                      ?>
                           <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary"><?php echo $lang['button2'] ?></a>
                           <?php
                              }
                              }
                              ?>
                        </div>
                     </center>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                     <a href="cart.php">
                     <img src="img/hello-kitty-doll.jpg" alt="Hello Kitty Princess Plushie">
                     </a>
                     <center>
                        <div class="caption">
                           <h3><?php echo $lang['item3'] ?></h3>
                           <p><?php echo $lang['price3'] ?></p>
                           <?php if(!isset($_SESSION['email'])){  ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block"><?php echo $lang['button1'] ?></a></p>
                           <?php
                              }
                              else{
                                  if(check_if_added_to_cart(3)){
                                      echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                  }else{
                                      ?>
                           <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary"><?php echo $lang['button2'] ?></a>
                           <?php
                              }
                              }
                              ?>
                        </div>
                     </center>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                     <a href="cart.php">
                     <img src="img/olympic-kitty-2.jpg" alt="Hello Kitty Olmpic Winner">
                     </a>
                     <center>
                        <div class="caption">
                           <h3><?php echo $lang['item4'] ?></h3>
                           <p><?php echo $lang['price4'] ?></p>
                           <?php if(!isset($_SESSION['email'])){  ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block"><?php echo $lang['button1'] ?></a></p>
                           <?php
                              }
                              else{
                                  if(check_if_added_to_cart(4)){
                                      echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                  }else{
                                      ?>
                           <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary"><?php echo $lang['button2'] ?></a>
                           <?php
                              }
                              }
                              ?>
                        </div>
                     </center>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                     <a href="cart.php">
                     <img src="img/chain.jpg" alt="Hello Kitty Pendant">
                     </a>
                     <center>
                        <div class="caption">
                           <h3><?php echo $lang['item5'] ?></h3>
                           <p><?php echo $lang['price5'] ?></p>
                           <?php if(!isset($_SESSION['email'])){  ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block"><?php echo $lang['button1'] ?></a></p>
                           <?php
                              }
                              else{
                                  if(check_if_added_to_cart(5)){
                                      echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                  }else{
                                      ?>
                           <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary"><?php echo $lang['button2'] ?></a>
                           <?php
                              }
                              }
                              ?>
                        </div>
                     </center>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                     <a href="cart.php">
                     <img src="img/box-4-set.jpg" alt="Set of 4 boxes">
                     </a>
                     <center>
                        <div class="caption">
                           <h3><?php echo $lang['item6'] ?></h3>
                           <p><?php echo $lang['price6'] ?></p>
                           <?php if(!isset($_SESSION['email'])){  ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block"><?php echo $lang['button1'] ?></a></p>
                           <?php
                              }
                              else{
                                  if(check_if_added_to_cart(6)){
                                      echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                  }else{
                                      ?>
                           <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary"><?php echo $lang['button2'] ?></a>
                           <?php
                              }
                              }
                              ?>
                        </div>
                     </center>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                     <a href="cart.php">
                     <img src="img/sling-bag.JPG" alt="Hello Kitty beaded bag">
                     </a>
                     <center>
                        <div class="caption">
                           <h3><?php echo $lang['item7'] ?></h3>
                           <p><?php echo $lang['price7'] ?></p>
                           <?php if(!isset($_SESSION['email'])){  ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block"><?php echo $lang['button1'] ?></a></p>
                           <?php
                              }
                              else{
                                  if(check_if_added_to_cart(7)){
                                      echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                  }else{
                                      ?>
                           <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary"><?php echo $lang['button2'] ?></a>
                           <?php
                              }
                              }
                              ?>
                        </div>
                     </center>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                     <a href="cart.php">
                     <img src="img/triple-lacquer-box.jpg" alt="triple-lacquer-box">
                     </a>
                     <center>
                        <div class="caption">
                           <h3><?php echo $lang['item8'] ?></h3>
                           <p><?php echo $lang['price8'] ?></p>
                           <?php if(!isset($_SESSION['email'])){  ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block"><?php echo $lang['button1'] ?></a></p>
                           <?php
                              }
                              else{
                                  if(check_if_added_to_cart(8)){
                                      echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                  }else{
                                      ?>
                           <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary"><?php echo $lang['button2'] ?></a>
                           <?php
                              }
                              }
                              ?>
                        </div>
                     </center>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                     <a href="cart.php">
                     <img src="img/pink-sweatshirt.jpg" alt="Pink sweatshirt">
                     </a>
                     <center>
                        <div class="caption">
                           <h3><?php echo $lang['item9'] ?></h3>
                           <p><?php echo $lang['price9'] ?></p>
                           <?php if(!isset($_SESSION['email'])){  ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block"><?php echo $lang['button1'] ?></a></p>
                           <?php
                              }
                              else{
                                  if(check_if_added_to_cart(9)){
                                      echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                  }else{
                                      ?>
                           <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary"><?php echo $lang['button2'] ?></a>
                           <?php
                              }
                              }
                              ?>
                        </div>
                     </center>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                     <a href="cart.php">
                     <img src="img/black-cardigan.jpg" alt="black-cardigan">
                     </a>
                     <center>
                        <div class="caption">
                           <h3><?php echo $lang['item10'] ?></h3>
                           <p><?php echo $lang['price10'] ?></p>
                           <?php if(!isset($_SESSION['email'])){  ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block"><?php echo $lang['button1'] ?></a></p>
                           <?php
                              }
                              else{
                                  if(check_if_added_to_cart(10)){
                                      echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                  }else{
                                      ?>
                           <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary"><?php echo $lang['button2'] ?></a>
                           <?php
                              }
                              }
                              ?>
                        </div>
                     </center>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                     <a href="cart.php">
                     <img src="img/snood.jpg" alt="snood">
                     </a>
                     <center>
                        <div class="caption">
                           <h3><?php echo $lang['item11'] ?></h3>
                           <p><?php echo $lang['price11'] ?></p>
                           <?php if(!isset($_SESSION['email'])){  ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block"><?php echo $lang['button1'] ?></a></p>
                           <?php
                              }
                              else{
                                  if(check_if_added_to_cart(11)){
                                      echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                  }else{
                                      ?>
                           <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary"><?php echo $lang['button2'] ?></a>
                           <?php
                              }
                              }
                              ?>
                        </div>
                     </center>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                     <a href="cart.php">
                     <img src="img/bomber-jacket.jpg" alt="bomber">
                     </a>
                     <center>
                        <div class="caption">
                           <h3><?php echo $lang['item12'] ?></h3>
                           <p><?php echo $lang['price12'] ?></p>
                           <?php if(!isset($_SESSION['email'])){  ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block"><?php echo $lang['button1'] ?></a></p>
                           <?php
                              }
                              else{
                                  if(check_if_added_to_cart(12)){
                                      echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                  }else{
                                      ?>
                           <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary"><?php echo $lang['button2'] ?></a>
                           <?php
                              }
                              }
                              ?>
                        </div>
                     </center>
                  </div>
               </div>
            </div>
         </div>
         <br><br><br><br><br><br><br><br>
         
         <div class= "footer">
           <a href = "products.php?lang=en"><?php echo $lang['lang-en'] ?> </a> | <a href = "products.php?lang=jp"> <?php echo $lang['lang-jp'] ?></a>
         </div>
         
      </div>
   </body>
</html>