<?php
  include("koneksi.php");
  $query_select="SELECT * FROM siswa";
  $tampil=mysqli_query($koneksi,$query_select);
  foreach ($tampil as $key )
  {
   	$nomor++;
   	$t.="
      <tr>
        <td>$nomor</td>
        <td>{$key['nama']}</td>
        <td>{$key['kelas']}</td>
        <td>{$key['jurusan']}</td>
        <td>Edit | Hapus</td>
      </tr>

	";
  }
echo "
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
      <table class='table table-bordered'>
        <thead>
          <tr>
            <th scope='col'>No</th>
            <th scope='col'>Nama</th>
            <th scope='col'>Kelas</th>
            <th scope='col'>Jurusan</th>
            <th scope='col'>Aksi</th>
          </tr>
        </thead>
        <tbody>
         $t
        <tr>
          <th scope='row'></th>
          <td colspan='2'>Jumlah</td>
          <td class='text-center'>$nomor</td>
        </tr>
        </tbody>
      </table>
      <a class='btn btn-primary' href='tambah.php'>Tambah</a>
    </div>
    <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js'></script>
  </body>
  </html>
";
?>
