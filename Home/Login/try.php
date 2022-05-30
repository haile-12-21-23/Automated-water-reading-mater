<?php
$uname="admin";
$pwd="admin";
// starting of sesstion
session_start();
if(isset($_SESSION['uname'])){
    echo "<h1> Welcome ".$_SESSION['uname']."</h1>";
    echo"<a href='new.php'>product</a><br>";
    echo "<br> <a href='logout.php'> <input type=button value=logout
     name=logout></a>";
}
else{
    if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
        $_SESSION['uname']=$uname;
        echo "<script>location.href='new.php'</script>";
    }
    else{
        echo "<script>alert('user   name or password is incorrect')</script>";
        echo "<script>location.href='try.php'</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="new.php" method="post">
        <table align="center">
            <tr>
                <th colspan="2"><h2 align="cente">Login</h2></th>
            </tr>
            <tr> 
                <td> Username:</td>
                <td> <input type="text" name="uname"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td> <input type="password" name="pwd"></td>
            </tr>
            <tr>
                <td align="right" colspan="2"> <input type="submit" name="login" value="login"> </td>
            </tr>
        </table>
    </form>
</body>
</html>