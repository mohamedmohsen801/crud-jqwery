<?php
include 'connect.php';


if ($_POST['deleteSend']) {

    $sql = "DELETE FROM `crud` WHERE id=$_POST[deleteSend]";
    $result = mysqli_query($connect, $sql);
    # code...
}



?>