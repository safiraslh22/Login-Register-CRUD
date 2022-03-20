<?php

$server = "localhost";
$user = "root";
$password = "husodo22";
$nama_database = "belajarphp";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM student WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: index.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("Error: Akses dilarang" );
}