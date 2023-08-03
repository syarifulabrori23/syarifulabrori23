<?php
include 'koneksi.php';

$nama_mhs = $_POST['nama _mhs'];
$ngulang = $_POST['ngulang'];
$mata_kuliah = $_POST['mata_kuliah'];
$nama_dosen = $_POST['nama_dosen'];
$jumlah_sks = $_POST['jumlah_sks'];

$result = mysqli_query($conn,"INSERT INTO mahasiswa (nama_mhs, ngulang, mata_kuliah, nama_dosen, jumlah_sks)value(NULL,$nama_mhs','$ngulang','$mata_kuliah','$mata_kuliah', '$jumlah_sks')");
if ($result) {
      header("Location: tabel.php");
      exit();
   } else {
      echo "Error: " . mysqli_error($conn);
   }
?>
