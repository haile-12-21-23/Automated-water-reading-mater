<?php
require_once "DatabaseMaintenance.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Customer/Customer.css">
    <title>Maintenance request </title>
</head>

<body>

    <div id="ask-maintenance-request" class="maintenance-request">
        <h3>Ask maintenance request</h3>
        <div class="error">
            <?php include("errors.php");?>
        </div>
        <form method="POST" action=" MaintenanceRequest.php " class="maintenance-request-form">

            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold">Full Name:</label> <br>
            <input type="text" id="request-name" name="requestName" value="" size="15"> <br>
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold">Date:</label> <br>
            <input type="date" id="request-date" name="requestDate" value=""><br>
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold">Maintenace request type:</label>
            <br>
            <input type="text" name="requestType" id="request-type"><br>
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold"> Description of
                maintenance:</label> <br>
            <textarea type="text" name="requestDiscrption" id="request-description"></textarea><br>
            <button id="s-button" type="submit" name="maintenance">submit</button>
        </form>
    </div>



</body>

</html>