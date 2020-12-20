<?php
    include 'common.php';
?>

<?php
    function num_products($user_id){
        $con=mysqli_connect("localhost","root","","store");
        $query="SELECT * FROM users_items WHERE user_id=' ".$user_id." ' AND status='Confirmed' ";
        $submit=mysqli_query($con,$query);

        $num_of_rows=mysqli_num_rows($submit);

        return $num_of_rows;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store|MyOrders Page</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- JS and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            img{
                float: left;
            }

            .flow{
                float: right;
                margin-top: 30px;
            }
        </style>
    </head>
    <body>
        <?php
            if(!isset($_SESSION['email'])){
                $m="<span class='red'>Only Logged users can visit</span>";
                header('location:login.php?m'.$m);
            }
        ?>
        <?php
            include 'header.php';
        ?>

        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <img src="images/profile.jpg" height="500px" width="400px"> 
                <div class="col-xs-offset-3 col-xs-4">
                    <?php
                        $user_id=$_SESSION['user_id'];

                        $query="SELECT * FROM users WHERE id=' ".$user_id." ' ";
                        $result=mysqli_query($con,$query);

                        $row=mysqli_fetch_array($result);

                        $num_of_products_purchased=num_products($user_id);

                        echo
                        "<div class='flow panel panel-info'>
                            <div class='panel-heading'>
                                <h2>USER INFO</h2>
                            </div>
                            <div class='panel-body'>
                                <h3>NAME: {$row['name']} <h3>
                                <br>
                                <h3>EMAIL: {$row['email']} <h3>
                                <br>
                                <h3>CONTACT: {$row['contact']} <h3>
                                <br>
                                <h3>ADDRESS: {$row['address']} <h3>
                                <br>
                                <h3>Number of products purchased: $num_of_products_purchased <h3>
                                <br>
                            </div>
                        </div>"

                    ?>

                </div>
            </div>
        </div>

        <?php
            include 'footer.php';
        ?>
    </body>
</html>