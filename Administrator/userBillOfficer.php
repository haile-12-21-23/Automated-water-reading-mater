<?php

require_once "connection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill officer page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container mb-5">
        <h3 class="text-center mb-2 mt-2 mx-auto fs-3">welcome to Bill officer</h3>




        <h3 class=" text-center mb-2 mt-2 mx-auto fs-3"> lists of Bill officer</h3>



        <button class="btn btn-success  "> <a class="text-light text-decoration-none text-right"
                href="userBillOfficerForm.php">
                Creat account</a>
        </button>
        <table class="table m-1">
            </td>
            </tr>


            </tbody>
        </table>

        <h3 class=" text-center mb-2 mt-2 mx-auto fs-3">Bill officeraccount lists</h3>
        <table class="table m-1">
            <thead>
                <tr>


                    <th scope="col">No</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">mobile</th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>
                    <th scope="col">type</th>
                    <th scope="col">Operation</th>

                </tr>
            </thead>
            <tbody>

                <?php


                $sql = "SELECT * FROM accountstaff where type='billOfficer'
                ";
                $result = $connect->query($sql);

                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['SID'];
                        $name = $row['name'];
                        $phone = $row['phone'];
                        $email = $row['email'];
                        $password = $row['password'];
                        $type = $row['type'];
                        echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $phone . '</td>
                   <td>' . $email . '</td>
                    
                      <td>' . $password . '</td>
                       <td>' . $type . '</td>

                
               
                     <td>
                <button class="btn btn-primary btn-sm"><a href="updateUserBillOfficer.php? updateid=' . $id . '"
                        class="text-light text-decoration-none">update</a></button>
                <button class="btn btn-danger btn-sm"><a href="deleteUserBillOfficer.php? deleteid=' . $id . '"
                        class="text-light text-decoration-none">delete</a></button>

                </td>
                </tr>';
                    }
                }
                ?>

            </tbody>
        </table>
    </div>




</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
</script>

</html>