<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Mahasiswa</title>
</head>
<body>
  <table border="1">
    <thead>
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Fakultas</th>
        <th>Tindakan</th>
      </tr>
    </thead>
    <tbody>

      <?php 
      $sql = "SELECT * FROM mahasiswa";
      $query = mysqli_query($db, $sql);

      while($mhs = mysqli_fetch_array($query)){
        echo "<tr>";

        echo "<td>".$mhs['nim']."</td>";
        echo "<td>".$mhs['nama']."</td>";
        echo "<td>".$mhs['jurusan']."</td>";
        echo "<td>".$mhs['fakultas']."</td>";

        echo "<td>";
        echo "<a href='hapus.php?id=".$mhs['id']."'>Hapus</a> | ";
        echo "<a href='form-edit.php?id=".$mhs['id']."'>Edit</a> | ";
        echo "<a href='view-mhs.php?id=".$mhs['id']."'>View</a>";
        echo "</td>";

        echo "</tr>";
      }
      ?>
    </tbody>
  </table>

  <p>Total: <?php echo mysqli_num_rows($query) ?></p>
  
</body>
</html>
