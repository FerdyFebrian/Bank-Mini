<?php
$ID_TRANSAKSI = mysqli_real_escape_string($KONEKSI,$_POST['Id_Transaksi']);
$NASABAH = mysqli_real_escape_string($KONEKSI,$_POST['Nasabah']);
$KODE = mysqli_real_escape_string($KONEKSI,$_POST['Kode']);
$TANGGAL = mysqli_real_escape_string($KONEKSI,$_POST['Tanggal']);
$JUMLAH = mysqli_real_escape_string($KONEKSI,$_POST['Jumlah']);

$SQL = "SELECT * FROM tbl_nasabah WHERE id_nasabah='$NASABAH'" or die ("Gagal Melakukan Query".mysqli_connect_error());
$HASIl =  mysqli_query($KONEKSI, $SQL);
$LEO = mysqli_fetch_array($HASIl);
$KETERANGAN = "Edit Data Transaksi ".$LEO['nama_nasabah'];

$USER =  $_SESSION['username'];
$QUERY = mysqli_query($KONEKSI, "SELECT * FROM tbl_user WHERE username='$USER'");

$CAPRICORN = mysqli_fetch_array($QUERY);
$AQUA = $CAPRICORN['nama_user'];
$ID = $CAPRICORN['id_user'];

$JENIS_TRANSAKSI = 1;
$STATUS = 2;

if ($NASABAH == "" || $JENIS_TRANSAKSI =="" || $KODE =="" || $KETERANGAN =="" || $JUMLAH =="" ) {
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>EROR</strong> Silahkan isi semua kolom
             </center>
          </div>
          <meta http-equiv='refresh' content=2>";
 } else {
     $QUERY = mysqli_query($KONEKSI, "UPDATE tbl_transaksi SET 
     id_nasabah = '$NASABAH',
     jenis_transaksi = '$JENIS_TRANSAKSI',
     kode_transaksi = '$KODE',
     keterangan = '$KETERANGAN',
     nominal = '$JUMLAH',
     id_user = '$ID',
     tgl_transaksi = '$TANGGAL',
     status_transaksi = '$STATUS' WHERE id_transaksi = '$ID_TRANSAKSI';") or die ("Gagal Melakukan Tambah data".mysqli_connect_error($QUERY));
    
    $QUERY_LOG = mysqli_query($KONEKSI, "INSERT INTO tbl_log_penyetoran SET 
    kode_transaksi = '$KODE',
    id_user = '$ID_USER',
    nominal_penyetoran = '$JUMLAH',
    tgl_penyetoran = '$TGL',
    keterangan = 'Edit Penyetoran';") or die ("Gagal Melakukan Tambah data".mysqli_connect_error($QUERY_LOG));
    
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>Berhasil</strong> Halaman Akan di Redirect Otomatis
             </center>
         </div>
         ";
 };
?>
<meta http-equiv="refresh" content="1; url=index.php?page=Tabungan_Masuk">