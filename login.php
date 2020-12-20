<?php
    include 'common.php';
    if(isset($_SESSION['email'])){
        header('location:products.php');
    }
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
        <?php
            include 'header.php';
        ?>
        <div class="container" style="margin-top: 150px; margin-bottom:50px;" >
           <div class="row">
               <div class="col-xs-offset-3 col-xs-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>LOGIN</h1>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form action="login_submit.php" method="POST">
                                <div class="form-group">
                                    <input type="email" placeholder="email" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="password" class="form-control" name="password">
                                </div>
                                <div class="form-group btn btn-default">
                                    <input type="submit" name="submit">
                                    <?php
                                        if(isset($_GET["m3"])){
                                            echo $_GET['m3'];
                                        }
                                    ?>
                                </div>
                            </form>
                            <div>
                                <div class="panel-footer">
                                    <p>Don't have an account?<a href="signup.php">Register</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>          
        </div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>