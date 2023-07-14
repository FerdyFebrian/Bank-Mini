<?php
@$page = $_GET['page'];

switch ($page)
{   
    

    case 'Info':
        include '../pages/info/info.php';
    break;

    case 'Pengguna':
        include '../pages/pengguna/pengguna.php';
    break;

    case 'Naik':
        include '../pages/kelas/kelas.php';
    break;

    case 'Data_Nasabah':
        include '../pages/data_nasabah/data_nasabah.php';
    break;

    case 'Tabungan_Masuk':
        include '../pages/tabungan_masuk/tabungan_masuk.php';
    break;

    case 'Tabungan_Keluar':
        include '../pages/tabungan_Keluar/tabungan_keluar.php';
    break;

    case 'Laporan':
        include '../pages/laporan/kop_laporan.php';
    break;

    case 'Login':
        include '../pages/history/login/tampil.php';
    break;

    case 'Transaksi':
        include '../pages/history/transaksi/tampil.php';
    break;

    case 'Nasabah':
        include '../pages/history/nasabah/tampil.php';
    break;
    

    default:
    break;
}
?>