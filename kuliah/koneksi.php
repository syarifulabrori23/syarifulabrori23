<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "kuliah";

$conn = mysqli_connect($host, $username, $password, $database);

if ($conn) {
    echo "";
} else {
    echo "gagal";
}


?>