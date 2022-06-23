<?php
require_once "connection.php";
if (isset($_POST['sumbit'])) {
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    
    $stmt_user="SELECT * from adminpublicaccount where mobile='$mobile'" ;

    $result=$connect->query($stmt_user);
    if ($result->num_rows>0) {
        echo "mobile number already exist";
        header('Location:userPublicForm.php');
    } else {
        $sql="INSERT INTO adminpublicaccount (publicName,publicPhone,password) VALUES('$name','$mobile','$password' )";
        $result=$connect->query($sql);
        if ($result) {
            // echo "Data inserted Successfully";
            header('Location:userpublic.php');
        } else {
            die("Couldn't insert data".$sql.$connect->error);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Approve maintenance Request
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">



</head>

<body>
    <div class="container my-5">
        <form method="POST">
            <div class="form-group">
                <label class="form-label">Institution Name:</label>
                <input type=" text" class="form-control" name="name" placeholder="your name">
            </div>
            <div class="form-group">
                <label class="form-label"> Institution mobile:</label>
                <input type="text" class="form-control" name="mobile" placeholder="your mobile">
            </div>
            <div class="form-group mb-3">
                <label class="form-label">password:</label>
                <input type="password" class="form-control" name="password" placeholder="your password">
            </div>


            <button type="submit" class="btn btn-primary" name="sumbit">Submit</button>
        </form>
    </div>

</body>

</html>