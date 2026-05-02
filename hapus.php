<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($conn, "delete from task where id = $id");

header("Location: index.php");
?>