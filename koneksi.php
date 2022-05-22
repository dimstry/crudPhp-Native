<?php
$koneksi = mysql_connect("127.0.0.0", "root", "", "db_crud");
if ($koneksi) {
  echo "database konek";
} else {
  echo "database tidak konek";
}
?>