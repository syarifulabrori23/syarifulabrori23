<?php
include 'koneksi.php';

$id=$_GET['id'];
    echo $id;
    $result = mysqli_query($conn,"DELETE FROM mahasiswa WHERE id_mhs='$id'");

    if($result){
        header('location: kuliah.php');
    }

?>
