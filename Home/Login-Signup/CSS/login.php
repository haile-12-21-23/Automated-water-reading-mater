<?php
$firstName="";
$password1="";
$error="";

// DB connecrtion
$conn=mysqli_connect("localhost","root","","DB");
if(isset($_POST['login'])){
    $firstName=mysqli_real_escape_string($conn,$_POST['firstname']);
    $password1=mysqli_real_escape_string($conn,$_POST['pwd']);

    $sql="SELECT  * from users where firstName='".$firstName."' AND password='".$password1."' limit 1";
    $result=mysqli_query($conn,$sql);
    if(empty($firstName)){
        $error="user name is required";
    }
    else if(empty($password1)){
        $error="password is required";

    }
    else if(mysqli_num_rows($result)){
        // header('location:"./home.php"')
        echo"<script>alert('Logged Successfully')</script>";

    // echo"<script>
    // window.location.replace('home.php');</script>";


    }
    else{
        $error="username or password not match!";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login system</title>
    <link rel="stylesheet" href="./login.css">
</head>
<body>
    <div class="box">
        <h1>Login Here</h1>
        <div class="error">
            <?php
            echo $error;
            ?>
        </div>
        <form action="login.php" method="post">
            <input type="text" name="firstname" placeholder="enter user name">
            <input type="password" name="pwd" placeholder="Enter password">
            <input type="submit" value="Login" name="login">
            Not yet a member? <a href="signup.php" style="color: #777b;">Signup</a>
        </form>
    </div>
</body>
</html>