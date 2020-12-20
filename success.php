<?php
    include 'common.php';
    if(!isset($_SESSION['email'])){
         header('location:index.php');
    }

    $user_id=$_SESSION['user_id'];
    $id_string=$_GET['id'];

    $query="UPDATE users_items SET status='Confirmed' WHERE user_id=" .$user_id. " AND item_id IN($id_string) and status='Added to cart'";
    $result=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store|Success Page</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- JS and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container" style="margin-top: 200px;">
            <div class="jumbotron">
                <p>
                    Your order is confirmed<br>
                    Thank you for shopping with us.<br>
                    <a href="products.php">Click here</a> to purchase any other item.
                </p>
            </div>
        </div>

    </body>
</html>