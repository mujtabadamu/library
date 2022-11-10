<?php
include './util/connect.php';

if (isset($_GET['bookId'])) {
    $id = $_GET['bookId'];
    $sql = "DELETE from `book` where id=$id";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header('Location:bookRecord.php');
    } else {
        die(mysqli_error($connect));
    }
}
