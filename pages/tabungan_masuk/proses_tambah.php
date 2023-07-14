<?php
$ID_NASABAH = mysqli_real_escape_string($KONEKSI,$_POST['Nasabah']);
$KODE = mysqli_real_escape_string($KONEKSI,$_POST['Kode_transaksi']);
$JUMLAH = mysqli_real_escape_string($KONEKSI,$_POST['Jumlah']);
$TGL = mysqli_real_escape_string($KONEKSI,$_POST['Tanggal']);

$SQL = "SELECT * FROM tbl_nasabah WHERE id_nasabah='$ID_NASABAH'" or die ("Gagal Melakukan Query!!!" . mysqli_error());
$HASIL = mysqli_query($KONEKSI, $SQL);
$ROW = mysqli_fetch_array($HASIL);
$KETERANGAN = "Tabungan Siswa a.n" . $ROW['nama_nasabah'];

$USER = $_SESSION['username'];
$QUERY = mysqli_query($KONEKSI, "SELECT * FROM tbl_user WHERE username='$USER' ");
$DATA = mysqli_fetch_array($QUERY);
$PETUGAS = $DATA['nama_user'];
$ID_USER = $DATA['id_user'];

$JENIS_TRANSAKSI = 1;
$STATUS = 1;

if ($ID_NASABAH == "" || $JENIS_TRANSAKSI =="" || $KODE =="" || $KETERANGAN =="" || $JUMLAH =="" || $JUMLAH =="" ) {
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>EROR</strong> Silahkan isi semua kolom
             </center>
          </div>
          <meta http-equiv='refresh' content=2>";
 } else {
     $QUERY_INSERT = mysqli_query($KONEKSI, "INSERT INTO tbl_transaksi SET 
     id_nasabah = '$ID_NASABAH',
     jenis_transaksi = '$JENIS_TRANSAKSI',
     kode_transaksi = '$KODE',
     keterangan = '$KETERANGAN',
     nominal = '$JUMLAH',
     id_user = '$ID_USER',
     tgl_transaksi = '$TGL',
     status_transaksi = '$STATUS';") or die ("Gagal Melakukan Tambah data".mysqli_error($QUERY_INSERT));
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>Berhasil</strong> Halaman Akan di Redirect Otomatis
             </center>
         </div>
         <meta http-equiv='refresh' content='2 url=index.php?page=Tabungan_Masuk'>
         ";
 }
?>
<meta http-equiv="refresh" content="1; url=index.php?page=Tabungan_Masuk">