<?php 
  include("koneksi.php");
  
  $nama=$_POST['nama'];
  $kelas=$_POST['kelas'];
  $jurusan=$_POST['jurusan'];
  $tombol=$_POST['tombol'];

  if($tombol)
  {
    $query_update="UPDATE siswa SET nama='$nama', kelas='$kelas', jurusan='$jurusan' WHERE id_siswa ='{$_GET['i']}'";
    $hasil_update=mysqli_query($koneksi,$query_update);
    if($hasil_update)
    {
        $keterangan_update="Data berhasil disimpan<br>";
    }
    else
    {
        $keterangan_update="Data gagal disimpan<br>";
    }   
  }

  $query_select_satu="SELECT * FROM siswa WHERE id_siswa='{$_GET['i']}'";
  $hasil=mysqli_query($koneksi,$query_select_satu);
  $array=mysqli_fetch_array($hasil);
  $var01=$array['nama'];
  $var02=$array['kelas'];
  $var03=$array['jurusan'];
  echo"
    <!DOCTYPE html>
  <html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Crud</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css'>
  </head>
  <body>
    <h1 class='text-center'>Hello Word</h1>
    <div class='container-fluid'>
    <form method='POST' autocomplete='off'>
      <div class='form-group'>
        <label for='nama'>Nama</label>
        <input type='text' class='form-control' id='nama' placeholder='Nama' name='nama' value='$var01'>
      </div>
      <div class='form-group'>
        <label for='kelas'>Kelas</label>
        <input type='text' class='form-control' id='kelas' placeholder='Kelas' name='kelas' value='$var02'>
      </div>
      <div class='form-group'>
        <label for='jurusan'>Jurusan</label>
        <input type='text' class='form-control' id='jurusan' placeholder='Jurusan' name='jurusan' value='$var03'>
      </div>
      $keterangan_update
      <input type='submit' class='btn btn-success' name='tombol' value='Edit'>
      <a class='float-right btn btn-danger' href='index.php'>Kembali</a>
    </form>
    </div>
    <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js'></script>
  </body>
  </html>
  ";
?>