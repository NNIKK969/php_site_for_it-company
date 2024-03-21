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
                        <h1>Майнинг фермы для старта в мир криптовалют</h1>
                        
                    </div>
                </div>
            <div class="container">
                <div class="row">


                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="img/дешевый.jpg" >
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Старт</h3>
                                    <p>Цена 200 000 руб</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add_cooling.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/дешевый.jpg" >
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Эконом</h3>
                                    <p>Цена 250 000 руб</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add_cooling.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/дешевый.jpg" >
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Эко</h3>
                                    <p>Цена 300 000 руб</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add_cooling.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
