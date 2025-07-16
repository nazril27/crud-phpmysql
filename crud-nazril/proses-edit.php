<?php 

require "config.php";

if (isset($_POST['tambah'])) {

  $id = $_POST['id'];
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $jurusan = $_POST['jurusan'];
  $fakultas = $_POST['fakultas'];
  $quote = $_POST['quote'];

  $sql = "UPDATE mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', fakultas='$fakultas', quote='$quote' WHERE id=$id";
  $query = mysqli_query($db, $sql);

  if ($query) {
    header('Location: list-mhs.php');
  } else {
    die('gagal menyimpan perubahan...');
  }



} else {
  die("Akses dilarang...");
}



?>