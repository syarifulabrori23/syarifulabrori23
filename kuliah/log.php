<?php
$conn = mysqli_connect("localhost","root","","mhs");

if(mysqli_connect_errno()){
    echo "error" .mysqli_connect_error();
}
session_start();

//Cek Login,terdaftar apa kagak
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    //cocokin database
    $cekdatabase = mysqli_query($conn, "SELECT * FROM login WHERE email='".$email."' and password='".$password."'");
    //hitung jumlah data
    $hitung = mysqli_num_rows($cekdatabase);

    session_start();
    $_SESSION['id']=$hitung['id'];

    if($hitung>0){
        $_SESSION['log'] = 'True';
        header('location:web/index.php');
    }else {
        header('location:web/index.php');
    };
};

if(isset($_SESSION['log'])){

}else {
    header('location:dashboard.php'); 
}

?>