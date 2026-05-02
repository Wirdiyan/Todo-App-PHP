<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Todo_App</title>
</head>
<body class="bg-light">
    <div container mt-5 class="contain">
    <h2 class="text-center mb-4 fw-bold title">To Do List Wirdiyan</h2>

    <form action="tambah.php" method="POST" class="d-flex gap-2 justify-content-center form-input">
        <input type="text" name="task" class="custom-input" placeholder="Masukkan Tugass..." required>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

    <br>

    <table class="table table-bordered table-striped text-center">
        <tr class="table-dark">
            <th>No</th>
            <th>Tugas</th>
            <th>Status</th>
            <th>Waktu ditulis</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        $data = mysqli_query($conn, "select * from task");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$d['task']?></td>
            <td><?=$d['status']?></td>
            <td><?=$d['created_at']?></td>
            <td>
                <a href="selesai.php?id=<?=$d['id']?>" class="btn btn-success btn-sm">Selesai</a>
                <a href="hapus.php?id=<?= $d['id']?>" onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    </div>
</body>
</html>