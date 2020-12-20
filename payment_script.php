<?php
    include 'common.php';
?>

<?php 
    $id=$_GET['id'];
    $user_id=$_SESSION['user_id'];
    $card_no=$_POST['card-number'];

    $query="UPDATE users SET card_number=' ".$card_no." ' WHERE user_id=' ".$user_id." ' ";
    $result=mysqli_query($con,$query);

    echo 
    "<div class='container'>
        <div class='jumbotron'>
            <p><h3>Your Payment is successful.</h3><br><a href='success.php?id=$id'>Click Here</a> to redirect to HomePage</p>   
        </div> 
    </div>"
?>