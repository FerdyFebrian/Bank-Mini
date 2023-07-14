<?php
$ID_TRANSAKSI = $_GET['id'];
$NASABAH = $_GET['nasabah'];
$SQL = "SELECT * FROM tbl_transaksi WHERE id_transaksi='$ID_TRANSAKSI'" or die ("Gagal Melakukan Query".mysqli_connect_error());
$HASIl =  mysqli_query($KONEKSI, $SQL);
$LEO = mysqli_fetch_array($HASIl);

$USER =  $_SESSION['username'];
$QUERY = mysqli_query($KONEKSI, "SELECT * FROM tbl_user WHERE username='$USER'");

$CAPRICORN = mysqli_fetch_array($QUERY);
$PTG = $CAPRICORN['nama_user'];
$ID = $CAPRICORN['id_user'];

$SQL = "SELECT * FROM tbl_nasabah WHERE id_nasabah='$NASABAH'" or die ("Gagal Melakukan Query".mysqli_connect_error());
$HASIl =  mysqli_query($KONEKSI, $SQL);
$LEO = mysqli_fetch_array($HASIl);
$KETERANGAN = "Mendelete Data Transaksi ".$LEO['nama_nasabah'];

$JENIS_TRANSAKSI = 1;
$STATUS = 3;

$QUERY = mysqli_query($KONEKSI, "UPDATE tbl_transaksi SET 
    id_user = '$ID',
    keterangan = '$KETERANGAN',
    status_transaksi = '$STATUS' WHERE id_transaksi = '$ID_TRANSAKSI';") or die ("Gagal Melakukan Tambah data".mysqli_connect_error($QUERY));?>

<meta http-equiv='refresh' content='1 url=index.php?page=Tabungan_Keluar'>