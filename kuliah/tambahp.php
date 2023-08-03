<?php
include 'koneksi.php';


    $id_dosen = $_POST['id_dosen'];
    $nama_dosen = $_POST['nama_dosen'];
    $alamat_dosen = $_POST['alamat_dosen'];
    $mata_kuliah = $_POST['mata_kuliah'];

    $result = mysqli_query($conn,"INSERT INTO dosen (id_dosen, nama_dosen, alamat_dosen, mata_kuliah)value(NULL,'$id_dosen','$nama_dosen','$alamat_dosen','$mata_kuliah' )");
if ($result) {
    header("Location: dosen.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
