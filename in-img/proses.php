<?php

require "config.php";

if(isset($_POST['upload'])) {

  $filename = $_FILES["upload"]["name"];
  $tempname = $_FILES["upload"]["tmp_name"];
  $folder = "./img/" . $filename;

  $sql = "INSERT INTO image (img) VALUES ('$filename')";

  mysqli_query($db, $sql);

  if (move_uploaded_file($folder, $tempname)) {
    echo "<h3>&nbsp; Image uploaded succesfully!</h3>";
  } else {
    echo "<h3>&nbsp; Failed to upload image!</h3>";
  }
}

?>