<?php
require_once "DatabasePublic.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Customer/Customer.css">
    <title>customer Public and Govermental Institution page</title>
</head>

<body>



    <div id="public" class="public-information">
        <form action="customerPublic.php" method="POST" enctype="multipart/form-data">
            <h3 style="font-size:26px;font-family:Times New Roman;font-weight: bold;text-align: center;">
                Information of Govermental and public Institution page</h3>
            <div class="error">
                <?php include("errors.php");?>
            </div>
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold;"> Institution Name: </label>
            <input type="text" name="publicName" placeholder="Institution Name" size="15" required />
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold;"> Institution Phone Number:
            </label>
            <input type="text" name="publicPhone" placeholder="Institution phone number" size="15" required />
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold;"> Institution Address: </label>
            <input type="text" name="publicAddress" placeholder="Institution address" size="15" required>
            <label style="font-size:18px;font-family:Times New Roman;font-weight: bold;">Institution license:</label>
            <input style="font-size:18px;font-family:Times New Roman;font-weight: bold; ;" type="file"
                name="publicLicence" required>
            <br>

            <label style="font: size 18px;font-family:Times New Roman;font-weight: bold;"> Map of the
                Institution:</label>
            <input style="font-size:18px;font-family:Times New Roman;font-weight: bold ;margin-top: 10px" type="file"
                name="publicMap" required>
            <button style="font-size:24px;font-family:Times New Roman;font-weight: bold" name="public" type="submit"
                class="registerbtn">Register</button>
        </form>
    </div>
</body>

</html>