<?php
//  require './cart.php'
include "connection.php";
// $pid = $_GET['pid'];
?>
<!Doctype html>
<html>
<title>Payment</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<body class="badge text-bg-success p-2 text-dark bg-opacity-25 container-fluid">
    <div class="table-responsive container mt-5">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header">Pay with Yenepay</h2>
                <!-- <a href="payment-with-express.php">Go try with Express</a><br><br> -->
                <form method="post" action="https://test.yenepay.com/">
                    <input type="hidden" name="process" value="Cart">
                    <input type="hidden" name="successUrl"
                        value="http://localhost/Payment/Payment-with-Yenepay-Php/success.php">
                    <input type="hidden" name="ipnUrl" value="http://localhost/Payment-with-Yenepay-Php/ipn.php">
                    <input type="hidden" name="cancelUrl" value="http://localhost/Payment-with-Yenepay-Php/cancel.php">
                    <input type="hidden" name="merchantId" value="SB1648">
                    <input type="hidden" name="merchantOrderId" value="4">
                    <input type="hidden" name="expiresAfter" value="24">

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

                            $select = "SELECT name,PID from registerPersonal ";
                            $result = $connect->query($select);
                            $row_name = $result->fetch_assoc();
                            $name = $row_name['name'];
                            $pid = $row_name['PID'];
                            if ($result->num_rows > 0) {
                                // $row_name = $result->fetch_assoc(); 
                                // $name = $row_name['name'];
                                // $pid=$row_name['PID'];
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
                    <?php
                    /*  foreach ($cartItems as $key1 => $value) {
            //     foreach ($value as $key => $value1) {
            // ?><input type="hidden" name="Items[<?php echo $key1, '].', $key ?>" value="<?php echo $value1 ?>"><?php
             }} */
                    ?>
                    <input type="hidden" name="totalItemsDeliveryFee" value="0">
                    <input type="hidden" name="totalItemsDiscount" value="0">
                    <input type="hidden" name="totalItemsHandlingFee" value="2.5">
                    <input type="hidden" name="totalItemsTax1" value="1">
                    <input type="hidden" name="totalItemsTax2" value="0">
                    <button type="submit" class="btn btn-success btn-lg btn-lg mb-2">Pay with YenePay</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>