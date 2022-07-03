<?php
require_once "connection.php";

$id = $_GET['updateid'];
$sql = "SELECT *FROM accountstaff where SID=$id";
$result = $connect->query($sql);
$row = $result->fetch_assoc();
$idS = $row['SID'];
$nameS = $row['name'];
$mobileS = $row['phone'];

$emailS = $row['email'];

$passwordS = $row['password'];

$type = $row['type'];


if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $type = $_POST['type'];
    $sql = "update accountstaff set SID=$id,name='$name',phone='$mobile',email='$email',password='$password',type='$type' where SID=$id ";
    $result = $connect->query($sql);
    if ($result) {
        // echo "updated Successfully";
        header('Location:userManager.php');
        // Administrator\userperson.php
    } else {
        die("Couldn't update data" . $sql . $connect->error);
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
    <link rel="stylesheet" href="../Customer//RegisterCustomer/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">



</head>

<body>
    <div class="container my-5">
        <div class="form-container">
            <form action="" method="post" enctype="multipart/form-data">
                <h3 class="bg-success bg-opacity-20 p-3 w-60 mx-auto">Create Account here</h3>
                <div class="" id="m-display">
                    <?php
                    if (isset($_POST['create'])) {
                        require_once "message.php";
                    }
                    // session_abort();
                    ?>
                </div>
                <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Name:</label>
                <input type="text" name="name" class="box" placeholder="Name of person" value="<?php echo $nameS ?>"
                    required>
                <label class="form-label text-start fs-4  w-100 bg-opacity-10 mx-2">Phone number</label>
                <input type="text" name="mobile" class="box" placeholder="phone of person"
                    value="<?php echo $mobileS ?>" required>
                <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Email</label>
                <input type="email" name="email" class="box" placeholder="Count number of customer" value="
                    <?php echo $emailS ?>" required>

                <label class=" form-label text-start fs-4 w-100 bg-opacity-10 mx-2">password</label>
                <input type="text" class="box" name="password" placeholder="password of customer"
                    value=" <?php echo $passwordS ?>" required>
                <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Type</label>
                <input type="text" name="type" class="box" placeholder="customer type" value="<?php echo $type ?>"
                    equired>
                <input type="submit" name="create" class="btn btn-primary w-50 mx-auto" value="update">

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