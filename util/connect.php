<?php
$connect = new mysqli('localhost', 'root', '', 'school');
if (!$connect) {
    die(mysqli_error($connect));
}
