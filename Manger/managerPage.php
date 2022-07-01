<?php
include "connection.php";
// session_start();
$select = "SELECT *from registerpublic ";
$result = $connect->query($select);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
$insName = $row['insname'];
$insPhone = $row['insphone'];
// $orgName = $_SESSION['orgname'];
// $orgPhone = $_SESSION['orgPhone'];
// if (!isset($name) && !isset($phone)) {
//     header('Location:LoginPersonal.php');
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Governmental and public institution page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="card card-body">

    <h3 class="text text-primary text-center">Welcome to manager page</h3>
    <div class="container">
        <!-- <h1>Well come</h1> -->
        <div class="profile">
            <?php
            // $select = "SELECT *from registerpublic where insname='$insName'";
            // $result = $connect->query($select);
            // if ($result->num_rows > 0) {
            //     $row = $result->fetch_assoc();
            // }
            // $id = $row['GID'];
            // if ($row['inslogo'] == '') {
            //     echo '<img src="files/default-avatar.png">';
            // } else {
            //     echo '<img src="files/' . $row['inslogo'] . '"';
            // }

            ?>

            <p &bs></p>
            <h3> <?php echo $row['insname']; ?></h3>


            <a href="Logout.php" class="btn btn-danger w-10 mx-auto ">Logout</a>

        </div>
        <div class="container-fluid ">
            <div class="">
                <ul class="nav nav-tabs  fs-6 text-white mx-4 mt-4 mb-4 pb-4 ">
                    <li><a href="mainteneceRequests.php"
                            class="list-group-item  mx-2 px-2  bg-dark bg-opacity-50 ">approve request</a>
                    </li>
                    <li><a href="#" class="list-group-item  mx-2 px-2  bg-dark bg-opacity-50 ">view report</a>
                    </li>


                </ul>
            </div>
        </div>
    </div>

</body>

</html>