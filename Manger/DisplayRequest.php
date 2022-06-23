<?php
$serverName="localhost";
    $password="";
    $userName="root";
    $databaseName="project_db";
    $connect=new mysqli($serverName, $userName, $password, $databaseName);
    if ($connect->connect_error) {
        die("Connection failed".$connect->connect_error);
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display request</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"> <a class="text-light" href="ApproveMaintenanceRequest.php">Add user</a>
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">mobile</th>
                    <th scope="col">password</th>
                    <th scope="col">operation</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql="SELECT * FROM approverequest";
                $result=$connect->query($sql);
                if ($result) {
                    while ($row=$result->fetch_assoc()) {
                        $id=$row['No'];
                        $name=$row['name'];
                        $email=$row['email'];
                        $mobile=$row['mobile'];
                        $password=$row['password'];
                        echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'<td>
                    <td>'.$password.'<td>
                    
                     <td>
                    <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">update</a></button > 
                    <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">delete</a></button >
                    
                </td>
                </tr>';
                    }
                }
                ?>

            </tbody>
        </table>

    </div>

</body>

</html>