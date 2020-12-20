<?php
    include 'common.php';
    $user_id=$_SESSION['user_id'];

    $old_password=$_POST['old_password'];
    $old_password=mysqli_real_escape_string($con,$old_password);
    $old_password=md5($old_password);

    $new_password=$_POST['new_password'];
    $new_password=mysqli_real_escape_string($con,$new_password);
    $new_password=md5($new_password);

    $re_password=$_POST['retype_password'];
    $re_password=mysqli_real_escape_string($con,$re_password);
    $re_password=md5($re_password);

    $query="SELECT email,password FROM users WHERE id=' " .$user_id. " ' ";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);

    $original_password=$row['password'];

    if($new_password!=$re_password){
        header('location:settings.php?error=passwords doesnot match');
    }
    else{
        if($old_passwor==$original_password){
            $update_query="UPDATE users SET password=' " .$new_password. " ' WHERE id=' " .$user_id. " ' ";
            $submit=mysqli_query($con,$update_query);
            header('location:settings.php?msg=password updated successfully');
        }
        else{
            header('location:settings.php?error=current password is wrong');
        }
    }
?>