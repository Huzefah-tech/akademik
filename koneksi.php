<?php
$koneksi = mysqli_connect("localhost", "root", "", "akademik");

function query($query)
{
  global $koneksi;
  return mysqli_query($koneksi, $query);
}
