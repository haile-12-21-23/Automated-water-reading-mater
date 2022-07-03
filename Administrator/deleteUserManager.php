<?php
require_once "connection.php";
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE from accountstaff where SID='$id' ";
    $resuslt = $connect->query($sql);
    if ($resuslt) {
        // echo "deleted succesfully";
        header('Location:userManager.php');
        // Administrator\userBillOfficer.php
    } else {
        echo "delete failed";
    }
}
// Administrator\deleteUserPesonal.php