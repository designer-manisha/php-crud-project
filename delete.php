<?php
require 'connect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM `crud` WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Delete successfull";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
