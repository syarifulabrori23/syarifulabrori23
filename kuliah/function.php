<?php
include 'koneksi.php';

// Fungsi Create (Insert)
function tambahdokterku($nama_dokter, $alamat_dokter, $kelamin_dokter, $keahlian) {
    global $conn;
    
    $query = "INSERT INTO dokter (nama_dokter, alamat_dokter, kelamin_dokter, keahlian) VALUES ('$nama_dokter', '$alamat_dokter', '$kelamin_dokter', '$keahlian')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Fungsi Read (Select)
function getDokter() {
    global $conn;

    $query = "SELECT * FROM dokter";
    $result = mysqli_query($conn, $query);

    $data = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}

// Fungsi Update
function editmhs($id, $nama_mhs, $alamat_mhs, $prodi_mhs) {
    global $conn;
    
    $query = "UPDATE mahasiswa SET $nama_mhs='$nama_mhs', $alamat_mhs='$alamat_mhs', prodi_mhs='$prodi_mhs', WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Fungsi Delete
function hapusDokter($id) {
    global $conn;
    
    $query = "DELETE FROM dokter WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        return true;
    } else {
        return false;
    }
}
?>
