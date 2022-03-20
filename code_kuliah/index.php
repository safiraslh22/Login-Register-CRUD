<?php 

session_start();

if(!isset($_SESSION['login'])){
	header("Location:login.php");
	exit;
}



// ------AWAL FUNGSI KONEKSI KE DAN AMBIL DATA DARI DATABASE ------------

// masuk ke database
$conn = mysqli_connect("localhost", "root","husodo22", "belajarphp"); //hostname, username, password, databasename

// fungsi untuk query database
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}


// data diambil dalam bentuk array untuk ditampilkan pada halaman index
$student = query("SELECT * FROM student ORDER BY id DESC");


// ------AKHIR FUNGSI KONEKSI KE DAN AMBIL DATA DARI DATABASE ------------


 ?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


</head>
<body>

<div class="container">
	<div class="row">
		<div class="col">
			
			<div class="container">
				<div class="row mt-4 text-center">
					<div class="col">
						<h3>Employee List</h3>
					</div>
				</div>
			</div>
			
			<a href="tambah.php"><button type="button" class="btn btn-primary">Add Data</button></a>

			<br><br>

			<form action="" method="post">
				<input type="text" name="keyword" size="40" autofocus placeholder="type keywords.." autocomplete="off" id="keyword">
				<button type="submit" name="cari" id="tombol-cari">Cari</button>
				<br><br>
			</form>

		</div>
	</div>
</div>


<div class="container">
	<div class="card">
	  <div class="card-header bg-primary text-white">
	    Employees
	  </div>
	<div class="card-body" id="container">
		<table class="table table-striped text-center">
			<tr align="center">
				<th>No.</th>
				<th>Action</th>
				<th>Image</th>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Position</th>
			</tr>


			<?php $i = 1; ?>
			<?php foreach ($student as $data) :
			?>
			<tr>
				<td><?php echo $i ?></td>
				<td>
					<a href="ubah.php?id=<?php echo $orang["id"]; ?>">Edit</a> |
					<a href="hapus.php?id=<?php echo $orang["id"]; ?>" onclick="return confirm('Anda yakin ingin menghapus?');">Delete</a>
				</td>
				<td><img src="img/<?php echo $orang["gambar"]; ?>" width="50"></td>
				<td><?php echo $orang["nip"]; ?></td>
				<td><?php echo $orang["nama"]; ?></td>
				<td><?php echo $orang["email"]; ?></td>
				<td><?php echo $orang["jabatan"]; ?></td>
			</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
		</table>
	</div>
</div>

<div class="container">
	<div class="row mt-3 mb-5">
		<div class="col">
			<a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
		</div>
	</div>
</div>

</div>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>tabel</title>
    <link rel="stylesheet" href="style/tableStyle.css" />
  </head>
  <body>
    <h1>List Anggota Organisasi Findskill</h1>
    <div class="search">
      <input type="text" />
      <a href="#">Cari</a>
    </div>
    <div class="box">
      <div class="headerBx">
        <h3>Anggota</h3>
        <a href="v_daftar.php">Add+</a>
      </div>
      <div class="contentbx">
        <table>
          <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NIM</th>
            <th>FAKULTAS</th>
            <th>PRODI</th>
            <th>ACTION</th>
          </tr>
		  	<?php $i = 1; ?>
			<?php foreach ($student as $data) :
			?>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $data["nama"]; ?></td>
            <td><?php echo $data["nim"]; ?></td>
            <td><?php echo $data["fakultas"]; ?></td>
            <td><?php echo $data["prodi"]; ?></td>
            <td>
				<a href="v_edit.php?id=<?php echo $data['id']; ?>">EDIT</a>
				<a href="proses-hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus?');">HAPUS</a>
			</td>
          </tr>
		  		<?php $i++; ?>
			<?php endforeach; ?>
        </table>
      </div>
    </div>
    <div class="btn"><a href="logout.php">Log Out</a></div>
  </body>
</html>
