<?php
include 'koneksi.php';

$id=$_GET['id'];
    echo $id;
    $result = mysqli_query($conn,"DELETE FROM dosen WHERE id_dosen='$id'");

    if($result){
        header('location:dosen.php');
    }

?>
