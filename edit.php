<?php
require 'functions.php';
$id = $_GET['id'];

// Ambil data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// Proses edit data
if (isset($_POST["submit"])) {
  if (edit($_POST) > 0) {
    echo "
		<script>
			alert('Data berhasil diedit!');
			document.location.href = 'index.php';
		</script>
	";
  } else {
    echo "
		<script>
			alert('Data gagal diedit!');
			document.location.href = 'index.php';
		</script>
	";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data Mahasiswa</title>
  <link href="../bootstrap-5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5">
    <h1 class="mb-4 text-center">Edit Data Mahasiswa</h1>
    <a href="index.php" class="btn btn-secondary mb-3">Kembali</a>

    <div class="card">
      <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $mhs['id']; ?>">

          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required value="<?= $mhs['nama']; ?>">
          </div>

          <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" required value="<?= $mhs['nim']; ?>">
          </div>

          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required value="<?= $mhs['alamat']; ?>">
          </div>

          <div class="mb-3">
            <label for="fakultas" class="form-label">Fakultas</label>
            <select class="form-control" name="fakultas" id="fakultas">
              <option value="">- Pilih Fakultas -</option>
              <option value="saintek" <?= $mhs['fakultas'] == "saintek" ? "selected" : ""; ?>>Saintek</option>
              <option value="soshum" <?= $mhs['fakultas'] == "soshum" ? "selected" : ""; ?>>Soshum</option>
            </select>
          </div>

          <button type="submit" name="submit" class="btn btn-primary">Edit Data</button>
        </form>
      </div>
    </div>
  </div>

  <script src="../bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>