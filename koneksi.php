<?php
  $koneksi = mysqli_connect("127.0.0.1", "root", "root", "db_crud");
  if (!$koneksi) {
    echo "tidak konek";
  } 
?>