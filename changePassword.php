<!DOCTYPE html>
<html>
    <head>
        <title>Settings Page</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- JS and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php 
            include 'common.php';
            include 'header.php';
        ?>
        <?php
            if(!isset($_SESSION['email'])){
                header('location:index.php');
            }
        ?>

        <div class="container" style="margin: 150px 0px 50px 90px;">
            <div class="col-md-offset-3 col-md-6 ">
                <form method="POST" action="changePassword_script.php">
                    <h2>Change Password</h2>
                    <div class="form-group">
                        <input type="password" name="old_password" placeholder="Old password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="new_password" placeholder="New password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="retype_password" placeholder="Re-type New password" class="form-control">
                    </div>
                    <div class="form-group btn btn-default">
                        <input type="submit" name="submit">
                    </div>
                </form>
            </div>
        </div>

        <?php
            include 'footer.php';
        ?>
    </body>
</html>