<!DOCTYPE html>
<?php include 'koneksi.php';
$id=$_GET['id'];
$datapasien=mysqli_query($conn,"SELECT * FROM dosen where id_dosen=$id");
$gg=mysqli_fetch_array($datadosen)
?>
<html>
<head>
    <title>Edit Dosen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit dosen</h2>
        <form method="post" action="editp.php" class="form">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php  echo$gg['id_dosen']; ?>">
                <label>Nama dosen:</label>
                <input type="text" name="nama_dosen" id="nama_dosen" class="form-control" value="<?php  echo$gg['nama_dosen']; ?>" required>
            </div>
            <div class="form-group">
                <label>Alamat dosen:</label>
                <input type="text" name="alamat_dosen" id="alamat_dosen" class="form-control" value="<?php  echo$gg['alamat_dosen']; ?>" required>
            </div>
            <div class="form-group">
                <label>mata kuliah:</label>
                <input type="date" name="mata_kuliah" class="form-control" id="mata_kuliah" value="<?php  echo$gg['mata_kuliah']; ?>" required>
            </div>
            <input type="submit" name="Tambah" value="Tambah" class="btn btn-primary">
            <input type="riset" name="Batal" value="Batal" class="btn btn-danger">
        </form>
    </div>
</body>
</html>
