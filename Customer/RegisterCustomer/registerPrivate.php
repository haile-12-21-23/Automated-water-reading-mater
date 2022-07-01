<?php
// session_start();
include "connection.php";
// orgname	orgPhone	orgkebele	orglogo	orgLlcense	orgmap
if (isset($_POST['register'])) {
    $orgName = $_POST['orgName'];
    $orgPhone = $_POST['orgPhone'];
    $orgKebele = $_POST['orgKebele'];
    $orgLogo = $_FILES['orgLogo']['name'];
    $orgLogo_size = $_FILES['orgLogo']['size'];
    $orgLogo_tmp_name = $_FILES['orgLogo']['tmp_name'];
    $image_folderLogo = 'files/' . $orgLogo;

    $orgLicense = $_FILES['orgLicense']['name'];
    $orgLicense_size = $_FILES['orgLicense']['size'];
    $orgLicense_tmp_name = $_FILES['orgLicense']['tmp_name'];
    $image_folderLicense = 'files/' . $orgLicense;

    $orgPlan = $_FILES['orgPlan']['name'];
    $orgPlan_size = $_FILES['orgPlan']['size'];
    $orgPlan_tmp_name = $_FILES['orgPlan']['tmp_name'];
    $image_folderPlan = 'files/' . $orgPlan;

    $sql = "SELECT *  FROM registerprivate where orgphone='$orgPhone'
    ";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['message'] = "Phone numer already used please use other number";
        // $message[] = 'Phone numer already used please use other number';
    } else {
        if ($orgLogo_size > 2000000 && $orgLicense_size > 2000000 && $orgPlan_size > 2000000) {
            $_SESSION['message'] = "The file size is too 
            large! ";
        } else {
            $insert = "INSERT INTO registerprivate (orgname,orgPhone,orgkebele,orglogo,orgLlcense,orgmap)
VALUES ('$orgName', '$orgPhone', '$orgKebele','$orgLogo','$orgLicense','$orgPlan')";

            if ($connect->query($insert) === TRUE) {
                move_uploaded_file($orgLogo_tmp_name, $image_folderLogo);
                move_uploaded_file($orgLicense_tmp_name, $image_folderLicense);
                move_uploaded_file($orgPlan_tmp_name, $image_folderPlan);
                $_SESSION['message'] = "Registered successfully";
            } else {
                $_SESSION['message'] = "Registeration failed";
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
            <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Organization Name</label>
            <input type="text" name="orgName" class="box" placeholder="Name of Organization" required>
            <label class="form-label text-start fs-4  w-100 bg-opacity-10 mx-2">Phone number</label>
            <input type="text" name="orgPhone" class="box" placeholder="phone of Organization" required>
            <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Kebele</label>
            <input type="text" name="orgKebele" class="box" placeholder="kebele of Organization" required>
            <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Ogranization Logo</label>
            <input type="file" class="box" name="orgLogo" accept="image/jpg, image/jpeg , image/png"
                placeholder="profile picture" required>
            <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Organization License</label>
            <input type="file" class="box" name="orgLicense" accept="image/jpg, image/jpeg , image/png" required>
            <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Organization map</label>
            <input type="file" name="orgPlan" class="box" accept="image/jpg, image/jpeg , image/png" required>
            <input type="submit" name="register" class="btn" value="Register">
            <p>already have an account <a href="PrivatePage.php">Login</a></p>

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