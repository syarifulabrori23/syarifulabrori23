<?php
include 'koneksi.php';

    $id_mhs = $_POST['id_mhs'];
    $id_dosen = $_POST['id_dosen'];
    $npm_mhs = $_POST['npm_mhs'];
    $nama_mhs = $_POST['nama_mhs'];
    $alamat_mhs = $_POST['alamat_mhs'];
    $prodi_mhs = $_POST['prodi_mhs'];

$result = mysqli_query($conn,"INSERT INTO mahasiswa (id_mhs, id_dosen, npm_mhs, nama_mhs, alamat_mhs, prodi_mhs)value(NULL,'$id_mhs','$id_dosen','$npm_mhs','$nama_mhs','$alamat_mhs','$prodi_mhs')");
if ($result) {
    
    header("Location: kuliah.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
