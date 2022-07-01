<?php
require_once "connection.php";
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE from billrecordpersonal where No='$id' ";
    $resuslt = $connect->query($sql);
    if ($resuslt) {
        // echo "deleted succesfully";
        header('Location:personalBillReport.php');
        // Administrator\userBillOfficer.php
    } else {
        echo "delete failed";
    }
}