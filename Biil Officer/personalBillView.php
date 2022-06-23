<?php
require_once "connection.php";

$id = $_GET['viewid'];
// $sql="SELECT *FROM adminpublicaccount where No=$id";
// $result=$connect->query($sql);
// $row=$result->fetch_assoc();
// $id=$row['No'];
// $name=$row['publicName'];
// $mobile=$row['publicPhone'];
// $password=$row['password'];


// if (isset($_POST['submit'])) {
//     $name=$_POST['name'];
//     $mobile=$_POST['mobile'];
//     $password=$_POST['password'];
//     $sql="update adminpublicaccount set No=$id,publicName='$name',publicPhone='$mobile',password='$password' where No=$id ";
//     $result=$connect->query($sql);
//     if ($result) {
//         // echo "updated Successfully";
//         header('Location:userPublic.php');
//     // Administrator\userperson.php
//     } else {
//         die("Couldn't update data".$sql.$connect->error);
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Personal Bill recorddetails
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">



</head>

<body class="badge text-bg-success p-2 text-dark bg-opacity-25 container-fluid">
    <div class="table-responsive container mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Personal Bill records dedails
                        <a href="personalBillReport.php" class="btn btn-danger float-end">Back</a>

                    </h4>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Customer meter ID:</th>
                            <th scope="col">Current reading:</th>
                            <th scope="col">Net reading:</th>
                            <th scope="col">Price rate:</th>
                            <th scope="col">
                            <th scope="col">Total price: </th>
                            <th scope="col">Created date:</th>


                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $name = "";
                        // $stmt_user="SELECT * from presonal " ;
                        // $result_name=$connect->query($stmt_user);

                        $sql = "SELECT * FROM billrecordpersonal where No=$id";
                        $result_bill = $connect->query($sql);

                        // $row_name=$result_name->fetch_array(MYSQLI_ASSOC);

                        $row_bill = $result_bill->fetch_array(MYSQLI_ASSOC);
                        if ($result_bill->num_rows > 0) {
                            // while (($row_name=$result_name->fetch_assoc()) && ($row_bill=$result_bill->fetch_assoc())) {


                            // $id=$row_name['PID'];
                            $name = $row_bill['name'];
                            $meterId = $row_bill['meterID'];
                            $currentReading = $row_bill['current_reading'];
                            $previousReading = $row_bill['previous_reading'];
                            $netReading = $row_bill['net_reading'];
                            $priceRate = $row_bill['price_rate'];
                            $totalPrice = $row_bill['total_price'];
                            $createdDate = $row_bill['created_date'];


                            echo '<tr class="m-uto">
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                     <td>' . $meterId . '</td>
                    <td>' . $currentReading . '</td>
                    <td>' . $previousReading . '</td>
                    <td>' . $netReading . ' </td>
                     <td>' . $priceRate . '</td>
                     <td>' . $totalPrice . ' </td>
                     <td>' . $createdDate . '</td>
                   
                     
                </tr>';
                        }
                        // }
                        ?>

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