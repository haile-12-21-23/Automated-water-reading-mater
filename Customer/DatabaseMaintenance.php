<?php
    $statusMsg=array();
if (isset($_POST['maintenance'])) {
    $feedbackName=$_POST['requestName'];
    $postedDate=$_POST['requestDate'];
    $requestType=$_POST['requestType'];
    $comments=$_POST['requestDiscrption'];
   


    $serverName="localhost";
    $password="";
    $userName="root";
    $databaseName="project_db";
    $connect=new mysqli($serverName, $userName, $password, $databaseName);
    if ($connect->connect_error) {
        die("Connection failed".$connect->connect_error);
    }

    // now check all fields are sumbited
    if (isset($_POST['maintenance'])) {

            // Insert new account
        $stmt ="INSERT INTO maintenance(fullname,requestdate,RequestType, requestdiscription) VALUES ('$feedbackName', '$postedDate',' $requestType','$comments')";
        if ($connect->query($stmt)===true) {
            array_push($statusMsg, " requested succefully");
        } else {
            array_push($statusMsg, " request failed".$stmt." ".$connect->error);
                             
            header("Location:MaintenanceRequest.php");
        }
    }
}