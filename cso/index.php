<?php
@session_start();
include "../inc/koneksi.php";
include "../inc/informasi.php";
if (@$_SESSION['username'])
    {
        if (!@$_SESSION['id_userlevel']=="CSO") {
            header ("location:../cso/index.php");
        }
        else {
            if (@$_SESSION['id_userlevel']=="Admin") { header("location:../admin/index.php");}
            elseif (@$_SESSION['id_userlevel']=="Teller") { header("location:../teller/index.php");}
        }
    }
else {
    header("location:../inc/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>Ferdy Febrian Admin</title>
    
        <!-- Custom fonts for this template-->
        <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
    
        <!-- Custom styles for this template-->
        <link href="../assets/css/admin.min.css" rel="stylesheet">
    
    </head>

<body id="page-top">
    <?php @$page = $_GET['page'];?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">NaCHT-Frdy Dashboard</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <div class="sidebar-heading">
                TRANSAKSI
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Tabungan Nasabah</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?page=#">Tabungan Masuk</a>
                        <a class="collapse-item" href="?page=#">Tabungan Keluar</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBankMini"
                    aria-expanded="true" aria-controls="collapseBankMini">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Transaksi Bank Mini</span>
                </a>
                <div id="collapseBankMini" class="collapse" aria-labelledby="headingBankMini" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?page=#">Pembayaran Siswa</a>
                        <a class="collapse-item" href="?page=#">Penarikan Saldo</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="sidebar-heading">
                REKAP TRANSAKSI
            </div>

            <li class="nav-item">
                <a class="nav-link" href="?page=#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Laporan Keuangan</span></a>             
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRekapTabungan"
                    aria-expanded="true" aria-controls="collapseRekapTabungan">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Rekap Tabungan</span>
                </a>
                <div id="collapseRekapTabungan" class="collapse" aria-labelledby="RekapTabungan" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?page=#">Lihat Transaksi</a>
                        <a class="collapse-item" href="?page=#">Lihat Saldo</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="?page=#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Laporan Perinkat</span></a>             
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="sidebar-heading">
                Pengaturan
            </div>

            <li class="nav-item">
                <a class="nav-link" href="?page=#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pengaturan Bank Mini</span></a>             
            </li>

            <li class="nav-item">
                <a class="nav-link" href="?page=Form">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pengaturan Sistem</span></a>             
            </li>

            <li class="nav-item">
                <a class="nav-link" href="?page=#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Laporan Keuangan</span></a>             
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePengaturan"
                    aria-expanded="true" aria-controls="collapsePengaturan">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Rekap Tabungan</span>
                </a>
                <div id="collapsePengaturan" class="collapse" aria-labelledby="Pengaturan" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?page=#">Naik Kelas</a>
                        <a class="collapse-item" href="?page=#">Hapus All</a>
                        <a class="collapse-item" href="?page=#">Naik Kelas All</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHistory"
                    aria-expanded="true" aria-controls="collapseHistory">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>History</span>
                </a>
                <div id="collapseHistory" class="collapse" aria-labelledby="History" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="?page=#">Login</a>
                        <a class="collapse-item" href="?page=#">Transaksi</a>
                        <a class="collapse-item" href="?page=#">Bank Mini</a>
                        <a class="collapse-item" href="?page=#">Nasabah</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="?page=#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Backup & Restore</span></a>             
            </li>

            <li class="nav-item">
                <a class="nav-link" href="?page=#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Singkronisasi Transaksi</span></a>             
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="sidebar-heading">
                Akun
            </div>
            
            <li class="nav-item">
                <a class="nav-link" href="?page=#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Profile</span></a>             
            </li>

            <li class="nav-item">
                <a class="nav-link" href="?page=#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Keluar</span></a>             
            </li>

            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Ferdy Febrian</span>
                                <img class="img-profile rounded-circle"
                                    src="../assets/img/luffy1.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="../inc/logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <div class="container-fluid">
                    <?php
                        include "../inc/menu.php";
                    ?>
                </div>
            </div>
        
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Ferdy Febrian 2077</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
            </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../inc/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor//bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor//jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/admin.min.js"></script>

</body>

</html>













