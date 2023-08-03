<?php
include 'koneksi.php';

if (isset($_POST['Tambah'])) {

   $id=$_POST['id'];
   $id_dosen = $_POST['id_dosen'];
   $nama_dosen = $_POST['nama_dosen'];
   $alamat_dosen = $_POST['alamat_dosen'];
   $mata_kuliah = $_POST['mata_kuliah'];

   $result = mysqli_query($conn,"UPDATE dosen SET  id_dosen='$id_dosen',nama_dosen='$nama_dosen',alamat_dosen='$alamat_dosen',mata_kuliah='$mata_kuliah' where id_dosen=$id");

   if ($result) {
      header("Location: dosen.php");
      exit();
   } else {
      echo "Error: " . mysqli_error($conn);
   }
}
?>
