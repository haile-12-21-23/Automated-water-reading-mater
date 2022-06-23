<?php
$serverName="localhost";
    $password="";
    $userName="root";
    $databaseName="project_db";
    $connect=new mysqli($serverName, $userName, $password, $databaseName);
    if ($connect->connect_error) {
        die("Connection failed".$connect->connect_error);
    }
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
     
        $sql="DELETE from approverequest where No='$id' ";
        $resuslt=$connect->query($sql);
        if($resuslt){
        //   echo "deleted succesfully";  
        header('Location:DisplayRequest.php');
        }
        else{
            echo "delete failed";
        }
            
    }