<?php

$server = "localhost";
$user = "root";
$password = "husodo22";
$nama_database = "belajarphp";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

if( !isset($_GET['id']) ){
    header('Location: index.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM student WHERE id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit</title>
    <link rel="stylesheet" href="style/styleForm.css" />
  </head>
  <body>
    <h1>Edit Data</h1>
    <div class="form">
      <form action="proses-edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
        <div>
          <label>Nama Lengkap</label>
          <input type="text" name="nama" value="<?php echo $data['nama'] ?>"/>
        </div>
        <div>
          <label>NIM</label>
          <input type="text" name="nim" value="<?php echo $data['nim'] ?>"/>
        </div>
        <div>
          <label>Fakultas</label>
          <input type="text" name="fakultas" value="<?php echo $data['fakultas'] ?>"/>
        </div>
        <div>
          <label>Progam Studi</label>
          <input type="text" name="prodi" value="<?php echo $data['prodi'] ?>"/>
        </div>
        <div class="btn"><input type="submit" name="daftar" /></div>
      </form>
    </div>
  </body>
</html>
