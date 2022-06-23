<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Customer/CustomerHome.css">
    <title>customer home page</title>
</head>

<body onload="customerAction()">


    <div class="homeCustomer" action="" method="POST" enctype="multipart/form-data">
        <div id="customer-function" class="customer-action">
            <h2>Welcom to customer home Page</h2>
            <button onclick="apllyRegister()">Apply Registration</button>
            <button onclick="payBill()">Pay Bill</button>
            <button onclick="viewTheirBillReport()">View His/Her Bill Report</button>
            <button onclick="giveFeedback()">Give Feedback</button>
            <button onclick="askMaintenanceRequest()">Ask Maintenace Request</button>
        </div>


        <div id="customer-type" class="account-type">
            <input type="button" value="personal " onclick="PersonalInformation();" />
            <input type="button" value="Private Organization" onclick="privateInformation();" />
            <input type="button" value="Public and Govermental Institution" onclick="publicInformation();" />
        </div>

    </div>

</body>

</html>

<script>
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
    window.location.href = "../Customer/CustomerPersonal.php";
    // document.getElementById('personal').style.display = "block";
    // document.getElementById('private').style.display = "none";
    // document.getElementById('public').style.display = "none";
}

function privateInformation() {
    window.location.href = "../Customer/customerPrivate.php";
    // document.getElementById('personal').style.display="none"
    // document.getElementById('private').style.display="block" ; //
    // document.getElementById('public').style.display = "none";
}

function publicInformation() { //
    // document.getElementById('personal').style.display = "none"; //
    // document.getElementById('private').style.display =
    // "none"; // document.getElementById('public').style.display="block"
    // ;
    window.location.href = "../Customer/customerPublic.php";
}

function customerType() {
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
    window.location.href = "../Customer/paybill.php";
    // document.getElementById('customer-type').style.display = "none";
    // document.getElementById('personal').style.display = "none";
    // document.getElementById('private').style.display = "none";
    // document.getElementById('public').style.display = "none";
    // document.getElementById('customer-type').style.display = "none";
    // document.getElementById('pay-bill').style.display = "block";
    // document.getElementById('view-their-report').style.display = "none";
    // document.getElementById('give-feedback').style.display = "none";
    // document.getElementById('ask-maintenance-request').style.display = "none";
}

function viewTheirBillReport() {
    window.location.href = "../Customer/viewbillReport.php";
    // document.getElementById('customer-type').style.display = "none";
    // document.getElementById('personal').style.display = "none";
    // document.getElementById('private').style.display = "none";
    // document.getElementById('public').style.display = "none";
    // document.getElementById('customer-type').style.display = "none";
    // document.getElementById('pay-bill').style.display = "none";
    // document.getElementById('view-their-report').style.display = "block";
    // document.getElementById('give-feedback').style.display = "none";
    // document.getElementById('ask-maintenance-request').style.display = "none";
}

function giveFeedback() {
    window.location.href = "../Customer/feedback.php";

    // document.getElementById('customer-type').style.display = "none";
    // document.getElementById('personal').style.display = "none";
    // document.getElementById('private').style.display = "none";
    // document.getElementById('public').style.display = "none";
    // document.getElementById('customer-type').style.display = "none";
    // document.getElementById('pay-bill').style.display = "none";
    // document.getElementById('view-their-report').style.display = "none";
    // document.getElementById('give-feedback').style.display = "block";
    // document.getElementById('ask-maintenance-request').style.display = "none";
}

function askMaintenanceRequest() {
    window.location.href = "../Customer/MaintenanceRequest.php";

    // document.getElementById('customer-type').style.display = "none";
    // document.getElementById('personal').style.display = "none";
    // document.getElementById('private').style.display = "none";
    // document.getElementById('public').style.display = "none";
    // document.getElementById('customer-type').style.display = "none";
    // document.getElementById('pay-bill').style.display = "none";
    // document.getElementById('view-their-report').style.display = "none";
    // document.getElementById('give-feedback').style.display = "none";
    // document.getElementById('ask-maintenance-request').style.display = "block";
}
</script>