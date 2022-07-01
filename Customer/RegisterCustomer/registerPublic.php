<?php
// session_start();
include "connection.php";
// orgname	orgPhone	orgkebele	orglogo	orgLlcense	orgmap
if (isset($_POST['register'])) {
    $insName = $_POST['insName'];
    $insPhone = $_POST['insPhone'];
    $insKebele = $_POST['insKebele'];

    $insLogo = $_FILES['insLogo']['name'];
    $insLogo_size = $_FILES['insLogo']['size'];
    $insLogo_tmp_name = $_FILES['insLogo']['tmp_name'];
    $image_folderLogo = 'files/' . $insLogo;

    $insLicense = $_FILES['insLicense']['name'];
    $insLicense_size = $_FILES['insLicense']['size'];
    $insLicense_tmp_name = $_FILES['insLicense']['tmp_name'];
    $image_folderLicense = 'files/' . $insLicense;

    $insPlan = $_FILES['insPlan']['name'];
    $insPlan_size = $_FILES['insPlan']['size'];
    $insPlan_tmp_name = $_FILES['insPlan']['tmp_name'];
    $image_folderPlan = 'files/' . $insPlan;

    $sql = "SELECT *  FROM registerpublic where insphone='$insPhone'
    ";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['message'] = "Phone numer already used please use other number";
        // $message[] = 'Phone numer already used please use other number';
    } else {
        if ($insLogo_size > 2000000 && $insLicense_size > 2000000 && $insPlan_size > 2000000) {
            $_SESSION['message'] = "The file size is too 
            large! ";
        } else {
            echo "insert operation above";
            $insert = "INSERT INTO registerpublic (insname	,insphone,	inskebele,	inslogo,	inslicense,	insmap	)
VALUES ('$insName', '$insPhone', '$insKebele','$insLogo','$insLicense','$insPlan')";
            echo " insert operation below";
            if ($connect->query($insert) === TRUE) {
                echo "insert file operation";
                move_uploaded_file($insLogo_tmp_name, $image_folderLogo);
                move_uploaded_file($insLicense_tmp_name, $image_folderLicense);
                move_uploaded_file($insPlan_tmp_name, $image_folderPlan);
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
    <title>Governmental and public customer registeration </title>
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
            <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Institution Name</label>
            <input type="text" name="insName" class="box" placeholder="Name of Institution" required>
            <label class="form-label text-start fs-4  w-100 bg-opacity-10 mx-2">Institution Phone number</label>
            <input type="text" name="insPhone" class="box" placeholder="phone of Institution" required>
            <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Kebele</label>
            <input type="text" name="insKebele" class="box" placeholder="kebele of Institution" required>
            <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Institution Logo</label>
            <input type="file" class="box" name="insLogo" accept="image/jpg, image/jpeg , image/png"
                placeholder="Logo of Institution" required>
            <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Institution License</label>
            <input type="file" class="box" name="insLicense" accept="image/jpg, image/jpeg , image/png" required>
            <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Institution map</label>
            <input type="file" name="insPlan" class="box" accept="image/jpg, image/jpeg , image/png" required>
            <input type="submit" name="register" class="btn" value="Register">
            <p>already have an account <a href="publicPage.php">Login</a></p>

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