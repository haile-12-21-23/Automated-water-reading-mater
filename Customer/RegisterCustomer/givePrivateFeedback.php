<?php
// session_start();
include "connection.php";
$fid = $_GET['fid'];
$sql = "SELECT orgname  FROM registerprivate where OID=$fid
    ";
$result = $connect->query($sql);
$row = $result->fetch_assoc();
$name = $row['orgname'];
if (isset($_POST['register'])) {
    $date = $_POST['date'];
    $comment = $_POST['comment'];

    $insert = "INSERT INTO comments (name,date,comment)
VALUES ('$name','$date', '$comment')";

    if ($connect->query($insert) === TRUE) {

        $_SESSION['message'] = "Sumbitted successfully";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback section </title>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
</head>

<body>
    <div class="form-container">
        <form action="" method="post" enctype="multipart/form-data">
            <h3 class="bg-success bg-opacity-20 p-3 w-60 mx-auto">put your Idea here</h3>
            <div class="" id="m-display">
                <?php
                if (isset($_POST['register'])) {
                    require_once "message.php";
                }
                // session_abort();
                ?>
            </div>
            <label class="form-label text-start fs-4 w-100 bg-opacity-10 mx-2">Organization Name</label>
            <input type="text" name="name" class="box" placeholder="Name of person" value="<?php echo $name ?>" disabled
                required>
            <label class="form-label text-start fs-4  w-100 bg-opacity-10 mx-2">Date</label>
            <input type="date" name="date" class="box" placeholder="phone of person" required>
            <label class="form-label" for="textAreaExample">Message</label>
            <textarea class="form-control" name="comment" rows="4"></textarea>
            <input type="submit" name="register" class="btn" value="Send">


        </form>
    </div>

</body>

<!-- Javascript links -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">

</script>

</html>