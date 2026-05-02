<?php
include 'koneksi.php';

$task = $_POST['task'];

mysqli_query(
    $conn,
    "insert into task(task)
    values ('$task')"
);

header("Location:index.php");
?>