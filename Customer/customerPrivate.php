<?php
require_once "DatabasePrivate.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Customer/Customer.css">
    <title>customer private organization page</title>
</head>

<body>



    <div id="private" class="private-information">
        <form action="customerprivate.php" method="POST" enctype="multipart/form-data">
            <h3 style="font-size:26px;font-family:Times New Roman;font-weight: bold;text-align: center;">
                customer private organization page</h3>
            <div class="error">
                <?php include("errors.php");?>
            </div>
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold;"> Organization Name: </label>
            <input type="text" name="orgName" placeholder="Institution Name" size="15" required />
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold;"> Organization Phone Number:
            </label>
            <input type="text" name="orgPhone" placeholder="Institution phone number" size="15" required />
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold;"> Organization Address: </label>
            <input type="text" name="orgAddress" placeholder="Institution address" size="15" required>
            <label style="font-size:18px;font-family:Times New Roman;font-weight: bold;">Organization license:</label>
            <input style="font-size:18px;font-family:Times New Roman;font-weight: bold; ;" type="file" name="orgLicence"
                required>
            <br>

            <label style="font: size 18px;font-family:Times New Roman;font-weight: bold;">
                rganization Map:</label>
            <input style="font-size:18px;font-family:Times New Roman;font-weight: bold ;margin-top: 10px" type="file"
                name="orgMap" required>
            <button style="font-size:24px;font-family:Times New Roman;font-weight: bold" name="private" type="submit"
                class="registerbtn">Register</button>
        </form>
    </div>
</body>

</html>