<?php
require_once "connection.php";
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE from billrecordpublic where No='$id' ";
    $resuslt = $connect->query($sql);
    if ($resuslt) {
        // echo "deleted succesfully";
        header('Location:publicBillReport.php');
        // Administrator\userBillOfficer.php
    } else {
        echo "delete failed";
    }
}