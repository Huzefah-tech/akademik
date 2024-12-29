<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="../bootstrap-5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 20px;
        }

        .btn-actions button {
            margin-right: 5px;
        }

        .table {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Tombol Tambah Data -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Data Mahasiswa</h1>
            <a href="tambah.php" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Tambah Data
            </a>
        </div>

        <!-- Tabel Data Mahasiswa -->
        <div class="card">
            <div class="card-header bg-secondary text-white">
                <h5 class="mb-0">Daftar Mahasiswa</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 1; ?>
                        <?php foreach ($mahasiswa as $row) : ?>
                            <tr>
                                <td class="text-center"><?php echo $urut++; ?></td>
                                <td><?php echo $row['nim']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['alamat']; ?></td>
                                <td><?php echo $row['fakultas']; ?></td>
                                <td class="text-center btn-actions">
                                    <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau menghapus data?')">
                                        <i class="bi bi-trash"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="../bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>

</html>