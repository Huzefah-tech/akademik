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
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="col-12">
        <a href="tambah.php"><button class="btn btn-primary">Tambah Data</button></a>
    </div>

    <div class="">
        <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $urut = 1; ?>
                        <?php foreach ($mahasiswa as $row) : ?>
                            <tr>
                                <th scope="row"><?php echo $urut++; ?></th>
                                <td scope="row"><?php echo $row['nim'] ?></td>
                                <td scope="row"><?php echo $row['nama'] ?></td>
                                <td scope="row"><?php echo $row['alamat'] ?></td>
                                <td scope="row"><?php echo $row['fakultas'] ?></td>
                                <td scope="row" class="text-center">
                                    <a href="edit.php?id=<?= $row["id"]; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</body>

</html>