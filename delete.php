<?php
include './util/connect.php';

if (isset($_GET['staffid'])) {
    $id = $_GET['staffid'];
    $sql = "DELETE from `staff` where id=$id";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header('Location:stafftable.php');
    } else {
        die(mysqli_error($connect));
    }
}
