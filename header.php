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

        
    </head>
    <body>
        <nav>
            <div class="container navbar navbar-inverse navbar-fixed-top">
                <div class="nav navbar-header">
                    <a href="index.php" class="navbar-brand">Lifestyle Store</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="MyNav">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                            if(isset($_SESSION['email'])){
                        ?>
                            <li>
                                <a href="cart.php"><sapn class="glyphicon glyphicon-shopping-cart">cart</sapn></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog">settings</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="MyProfile.php">My Profile</a>
                                    </li>
                                    <li>
                                        <a href="changePassword.php">changePassword</a>
                                    </li>
                                    <li>
                                        <a href="MyOrders.php">My Orders</a>
                                    </li>
                                    <li>
                                        <a href="aboutus.php">AboutUs</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="logout.php"><span class="glyphicon glyphicon-log-out">Logout</span></a>
                            </li>
                    </ul>
                        <?php
                            }else{
                        ?>
                    <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="login.php"><span class="glyphicon glyphicon-log-in">Login</span></a>
                            </li>
                            <li>
                                <a href="signup.php"><span class="glyphicon glyphicon-user">signUp</span></a>
                            </li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>