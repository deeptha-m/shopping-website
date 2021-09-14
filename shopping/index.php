<?php
session_start();
include "config.php";
?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="shortcut icon" href="img/lifestyleStore.png" />
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
         <div id="bannerImage">
            <div class="container">
               <center>
                  <div id="bannerContent">
                     <button class= "btn btn-link btn-lg btn-block" onclick="typeWriter()">
                        <h1><?php echo $lang['heading'] ?></h1>
                     </button>
                     <p id="demo"></p>
                     <a href="products.php" class="btn btn-danger"><?php echo $lang['shop'] ?></a>
                  </div>
               </center>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xs-4">
                  <div  class="thumbnail">
                     <a href="products.php">
                     <img src="img/hello-kitty-doll.jpg" alt="doll">
                     </a>
                     <center>
                        <div class="caption">
                           <p id="autoResize"><?php echo $lang['toy'] ?></p>
                           <p><?php echo $lang['toyD'] ?></p>
                        </div>
                     </center>
                  </div>
               </div>
               <div class="col-xs-4">
                  <div class="thumbnail">
                     <a href="products.php">
                     <img src="img/bow-purse.jpg" alt="purse">
                     </a>
                     <center>
                        <div class="caption">
                           <p id="autoResize"><?php echo $lang['Accessories'] ?></p>
                           <p><?php echo $lang['AccesoriesD'] ?></p>
                        </div>
                     </center>
                  </div>
               </div>
               <div class="col-xs-4">
                  <div class="thumbnail">
                     <a href="products.php">
                     <img src="img/black-cardigan.jpg" alt="Scarf">
                     </a>
                     <center>
                        <div class="caption">
                           <p id="autoResize"><?php echo $lang['Apparel'] ?></p>
                           <p><?php echo $lang['ApparelD'] ?></p>
                        </div>
                     </center>
                  </div>
               </div>
            </div>
         </div>
         <br><br> <br><br><br><br>
         <div class= "footer">
         <a href = "index.php?lang=en"><?php echo $lang['lang-en'] ?> </a> | <a href = "index.php?lang=jp"> <?php echo $lang['lang-jp'] ?></a>
         </div>
         
      </div>
      <script>
         var i = 0;
         var txt = "<?php echo $lang['text-mov'] ;?>" /* The text */
         var speed = 25; /* The speed/duration of the effect in milliseconds */
         
         function typeWriter() {
           if (i < txt.length) {
             document.getElementById("demo").innerHTML += txt.charAt(i);
             i++;
             setTimeout(typeWriter, speed);
           }
         }
      </script>
   </body>
</html>