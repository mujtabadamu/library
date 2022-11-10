<?php
include './util/connect.php';

if (isset($_GET['borrowersId'])) {
    $id = $_GET['borrowersId'];
    $sql = "DELETE from `borrowers` where id=$id";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        header('Location:borrowersRecord.php');
    } else {
        die(mysqli_error($connect));
    }
}
