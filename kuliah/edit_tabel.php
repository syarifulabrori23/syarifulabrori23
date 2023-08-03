<!DOCTYPE html>
<?php include 'koneksi.php';
$id=$_GET['id'];
$datapasien=mysqli_query($conn,"SELECT * FROM ngulang where id_ngulang=$id");
$gg=mysqli_fetch_array($datadosen)
?>
<html>
<head>
    <title>Edit Data mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit</h2>
        <form method="post" action="editp.php" class="form">
            <div class="form-group">
                <label>ngulang:</label>
                <input type="date" name="tgl_ngulang" class="form-control" id="tgl_gulang" >
            </div>
            <div class="form-group">
                <label>Keluar:</label>
                <input type="date" name="tgl_keluar" class="form-control" id="tgl_keluar" >
            </div>
            <div class="form-group">
                <label>mata kuliah:</label>
                <input type="text" name="mata_kuliah" id="mata_kuliah" class="form-control" >
            </div>
            </div>
            <input type="submit" name="Tambah" value="Tambah" class="btn btn-primary">
            <input type="riset" name="Batal" value="Batal" class="btn btn-danger">
        </form>
    </div>
</body>
</html>
