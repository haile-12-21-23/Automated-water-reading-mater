<?php
require_once "connection.php";
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
</head>

<body class="badge text-bg-success p-2 text-dark bg-opacity-25 container-fluid">
    <div class="table-responsive container mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="container" style="margin-top:15px">
                    <a href="printAllPrivateBill.php" class="btn btn-success btn-lg btn-lg mb-2"><span>Print
                            Report</span></a>
                </div>

                <div class="card-header">
                    <h4>private organization Bill records
                        <a href="privateBill.php" class="btn btn-danger float-end">Back</a>

                    </h4>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Organization Name</th>
                            <th scope="col">Organization meter ID:</th>
                            <th scope="col">Current reading:</th>
                            <th scope="col">Net reading:</th>
                            <th scope="col">Price rate:</th>
                            <th scope="col">
                            <th scope="col">Total price: </th>
                            <th scope="col">Created date:</th>
                            <th scope="col">operation on bill</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        // $name="";
                        // $stmt_user="SELECT * from private " ;
                        // $result_name=$connect->query($stmt_user);

                        $sql = "SELECT * FROM billrecordprivate";
                        $result_bill = $connect->query($sql);

                        // $row_name=$result->fetch_array(MYSQLI_ASSOC);

                        // $row_bill=$result->fetch_array(MYSQLI_ASSOC);
                        if ($result_bill->num_rows > 0) {
                            while ($row_bill = $result_bill->fetch_assoc()) {
                                $id = $row_bill['No'];
                                $name = $row_bill['orgname'];
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
                   
                     <td>
                    <button class="btn btn-success btn-sm "><a href="printEachPrivateBill.php? printid=' . $id . '" class="text-light text-decoration-none">print</a></button > 
                      <button class="btn btn-primary btn-sm "><a href="PrivateBillView.php? viewid=' . $id . '" class="text-light text-decoration-none">view</a></button >
                    <button class="btn btn-danger btn-sm"><a href="deletePrivateBill.php? deleteid=' . $id . '" class="text-light text-decoration-none">delete</a></button >
                    
                </td>
                </tr>';
                            }
                        }
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