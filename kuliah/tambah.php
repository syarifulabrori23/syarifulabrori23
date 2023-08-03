<!DOCTYPE html>
<?php include 'koneksi.php';
$id=$_GET['id'];
$datadokk=mysqli_query($conn,"SELECT * FROM MAHASISWA where id_mhs=$id");
$gg=mysqli_fetch_array($datadokk)
?>
<html>
<head>
    <title>Edit Data mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit data mahasiswa</h2>
        <form method="post" action="tambahl.php" class="form">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php  echo$gg['id_mhs']; ?>">
                <label>Nama mahasiswa:</label>
                <input type="text" name="nama_mhs" id="nama_mhs" class="form-control" value="<?php  echo$gg['nama_mhs']; ?>" required>
            </div>
            <div class="form-group">
                <label>npm mahasiswa:</label>
                <input type="text" name="npm_mhs" id="npm_mhs" class="form-control" value="<?php  echo$gg['npm_mhs']; ?>" required>
            </div>
            <div class="form-group">
                <label>alamat mahasiswa:</label>
                <input type="text" name="alamat_mhs" id="alamat_mhs" class="form-control" value="<?php  echo$gg['alamat_mhs']; ?>" required>
            </div>
            
            <div class="form-group">
                <label>prodi mahasiswa:</label>
                <input type="text" name="prodi_mhs" id="prodi_mhs" class="form-control" value="<?php  echo$gg['prodi_mhs']; ?>" required>
            </div>
            <input type="submit" name="Tambah" value="Tambah" class="btn btn-primary">
            <input type="riset" name="Batal" value="Batal" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
