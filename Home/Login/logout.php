<?php
session_start();
if($_SESSION['uname']){
    session_destroy();
    echo "<script>location.href='try.php'</script>";
}
?>