<?php
require_once "DatabasePersonal.php";?>
<!DOCTYPE html>

<html>

<head>
    <title>Custmer personal Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Customer.css">

    <!-- begginning of Custmer type
      -->
</head>

<body>
    <!-- Personal information is seted this-->
    <form action="customerPersonal.php" method="POST" enctype="multipart/form-data">

        <!-- The beggining of Customer information-->

        <div id="personal" class="personal-information">
            <h3 style="font-size:26px;font-family:Times New Roman;font-weight: bold;text-align: center;"> Personal
                Information</h3>
            <div class="error">
                <?php include("errors.php");?>
            </div>
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold;"> Name: </label>
            <input type="text" name="name" placeholder="Full name of person" size="15" required>
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold;"> Phone Number: </label>
            <input type="text" name="phone" placeholder="Phone number of person" size="15" required />
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold">Kebele: </label>
            <input type="text" name="kebele" placeholder="Kebele" required />

            <label style="font-size:18px;font-family:Times New Roman;font-weight: bold;">Personal ID:</label>
            <input style="font-size:18px;font-family:Times New Roman;font-weight: bold; ;" type="file" name="personalID"
                required>
            <br>

            <label style="font: size 18px;font-family:Times New Roman;font-weight: bold;"> Home Map :</label>
            <input style="font-size:18px;font-family:Times New Roman;font-weight: bold ;margin-top: 10px" type="file"
                name="homePlan" required>

            <input style="font-size:24px;font-family:Times New Roman;font-weight: bold;" type="submit"
                class="registerbtn" name="personal" value="Register"> Alrady Register? <a
                href="../Home/Login/Login_true.php">Login</a>

        </div>
    </form>
</body>

</html>

<!-- <script>
function notify() {
    alert('successfully sent!')
}



function customerAction() {


    document.getElementById('customer-function').style.display = 'block';
    document.getElementById('customer-type').style.display = "none";
    document.getElementById('personal').style.display = "none";

    document.getElementById('private').style.display = "none";
    document.getElementById('public').style.display = "none";

    document.getElementById('pay-bill').style.display = "none";
    document.getElementById('view-their-report').style.display = "none";
    document.getElementById('give-feedback').style.display = "none";
    document.getElementById('ask-maintenance-request').style.display = "none";
}

function PersonalInformation() {
    document.getElementById('personal').style.display = "block";

    document.getElementById('private').style.display = "none";
    document.getElementById('public').style.display = "none";

}

function privateInformation() {

    window.location.href = "../Customer/customerPrivate.php";
    // document.getElementById('personal').style.display = "none";

    // document.getElementById('private').style.display = "block";
    // document.getElementById('public').style.display = "none";

}

function publicInformation() {
    // document.getElementById('personal').style.display = "none";

    // document.getElementById('private').style.display = "none";
    // document.getElementById('public').style.display = "block";
    window.location.href = "../Customer/customerPublic.php";

}

function customerType() {
    // document.getElementById('customer-function').style.display = 'block';
    // document.getElementById('customer-type').style.display = "none";
    // document.getElementById('personal').style.display = "none";

    // document.getElementById('private').style.display = "none";
    // document.getElementById('public').style.display = "none";

    // document.getElementById('pay-bill').style.display = "none";
    // document.getElementById('view-their-report').style.display = "none";
    // document.getElementById('give-feedback').style.display = "none";
    // document.getElementById('ask-maintenance-request').style.display = "none";
}

function apllyRegister() {

    document.getElementById('customer-type').style.display = "block";
    document.getElementById('personal').style.display = "none";
    document.getElementById('private').style.display = "none";
    document.getElementById('public').style.display = "none";

    document.getElementById('pay-bill').style.display = "none";
    document.getElementById('view-their-report').style.display = "none";
    document.getElementById('give-feedback').style.display = "none";
    document.getElementById('ask-maintenance-request').style.display = "none";

}

function payBill() {
    document.getElementById('customer-type').style.display = "none";
    document.getElementById('personal').style.display = "none";
    document.getElementById('private').style.display = "none";
    document.getElementById('public').style.display = "none";


    document.getElementById('customer-type').style.display = "none";
    document.getElementById('pay-bill').style.display = "block";
    document.getElementById('view-their-report').style.display = "none";
    document.getElementById('give-feedback').style.display = "none";
    document.getElementById('ask-maintenance-request').style.display = "none";
}

function viewTheirBillReport() {
    document.getElementById('customer-type').style.display = "none";
    document.getElementById('personal').style.display = "none";
    document.getElementById('private').style.display = "none";
    document.getElementById('public').style.display = "none";

    document.getElementById('customer-type').style.display = "none";
    document.getElementById('pay-bill').style.display = "none";
    document.getElementById('view-their-report').style.display = "block";
    document.getElementById('give-feedback').style.display = "none";
    document.getElementById('ask-maintenance-request').style.display = "none";

}

function giveFeedback() {
    document.getElementById('customer-type').style.display = "none";
    document.getElementById('personal').style.display = "none";
    document.getElementById('private').style.display = "none";
    document.getElementById('public').style.display = "none";


    document.getElementById('customer-type').style.display = "none";
    document.getElementById('pay-bill').style.display = "none";
    document.getElementById('view-their-report').style.display = "none";
    document.getElementById('give-feedback').style.display = "block";
    document.getElementById('ask-maintenance-request').style.display = "none";

}

function askMaintenanceRequest() {
    document.getElementById('customer-type').style.display = "none";
    document.getElementById('personal').style.display = "none";
    document.getElementById('private').style.display = "none";
    document.getElementById('public').style.display = "none";


    document.getElementById('customer-type').style.display = "none";
    document.getElementById('pay-bill').style.display = "none";
    document.getElementById('view-their-report').style.display = "none";
    document.getElementById('give-feedback').style.display = "none";
    document.getElementById('ask-maintenance-request').style.display = "block";

}
</script> -->