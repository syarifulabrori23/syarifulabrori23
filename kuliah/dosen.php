<!DOCTYPE html>
<html lang="en">
<?php
include 'koneksi.php';
$datadokk=mysqli_query($conn,"SELECT * FROM DOSEN");

?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>dosen</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">PERBAIKAN NILAI</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="dashboard.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            BERANDA
                        </a>
                        <a class="nav-link" href="kuliah.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                            MAHASISWA
                        </a>
                        <a class="nav-link" href="dosen.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                            DOSEN
                        </a>
                        <a class="nav-link" href="tabel.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-address-book"></i></div>
                            MAPEL
                        </a>
                        <a class="nav-link" href="login.php">Keluar</a>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <section class="main">
                <div class="container-fluid">
                    <h1 class="mt-4">Tambah Dosen</h1>
                    <a href="tambah_pasien.php" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah</i></a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id dosen</th>
                                <th>Nama dosen</th>
                                <th>Alamat dosen</th>
                                <th>mata kuliah</th>
                                <th>Aksi</th>
                                <?php
                                while($gg=mysqli_fetch_array($datadokk)){
                                ?>
                            <tr>
                                <td><?php echo $gg['id_dosen'];?></td>
                                <td><?php echo $gg['nama_dosen'];?></td>
                                <td><?php echo $gg['alamat dosen'];?></td>
                                <td><?php echo $gg['mata_kuliah'];?></td>
                                
                                <td>
                                <a href="edit_dosen.php?id=<?php echo $gg['id_dosen'];?>" class="btn btn-primary"><img src="2.png" width="30" height="30">Edit</a>
                                <a href="hapus_dosen.php?id=<?php echo $gg['id_dosen'];?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i>Hapus</button></a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>
    </div>
    </div>
    </main>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>