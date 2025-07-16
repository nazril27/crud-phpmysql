<?php 

require "config.php";

if(isset($_POST["tambah"])){

  $nim = $_POST["nim"];
  $nama = $_POST["nama"];
  $jurusan = $_POST["jurusan"];
  $fakultas = $_POST["fakultas"];
  $quote = $_POST["quote"];
  $filename = $_FILES["filename"]["name"];
  $tempname = $_FILES["filename"]["tmp_name"];
  $folder = "/image/" . $filename;

  $sql = "INSERT INTO mahasiswa (nim, nama, jurusan, fakultas, quote, filename) VALUES ('$nim', '$nama', '$jurusan', '$fakultas', '$quote', '$filename')";
  $query = mysqli_query($db, $sql);

  move_uploaded_file($tempname, $folder);

  if ( $query ) {
    header("Location: index.php?status=sukses");
  } else {
    header("Location: index.php?status=gagal");
  }


} else {
  die("Akses dilarang...");
}

?>