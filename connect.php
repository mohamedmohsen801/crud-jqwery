<?php
$connect=New mysqli("localhost","root","","bootstrapcrud");



if (!$connect) {
    die(mysqli_error($connect));
}
?>