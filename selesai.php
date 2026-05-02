<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query(
    $conn,
    "update task
    set status = 'Sudah'
    where id = $id"
);

header("Location: index.php");
?>