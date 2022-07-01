<?php
include "connection.php";
session_start();
$name = $_SESSION['name'];
$phone = $_SESSION['phone'];
if (!isset($name) && !isset($phone)) {
    header('Location:LoginPersonal.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <!-- <h1>Well come</h1> -->
        <div class="profile">
            <?php
            $select = "SELECT * from registerPersonal where name='$name'";
            $result = $connect->query($select);
            $row = $result->fetch_assoc();
            $id = $row['PID'];
            if ($result->num_rows > 0) {

                $name = $row['name'];

                if ($row['profile'] == '') {
                    echo '<img src="files/default-avatar.png">';
                } else {
                    echo '<img src="files/' . $row['profile'] . '"';
                }
            }
            ?>

            <p &bs></p>
            <h3> <?php echo $name; ?></h3>


            <a href="Logout.php" class="btn btn-danger w-50 mx-auto ">Logout</a>

        </div>
        <div class="container-fluid ">
            <div class="">
                <ul class="nav nav-tabs mx-auto fs-6 text-white ">
                    <li><a href="payPersonalBill.php? pid=<?php echo $id ?>" class=" list-group-item mx-2 px-2 bg-dark
                            bg-opacity-50 ">Pay
                            Bill</a>
                    </li>
                    <li><a href=" #" class="list-group-item mx-2 px-2  bg-dark bg-opacity-50">View Bill Report</a>
                    </li>
                    <li> <a href="personalMaintenanceRequest.php? mid=<?php echo $id ?>"
                            class="list-group-item  mx-2 px-2  bg-dark bg-opacity-50">Maintenance
                            Request</a>
                    </li>
                    <li><a href="givePersonalFeedback.php? fid=<?php echo $id ?>"
                            class="list-group-item  mx-2 px-2  bg-dark bg-opacity-50">Giev
                            Feedback</a> </li>
                </ul>
            </div>
        </div>
    </div>

    </div>
</body>

</html>