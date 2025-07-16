<?php

define("SERVER", "localhost");
define("USER", "root");
define("PASSWORD", "lusiana");
define("DATABASE", "dbnazril");

$db = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);

if ( !$db ) {
  die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>