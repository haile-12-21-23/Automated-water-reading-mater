<?php
	require_once 'connection.php';
 
	if(ISSET($_POST['save'])){
		$pname = $_POST['pname'];
		$price = $_POST['price'];
		$qty = $_POST['qty'];
		$date = date("Y-m-d", strtotime("+6 HOURS"));
 
		$conn->query("INSERT INTO `product` VALUES('', '$pname', '$price', '$qty', '$date')") or die($connect->connect_error);
 
		header('location: index.php');
	}