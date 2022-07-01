<?php

include "connection.php";
$id = $_GET['did'];
$sql = "UPDATE maintenancerequest SET status=0  WHERE Id = '$id'";
$result = $connect->query($sql);
if ($result) {
    //  echo "updated Successfully";
    header('Location:DisplayRequest.php');
}