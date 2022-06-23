<?php
    $statusMsg=array();
if (isset($_POST['public'])) {
    $publicName=$_POST['publicName'];
    $publicPhone=$_POST['publicPhone'];
    $publicAddress=$_POST['publicAddress'];
    $targetDir="uploads/";
    $publicLicence=basename($_FILES['publicLicence']["name"]);
    $targetFilePathPublicLicence=$targetDir.$publicLicence;
    $publicMap=basename($_FILES['publicMap']["name"]);
    $targetFilePathPublicMap=$targetDir.$publicMap;
    
       
    $fileTypePublicLicence=pathinfo($targetFilePathPublicLicence, PATHINFO_EXTENSION);
    $fileTypePublicMap=pathinfo($targetFilePathPublicMap, PATHINFO_EXTENSION);


    $serverName="localhost";
    $password="";
    $userName="root";
    $databaseName="project_db";
    $connect=new mysqli($serverName, $userName, $password, $databaseName);
    if ($connect->connect_error) {
        die("Connection failed".$connect->connect_error);
    }


    // now check all fields are sumbited
    if (isset($_POST['public'])) {
        $stmt_phone="SELECT * FROM public where 	publicPhone='$publicPhone'";
        $result_phone=$connect->query($stmt_phone);
        if ($result_phone->num_rows>0) {
            array_push($statusMsg, "Phone number exist");
        } else {
            if (!empty($_FILES["publicLicence"]["name"]) && !empty($_FILES["publicMap"]["name"])) {
                // Allow certain file formats

                $allowTypes = array('jpg','png','jpeg','gif','pdf');
                if (in_array($fileTypePublicMap, $allowTypes) && in_array($fileTypePublicLicence, $allowTypes)) {
                    // Upload file to server
                    if (move_uploaded_file($_FILES["publicLicence"]["tmp_name"], $targetFilePathPublicLicence) && move_uploaded_file($_FILES["publicMap"]["tmp_name"], $targetFilePathPublicMap)) {

            // Insert new account
                        $stmt = "INSERT INTO public (publicName, 	publicPhone, publicAdress,	publicLicence,publicMap) VALUES ('$publicName', '$publicPhone', '$publicAddress','$publicLicence','$publicMap')";
                        if ($connect->query($stmt)===true) {
                            array_push($statusMsg, " registeration succes");
                        } else {
                            array_push($statusMsg, " registeration failed".$stmt." ".$connect->error);
                           
                            header("Location: customerPublic.php");
                        }
                    } else {
                        array_push($statusMsg, "Sorry, there was an error uploading your file.");
                    }
                } else {
                    array_push($statusMsg, 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.');
                   
                }
            } else {
                array_push($statusMsg, 'Please select a file to upload.');
              
            }
        }
    }
}