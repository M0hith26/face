<?php 
    include 'common.php';
?>

<?php

    $name=mysqli_real_escape_string($con,$_POST["name"]);
    $email=mysqli_real_escape_string($con,$_POST["email"]);
    $password=md5($_POST["password"]);
    $city=mysqli_real_escape_string($con,$_POST["city"]);
    $contact=mysqli_real_escape_string($con,$_POST["contact"]);
    $address=mysqli_real_escape_string($con,$_POST["address"]);

    $email_pattern="/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";

    $query="SELECT email FROM users WHERE email=$email";
    $submit=mysqli_query($con,$query);

    if(mysqli_num_rows($submit)>0){
        $m="<span class='red'>Email already exits</span>";
        header('location:login.php?m1'.$m);
    }
    else if(!preg_match($email_pattern,$email)){
        $m="<span class='red'>Not a valid email</span>";
        header('location:singup.php?m2'.$m);
    }
    else{
        $ins_query="INSERT INTO users(name,email,password,contact,city,address) VALUES(' " .$name. " ',' " .$email. " ',' " .$password. " ',' " .$contact. " ',' " .$city. " ',' " .$address. " ')";
        mysqli_query($con,$ins_query);
        $user_id=mysqli_insert_id($con);
        $_SESSION['email']=$email;
        $_SESSION['user_id']=$user_id;
        header('location:products.php');
    }  
?>