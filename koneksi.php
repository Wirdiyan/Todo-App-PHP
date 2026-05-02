<?php
$conn = mysqli_connect("localhost", "root", "wirdiyan", "todo_db");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>