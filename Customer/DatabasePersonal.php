<?php
    $statusMsg=array();
if (isset($_POST['personal'])) {
    $fullName=$_POST['name'];
    $phoneNumber=$_POST['phone'];
    $address=$_POST['kebele'];
    $targetDir="uploads/";
    $personalId=basename($_FILES['personalID']["name"]);
    $targetFilePathId=$targetDir.$personalId;
    $homeDocument=basename($_FILES['homePlan']["name"]);
    $targetFilePathHomePlan=$targetDir.$homeDocument;
    
       
    $fileTypeId=pathinfo($targetFilePathId, PATHINFO_EXTENSION);
    $fileTypeHomePlan=pathinfo($targetFilePathHomePlan, PATHINFO_EXTENSION);


    $serverName="localhost";
    $password="";
    $userName="root";
    $databaseName="project_db";
    $connect=new mysqli($serverName, $userName, $password, $databaseName);
    if ($connect->connect_error) {
        die("Connection failed".$connect->connect_error);
    }


    // now check all fields are sumbited
    if (isset($_POST['personal'])) {
        $stmt_phone="SELECT * FROM presonal where 	phone_number='$phoneNumber'";
        $result_phone=$connect->query($stmt_phone);
        if ($result_phone->num_rows>0) {
            array_push($statusMsg, "Phone number exist");
        } else {
            if (!empty($_FILES["personalID"]["name"]) && !empty($_FILES["homePlan"]["name"])) {
                // Allow certain file formats

                $allowTypes = array('jpg','png','jpeg','gif','pdf');
                if (in_array($fileTypeHomePlan, $allowTypes) && in_array($fileTypeId, $allowTypes)) {
                    // Upload file to server
                    if (move_uploaded_file($_FILES["personalID"]["tmp_name"], $targetFilePathId) && move_uploaded_file($_FILES["homePlan"]["tmp_name"], $targetFilePathHomePlan)) {

            // Insert new account
                        $stmt = "INSERT INTO presonal (name, 	phone_number, kebele,person_Id,home_plan) VALUES ('$fullName', '$phoneNumber', '$address','$personalId','$homeDocument')";
                        if ($connect->query($stmt)===true) {
                            array_push($statusMsg, " registeration succes");
                        } else {
                            array_push($statusMsg, " registeration failed".$stmt." ".$connect->error);
                            // $errorVar=" registeration failed".$stmt." ".$connect->error;
                            // echo "<script> alert($errorVar);</script>";
                            header("Location: Customernew.php");
                        }
                    } else {
                        // echo "<script> alert('Sorry, there was an error uploading your file.');</script>";
                        array_push($statusMsg, "Sorry, there was an error uploading your file.");
                    }
                } else {
                    array_push($statusMsg, 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.');
                    // echo "<script> alert('Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.');</script>";
                }
            } else {
                array_push($statusMsg, 'Please select a file to upload.');
                // echo "<script> alert( 'Please select a file to upload.');</script>";
            }
        }
    }
}