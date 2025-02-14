<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Smart Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style2.css" type="text/css">
        <link rel="stylesheet" href="css/style.css">
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
                       <h1>Мы продаем комплектующие для компьютеров.</h1>
                       <a href="products.php" class="btn btn-danger" style="font-size: 24px; background-color: rgba(11, 99, 246, 1); border-color: rgba(11, 99, 246, 1);">Каталог</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="low.php">
                                <img src="img/дешевый.jpg" alt="">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Фермы для старта</p>
                                        
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="med.php">
                                <img src="img/средний.png" alt="">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Фермы для опытных</p>
                                        
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="high.php">
                                <img src="img/дорогой.jpg" alt="">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Эффективные фермымы</p>
                                        
                                </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Авторские права Smart Store защищены.</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>