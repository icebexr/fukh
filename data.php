<?php
    $host        ="localhost";
    $user        ="root";
    $pass        ="ryanfeb";
    $database    ="jerbee";

    $db= mysqli_connect($host, $user, $pass, $database) or die("gagal koneksi ke database");

    $query="SELECT*FROM posting";

    $hasil= mysqli_query($db, $query);

        while($row=mysqli_fetch_assoc($hasil)){
        echo $row['nama_siswa']." adalah ".$row['nama_karyawan']."<br>";

                }

    $hasil=mysqli_query($db, $query);
    $row=mysqli_fetch_assoc($hasil);

?>