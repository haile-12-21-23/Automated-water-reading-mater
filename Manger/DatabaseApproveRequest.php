<?php
$serverName="localhost";
    $password="";
    $userName="root";
    $databaseName="project_db";
    $connect=new mysqli($serverName, $userName, $password, $databaseName);
    if ($connect->connect_error) {
        die("Connection failed".$connect->connect_error);
    }
 if(isset($_POST['sumbit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="INSERT INTO approverequest (name,email,mobile,password) VALUES('$name','$email','$mobile','$password' )";
    $result=$connect->query($sql);
    if($result){
        // echo "Data inserted Successfully";
        header('Location:DisplayRequest.php');
    }
    else{
        die("Couldn't insert data".$sql.$connect->error);
    }
    
 }
?>