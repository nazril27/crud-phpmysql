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
  <title>Form Edit</title>
</head>
<body>
  <form action="proses-edit.php" method="POST">

    <fieldset>

      <input type="hidden" name="id" value="<?php echo $mhs['id'] ?>" />

      <p>
        <label for="nim">NIM</label>
        <input type="text" name="nim" value="<?php echo $mhs['nim'] ?>" />
      </p>

      <p>
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?php echo $mhs['nama'] ?>" />
      </p>

      <p>
        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" value="<?php echo $mhs['jurusan'] ?>" />
      </p>

      <p>
        <label for="fakultas">Fakultas</label>
        <input type="text" name="fakultas" value="<?php echo $mhs['fakultas'] ?>" />
      </p>

      <p>
        <label for="quote">Quote</label><br>
        <textarea name="quote" id="quote" cols="50" rows="10"><?php echo $mhs['quote'] ?></textarea>
      </p>

      <p>
        <input type="submit" value="Submit" name="tambah" />
      </p>

    </fieldset>

  </form>
</body>
</html>