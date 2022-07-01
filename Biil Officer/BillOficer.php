<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="../Administrator/Admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body class="bg-success p-2" style="--bs-bg-opacity: .5;">

    <h2 class="text-center">Welcome to Bill Officer page</h2>
    <div class=" container">
        <form action="" method="POST" class="mb-3 ">
            <div class="input-group">
                <select name="account">

                    <option value=" 1">personal Customer</option>
                    <option value="2">private organization customer</option>
                    <option value="3">public and govermental institution</option>
                </select>
                <input type="submit" class="btn btn-secondary p-2.7 m-3" name="submit" value="calculate bill">
        </form>
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
                if (isset($_POST['submit'])) {
                    if (!empty($_POST['account'])) {
                        $selected = $_POST['account'];
                        // echo 'You have chosen: ' . $selected;
                        if ($selected == 1) {
                            header('Location:personalBill.php');
                        } elseif ($selected == 2) {
                            header('Location:privateBill.php');
                        } elseif ($selected == 3) {
                            header('Location:publicBill.php');
                        } else {
                            echo '<p class="text-danger">Please select the customer type first.</p>';
                        }
                    }
                }
                ?>

                <!-- <?php
                        $sql = "SELECT * FROM approverequest";
                        $result = $connect->query($sql);
                        if ($result) {
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['No'];
                                $name = $row['name'];
                                $email = $row['email'];
                                $mobile = $row['mobile'];
                                $password = $row['password'];
                                echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $mobile . '<td>
                    <td>' . $password . '<td>
                    
                     <td>
                    <button class="btn btn-primary"><a href="update.php? updateid=' . $id . '" class="text-light">update</a></button > 
                    <button class="btn btn-danger"><a href="delete.php? deleteid=' . $id . '" class="text-light">delete</a></button >
                    
                </td>
                </tr>';
                            }
                        }
                        ?> -->

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