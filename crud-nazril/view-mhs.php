<?php 

require "config.php";

if ( !isset($_GET['id']) ) {
  header('Location: list-mhs.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$mhs = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
  die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>view-mhs</title>
</head>
<body>
  <p>NIM: <?php echo $mhs['nim'] ?></p>
  <p>Nama: <?php echo $mhs['nama'] ?></p>
  <p>Jurusan: <?php echo $mhs['jurusan'] ?></p>
  <p>Fakultas: <?php echo $mhs['fakultas'] ?></p>
  <p>Kata-kata hari ini: <?php echo $mhs['quote'] ?></p>
  <img src="./image/<?php echo $mhs['filename'] ?>">
</body>
</html>