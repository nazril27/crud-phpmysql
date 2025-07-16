<?php
define("HOSTNAME", "localhost");
define("USER", "root");
define("PASSWORD", "lusiana");
define("DATABASE", "file");

$db = mysqli_connect(HOSTNAME, USER, PASSWORD, DATABASE);

if (!$db) {
  die("Gagal terhubung dengan database: ". mysqli_connect_error());
}

?>