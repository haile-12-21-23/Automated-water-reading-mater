<?php

include "connection.php";
$id = $_GET['pid'];
$sql = "UPDATE maintenancerequest SET status=1  WHERE Id = '$id'";
$result = $connect->query($sql);
if ($result) {
    //  echo "updated Successfully";
    header('Location:mainteneceRequests.php');
} else {
    die("Couldn't update data" . $sql . $connect->error);
}