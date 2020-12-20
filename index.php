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
            .banner_image{
            padding-top: 75px;
            padding-bottom: 50px;
            text-align: center;
            color: #f8f8f8;
            background: url(images/intro-bg.jpg) no-repeat center;
            background-size: cover;
            }

            .banner_content{
                position: relative;
                padding-top: 6%;
                padding-bottom: 6%;
                margin-top: 12%;
                margin-bottom: 12%;
                background-color: rgba(0,0,0,0.8);
                max-width: 660px;
            }
        </style>
    

    </head>
    <body>
        <?php
            include 'header.php';
        ?>
        <?php
            if (isset($_SESSION['email'])){
                header('location:products.php');
            }
        ?>

        <div class="banner_image container">
            <div class="banner_content container">
                <a href="login.php" class="btn btn-danger btn-lg active">Shop Now</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/shirt.jpg">
                        <div class="caption">
                            <h3>Shirts</h3>
                            <p>Our exiqisite collection of shirts</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/camera.jpg">
                        <div class="caption">
                            <h3>Camera</h3>
                            <p>Choose the best available from the world</p>
                        </div>
                    </div>
                </div>    
                
                <div class="col-lg-4 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/watch.jpg">
                        <div class="caption">
                            <h3>Watches</h3>
                            <p>Original watches from the best brands</p>
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