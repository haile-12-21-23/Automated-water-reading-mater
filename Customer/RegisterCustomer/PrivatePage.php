<?php
include "connection.php";
// session_start();
$select = "SELECT *from registerprivate ";
$result = $connect->query($select);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
$orgName = $row['orgname'];
$orgPhone = $row['orgPhone'];
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
    <title>private page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <!-- <h1>Well come</h1> -->
        <div class="profile">
            <?php
            $select = "SELECT *from registerprivate where orgname='$orgName'";
            $result = $connect->query($select);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            }
            $id = $row['OID'];
            if ($row['orglogo'] == '') {
                echo '<img src="files/default-avatar.png">';
            } else {
                echo '<img src="files/' . $row['orglogo'] . '"';
            }

            ?>

            <p &bs></p>
            <h3> <?php echo $row['orgname']; ?></h3>


            <a href="Logout.php" class="btn btn-danger w-50 mx-auto ">Logout</a>

        </div>
        <div class="container-fluid " id="navbarSupportedContent">
            <div class="">
                <ul class="nav nav-tabs mx-auto fs-6 text-white ">
                    <li><a href="payPrivateBill.php? pid=<?php echo $id ?>" class=" list-group-item mx-2 px-2 bg-dark
                            bg-opacity-50 ">Pay
                            Bill</a>
                    </li>
                    <li><a href=" #" class="list-group-item mx-2 px-2  bg-dark bg-opacity-50">View Bill Report</a>
                    </li>
                    <li> <a href="privateMaintenaceRequest.php? mid=<?php echo $id ?>"
                            class="list-group-item  mx-2 px-2  bg-dark bg-opacity-50"> Maintenance
                            Request</a>
                    </li>
                    <li><a href="givePrivateFeedback.php? fid=<?php echo $id ?>" class="list-group-item mx-2 px-2 bg-dark
                            bg-opacity-50">Giev
                            Feedback</a> </li>
                </ul>
            </div>
        </div>
    </div>

    </div>
</body>

</html>