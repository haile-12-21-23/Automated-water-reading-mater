<?php
    $statusMsg=array();
if (isset($_POST['private'])) {
    $nameOfOrg=$_POST['orgName'];
    $phoneOfOrg=$_POST['orgPhone'];
    $OrgAddress=$_POST['orgAddress'];
    $targetDir="uploads/";
    $orgLicence=basename($_FILES['orgLicence']["name"]);
    $targetFilePathOrgLicence=$targetDir.$orgLicence;
    $orgMap=basename($_FILES['orgMap']["name"]);
    $targetFilePathOrgMap=$targetDir.$orgMap;


    $fileTypeOrgLicence=pathinfo($targetFilePathOrgLicence, PATHINFO_EXTENSION);
    $fileTypeOrgMap=pathinfo($targetFilePathOrgMap, PATHINFO_EXTENSION);


    $serverName="localhost";
    $password="";
    $userName="root";
    $databaseName="project_db";
    $connect=new mysqli($serverName, $userName, $password, $databaseName);
    if ($connect->connect_error) {
        die("Connection failed".$connect->connect_error);
    }

    // now check all fields are sumbited
    if (isset($_POST['private'])) {
        $stmt_phone="SELECT * FROM private where orgPhone       ='$phoneOfOrg'";
        $result_phone=$connect->query($stmt_phone);
        if ($result_phone->num_rows>0) {
            array_push($statusMsg, "Phone number exist");
        } else {
            if (!empty($_FILES["orgLicence"]["name"]) && !empty($_FILES["orgMap"]["name"])) {
                // Allow certain file formats

                $allowTypes = array('jpg','png','jpeg','gif','pdf');
                if (in_array($fileTypeOrgMap, $allowTypes) && in_array($fileTypeOrgLicence, $allowTypes)) {
                    // Upload file to server
                    if (move_uploaded_file($_FILES["orgLicence"]["tmp_name"], $targetFilePathOrgLicence) && move_uploaded_file($_FILES["orgMap"]["tmp_name"], $targetFilePathOrgMap)) {

            // Insert new account
                        $stmt ="INSERT INTO private(orgname, 		orgPhone, ordAddress,orgLicence,orgMap) VALUES ('$nameOfOrg', '$phoneOfOrg', '$OrgAddress','$orgLicence','$orgMap')";
                        if ($connect->query($stmt)===true) {
                            array_push($statusMsg, " registeration succes");
                        } else {
                            array_push($statusMsg, " registeration failed".$stmt." ".$connect->error);
                             
                            header("Location: customerPrivate.php");
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