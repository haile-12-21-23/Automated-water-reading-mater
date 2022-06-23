<?php
require_once "connection.php";
if (isset($_GET['deleteid'])) {
    $id=$_GET['deleteid'];

    $sql="DELETE from adminaccount where AID='$id' ";
    $resuslt=$connect->query($sql);
    if ($resuslt) {
        // echo "deleted succesfully";
        header('Location:userAdmin.php');
    // Administrator\userBillOfficer.php
    } else {
        echo "delete failed";
    }
}
// Administrator\deleteUserPesonal.php