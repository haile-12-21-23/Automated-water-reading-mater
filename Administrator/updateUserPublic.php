<?php
require_once "connection.php";

$id=$_GET['updateid'];
$sql="SELECT *FROM adminpublicaccount where No=$id";
$result=$connect->query($sql);
$row=$result->fetch_assoc();
$id=$row['No'];
$name=$row['publicName'];
$mobile=$row['publicPhone'];
$password=$row['password'];


if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="update adminpublicaccount set No=$id,publicName='$name',publicPhone='$mobile',password='$password' where No=$id ";
    $result=$connect->query($sql);
    if ($result) {
        // echo "updated Successfully";
        header('Location:userPublic.php');
    // Administrator\userperson.php
    } else {
        die("Couldn't update data".$sql.$connect->error);
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
                <input type=" text" class="form-control" name="name" placeholder="your name" value="<?php echo $name?>">
            </div>
            <div class="form-group">
                <label class="form-label"> Institution mobile:</label>
                <input type="text" class="form-control" name="mobile" placeholder="your mobile"
                    value="<?php echo $mobile?>">
            </div>
            <div class="form-group mb-3">
                <label class="form-label">password:</label>
                <input type="password" class="form-control" name="password" placeholder="your password"
                    value="<?php echo $password?>">
            </div>


            <button type="submit" class="btn btn-primary" name="submit">update</button>
        </form>
    </div>

</body>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
</script>

</html>