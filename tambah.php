<?php 
  include("koneksi.php");
  
  $nama=$_POST['nama'];
  $kelas=$_POST['kelas'];
  $jurusan=$_POST['jurusan'];
  $tombol=$_POST['tombol'];

  if($tombol)
  {
      $query_insert="INSERT INTO siswa (nama, kelas, jurusan) VALUES ('$nama', '$kelas', '$jurusan')";
      $h=mysqli_query($koneksi,$query_insert);
       if($h)
       {
       echo "Data berhasil disimpan <br>";
       }
       else
       {
           echo "Data gagal disimpan <br>";
       }
  }
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
        <input type='text' class='form-control' id='nama' placeholder='Nama' name='nama'>
      </div>
      <div class='form-group'>
        <label for='kelas'>Kelas</label>
        <input type='text' class='form-control' id='kelas' placeholder='Kelas' name='kelas'>
      </div>
      <div class='form-group'>
        <label for='jurusan'>Jurusan</label>
        <input type='text' class='form-control' id='jurusan' placeholder='Jurusan' name='jurusan'>
      </div>
      <input type='submit' class='btn btn-primary' name='tombol' value='Tambah'>
      <a class='float-right btn btn-danger' href='index.php'>Kembali</a>
    </form>
    </div>
    <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js'></script>
  </body>
  </html>
  ";
?>