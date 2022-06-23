<?php
require_once "DatabaseFeedback.php";
// C:\wamp64\www\Try\Customer\DatabaseFeedback.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Customer/Customer.css">
    <title>Feedback page</title>
</head>

<body>


    <div id="give-feedback" class="give-feedback">
        <form action="feedback.php" method="POST">
            <h3 style="font-size:26px;font-family:Times New Roman;font-weight: bold;text-align: center;">
                Customer feedback page</h3>
            <div class="error">
                <?php include("errors.php");?>
            </div>
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold;"> Full Name: </label>
            <input type="text" name="feedbackName" placeholder="Full Name" size="15" required />
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold;"> Date:
            </label>
            <input type="date" id="feedback-date" name="feedbackDate" placeholder="date of comment" size="15"
                required />
            <label style="font-size:24px;font-family:Times New Roman;font-weight: bold;"> Comments:
            </label> <br>
            <textarea type="text" cols="35" rows="5" name="feedbackComment" placeholder="write your feedback here"
                size="15" required></textarea>
            <button style="font-size:24px;font-family:Times New Roman;font-weight: bold" name="Feedback" type="submit"
                class="registerbtn">Submit</button>
        </form>
    </div>
</body>

</html>









</div>
</body>
<!-- onclick="notify()" -->

</html>