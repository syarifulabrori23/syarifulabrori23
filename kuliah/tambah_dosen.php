<?php
include 'koneksi.php';

if (isset($_GET['Edit'])) {

    $id_dosen = $_GET['id_dosen'];
    $nama_dosen = $_GET['nama_dosen'];
    $alamat_dosen = $_GET['alamat_dosen'];
    $mata_kuliah = $_GET['mata_kuliah'];

    $query = "SELECT * FROM dosen ( id_dosen, nama_dosen, alamat_dosen, mata_kuliah) VALUES ( '$id_dosen', '$nama_dosen', '$alamat_dosen', '$mata_kuliah')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: dosen.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Dosen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Dosen</h2>
        <form method="post" action="tambahp.php" class="form">
            <div class="form-group">
                <label>id dosen:</label>
                <input type="text" name="id_dosen" id="id_dosen" class="form-control" >
            </div>
            <div class="form-group">
                <label>nama dosen:</label>
                <input type="text" name="nama_dosen" id="nama_dosen" class="form-control" >
            </div>
            <div class="form-group">
                <label>alamat dosen:</label>
                <input type="text" name="alamat_dosen" id="alamat_dosen" class="form-control" >
            </div>
            <div class="form-group">
                <label>mata kuliah:</label>
                <input type="text" name="mata_kuliah" class="form-control" id="mata_kuliah" >
            </div>

            <input type="submit" name="Tambah" value="Tambah" class="btn btn-primary">
            <input type="riset" name="Batal" value="Batal" class="btn btn-danger">
        </form>
    </div>
</body>
</html>

