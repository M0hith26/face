<?php
    include 'common.php';
?>

<?php
    $id=$_GET['id'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store|Payment Page</title>
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

        <div class="container" style="margin-top:100px;">
            <div class="row">
                <div class="col-xs-offset-3 col-xs-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>Card details</h3>
                        </div>
                        <div class="panel-body">
                            <form action="payment_script.php?id=<?php$id?>" method="POST">
                                <div class="form-group">
                                    <input type="text" name="card-number" placeholder="card-number" class="form-control" pattern=".{16}" required >
                                </div>
                                <h5>Expiry</h5>
                                <div class="form-group">
                                    <input type="text" name="month" placeholder="month" class="form-control" pattern=".{2}">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="year" placeholder="year" class="form-control" pattern=".{4}">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="cvv" placeholder="cvv" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name on card" placeholder="name on card" class="form-control">
                                </div>
                                <div class="form-group btn btn-default">
                                    <input type="submit" name="submit">
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <p><h4>All cards accepted.</h4></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>