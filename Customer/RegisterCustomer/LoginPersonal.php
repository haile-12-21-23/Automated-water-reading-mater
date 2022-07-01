<?php
// session_start();
include "connection.php";
session_start();
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $sql = "SELECT *  FROM registerpersonal where phone='$phone' AND name='$name'
    ";
    $result = $connect->query($sql);
    $row = $result->fetch_array();
    if (isset($row)) {
     
        $_SESSION['name'] = $row['name'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['message'] = "Login Success!";
        header('Location:PersonalPage.php');
    } else {
        $_SESSION['message'] = "Phone number or passwor incorrect";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal customer registeration </title>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
</head>

<body onload="messagehide()">
    <div class="form-container">
        <form action="" method="post" enctype="multipart/form-data">
            <h3 class="bg-success bg-opacity-20 p-3 w-50 mx-auto">LOGIN </h3>
            <div class="" id="m-display">
                <?php
                if (isset($_POST['register'])) {
                    require_once "message.php";
                }
                // session_abort();
                ?>
            </div>
            <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Name</label>
            <input type="text" name="name" class="box" placeholder="Name of person" required>
            <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Phone number</label>
            <input type="text" name="phone" class="box" placeholder="phone of person" required>

            <input type="submit" name="register" class="btn" value="Login">
            <p>Don't registered <a href="registerPersonal.php">Register Here</a></p>

        </form>
    </div>

</body>

<!-- Javascript links -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">

</script>

</html>