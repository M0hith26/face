<?php
    if(isset($_SESSION['email'])){
        header('location:products.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SignUp Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- JS and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>
        <?php
            include 'header.php';
        ?>
        <div class="container " style="margin: 150px 0px 50px 90px;">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <h1>SIGN UP</h1>
                    <form action="signup_script.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" class="form-control">
                            <?php
                                if(isset($_GET["m2"])){
                                    echo $_GET['m2'];
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="contact" placeholder="Contact" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="city" placeholder="City" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" placeholder="Address" class="form-control">
                        </div>
                        <div class="form-group btn btn-default">
                            <input type="submit" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php 
            include 'footer.php';
        ?>
    </body>
</html>
