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
    $name = $_POST['nama'];
    $nim = $_POST['nim'];
    $fakultas = $_POST['fakultas'];
    $prodi = $_POST['prodi'];

    $sql = "INSERT INTO student (nama, nim, fakultas, prodi) VALUE ('$name', '$nim', '$fakultas', '$prodi')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php?status=sukses');
    }else{
        header('Location: index.php?status=gagal');
    }
}else{
    die("Error: Akses dilarang" );
}