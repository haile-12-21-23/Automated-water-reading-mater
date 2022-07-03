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
                    <a href="printAllPersonalBill.php" class="btn btn-success btn-lg btn-lg mb-2"><span>Print
                            Report</span></a>
                </div>
                <div class="card-header">
                    <h4>Debre tabor town water and sewage services Bill records
                        <a href="BillOficer.php" class="btn btn-danger float-end">Back</a>

                    </h4>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Balance</th>
                            <th scope="col">Deposited</th>
                            <th scope="col">Depositer</th>
                            <th scope="col">Deposited Date</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php



                        $sql = "SELECT * FROM orgaccount";
                        $result_bill = $connect->query($sql);

                        // $row_name=$result->fetch_array(MYSQLI_ASSOC);

                        // $row_bill=$result->fetch_array(MYSQLI_ASSOC);
                        if ($result_bill->num_rows > 0) {
                            while ($row_bill = $result_bill->fetch_assoc()) {
                                // balance	deposited	depositer	deposited_date	

                                $id = $row_bill['No'];
                                $balance = $row_bill['balance'];
                                $deposited = $row_bill['deposited'];
                                $depositer = $row_bill['depositer'];
                                $deposited_date = $row_bill['deposited_date'];



                                echo '<tr class="m-uto">
                    <th scope="row">' . $id . '</th>
                    <td>' . $balance . '</td>
                     <td>' . $deposited . '</td>
                    <td>' . $depositer . '</td>
                    <td>' . $deposited_date . '</td>
                    
                  
                     
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