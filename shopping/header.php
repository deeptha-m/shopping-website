<?php
include "config.php";
?>
<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="index.php" class="navbar-brand"><?php echo $lang['title'] ?></a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> <?php echo $lang['cart'] ?></a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> <?php echo $lang['setting'] ?></a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> <?php echo $lang['logout'] ?></a></li>
                           <?php
                           }else{
                            ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span><?php echo $lang['signup'] ?></a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><?php echo $lang['login'] ?></a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>