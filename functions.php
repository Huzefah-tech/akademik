<?php
require 'koneksi.php';

$error = "";
$sukses = "";
$nama = "";
$nim = "";
$alamat = "";
$fakultas = "";

function delete($id)
{
  global $koneksi;
  mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");

  return mysqli_affected_rows($koneksi);
}

function edit($data)
{
  global $koneksi;
  // ambil data dari tiap elemen form
  $id         = $data['id'];
  $nim        = $data['nim'];
  $nama       = $data['nama'];
  $alamat     = $data['alamat'];
  $fakultas   = $data['fakultas'];

  $query = "UPDATE mahasiswa SET 
  nama = '$nama',
  nim = '$nim',
  alamat = '$alamat',
  fakultas = '$fakultas'
  WHERE id = '$id'
  ";
  mysqli_query($koneksi, $query);

  return mysqli_affected_rows($koneksi);
}

function tambah($data)
{
  global $koneksi;
  // ambil data dari tiap elemen form
  $nim        = $data['nim'];
  $nama       = $data['nama'];
  $alamat     = $data['alamat'];
  $fakultas   = $data['fakultas'];

  $query = "INSERT INTO mahasiswa (nim, nama, alamat, fakultas) values ('$nim','$nama','$alamat','$fakultas')";
  mysqli_query($koneksi, $query);
  return mysqli_affected_rows($koneksi);
}

// if (isset($_POST['tambah'])) { //untuk create
//   $nim        = $_POST['nim'];
//   $nama       = $_POST['nama'];
//   $alamat     = $_POST['alamat'];
//   $fakultas   = $_POST['fakultas'];

//   if ($nim && $nama && $alamat && $fakultas) {
//     //untuk insert
//     $sql1   = "insert into mahasiswa(nim,nama,alamat,fakultas) values ('$nim','$nama','$alamat','$fakultas')";
//     $q1     = mysqli_query($koneksi, $sql1);
//     if ($q1) {
//       $sukses     = "Berhasil memasukkan data baru";
//     } else {
//       $error      = "Gagal memasukkan data";
//     }
//   } else {
//     $error = "Silakan masukkan semua data";
//   }
// }
