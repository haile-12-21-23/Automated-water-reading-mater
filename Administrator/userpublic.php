<?php
echo "welcome to public";
require_once"connection.php";
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
        <button class="btn btn-primary my-5"> <a class="text-light text-decoration-none" href="userpublicForm.php">Add
                user</a>
        </button>
        <table class="table m-1">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Institution Name</th>
                    <th scope="col"> Institution mobile</th>
                    <th scope="col">password</th>
                    <th scope="col">operation</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql="SELECT * FROM adminpublicaccount";
                $result=$connect->query($sql);
                if ($result) {
                    while ($row=$result->fetch_assoc()) {
                        $id=$row['No'];
                        $name=$row['publicName'];
                        $mobile=$row['publicPhone'];
                        $password=$row['password'];
                        echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$password.'</td>
                    
                     <td>
                    <button class="btn btn-primary "><a href="updateUserPublic.php? updateid='.$id.'" class="text-light text-decoration-none">update</a></button > 
                    <button class="btn btn-danger"><a href="deleteUserPublic.php? deleteid='.$id.'" class="text-light text-decoration-none">delete</a></button >
                    
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