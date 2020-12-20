<?php
    include 'common.php';
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
        <div class="container" style="margin-top: 150px;">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <table class="table table-bordered table-striped">

                        <h2 style="text-align: center;">MY ORDERS</h2>
                        
                        <?php
                            $sum=0;
                            $user_id=$_SESSION['user_id'];
                            $query="SELECT items.price AS Price,items.pid,items.name AS Name FROM users_items JOIN items ON users_items.item_id=items.pid WHERE users_items.user_id=$user_id AND users_items.status='Confirmed'";
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
                                    </tr>";
                                }
                            ?>
                        </tbody>

                        <?php
                            }else{
                                echo "<h2><p>You haven't ordered anything yet.
                                <a href=products.php>Click Here</a> to purchase any item</p></h2>";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>

        <?php
            include 'footer.php';
        ?>
    </body>
</html>