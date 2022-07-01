<?php
// session_start();
include "connection.php";
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $kebele = $_POST['kebele'];
    $profile = $_FILES['profile']['name'];
    $profile_size = $_FILES['profile']['size'];
    $profile_tmp_name = $_FILES['profile']['tmp_name'];
    $image_folderProfile = 'files/' . $profile;

    $personalId = $_FILES['Pid']['name'];
    $personalId_size = $_FILES['Pid']['size'];
    $personalId_tmp_name = $_FILES['Pid']['tmp_name'];
    $image_folderId = 'files/' . $personalId;

    $homePlan = $_FILES['home-plan']['name'];
    $homePlan_size = $_FILES['home-plan']['size'];
    $homePlan_tmp_name = $_FILES['home-plan']['tmp_name'];
    $image_folderPlan = 'files/' . $homePlan;

    $sql = "SELECT *  FROM registerpersonal where phone=$phone
    ";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['message'] = "Phone numer already used please use other number";
        // $message[] = 'Phone numer already used please use other number';
    } else {
        if ($profile_size > 2000000 && $personalId_size > 2000000 && $homePlan_size > 2000000) {
            $_SESSION['message'] = "The file size is too 
            large ";
        } else {
            $insert = "INSERT INTO registerpersonal (name,phone,kebele,profile,personalID,homePlan	)
VALUES ('$name', '$phone', '$kebele','$profile','$personalId','$homePlan')";

            if ($connect->query($insert) === TRUE) {
                move_uploaded_file($profile_tmp_name, $image_folderProfile);
                move_uploaded_file($personalId_tmp_name, $image_folderId);
                move_uploaded_file($homePlan_tmp_name, $image_folderPlan);
                $_SESSION['message'] = "Registered successfully";
            }
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

<body>
    <div class="form-container">
        <form action="" method="post" enctype="multipart/form-data">
            <h3 class="bg-success bg-opacity-20 p-3 w-60 mx-auto">Register now</h3>
            <div class="" id="m-display">
                <?php
                if (isset($_POST['register'])) {
                    require_once "message.php";
                }
                // session_abort();
                ?>
            </div>
            <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Name:</label>
            <input type="text" name="name" class="box" placeholder="Name of person" required>
            <label class="form-label text-start fs-4  w-100 bg-opacity-10 mx-2">Phone number</label>
            <input type="text" name="phone" class="box" placeholder="phone of person" required>
            <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Kebele</label>
            <input type="text" name="kebele" class="box" placeholder="kebele of person" required>
            <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Photo</label>
            <input type="file" class="box" name="profile" accept="image/jpg, image/jpeg , image/png"
                placeholder="profile picture" required>
            <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">ID Photo</label>
            <input type="file" class="box" name="Pid" accept="image/jpg, image/jpeg , image/png" required>
            <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Home map</label>
            <input type="file" name="home-plan" class="box" accept="image/jpg, image/jpeg , image/png" required>
            <input type="submit" name="register" class="btn" value="Register">
            <p>already have an account <a href="LoginPersonal.php">Login</a></p>
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