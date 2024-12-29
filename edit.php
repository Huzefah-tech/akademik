<?php
require 'functions.php';
$id = $_GET['id'];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST["submit"])) {

  if (edit($_POST) > 0) {
    echo "
		<script>
			alert('data berhasil diedit!');
			document.location.href = 'index.php';
		</script>
	";
  } else {
    echo "
		<script>
			alert('data gagal diedit!');
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
</head>

<body>
  <h1>Edit Data Mahasiswa</h1>
  <a href="index.php"><button>Kembali</button></a>

  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
    <!-- <input type="hidden" name="gambarLama" value="<?= $mhs['gambar']; ?>"> -->
    <ul>
      <li>
        <label for="nama">nama : </label>
        <input type="text" name="nama" id="nama" required value="<?= $mhs['nama']; ?>">
      </li>
      <li>
        <label for="nim">nim : </label>
        <input type="text" name="nim" id="nim" required value="<?= $mhs['nim']; ?>">
      </li>
      <li>
        <label for="alamat">alamat : </label>
        <input type="text" name="alamat" id="alamat" required value="<?= $mhs['alamat']; ?>">
      </li>
      <div class="col-sm-10">
        <select class="form-control" name="fakultas" id="fakultas">
          <option value="">- Pilih Fakultas -</option>
          <option value="saintek" <?php if ($fakultas == "saintek") echo "selected" ?>>saintek</option>
          <option value="soshum" <?php if ($fakultas == "soshum") echo "selected" ?>>soshum</option>
        </select>
      </div>
      <li>
        <button type="submit" name="submit">Edit Data</button>
      </li>
  </form>
</body>

</html>