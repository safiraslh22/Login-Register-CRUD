<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>daftar</title>
    <link rel="stylesheet" href="style/styleForm.css" />
  </head>
  <body>
    <h1>Tambah Data</h1>
    <div class="form">
      <form action="proses-daftar.php" method="post">
        <div>
          <label>Nama Lengkap</label>
          <input type="text" name="nama"/>
        </div>
        <div>
          <label>NIM</label>
          <input type="text" name="nim"/>
        </div>
        <div>
          <label>Fakultas</label>
          <input type="text" name="fakultas"/>
        </div>
        <div>
          <label>Progam Studi</label>
          <input type="text" name="prodi"/>
        </div>
        <div class="btn"><input type="submit" name="daftar" /></div>
      </form>
    </div>
  </body>
</html>
