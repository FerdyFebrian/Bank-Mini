<?php
$ID_NASABAH = mysqli_real_escape_string($KONEKSI,$_POST['Nasabah']);
$KODE = mysqli_real_escape_string($KONEKSI,$_POST['Kode_transaksi']);
$JUMLAH = mysqli_real_escape_string($KONEKSI,$_POST['Jumlah']);
$TGL = mysqli_real_escape_string($KONEKSI,$_POST['Tanggal']);

$SQL = "SELECT * FROM tbl_nasabah WHERE id_nasabah='$ID_NASABAH'" or die ("Gagal Melakukan Query!!!".mysqli_connect_error());
$HASIL = mysqli_query($KONEKSI, $SQL);
$SHF = mysqli_fetch_array($HASIL);
$KETERANGAN = "Tabungan Siswa a.n" . $SHF['nama_nasabah'];

$query = "SELECT SUM(nominal) AS total_nominal_sts FROM tbl_transaksi WHERE kode_transaksi LIKE 'STS%' AND id_nasabah = '$NASABAH' AND status_transaksi != 3";
$result = mysqli_query($KONEKSI, $query);
$data1 = mysqli_fetch_assoc($result);

$query = "SELECT SUM(nominal) AS total_nominal_pts FROM tbl_transaksi WHERE kode_transaksi LIKE 'PTS%' AND id_nasabah = '$NASABAH' AND status_transaksi != 3";
$result = mysqli_query($KONEKSI, $query);
$data2 = mysqli_fetch_assoc($result);

$TOTAL = $data1["total_nominal_sts"] - $data2["total_nominal_pts"];

$USER = $_SESSION['username'];
$QUERY = mysqli_query($KONEKSI, "SELECT * FROM tbl_user WHERE username='$USER' ");

$DATA = mysqli_fetch_array($QUERY);
$PETUGAS = $DATA['nama_user'];
$ID_USER = $DATA['id_user'];

if ($TOTAL < $JUMLAH) {
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>Tabungan</strong> Tidak Mencukupi
             </center>
          </div>
          <meta http-equiv='refresh' content=1; url=index.php?page=Tabungan_Masuk>";
 } else {

$JENIS_TRANSAKSI = 2;
$STATUS = 1;

if ($NASABAH == "" || $JENIS_TRANSAKSI =="" || $KODE =="" || $KETERANGAN =="" || $JUMLAH =="" ) {
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>EROR</strong> Silahkan isi semua kolom
             </center>
          </div>
          <meta http-equiv='refresh' content=1>";
 } else {
     $QUERY = mysqli_query($KONEKSI, "INSERT INTO tbl_transaksi SET 
     id_nasabah = '$NASABAH',
     jenis_transaksi = '$JENIS_TRANSAKSI',
     kode_transaksi = '$KODE',
     keterangan = '$KETERANGAN',
     nominal = '$JUMLAH',
     id_user = '$ID_USER',
     tgl_transaksi = '$TGL',
     status_transaksi = '$STATUS' ;") or die ("Gagal Melakukan Tambah data".mysqli_connect_error($QUERY));
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>Berhasil</strong> Halaman Akan di Redirect Otomatis
             </center>
         </div>
         <meta http-equiv='refresh' content='1 url=index.php?page=Tabungan_Keluar'>
         ";
 }};
?>
<meta http-equiv="refresh" content="1; url=index.php?page=Tabungan_Keluar">