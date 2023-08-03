<?php
include 'koneksi.php';

if (isset($_GET['Edit'])) {

    $id_mhs = $_GET['id_mhs'];
    $id_dosen = $_GET['id_dosen'];
    $npm_mhs = $_GET['npm_mhs'];
    $nama_mhs = $_GET['nama_mhs'];
    $alamat_mhs = $_GET['alamat_mhs'];
    $prodi_mhs = $_GET['prodi_mhs'];

    $query = "SELECT * FROM mahasiswa (id_mhs, id_dosen, npm_mhs, nama_mhs, alamat_mhs, prodi_mhs) VALUES ('$id_mhs', ' $id_dosen', '$npm_mhs', '$nama_mhs', $alamat_mhs, $prodi_mhs)";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: kuliah.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Tambah mahasiswa</h2>
        <form method="post" action="editl.php" class="form">
            <div class="form-group">
                <label>id mahasiswa:</label>
                <input type="text" name="id_mhs" id="id_mhs" class="form-control" >
            </div>
            <div class="form-group">
                <label>id dosen:</label>
                <input type="text" name="id_dosen" id="id_dosen" class="form-control" >
            </div>
            <div class="form-group">
                <label>npm mahasiswa:</label>
                <input type="text" name="npm_mhs" id="npm_mhs" class="form-control" >
            </div>
            <div class="form-group">
                <label>nama mahasiswa:</label>
                <input type="text" name="nama_mhs" class="form-control" id="nama_mhs" >
            </div>
            
            <div class="form-group">
                <label>alamat mahasiswa:</label>
                <input type="text" name="alamat_mhs" class="form-control" id="alamat_mhs" >
            </div>

            <div class="form-group">
                <label>prodi mahasiswa:</label>
                <input type="text" name="prodi_mhs" class="form-control" id="prodi_mhs" >
            </div>
            
            <input type="submit" name="Tambah" value="Tambah" class="btn btn-primary">
            <input type="riset" name="Batal" value="Batal" class="btn btn-danger">
        </form>
    </div>
</body>
</html>

