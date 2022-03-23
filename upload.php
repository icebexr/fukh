<?php 
$conn = mysqli_connect("localhost", "root", "", "pengaduan");
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah ($data){
    global $conn;
    $keluhan = ($data["keluhan"]);
    $gambar = ($data["gambar"]);
    $query = "insert bukti value ('$keluhan', '$gambar)";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>