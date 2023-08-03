<?php
include 'koneksi.php';

if (isset($_POST['Tambah'])) {

   $id=$_POST['id'];
   $id_mhs = $_GET['id_mhs'];
   $id_dosen = $_POST['id_dosen'];
   $npm_mhs = $_POST['npm_mhs'];
   $nama_mhs = $_POST['nama_mhs'];
   $alamat_mhs = $_POST['alamat_mhs'];
   $prodi_mhs = $_POST['prodi_mhs'];

   $result = mysqli_query($conn,"UPDATE mahasiswa SET id_mhs=' $id_mhs',id_dosen='$id_dosen',npm_mhs=' $npm_mhs',nama_mhs=' $nama_mhs',alamat_mhs=, '$alamat_mhs',prodi_mhs=. '$prodi_mhs'where id_mhs=$id");

   if ($result) {
      header("Location: kuliah.php");
      exit();
   } else {
      echo "Error: " . mysqli_error($conn);
   }
}
?>
