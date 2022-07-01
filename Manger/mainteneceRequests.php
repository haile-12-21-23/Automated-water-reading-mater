<?php
$serverName = "localhost";
$password = "";
$userName = "root";
$databaseName = "project_db";
$connect = new mysqli($serverName, $userName, $password, $databaseName);
if ($connect->connect_error) {
    die("Connection failed" . $connect->connect_error);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display request</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    .btn a:hover {
        background-color: black;


    }
    </style>
</head>

<body class="bg-success p-2" style="--bs-bg-opacity: .5;">
    <div class="container table-responsive container mt-5">
        <div class="col-md-12 ">
            <div class="card">
                <h3 class="text text-center mt-2 bg-info bg-opacity-10">Maintenance Request lists</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">phone</th>
                            <th scope="col">date</th>
                            <th scope="col">type</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">operation</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $sql = "SELECT * FROM maintenancerequest";
                        $result = $connect->query($sql);
                        if ($result) {
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['Id'];
                                $name = $row['name'];
                                $phone = $row['Phone'];
                                $date = $row['date'];
                                $type = $row['type'];
                                $description = $row['description'];
                                $status = $row['status'];
                        ?>

                        <tr>
                            <th scope="row"><?php echo $id ?> </th>
                            <td><?php echo  $name ?></td>
                            <td><?php echo $phone ?></td>
                            <td><?php echo $date ?></td>
                            <td><?php echo $type ?></td>
                            <td><?php echo $description ?> </td>

                            <td>
                                <?php


                                        if ($status == 0) {
                                            echo "Declined";
                                        } elseif ($status == 1) {
                                            echo "pending";
                                        } elseif ($status == 2) {
                                            echo "approved";
                                        }

                                        ?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <button class="btn btn-primary btn-sm w-50 mx-auto"><a
                                                class="dropdown-item text-white "
                                                href="statuspending.php? pid=<?php echo $id ?>">Pending</a>
                                        </button>
                                        <button class="btn btn-success btn-sm w-50 mx-auto"><a
                                                class="dropdown-item text-white"
                                                href="statusApproved.php? aid=<?php echo $id ?>">Approved</a>
                                        </button>
                                        <button class="btn btn-danger btn-sm w-50 mx-auto"><a
                                                class="dropdown-item text-white"
                                                href="statusDeclined.php? did=<?php echo $id ?>">Declined</a>
                                        </button>
                                    </ul>
                                </div>




                                <!-- <button class="btn btn-primary"><a href="update.php? updateid=<?php echo  $id ?>"
                                                class="text-light">update</a></button>
                                        <button class="btn btn-danger"><a href="delete.php? deleteid=<?php echo  $id ?>"
                                                class="text-light">delete</a></button> -->

                            </td>
                        </tr>
                        <?php }
                        } ?>

                    </tbody>
                </table>

            </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
</script>

</html>