<?php 
    include_once 'common.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- JS and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            a{
                text-decoration: none;
            }
        </style>

    </head>
    <body>
        <?php
            include 'header.php';
            include 'check-if-added.php';
        ?>
        
        <?php
            if(isset($_SESSION['email'])){
        ?>
        <div class="container jumbotron">
            <?php
                $user_id=$_SESSION['user_id'];
        
                $query="SELECT name FROM users WHERE id=' " .$user_id. " ' ";
                $result=mysqli_query($con,$query);
                        
                $row=mysqli_fetch_array($result);
                        
                echo "<h2>WELCOME {$row['name']}!</h2>";
            ?>
        </div>
        <?php 
            } 
        ?>

        <div class="container " style="margin-top: 100px;">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store</h1>
                <p>We have the camera's shirts and watches for you. No need to hunt around. We have all in one place.</p>
            </div>
        </div>

        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="view.php?id=1">
                            <img src="images/5.jpg">
                            <div class="caption">
                                <h3>Cannon Eos</h3>
                                <p>price: 36000.00</p>
                                <?php
                                    if(!isset($_SESSION["email"])){
                                ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    }else{
                                        if(check_if_added_to_cart(1)){
                                            echo '<a href=# class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        }
                                        else{
                                ?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </a>
                    </div>
                </div>
                    
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="view.php?id=2">
                            <img src="images/2.jpg">
                            <div class="caption">
                                <h3>Sony DSLR</h3>
                                <p>price: 40000.00</p>
                                <?php
                                    if(!isset($_SESSION["email"])){
                                ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    }else{
                                        if(check_if_added_to_cart(2)){
                                            echo '<a href=# class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        }
                                        else{
                                ?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="view.php?id=3">
                            <img src="images/3.jpg">
                            <div class="caption">
                                <h3>Mikon DSLR</h3>
                                <p>price: 50000.00</p>
                                <?php
                                    if(!isset($_SESSION["email"])){
                                ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    }else{
                                        if(check_if_added_to_cart(3)){
                                            echo '<a href=# class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        }
                                        else{
                                ?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="view.php?id=4">
                            <img src="images/4.jpg">
                            <div class="caption">
                                <h3>Olympus DSLR</h3>
                                <p>price: 80000.00</p>
                                <?php
                                    if(!isset($_SESSION["email"])){
                                ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    }else{
                                        if(check_if_added_to_cart(4)){
                                            echo '<a href=# class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        }
                                        else{
                                ?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="view.php?id=5">
                            <img src="images/9.jpg">
                            <div class="caption">
                                <h3>Titan Model #301</h3>
                                <p>price: 13000.00</p>
                                <?php
                                    if(!isset($_SESSION["email"])){
                                ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    }else{
                                        if(check_if_added_to_cart(5)){
                                            echo '<a href=# class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        }
                                        else{
                                ?>
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="view.php?id=6">
                            <img src="images/10.jpg">
                            <div class="caption">
                                <h3>Titan Model #201</h3>
                                <p>price: 3000.00</p>
                                <?php
                                    if(!isset($_SESSION["email"])){
                                ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    }else{
                                        if(check_if_added_to_cart(6)){
                                            echo '<a href=# class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        }
                                        else{
                                ?>
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="view.php?id=7">
                            <img src="images/11.jpg">
                            <div class="caption">
                                <h3>HMT Milan</h3>
                                <p>price: 8000.00</p>
                                <?php
                                    if(!isset($_SESSION["email"])){
                                ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    }else{
                                        if(check_if_added_to_cart(7)){
                                            echo '<a href=# class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        }
                                        else{
                                ?>
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="view.php?id=8">
                            <img src="images/12.jpg">
                            <div class="caption">
                                <h3>FaburLuba #111</h3>
                                <p>price: 18000.00</p>
                                <?php
                                    if(!isset($_SESSION["email"])){
                                ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    }else{
                                        if(check_if_added_to_cart(8)){
                                            echo '<a href=# class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        }
                                        else{
                                ?>
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="view.php?id=9">
                            <img src="images/8.jpg">
                            <div class="caption">
                                <h3>H&W</h3>
                                <p>price: 800.00</p>
                                <?php
                                    if(!isset($_SESSION["email"])){
                                ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    }else{
                                        if(check_if_added_to_cart(9)){
                                            echo '<a href=# class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        }
                                        else{
                                ?>
                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="view.php?id=10">
                            <img src="images/6.jpg">
                            <div class="caption">
                                <h3>Luis Phill</h3>
                                <p>price: 1000.00</p>
                                <?php
                                    if(!isset($_SESSION["email"])){
                                ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    }else{
                                        if(check_if_added_to_cart(10)){
                                            echo '<a href=# class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        }
                                        else{
                                ?>
                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="view.php?id=11">
                            <img src="images/13.jpg">
                            <div class="caption">
                                <h3>John Zoc</h3>
                                <p>price: 1500.00</p>
                                <?php
                                    if(!isset($_SESSION["email"])){
                                ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    }else{
                                        if(check_if_added_to_cart(11)){
                                            echo '<a href=# class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        }
                                        else{
                                ?>
                                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <a href="view.php?id=12">
                            <img src="images/14.jpg">
                            <div class="caption">
                                <h3>Jhalsani</h3>
                                <p>price: 1300.00</p>
                                <?php
                                    if(!isset($_SESSION["email"])){
                                ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                                    }else{
                                        if(check_if_added_to_cart(12)){
                                            echo '<a href=# class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        }
                                        else{
                                ?>
                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php 
            include 'footer.php';
        ?>
    </body>
</html>