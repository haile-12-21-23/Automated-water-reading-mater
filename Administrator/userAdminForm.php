<?php
require_once "connection.php";
// $cid = $_GET['cid'];
$type = "admin";
// $sql = "SELECT GID,insname ,insphone FROM registerpublic where GID=$cid
//                 ";
// $result = $connect->query($sql);
// $row = $result->fetch_assoc();
// $name = $row['insname'];
// $phone = $row['insphone'];
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT *  FROM accountstaff where email=$email";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['message'] = "Email is aready exist use unique email";
        header('Location:userAdminForm.php');
    } else {
        $sql = "INSERT INTO accountstaff (name,phone,email,password,type) VALUES('$name','$phone','$email' ,'$password','$type')";
        $result = $connect->query($sql);
        if ($result) {
            $_SESSION['message'] = "Account created Successfully";
            header('Location:userAdmin.php');
        } else {
            $_SESSION['message'] = "Couldn't insert data" . $sql . $connect->error;
            header('Location:useradminForm.php');
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
        Administrator create account page
    </title>
    <link rel="stylesheet" href="../Customer//RegisterCustomer/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
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
                <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2"> Admin Name</label>
                <input type="text" name="name" class="box" placeholder="Name of Bill officer" value="" required>
                <label class="form-label text-start fs-4  w-100 bg-opacity-10 mx-2">Phone number</label>
                <input type="text" name="phone" class="box" placeholder="phone of Bill officer" value="" required>
                <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">email</label>
                <input type="email" name="email" class="box" placeholder="email Bill officer" required>
                <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">password</label>
                <input type="text" class="box" name="password" placeholder="password of Bill officer" required>
                <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Type</label>
                <input type="text" name="type" class="box" placeholder="customer type" value="<?php echo $type ?>"
                    equired disabled>
                <input type="submit" name="create" class="btn btn-primary w-50 mx-auto" value="Create">

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