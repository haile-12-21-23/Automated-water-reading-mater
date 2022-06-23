<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Customer/Customer.css">
    <title>pay bill</title>
</head>

<body>

    <div id="pay-bill" class="pay-bill">

        <h3>Pay bill</h3>
        <form method="post" action=" " class="pay-bill-form">
            <label>Customer Name:</label>
            <input type="text" id="name" name="owners_id" value=""><br>
            <label>Paid Date:</label>
            <input type="text" id="date" name="date" value=""><br>
            <label>Previous Reading:</label>
            <input type="text" id="prev-reading" name="Previous-Reading:"><br>
            <label>Present Reading:</label>
            <input type="text" id="current-reading" name="Present-Reading:"><br>
            <label>price:</label>
            <input type="text" id="price" name="price" value="10"><br>
            <input type="submit" name="total" value="pay">


        </form>
    </div>

</body>

</html>