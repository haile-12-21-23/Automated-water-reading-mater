<?php
    $statusMsg=array();
if (isset($_POST['Feedback'])) {
    $feedbackName=$_POST['feedbackName'];
    $postedDate=$_POST['feedbackDate'];
    $comments=$_POST['feedbackComment'];
   


    $serverName="localhost";
    $password="";
    $userName="root";
    $databaseName="project_db";
    $connect=new mysqli($serverName, $userName, $password, $databaseName);
    if ($connect->connect_error) {
        die("Connection failed".$connect->connect_error);
    }

    // now check all fields are sumbited
    if (isset($_POST['Feedback'])) {

            // Insert new account
        $stmt ="INSERT INTO feedback(fullName,postedDate, comment) VALUES ('$feedbackName', '$postedDate', '$comments')";
        if ($connect->query($stmt)===true) {
            array_push($statusMsg, " registeration succes");
        } else {
            array_push($statusMsg, " registeration failed".$stmt." ".$connect->error);
                             
            header("Location: Feedback.php");
        }
    }
}