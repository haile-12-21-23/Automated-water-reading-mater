<?php
require_once "connection.php";
$pid = $_GET['pid'];
$name = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Bill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="badge text-bg-success p-2 text-dark bg-opacity-25 container-fluid">
    <div class="table-responsive container mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="container" style="margin-top:15px">
                    <a href="printAllPersonalBill.php" class="btn btn-success btn-lg btn-lg mb-2"><span>Pay
                        </span></a>
                </div>
                <div class="card-header">
                    <h4>Private Organization Bill records
                        <a href="PrivatePage.php" class="btn btn-danger float-end">Back</a>

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

                        $select = "SELECT orgname from registerprivate where OID='$pid'";
                        $result = $connect->query($select);
                        if ($result->num_rows > 0) {
                            $row_name = $result->fetch_assoc();
                            $name = $row_name['orgname'];
                        }

                        $sql = "SELECT * FROM billrecordpersonal";
                        $result_bill = $connect->query($sql);

                        // $row_name=$result->fetch_array(MYSQLI_ASSOC);

                        // $row_bill=$result->fetch_array(MYSQLI_ASSOC);
                        if ($result_bill->num_rows > 0) {
                            // while ($row_bill = $result_bill->fetch_assoc()) {
                            $row_bill = $result_bill->fetch_assoc();
                            // $row_name = $result->fetch_assoc();
                            // $name = $row_name['name'];


                            $meterId = $row_bill['meterID'];
                            $currentReading = $row_bill['current_reading'];
                            $previousReading = $row_bill['previous_reading'];
                            $netReading = $row_bill['net_reading'];
                            $priceRate = $row_bill['price_rate'];
                            $totalPrice = $row_bill['total_price'];
                            $createdDate = $row_bill['created_date'];


                            echo '<tr class="m-uto">
                    <th scope="row">' . $pid . '</th>
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