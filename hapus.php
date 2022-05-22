<?php 
include("koneksi.php");

	$query_hapus="DELETE FROM siswa WHERE id_siswa ='{$_GET['i']}'";
    $h=mysqli_query($koneksi,$query_hapus);

	header("location:index.php");
?>