<?php

$server = "localhost";
$user = "root";
$password = "husodo22";
$nama_database = "belajarphp";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

if(isset($_POST['daftar'])){

    $id = $_POST['id'];
    $name = $_POST['nama'];
    $nim = $_POST['nim'];
    $fakultas = $_POST['fakultas'];
    $prodi = $_POST['prodi'];

    $sql = "UPDATE student SET nama='$name', nim='$nim', fakultas='$fakultas', prodi='$prodi' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Error: Akses dilarang" );
}

?>