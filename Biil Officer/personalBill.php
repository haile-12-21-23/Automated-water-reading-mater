<?php
session_start();
require_once "connection.php";
echo '<p class="text-success pt-3 fs-3 "> Welcome to Personal customer bill calculate</p>';
// net amount water in cubic metere read from water meter
$currentReading = 0.0;
$previuosReading = 0.0;
$priceRate = 0.0;
$totalPrice = 0.00;
$netReading = $currentReading - $previuosReading;
if ($netReading > 0 && $netReading < 5.0) {
    $priceRate = 7.0;
    $totalPrice = $previuosReading * $netReading;
} elseif ($netReading > 5 && $netReading < 10.0) {
    $priceRate = 8.5;
    $totalPrice = $previuosReading * $netReading;
} elseif ($netReading > 10 && $netReading < 15.0) {
    $priceRate = 10.0;
    $totalPrice = $previuosReading * $netReading;
} elseif ($netReading > 15 && $netReading < 25.0) {
    $priceRate = 12.0;
    $totalPrice = $previuosReading * $netReading;
} elseif ($netReading > 25 && $netReading < 40.0) {
    $priceRate = 13.5;
    $totalPrice = $previuosReading * $netReading;
} elseif ($netReading > 40) {
    $priceRate = 15.0;
    $totalPrice = $previuosReading * $netReading;
}


$meterID = rand(1000000000, 9999999999);
$name = "";
$stmt_user = "SELECT * from presonal ";
$result = $connect->query($stmt_user);
$row = $result->fetch_assoc();
$name = $row['name'];

if (isset($_POST['sumbit'])) {
    $createdDate = $_POST['date'];

    $sql = "INSERT INTO billrecordpersonal (name ,meterId,current_reading,previous_reading,net_reading,price_rate,total_price,created_date) VALUES('$name','$meterID','$currentReading','$previuosReading','$netReading','$priceRate','$totalPrice','$createdDate' )";
    $result = $connect->query($sql);
    if ($result) {
        $_SESSION['message'] = "Bill created successfully";
        header('Location:personalBill.php');

        exit(0);
    } else {
        $_SESSION['message'] = "Bill not created" . $sql . $connect->error;
        header('Location:personalBill.php');
        exit(0);
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
        personal bill records
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">



</head>

<body class="badge text-bg-success p-2 text-dark bg-opacity-25 container-fluid">
    <div class=" container mt-5">
        <?php include('message.php'); ?>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Personal Bill forms<a href="BillOficer.php" class="btn btn-danger float-end">Back</a>

                    </h4>
                </div>
                <div class="card-body">
                    <form method="POST" class="mb-3">
                        <div class="form-group mb-3">
                            <label class="form-label">Customer Name:</label>
                            <input type=" text" class="form-control w-50 m-auto" name="name" placeholder="your name"
                                value="<?php echo $name ?>" disabled>

                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label"> Customer meter ID:</label>
                            <input type="text" class="form-control w-50 m-auto" name="email" placeholder="your mobile"
                                value="<?php echo $meterID ?>" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label"> Current reading:</label>
                            <input type="text" class="form-control w-50 m-auto" name="mobile" placeholder="your mobile"
                                value="<?php echo $currentReading ?>" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Previous reading:</label>
                            <input type="text" class="form-control w-50 m-auto" name="password"
                                placeholder="your password" value="<?php echo $previuosReading ?>" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Net reading:</label>
                            <input type="text" class="form-control w-50 m-auto" name="password"
                                placeholder="your password" value="<?php echo $netReading ?>" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Price rate:</label>
                            <input type="text" class="form-control w-50 m-auto" name="password"
                                placeholder="your password" value="<?php echo $priceRate ?>" disabled>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Total price:</label>
                            <input type="text" class="form-control w-50 m-auto" name="password"
                                placeholder="your  password" value="<?php echo $totalPrice ?>" disabled>
                        </div>
                        <div class=" form-group mb-3">
                            <label class="form-label">Created date:</label>
                            <input type="date" class="form-control w-50 m-auto" name="date" placeholder="your password"
                                required>
                        </div>


                        <button class="btn btn-info mx-2" name="sumbit">Submit</button>
                        <a class="btn btn-success mx-3 " href="personalbillReport.php">View record</a>
                    </form>

                </div>

</body>

<!-- Javascript links -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
</script>

</html>