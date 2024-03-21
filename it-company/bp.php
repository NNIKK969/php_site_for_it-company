<?php
        session_start();
        require 'check_if_added.php';
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
            <link rel="stylesheet" href="css/style.css" type="text/css">
        </head>
        <body>
            <div>
                <?php
                    require 'header.php';
                ?>
                <div class="container">
                <div class="jumbotron">
                        <h1>Блоки питания</h1>
                        
                    </div>
                </div>
            <div class="container">
                <div class="row">


                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="img/ps1.png" alt="HXR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>DEEPCOOL PQ1000M</h3>
                                    <p>Цена 14299 руб</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add_bp.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                            <a href="#">
                                <img src="img/ps2.png" alt="PINK">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>DEEPCOOL PF750</h3>
                                    <p>Цена 5199 руб</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add_bp.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
