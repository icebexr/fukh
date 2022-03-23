<?php 
require 'functions.php';
$siswa = query("SELECT * FROM siswa_pkl");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman admin</title>
</head>
<body>
    
<h1>daftar siswa</h1>
<table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>no.</th>
    <th>aksi</th>
    <th>nama</th>
    <th>jurusan</th>
    <th>asal sekolah</th>
    <th>id karyawan</th>
</tr>
<?php $i= 1; ?>
<?php foreach($siswa as $row): ?>
<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="">ubah</a> |
        <a href="">hapus</a>
    </td>
    <td><?= $row["nama_siswa"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
    <td><?= $row["asal_sekolah"]; ?></td>
    <td><?= $row["id_karyawan"]; ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>


</table>

</body>
</html>