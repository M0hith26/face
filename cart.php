<?php
    include 'common.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store|Cart Page</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- JS and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <div class="container">
            <div class="row jumbotron" style="margin-top: 50px;">
                <p>
                    <a href="MyOrders.php">Click Here</a> to visit your orders.
                </p>
            </div>
        </div>
        <div class="container" style="margin-top: 150px;">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <table class="table table-bordered table-striped">
                        
                        <?php
                            $sum=0;
                            $user_id=$_SESSION['user_id'];
                            $query="SELECT items.price AS Price,items.pid,items.name AS Name FROM users_items JOIN items ON users_items.item_id=items.pid WHERE users_items.user_id=$user_id AND users_items.status='Added to cart'";
                            $result=mysqli_query($con,$query);
                            if(mysqli_num_rows($result)>=1){
                        ?>

                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                while($row=mysqli_fetch_array($result)){
                                    $sum+=$row["Price"];
                                    $id="";
                                    $id=$id.$row["pid"];
                                    echo 
                                    "<tr>
                                        <td>" . "#" . $row['pid'] . "</td>
                                        <td>" . $row["Name"] . " </td>
                                        <td>" . $row["Price"]. "\-" ."</td>
                                        <td><a href='cart-remove.php?id={$row['pid']}' class='remove_item_link'>Remove</a></td>
                                    </tr>";
                                }

                                echo 
                                "<tr>
                                    <td></td>
                                    <td>Total</td>
                                    <td>" . "Rs" . $sum ."</td>
                                    <td><a href='success.php?id=$id' class='btn btn-primary'>Confirm Order</a></td>
                                </tr>"
                            ?>
                        </tbody>

                        <?php
                            }else{
                                echo "<h2>Sorry your cart is empty!! Add items to your cart</h2>";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>