<?php
require_once "DatabasePersonal.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Custmer Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Customer.css">

    <!-- begginning of Custmer type
      -->
</head>

<body onload="customerAction();">
    <div class="customer-action" id="customer-function">
        <h2>Welcom to customer Page</h2>
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


    <form class="container" action="Customernew.php" method="POST" enctype="multipart/form-data">
        <div class="error">
            <?php include("errors.php");?>
        </div>
        <!-- The beggining of Customer information-->

        <div id="personal" class="personal-information">
            <h3 style="font-size:26px;font-family:Times New Roman;font-weight: bold;text-align: center;">Personal
                Information
            </h3>

            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold;"> Name: </label>
            <input type="text" name="name" placeholder="Full name of person" size="15" required>
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold;"> Phone Number: </label>
            <input type="text" name="phone" placeholder="Phone number of person" size="15" required />
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold">Kebele: </label>
            <input type="text" name="kebele" placeholder="Kebele" required />
            <label>Personal ID:</label>
            <input type="file" name="personalID" required>
            <br>

            <label> Home Map and Plan:</label>
            <input type="file" name="homePlan" required>

            <input style="font-size:24px;font-family:Times New Roman;font-weight: bold;" type="submit"
                class="registerbtn" name="personal" value="Register"> Alrady Register? <a
                href="../Home/Login/Login_true.php">Login</a>

        </div>
    </form>



    <form class="" action="Customernew.php" method="POST" enctype="multipart/form-data">
        <div id=" private" class="private-information">
            <h3 style="font-size:26px;font-family:Times New Roman;font-weight: bold;text-align: center;">Organization
                Information
            </h3>
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold;"> Organazation Name: </label>
            <input type="text" name="firstname" placeholder="Firstname" size="15" required />
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold;"> Organazation Phone Number:
            </label>
            <input type="text" name="middlename" placeholder="Middlename" size="15" required />
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold;"> Organization Address: </label>
            <input type="text" name="lastname" placeholder="address Organization " size="13" required />

            <label>Business license:</label>
            <input type="file" name="personalID" required>
            <br>

            <label> Map of the organization:</label>
            <input type="file" name="homePlan" required>

            <button style="font-size:24px;font-family:Times New Roman;font-weight: bold;" type="submit"
                class="registerbtn">Register</button>
        </div>


        <div id="public" class="public-information">
            <h3 style="font-size:26px;font-family:Times New Roman;font-weight: bold;text-align: center;">Institution
                Information
            </h3>
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold;"> Institution Name </label>
            <input type="text" name="firstname" placeholder="Institution Name" size="15" required />
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold;"> Institution Phone Number:
            </label>
            <input type="text" name="middlename" placeholder="Institution phone number" size="15" required />
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold;"> Institution Address: </label>
            <input type="text" name="lastname" placeholder="Institution address" size="15" required />
            <button style="font-size:24px;font-family:Times New Roman;font-weight: bold;" type="submit"
                class="registerbtn">Register</button>
        </div>

    </form>

    <div id="pay-bill" class="pay-bill">

        <h3>Pay bill</h3>
        <form method="post" action=" " class="pay-bill-form">
            <label>Customer Name:</label>
            <input type="text" id="name" name="owners_id" value="<?php echo $id; ?>" /><br>
            <label>Paid Date:</label>
            <input type="text" id="date" name="date" value="<?php echo $date; ?>" /><br>
            <label>Previous Reading:</label>
            <input type="text" id="prev-reading" name="Previous-Reading:"><br>
            <label>Present Reading:</label>
            <input type="text" id="current-reading" name="Present-Reading:"><br>
            <label>price:</label>
            <input type="text" id="price" name="price" value="10"><br>
            <input type="submit" name="total" value="pay">


        </form>
    </div>


    <div id="view-their-report">
        <h3>View his/her bill report</h3>

    </div>


    <div id="give-feedback" class="give-feedback">
        <h3>Give Feedback</h3>
        <form class="give-feedback-form" method="post" action=" ">
            <label>Full Name:</label>
            <input type="text" id="feedback-name" name="owners_id" value=""> <br>
            <label>Date:</label>
            <input type="date" id="feedback-date" name="date" value=""><br>
            <label>Feedback:</label>
            <textarea type="text" id="feedback-comment"></textarea><br>
            <button id="s-button" type="button" name="Fedback" onclick="notify()">submit</button>
        </form>

    </div>


    <div id="ask-maintenance-request" class="maintenance-request">
        <h3>Ask maintenance request</h3>
        <form method="post" action=" " class="maintenance-request-form">
            <label>Full Name:</label>
            <input type="text" id="request-name" name="owners_id" value=""> <br>
            <label>Date:</label>
            <input type="date" id="request-date" name="date" value=""><br>
            <label>Maintenace request type:</label>
            <input type="text" id="request-type"><br>
            <label>Description of maintenance:</label>
            <textarea type="text" id="request-description"></textarea><br>
            <button id="s-button" type="submit" name="Fedback" onclick="notify()">submit</button>
        </form>
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
    document.getElementById('personal').style.display = "block";

    document.getElementById('private').style.display = "none";
    document.getElementById('public').style.display = "none";

}

function privateInformation() {
    document.getElementById('personal').style.display = "none";

    document.getElementById('private').style.display = "block";
    document.getElementById('public').style.display = "none";

}

function publicInformation() {
    document.getElementById('personal').style.display = "none";

    document.getElementById('private').style.display = "none";
    document.getElementById('public').style.display = "block";


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
</script>