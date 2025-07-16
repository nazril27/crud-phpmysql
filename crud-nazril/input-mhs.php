<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Mahasiswa</title>
</head>
<body>
  <form action="proses-input.php" method="POST" enctype="multipart/form-data">

    <fieldset>

    <p>
      <label for="nim">NIM: </label>
      <input type="text" name="nim">
    </p>

    <p>
      <label for="nama">Nama: </label>
      <input type="text" name="nama">
    </p>

    <p>
      <label for="jurusan">Jurusan: </label>
      <input type="text" name="jurusan">
    </p>

    <p>
      <label for="fakultas">Fakultas: </label>
      <input type="text" name="fakultas">
    </p>

    <p>
      <label for="quote">Kata-kata: </label><br>
      <textarea name="quote" id="quote" cols="50" rows="10"></textarea>
    </p>

    <p>
      <label for="filename">Upload Foto: </label>
      <input type="file" name="filename">
    </p>

    <p>
      <input type="submit" value="Tambahkan" name="tambah">
    </p>
     
    </fieldset>

  </form>

</body>
</html>