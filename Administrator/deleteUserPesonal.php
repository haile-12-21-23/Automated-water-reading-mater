<?php
require_once "connection.php";
if (isset($_GET['deleteid'])) {
    $id=$_GET['deleteid'];

    $sql="DELETE from adminpersonalaccount where PID='$id' ";
    $resuslt=$connect->query($sql);
    if ($resuslt) {
        // echo "deleted succesfully";
        header('Location:userperson.php');
    } else {
        echo "delete failed";
    }
}
// Administrator\deleteUserPesonal.php