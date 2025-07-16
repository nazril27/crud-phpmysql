<?php 
require "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="proses.php" method="POST" enctype="multipart/form-data">

      <fieldset>

        <p>
          <label for="upload">Upload Image</label>
          <input type="file" name="upload">
        </p>

        <p>
          <button type="submit" name="upload">Upload</button>
        </p>


      </fieldset>


    </form>

    <div>

      <?php

        $query = "SELECT * FROM image";
        $result = mysqli_query($db, $query);

        while ($data = mysqli_fetch_assoc($result)) {
          ?> 
          <img src="./img/<?php echo $data['img']; ?>">
          <?php
        }
      ?>

    </div>
</body>
</html>