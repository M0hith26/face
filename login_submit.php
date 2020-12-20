<!DOCTYPE html>
<head>
    <title>LoginSubmitPage</title>
</head>
<body>
    <?php
        include 'common.php';

        $email=$_POST["email"];
        $email=mysqli_real_escape_string($con,$email);

        //stores the password and compares with the specified pattern
        $password=$_POST["password"];
        //md5 function encrypts the password and stores the encrypted value
        $secure_password=md5($password);
        
        $query="SELECT email,id FROM users WHERE email=' " . $email . " ' AND password=' " . $secure_password . " ' ";
        $result=mysqli_query($con,$query);
        
        if(mysqli_num_rows($result)>0){
            $result_array=mysqli_fetch_array($result);
            $_SESSION['email']=$result_array['email'];
            $_SESSION['user_id']=$result_array['id'];
            header('location:products.php');
        }

        else{
            $m="<span>NO USER FOUND</span>";
            header('location:login.php?m3'.$m);
        }
        
    ?>
</body>
